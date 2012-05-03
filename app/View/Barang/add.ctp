<?php echo $this->Form->create('Barang', array('inputDefaults' => array('label' => false, 'div' => false))); ?>

<font face=tahoma size="5"> <center> <b> Data Harga Barang </b></center> </font> <br><br>

<center>
    <table border="0">

        <tr>
            <td> <font face=tahoma size="2"> Nama Barang </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('master_id', array('type' => 'select', 'options' => $master)); ?>  </td>
        </tr>
        <tr>
            <td> <font face=tahoma size="2"> Nama Pasar </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('pasar_id', array('type' => 'select', 'options' => $pasar)); ?> </td>
        </tr>  
        <tr>
            <td> <font face=tahoma size="2"> Harga </font></td> <td> : </td>
            <td> <?php echo $this->Form->input('harga'); ?> </td>
        </tr>
        <tr>
            <td> <?php echo $this->Form->end('Save'); ?> </td>
        </tr>
    </table>
</center>