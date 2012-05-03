<?php echo $this->Form->create('Outbox', array('type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false))); ?>

<font face=tahoma size=5> <center> <b> Data SMS  </b></center> </font> <br><br>



<center>
<table border="0">

<tr>
<td> <font face=tahoma size=2> No Tujuan </font></td> <td> : </td>
<td> <?php echo $this->Form->input('DestinationNumber'); ?> </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> Pesan </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('TextDecoded'); ?> </td>
</tr>


<tr>
<td> <?php echo $this->Form->end('Send'); ?> </td>
</tr>
</table></center>