<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_aps
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

	<div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	<h1>Member Balances as at 30th Nov 2018</h1>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		
			
            <th width="10%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBALANCES_ID') ;?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBALANCES_FIRSTNAME') ;?>
			</th>
            <th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBALANCES_SURNAME') ;?>
			</th>            
			<th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBALANCES_TYPE') ;?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBALANCES_LOA') ;?>
			</th>
            <th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBALANCES_AMOUNT') ;?>
			</th>           
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
				?>
					<tr>
						  
						<td>
								<?php echo $row->MemberID; ?>
						</td>
						<td>
								<?php echo $row->MemberFirstname; ?>
						</td>
						<td>
								<?php echo $row->MemberSurname; ?>
						</td>
						<td>
								<?php echo $row->MemberType; ?>
						</td>
                        <td>
								<?php echo $row->MemberLeaveofAbsence; ?>
						</td>                        
                        <td align='right'>
								$<?php echo $row->MemberAmount; ?>
						</td>
						                     
                                                

					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
				
			
			
		</tbody>
		
	</table>
	
</div>
