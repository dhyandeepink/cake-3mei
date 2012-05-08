<h1>List Tipe Barang</h1>
<?php echo $this->Html->Link("Tambah Type Barang", array('action' => 'add')); ?>
<table border="1">
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Kelompok Barang</th>
		<th>Action</th>
	</tr>
        <?php if(empty($masters)):?>
            <?php echo '<b>Data tidak ada.</b>';?>
        <?php else : ?>
	<?php	foreach ($masters as $row): ?>

	<tr>
		<td><?php echo $row['Master']['kode_barang']; ?></td>
		<td><?php echo $row['Master']['nama_barang']; ?></td>
		<td><?php echo $row['Master']['jenis_barang']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $row['Master']['id']));?>
		<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $row['Master']['id']),array('confirm'=>'anda yakin?'));?></td>
	</tr>
	<?php endforeach; ?>
        <?php endif; ?>
</table>


