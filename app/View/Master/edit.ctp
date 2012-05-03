<?php
$kode = $master['Master']['kode_barang'];
$id = $master['Master']['id'];
$nama = $master['Master']['nama_barang'];
$jenis = $master['Master']['jenis_barang'];
?>
<h1>Edit Tipe Barang</h1>
<?php echo $this->Form->create('Master', array('action' => 'edit')); ?>

<table>
    <?php
    $options = array('beras' => 'Beras', 'telur' => 'Telur', 'minyak_goreng' => 'Minyak_Goreng',
        'daging' => 'Daging', 'susu' => 'Susu', 'minyak_tanah' => 'Minyak_Tanah',
        'gula_pasir' => 'Gula_Pasir', 'garam' => 'Garam', 'jagung' => 'Jagung');
    ?> 

    <tr>
        <td>  Kode Barang </td><td>:</td>
        <td> <input type="text"  name="data[Master][kode_barang]" value="<?php echo $kode; ?>"> </td>
    </tr>
    <tr>
        <td>  Nama Barang </td><td>:</td>
        <td> <input type="text"  name="data[Master][nama_barang]" value="<?php echo $nama; ?>"> </td>
    </tr>
    <tr>
        <td>  Kelompok Barang</td><td>:</td>
        <td><?php echo $this->Form->select('jenis_barang', $options); ?></td>
    </tr>
    <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
    <tr>
        <td><?php echo $this->Form->end('Save'); ?></td>
    </tr>

</table>