<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_reference
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloWorlds View
 *
 * @since  0.0.1
 */
class AuditReportsViewMemberMovements extends JViewLegacy
{
	/**
	 * Display the APS view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->departedmembers 			= $this->get('MembersDeparted');
		$this->newfamily = $this->get('NewFamily');
		$this->departedfamilymembers = $this->get('FamilyDeparted');
		//$this->family		= $this->get('Family');
		$this->pagination	= $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
		
		// Helper file with code to build side menu
		require_once JPATH_COMPONENT . '/helpers/auditreports.php';
		// Call to build the sub menu
		AuditReportsHelper::addSubmenu("membermovements");
		// render the sub menu on the screen.
		$this->sidebar = JHtmlSidebar::render();
 
		// Set the toolbar
		$this->addToolBar();
		
		// Display the template
		parent::display($tpl);
	}
	
	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		JToolBarHelper::title(JText::_('COM_AUDITREPORTS_MOVEMENTS'));
		// Don't need to edit anything so comment these out
		//JToolBarHelper::addNew('memberrate.add');
		//JToolBarHelper::editList('memberrate.edit');
		//JToolBarHelper::deleteList('', 'memberrate.delete');
	}
}