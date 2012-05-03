
<?php $this->Form->create('Barang',array('action'=>'edit')); ?>
<font face=tahoma size=5> <center> <b> Edit Data Harga Barang </b></center> </font> <br><br>

<center>
<table border="0">

<tr>
<td> <font face=tahoma size=2> Nama Barang </font></td> <td> : </td>
<td> <?php echo $this->Form->input('master_id',array('type'=>'select','options'=>$masters)); ?>  </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> Harga </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('harga'); ?> </td>
</tr>

<tr>
<td> <font face=tahoma size=2> Nama Pasar </font></td> <td> : </td>
<td> <?php echo $this->Form->input('pasar_id',array('type'=>'select','options'=>$pasars)); ?> </td>

</tr>


<tr>
<td> <?php echo $this->Form->end('Save'); ?> </td>
</tr>
</table></center>
<?php
echo $this->Form->create('Koordinator',array('action'=>'edit'));
echo $this->Form->input('kode_koordinator');
echo $this->Form->input('nama');
echo $this->Form->input('no_hp');
echo $this->Form->input('pasar_id',array('type'=>'select','options'=>$pasars));
echo $this->Form->input('id', array('type'=>'hidden'));
echo $this->Form->end('Tambah Koordinator');
?>
