<h1>List Pasar</h1>
<?php echo $this->Html->Link("Tambah Pasar", array('action' => 'add')); ?>
<table border="1">
    <tr>

        <th>Id</th>
        <th>Kode</th>
        <th>Nama Pasar</th>
        <th>Alamat</th>
        <th>Action</th>

    </tr>
    <?php $i = 1;?>
    <?php if(empty($pasars)) : ?>
    <?php echo "Data tidak ada.";?>
    <?php else :?>
    <?php foreach ($pasars as $row): ?>
    <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['Pasar']['kode_pasar']; ?></td>
            <td><?php echo $row['Pasar']['nama_pasar']; ?></td>
            <td><?php echo $row['Pasar']['alamat']; ?></td>
            <td>
                <?php 
                    echo $this->Html->link('Edit',
                    array('action'=>'edit',$row['Pasar']['id']));
                ?>
                <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $row['Pasar']['id']),
                array('confirm' => 'Are you sure?'));
                ?>
    </tr>
    <?php $i++; ?>
        <?php endforeach; ?>   
<?php endif; ?>

</table>

