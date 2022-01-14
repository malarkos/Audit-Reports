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
class AuditReportsModelMemberBookings extends JModelList
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
		
		
	
}
