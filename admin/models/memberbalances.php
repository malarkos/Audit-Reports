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
class AuditReportsModelMemberBalances extends JModelList
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
		$query->select('m.MemberID, MemberFirstname,  MemberSurname, MemberType,MemberLeaveofAbsence');
		$query->select('(select sum(f.Amount) from finances as f where f.MemberID = m.MemberID and TransactionDate < \'2021-12-01\') as MemberAmount');
       $query->where('m.MemberType in (\'Graduate\',\'Student\',\'Life\',\'Hon Life\')');
		$query->from('members AS m');
        //$query->group('MemberType');
        //$query->where('f.TransactionDate < \'2017-12-01\'');
     
       
       
        		
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