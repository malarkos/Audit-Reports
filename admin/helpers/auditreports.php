<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_reference
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class AuditReportsHelper extends JHelperContent

{
    public static function addSubmenu($vName)
    {
        JHtmlSidebar::addEntry(
            JText::_('COM_AUDITREPORTS_MEMBERSUMMARY'),
            'index.php?option=com_auditreports&view=membersummary',
            $vName == 'membersummary'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_AUDITREPORTS_MEMBERBALANCES'),
        		'index.php?option=com_auditreports&view=memberbalances',
        		$vName == 'memberbalances'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_AUDITREPORTS_BOOKINGS'),
        		'index.php?option=com_auditreports&view=memberbookings',
        		$vName == 'memberbookings'
        );
        JHtmlSidebar::addEntry(
        		JText::_('COM_AUDITREPORTS_MOVEMENTS'),
        		'index.php?option=com_auditreports&view=membermovements',
        		$vName == 'membermovements'
         );
        JHtmlSidebar::addEntry(
        		JText::_('COM_AUDITREPORTS_SUBSSUMMARY'),
        		'index.php?option=com_auditreports&view=subssummary',
        		$vName == 'subssummary'
        	);
        JHtmlSidebar::addEntry(
        		JText::_('COM_AUDITREPORTS_COMMITTEEINFO'),
        		'index.php?option=com_auditreports&view=committeeinfo',
        		$vName == 'committeeinfo'
        		);
    }
}