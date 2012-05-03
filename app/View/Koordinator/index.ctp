<h1>List Koordinator</h1>

<table>
	<tr>

		
		<th>Kode Koordinator</th>
		<th>Nama Koordinator</th>
		<th>No HP</th>
		<th>Pasar</th>
		<th>Action</th>

	</tr>

	<?php	foreach ($koordinator as $koordinator): ?>

	<tr>
		
		<td><?php echo $koordinator['Koordinator']['kode_koordinator']; ?></td>
		<td><?php echo $koordinator['Koordinator']['nama']; ?></td>
		<td><?php echo $koordinator['Koordinator']['no_hp']; ?></td>
		<td><?php echo $koordinator['Koordinator']['pasar_id']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $koordinator['Koordinator']['id']));?>
		<td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $koordinator['Koordinator']['id']),array('confirm'=>'anda yakin?'));?></td>
	</tr>

	<?php	endforeach; ?>
</table>




