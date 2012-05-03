<?php echo $this->Form->create('User', array('type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false))); ?>

<font face=tahoma size=5> <center> <b> Data Admin </b></center> </font> <br><br>

<center>
<table border="0">

<tr>
	<td> <font face=tahoma size=2> Username </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('username'); ?> </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> Password </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('password'); ?> </td>
</tr>

<tr>
	<td> <font face=tahoma size=2> Level </font></td> <td> : </td>
	<td> <?php echo $this->Form->input('level'); ?> </td>
</tr>

<tr>
<td> <?php echo $this->Form->end('Save'); ?> </td>
</tr>
</table></center>


