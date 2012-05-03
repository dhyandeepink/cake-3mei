<h1>List Admin</h1>

<table border="1">
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Id Koordinator</th>
		<th>Action</th>
	</tr>

	<?php	foreach ($user as $user): ?>

	<tr>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['password']; ?></td>
		<td><?php echo $user['User']['level']; ?></td>
		<td><?php echo $user['User']['koordinator_id']; ?></td>

		<td><?php echo $this->Html->image('edit.png', array('url' => array('action' => 'edit', $user['User']['id']))); ?>
			
		<td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']),array('confirm'=>'anda yakin?'));?></td>
	</tr>

	<?php	endforeach; ?>
</table>