<h1>Edit Data Koordinator</h1>
<?php echo $this->Form->create('Koordinator',array('action'=>'edit'));?>

<table>
	<tr>
		<td>  Kode Koordinator </td><td>:</td>
		<td> <?php echo $this->Form->input('kode_koordinator'); ?> </td>
	</tr>
	<tr>
		<td>  Nama </td><td>:</td>
		<td> <?php echo $this->Form->input('nama'); ?> </td>
	</tr>
	<tr>
		<td>  No. Handphone </td><td>:</td>
		<td> <?php echo $this->Form->input('no_hp'); ?> </td>
	</tr>
	<tr>
		<td>  Nama Pasar </td><td>:</td>
		<td> <?php echo $this->Form->input('pasar_id',array('type'=>'select','options'=>$pasar)); ?> </td>
	</tr>
	<tr>
		<td><?php echo $this->Form->end('Save');?></td>
	</tr>

</table>

