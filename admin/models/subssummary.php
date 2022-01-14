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
class AuditReportsModelSubsSummary extends JModelList
{
    
	// global variables to be updated as an input value
	
	protected $year = 2020;
    
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
		$query->select('s.*,osc.*');
        $query->from('subssummary as s');
        $query->leftJoin('oscmemberrates AS osc ON osc.year = s.year');
        $query->where('s.year = \'2021\'');  // add code to parameterise this
        
		return $query;
	}
	
	public function getSubRates()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from('oscmemberrates');
		$query->where('Year = 2020');
		
		$db->setQuery($query);
		$itemcount = $db->loadObjectList();
		
		return $itemcount;
	}
	
	
		
		
	
}