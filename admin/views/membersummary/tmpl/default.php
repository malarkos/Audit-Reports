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
	<h1>Current Membership count</h1>
	<h1>Members</h1>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		
			
            <th width="50%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERSUMMARY_TYPE') ;?>
			</th>
			<th width="50%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERSUMMARY_COUNT') ;?>
			</th>
                        
			
                       
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="2">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					//$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
				?>
					<tr>
						  
						
						<td>
								<?php echo $row->MemberType; ?>
						</td>
                                                
                        <td>
								<?php echo $row->count; ?>
						</td>
						                     
                                                

					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			
			<tr>
				<Td>Leave of Absence</Td>
				<Td><?php echo $this->loa; ?></Td>
			</tr>
			
			
			
		</tbody>
		
	</table>
	<h1>Family Members</h1>
<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		
			
            <th width="50%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERSUMMARY_TYPE') ;?>
			</th>
			<th width="50%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERSUMMARY_COUNT') ;?>
			</th>
                        
			
                       
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="2">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php if (!empty($this->family)) : ?>
				<?php foreach ($this->family as $i => $row) :
					//$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
				?>
					<tr>
						  
						
						<td>
								<?php echo $row->FamilyMembershipType; ?>
						</td>
                                                
                        <td>
								<?php echo $row->count; ?>
						</td>
	
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</div>
