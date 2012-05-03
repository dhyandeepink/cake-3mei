<h1>Edit Admin</h1>
<?php echo $this->Form->create('User',array('action'=>'edit'));?>

<table>
	<tr>
		<td>  Username </td><td>:</td>
		<td> <?php echo $this->Form->input('username'); ?> </td>
	</tr>
	<tr>
		<td>  Password </td><td>:</td>
		<td> <?php echo $this->Form->input('password'); ?> </td>
	</tr>
	<tr>
		<td>  Level</td><td>:</td>
		<td> <?php echo $this->Form->input('level'); ?> </td>
	</tr>
	<tr>
		<td><?php echo $this->Form->end('Save');?></td>
	</tr>

</table>



