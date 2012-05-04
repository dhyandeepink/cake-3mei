<?php echo $this->Form->create('Master', array('inputDefaults' => array('label' => false, 'div' => false))); ?>

<font face=tahoma size=5> <center> <b> Data Tipe Barang </b></center> </font> <br><br>

<center>
    <table border="0">
        <tr>
            <td> 
                <font face=tahoma size=2> Jenis Barang </font>
            </td>
            <td> : </td>
            <td> 
                <?php
                $options = array('beras' => 'Beras', 'telur' => 'Telur', 'minyak_goreng' => 'Minyak_Goreng',
                    'daging' => 'Daging', 'susu' => 'Susu', 'minyak_tanah' => 'Minyak_Tanah',
                    'gula_pasir' => 'Gula_Pasir', 'garam' => 'Garam', 'jagung' => 'Jagung');
                echo $this->Form->select('jenis_barang', $options);
                ?> 
            </td>
        </tr>
        <tr>
            <td> <font face=tahoma size=2> Kode Barang </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('kode_barang'); ?> </td>
        </tr>

        <tr>
            <td> <font face=tahoma size=2> Nama Barang </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('nama_barang'); ?> </td>
        </tr>
        <tr>
            <td> <?php echo $this->Form->end('Save'); ?> </td>
        </tr>
    </table>
</center>
