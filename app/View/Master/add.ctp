<?php echo $this->Form->create('Master', array('type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false))); ?>

<font face=tahoma size=5> <center> <b> Data Tipe Barang </b></center> </font> <br><br>

<center><table border="0">

<tr>
	<td> <font face=tahoma size=2> Kode Barang </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('kode_barang'); ?> </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> Nama Barang </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('nama_barang'); ?> </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> Jenis Barang </font></td> <td> : </td>
	<td> <?php
		$options = array ('Beras' => 'Beras' ,'Telur' => 'Telur' ,'Minyak Goreng' => 'Minyak Goreng');
		echo $this->Form-> select ('kelompok_barang', $options);?> </td>
</tr>

<tr>
	<td> <?php echo $this->Form->end('Save'); ?> </td>
</tr>
</table></center>
