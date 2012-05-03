<?php echo $this->Form->create('Pasar', array('type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false))); ?>

<font face=tahoma size="2"> <center> <b> Data Pasar </b></center> </font> <br><br>

<center>
    <table border="0">

        <tr>
            <td> <font face=tahoma size="2"> Kode Pasar </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('kode_pasar'); ?> </td>
        </tr>

        <tr>
            <td> <font face=tahoma size="2"> Nama Pasar </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('nama_pasar'); ?> </td>
        </tr>

        <tr>
            <td> <font face=tahoma size="2"> Alamat </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('alamat'); ?> </td>
        </tr>

        <tr>
            <td> <?php echo $this->Form->end('Save'); ?> </td>
        </tr>
    </table>
</center>
