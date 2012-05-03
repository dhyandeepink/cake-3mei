<h1>Edit Pasar</h1>
<?php
echo $this->Form->create('Pasar', array('action' => 'edit')); ?>
<table>
<tr>
    <td>  Kode Pasar </td><td>:</td>
    <td> <input type="text"  name="data[Pasar][kode_pasar]" value="<?php echo $pasar['Pasar']['kode_pasar']; ?>"> </td>
</tr>
<tr>
    <td>  Nama Pasar </td><td>:</td>
    <td> <input type="text"  name="data[Pasar][nama_pasar]" value="<?php echo $pasar['Pasar']['nama_pasar'];?>"> </td>
</tr>
<tr>
    <td> Alamat </td><td>:</td>
    <td> <input type="text"  name="data[Pasar][alamat]" value="<?php echo $pasar['Pasar']['alamat']; ?>"> </td>
</tr>
<td><input type="hidden" name="id" value="<?php echo $pasar['Pasar']['id']; ?>"></td>
<tr>
    <td><?php echo $this->Form->end('Save'); ?></td>
</tr>
</table>