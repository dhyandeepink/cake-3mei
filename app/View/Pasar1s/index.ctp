<h1>List Pasar</h1>
<?php echo $this->Html->Link("Tambah Pasar", array('action' => 'add')); ?>
<table>
	<tr>

		<th>Id</th>
		<th>Kode</th>
		<th>Nama Pasar</th>
		<th>Alamat</th>
		<th>Action</th>

	</tr>

	<?php	foreach ($pasars as $pasar): ?>

	<tr>
		<td><?php echo $pasar['Pasar1']['id']; ?></td>
		<td><?php echo $pasar['Pasar1']['kode_pasar']; ?></td>
		<td><?php echo $pasar['Pasar1']['nama_pasar']; ?></td>
		<td><?php echo $pasar['Pasar1']['alamat']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $pasar['Pasar1']['id']));?>
		<td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $pasar['Pasar1']['id']),array('confirm'=>'anda yakin?'));?></td>
	</tr>

	<?php	endforeach; ?>
</table>

