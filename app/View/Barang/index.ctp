<h1>List Harga Barang</h1>

<table border="1">
    <tr>

        <th>No</th>
        <th>Nama Barang</th>
        <th>Nama Pasar</th>
        <th>Harga (Rp)</th>
        <th>Action</th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach ($barangs as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['Master']['nama_barang']; ?></td>
            <td><?php echo $row['Barang']['pasar_id']; ?></td>
            <td><?php echo $row['Barang']['harga']; ?></td>
            <td>
                <?php
                echo $this->Html->link('Edit', array('action' => 'edit', $row['Barang']['id']));
                ?>
                <?php
                echo $this->Form->postLink(
                        'Delete', array('action' => 'delete', $row['Barang']['id']), array('confirm' => 'Are you sure?'));
                ?>
        </tr>
            <?php endforeach; ?>

</table>


