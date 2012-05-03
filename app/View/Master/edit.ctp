<h1>Edit Tipe Barang</h1>
<?php echo $this->Form->create('Master',array('action'=>'edit'));?>

<table>
	<tr>
		<td>  Kode Barang </td><td>:</td>
		<td> <?php echo $this->Form->input('kode_barang'); ?> </td>
	</tr>
	<tr>
		<td>  Nama Barang </td><td>:</td>
		<td> <?php echo $this->Form->input('nama_barang'); ?> </td>
	</tr>
	<tr>
		<td>  Kelompok Barang</td><td>:</td>
		<td> <?php echo $this->Form->input('kelompok_barang'); ?> </td>
	</tr>
	<tr>
		<td><?php echo $this->Form->end('Save');?></td>
	</tr>

</table>