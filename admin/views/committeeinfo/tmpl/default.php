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
	<h1>Committee Audit Information for 2017</h1>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		
			
            <th width="15%">
				<?php echo JText::_('COM_AUDITREPORTS_COMMITTEEINFO_MEMBER') ;?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_COMMITTEEINFO_SUBS') ;?>
			</th>
            <th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_COMMITTEEINFO_LODGEFEES') ;?>
			</th>    
			  <th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_COMMITTEEINFO_BOOKINGCOUNT') ;?>
			</th>             
			           
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="3">
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
								<?php echo $row->member; ?>
						</td>
						<td>
								$<?php echo $row->subs; ?>
						</td>
						<td>
								$<?php echo $row->lodgefees; ?>
						</td>
						<td>
								<?php echo $row->bookingcount; ?>
						</td>
						                     
                                                

					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
				
			
			
		</tbody>
		
	</table>
	
</div>
