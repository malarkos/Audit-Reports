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
	<h1>Members and Family member movements since 1st Dec 2020</h1>
	<h2>Members Joined</h2>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_FIRSTNAME') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_SURNAME') ;?>
			</th>
            <th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_MEMBERTYPE') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_JOININGDATE') ;?>
			</th>           
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
			<?php $newmembercount = 0; ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
					$newmembercount++;
				?>
					<tr>
						  
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
								<?php echo $row->joindate; ?>
						</td>
                                                
   				</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			
		</tbody>
		
	</table>
	 
	<h2>Members Departed</h2>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_FIRSTNAME') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_SURNAME') ;?>
			</th>
            <th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_MEMBERTYPE') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_DEPARTDATE') ;?>
			</th>           
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->departedmembers)) : ?>
			<?php $memberdepcount = 0; ?>
				<?php foreach ($this->departedmembers as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
					$memberdepcount++;
				?>
					<tr>
						  
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
								<?php echo $row->departdate; ?>
						</td>
                                                
   				</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			
		</tbody>
		
	</table>
	<h2>Family Members Joined</h2>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_FIRSTNAME') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_SURNAME') ;?>
			</th>
            <th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_MEMBERTYPE') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_JOININGDATE') ;?>
			</th>           
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->newfamily)) : ?>
			<?php $newfamilymembercount = 0; ?>
				<?php foreach ($this->newfamily as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
					$newfamilymembercount++;
				?>
					<tr>
						  
						<td>
								<?php echo $row->FamilyMemberFirstname; ?>
						</td>
						<td>
								<?php echo $row->FamilyMemberSurname; ?>
						</td>
						<td>
								<?php echo $row->FamilyMembershipType; ?>
						</td>
						<td>
								<?php echo $row->joindate; ?>
						</td>
                                                
   				</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			
		</tbody>
		
	</table>
	<h2>Family Members Departed</h2>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
	 		<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_FIRSTNAME') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_SURNAME') ;?>
			</th>
            <th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_MEMBERTYPE') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_MOVEMENTS_DEPARTDATE') ;?>
			</th>           
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->departedfamilymembers)) : ?>
			<?php $familymemberdepcount = 0; ?>
				<?php foreach ($this->departedfamilymembers as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
					$familymemberdepcount++;
				?>
					<tr>
						  
						<td>
								<?php echo $row->FamilyMemberFirstname; ?>
						</td>
						<td>
								<?php echo $row->FamilyMemberSurname; ?>
						</td>
						<td>
								<?php echo $row->FamilyMembershipType; ?>
						</td>
						<td>
								<?php echo $row->departdate; ?>
						</td>
                                                
   				</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			
		</tbody>
		
	</table>
	<h2>Summary</h2>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Member movements</th>
				<th>Count</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Members joined</td>
				<td><?php echo $newmembercount;?></td>
			</tr>
			<tr>
				<td>Members departed</td>
				<td><?php echo $memberdepcount;?></td>
			</tr>
			<tr>
				<td>Family Members joined</td>
				<td><?php echo $newfamilymembercount;?></td>
			</tr>
			<tr>
				<td>Family Members departed</td>
				<td><?php echo $familymemberdepcount;?></td>
			</tr>
		</tbody>
	</table>
</div>
