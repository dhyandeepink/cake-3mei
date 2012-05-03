<?php echo $this->Form->create('Koordinator', array('type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false))); ?>

<font face=tahoma size=5> <center> <b> Data Koordinator </b></center> </font> <br><br>



<center>
<table border="0">

<tr>
<td> <font face=tahoma size=2> Kode Koordinator </font></td> <td> : </td>
<td> <?php echo $this->Form->input('kode_koordinator'); ?> </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> Nama </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('nama'); ?> </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> No. Handphone </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('no_hp'); ?> </td>
</tr>

<tr>
<td> <font face=tahoma size=2> Nama Pasar </font></td> <td> : </td>
<td> <?php echo $this->Form->input('pasar_id',array('type'=>'select','options'=>$pasar)); ?> </td>

</tr>


<tr>
<td> <?php echo $this->Form->end('Save'); ?> </td>
</tr>
</table></center>