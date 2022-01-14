<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_aps
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloWorldList Model
 *
 * @since  0.0.1
 */
class AuditReportsModelCommitteeInfo extends JModelList
{
    
    
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select('*,date_format(bookingmade,\'%d %M %Y\') as bookingmadedate,concat(m.MemberFirstname,\' \',m.MemberSurname) as membername');
		$query->from('booking_summary as bs');
		$query->leftJoin('members AS m ON bs.memid = m.MemberID');
        //$query->group('MemberType');
        $query->where('bookingstatus in (\'Submitted\',\'Approved\',\'Confirmed\')');
        $query->where('bookingref like \'2018%\'');
        $query->orderby('bookid');
        		
		return $query;
	}
	
	
	//override default list
	protected function populateState($ordering = null, $direction = null)
	{
		// Initialise variables.
		$app = JFactory::getApplication();
	
		// List state information
		$limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->get('list_limit'));
	
		$limit = 2000;  // set list limit
	
	}
		
	public function getCommitteeInfo () {
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$committeeinfo = array();
		$app = JFactory::getApplication ();
		// get Committee list
		
		$query->select ( '*' );
		$query->from ( 'osccommittee' );
		$query->where ( 'Year = \'2018\'');
		
		
		$db->setQuery ( $query );
		$db->execute ();
		$num_rows = $db->getNumRows ();
		$committeeinfo = $db->loadObjectList ();
		for($i = 0; $i < $num_rows; $i ++) {
			// Get Committee member
			$query = $db->getQuery ( true );
			$memid = $committeeinfo[$i]->MemberID;
			$query->select ( 'concat(m.MemberFirstname,\' \',m.MemberSurname) as membername' );
			$query->from ( 'members as m' );
			$query->where ( 'MemberID = '.$memid );
			$db->setQuery ( $query );
			$db->execute ();
			$membername = $db->loadResult ();
			$committeeinfo[$i]->member = $membername;
			// Get subs paid
			$query = $db->getQuery ( true );
				
			$query->select ( 'sum(amount) ' );
			$query->from ( 'finances' );
			$query->where ( 'MemberID = '.$memid );
			$query->where($db->quoteName('TransactionDate').' = '.$db->quote('2017-12-12'));
			//$query->where($db->quoteName('TransactionDate').' < '.$db->quote('2017-04-01'));
			$query->where($db->quoteName('CreditDebit').' = '.$db->quote('D'));
			$db->setQuery ( $query );
			//$app->enqueueMessage('Query = '. $query . ':');
			$db->execute ();
			$subspaid = $db->loadResult ();
			$subspaid *= -1;
			$committeeinfo[$i]->subs = $subspaid;
			// Get lodge fees
			$query = $db->getQuery ( true );
			
			$query->select ( 'sum(bookingcost) as bookingtotal,count(*) as bookingcount ' );
			$query->from ( 'booking_summary' );
			$query->where ( 'memid = '.$memid );
			$query->where($db->quoteName('bookingref').' LIKE '.$db->quote('2018%'));
			$query->where($db->quoteName('bookingstatus').' = '.$db->quote('Confirmed'));
			
			$db->setQuery ( $query );
			//$app->enqueueMessage('Query = '. $query . ':');
			$db->execute ();
			$result = $db->loadObject ();
			$committeeinfo[$i]->lodgefees = $result->bookingtotal;
			$committeeinfo[$i]->bookingcount = $result->bookingcount;
		} // for loop
		
		return $committeeinfo;
	} // function
	
}
