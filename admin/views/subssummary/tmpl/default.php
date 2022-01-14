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
	<h1>Subs Summary for 2018</h1>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
	 		
            <th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_SUBSSUMMARY_TYPE') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_SUBSSUMMARY_COUNT') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_SUBSSUMMARY_TOTAL') ;?>
			</th>
			<th width="25%">
				<?php echo JText::_('COM_AUDITREPORTS_SUBSSUMMARY_SUB') ;?>
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
		
			<?php $totalbilled = 0;?>		
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_reference&task=memberrate.edit&id=' . $row->id);
				?>
					<tr>
						<td>
								Graduate
						</td>
                        <td>
								<?php echo $row->Graduatecount; ?>
						</td>
						<td>
							$<?php echo $row->Graduate; ?>
						</td>
						<td>
							$ <?php $gradsub =  $row->Graduatecount*$row->Graduate ;
								echo $gradsub;
								$totalbilled += $gradsub;
							?>
						</td>
					</tr>
					<tr>
						<td>
								Student
						</td>
                        <td>
								<?php echo $row->studentcount; ?>
						</td>
						<td>
							$<?php echo $row->Student; ?>
						</td>
						<td>
							$<?php $gradsub =  $row->studentcount*$row->Student ;
								echo $gradsub;
								$totalbilled += $gradsub;
							?>
						</td>
					</tr>
					<tr>
						<td>
								Spouse
						</td>
                        <td>
								<?php echo $row->Spousecount; ?>
						</td>
						<td>
							$<?php echo $row->Spouse; ?>
						</td>
						<td>
							$<?php $gradsub =  $row->Spousecount*$row->Spouse ;
								echo $gradsub;
								$totalbilled += $gradsub;
							?>
						</td>
					</tr>
					<tr>
						<td>
								Child
						</td>
                        <td>
								<?php echo $row->Childcount; ?>
						</td>
						<td>
							$<?php echo $row->Child; ?>
						</td>
						<td>
							$<?php $gradsub =  $row->Childcount*$row->Child ;
								echo $gradsub;
								$totalbilled += $gradsub;
							?>
						</td>
					</tr>
					<tr>
						<td>
								Buddy
						</td>
                        <td>
								<?php echo $row->buddycount; ?>
						</td>
						<td>
							$<?php echo $row->Spouse; ?>
						</td>
						<td>
							$<?php $gradsub =  $row->buddycount*$row->Spouse ;
								echo $gradsub;
								$totalbilled += $gradsub;
							?>
						</td>
					</tr>
					<tr>
						<td>
								Locker
						</td>
                        <td>
								<?php echo $row->lockercount; ?>
						</td>
						<td>
							$<?php echo $row->Locker; ?>
						</td>
						<td>
							$<?php $gradsub =  $row->lockercount*$row->Locker ;
								echo $gradsub;
								$totalbilled += $gradsub;
							?>
						</td>
					</tr>
					<tr>
						<td>
								Summer only
						</td>
                        <td>
								<?php echo $row->summercount; ?>
						</td>
						<td>
							$<?php echo $row->Summer; ?>
						</td>
						<td>
							$<?php $gradsub =  $row->summercount*$row->Summer ;
								echo $gradsub;
								$totalbilled += $gradsub;
							?>
						</td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
						<td>Total billed:</td><td> $<?php echo $totalbilled; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
		
	</table>
	
</div>
