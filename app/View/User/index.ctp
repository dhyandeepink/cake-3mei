<h1>List Harga Barang</h1>
<?php echo $this->Html->Link("Tambah", array('action' => 'add')); ?>
<table border="1">
    <tr>

        <th>No</th>
        <th>Nama g</th>
        <th>Username</th>
        <th>Level</th>
        <th>Action</th>

    </tr>
    <?php if (empty($users)) : ?>
        <?php echo "Data tidak ada."; ?>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($users as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['User']['nama']; ?></td>
                <td><?php echo $row['User']['username']; ?></td>
                <td><?php echo $row['User']['level']; ?></td>
                <td>
                    <?php
                    echo $this->Html->link('Edit', array('action' => 'edit', $row['User']['id']));
                    ?>
                    <?php
                    echo $this->Form->postLink(
                            'Delete', array('action' => 'delete', $row['User']['id']), array('confirm' => 'Are you sure?'));
                    ?>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif; ?>

</table>


