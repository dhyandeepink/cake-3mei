<?php echo $this->Form->create('Barang', array('action' => 'edit')); ?>
<font face="tahoma" size="5"> <center> <b> Edit Data Harga Barang </b></center> </font> <br><br>
<center>
    <table border="0">
        <tr>
            <td>  Nama Barang</td><td>:</td>
            <td><?php echo $this->Form->select('master_id', $masters); ?></td>
        </tr>
        <tr>
            <td>  Nama Pasar</td><td>:</td>
            <td><?php echo $this->Form->select('pasar_id', $pasars); ?></td>
        </tr>
        <tr>
            <td> <font face="tahoma" size="2"> Harga </font></td> <td> : </td>
            <td> <input type="text" name="data[Barang][harga]" value="<?php echo $barang['Barang']['harga']; ?>"/> </td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $barang['Barang']['id']; ?>"> </td>
        </tr>
        <tr>
            <td> <?php echo $this->Form->end('Save'); ?> </td>
        </tr>
    </table>
</center>

