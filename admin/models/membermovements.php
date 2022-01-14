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
class AuditReportsModelMemberMovements extends JModelList
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
		$query->select('MemberID, MemberFirstname, MemberSurname,MemberType, MemberJoiningDate,date_format(MemberJoiningDate,\'%d %M %Y\') as joindate');
        $query->from('members AS m');
        $query->where('MemberJoiningDate > \'2020-11-30\''); // add code to automatically calculate this.
        $query->orderby('MemberJoiningDate');
        //$query->leftJoin('apsschools AS s ON v.schoolid = s.id');               
        //$query
       // ->select( array('catid', 'COUNT(*)') )
        //->from($db->quoteName('#__content'))
       // ->group($db->quoteName('catid'));
		return $query;
	}
	
	public function getMembersDeparted()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		
		// Create the base select statement.
		$query->select('MemberID, MemberFirstname, MemberSurname,MemberType, MemberDepartureDate,date_format(MemberDepartureDate,\'%d %M %Y\') as departdate');
		$query->from('members AS m');
		$query->where('MemberDepartureDate > \'2020-11-30\''); // add code to automatically calculate this.
		$query->orderby('MemberDepartureDate');
		
		$db->setQuery($query);
		$departedmembers = $db->loadObjectList();
		
		return $departedmembers;
	}
	
	public function getNewFamily() 
	{
		
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('FamilyMemberFirstname, FamilyMemberSurname, FamilyMembershipType, FamilyMemberJoinDate,date_format(FamilyMemberJoinDate,\'%d %M %Y\') as joindate');
		$query->from('familymembers  AS f');
		$query->where('FamilyMemberJoinDate > \'2020-11-30\''); // add code to automatically calculate this.
		$query->orderby('FamilyMemberJoinDate');
		
		$db->setQuery($query);
		$familyitems = $db->loadObjectList();
		
		return $familyitems;
		
	} // getFAmily	
		
	public function getFamilyDeparted()
	{
	
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('FamilyMemberFirstname, FamilyMemberSurname, FamilyMembershipType, FamilyMemberDepartureDate,date_format(FamilyMemberDepartureDate,\'%d %M %Y\') as departdate');
		$query->from('familymembers  AS f');
		$query->where('FamilyMemberDepartureDate > \'2020-11-30\''); // add code to automatically calculate this.
		$query->orderby('FamilyMemberDepartureDate');
		
		$db->setQuery($query);
		$familydeparteditems = $db->loadObjectList();
		
		return $familydeparteditems;
	
	} // getFAmily
	
	
}