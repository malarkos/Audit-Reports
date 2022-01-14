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
	<h1>2018 Member Bookings</h1>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		
			
            <th width="15%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBOOKINGS_BOOKDATE') ;?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBOOKINGS_BOOKINGREF') ;?>
			</th>
            <th width="20%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBOOKINGS_MEMBER') ;?>
			</th>            
			<th width="15%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBOOKINGS_COST') ;?>
			</th>
			<th width="15%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBOOKINGS_AMOUNTPAID') ;?>
			</th>
            <th width="15%">
				<?php echo JText::_('COM_AUDITREPORTS_MEMBERBOOKINGS_STATUS') ;?>
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
					//$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
				?>
					<tr>
						  
						<td>
								<?php echo $row->bookingmadedate; ?>
						</td>
						<td>
								<?php echo $row->bookingref; ?>
						</td>
						<td>
								<?php echo $row->membername; ?>
						</td>
						<td>
								$<?php echo $row->bookingcost; ?>
						</td>
                        <td>
								$<?php echo $row->amountpaid; ?>
						</td>                        
                        <td >
								<?php echo $row->bookingstatus; ?>
						</td>
						                     
                                                

					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
				
			
			
		</tbody>
		
	</table>
	
</div>
