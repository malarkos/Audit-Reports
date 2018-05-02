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
class AuditReportsModelMemberSummary extends JModelList
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
		$query->select('MemberType, count(*) as count');
        $query->from('members AS m');
        $query->group('MemberType');
        //$query->leftJoin('apsschools AS s ON v.schoolid = s.id');               
        //$query
       // ->select( array('catid', 'COUNT(*)') )
        //->from($db->quoteName('#__content'))
       // ->group($db->quoteName('catid'));
		return $query;
	}
	
	public function getLOA()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		
		$query->select('count(*)');
		$query->from('members AS m');
		$query->where('MemberLeaveofAbsence = \'Yes\'');
		
		$db->setQuery($query);
		$itemcount = $db->loadResult();
		
		return $itemcount;
	}
	
	public function getFamily() 
	{
		
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('FamilyMembershipType, count(*) as count');
		$query->from('familymembers  AS f');
		$query->group('FamilyMembershipType');
		
		$db->setQuery($query);
		$familyitems = $db->loadObjectList();
		
		return $familyitems;
		
	} // getFAmily	
		
		
	
}