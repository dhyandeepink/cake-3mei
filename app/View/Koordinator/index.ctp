<h1>List Koordinator</h1>

<table border="1">
    <tr>


        <th>Kode</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Pasar</th>
        <th>Action</th>

    </tr>
    <?php if (empty($koordinators)): ?>
        <?php echo 'Data masih kosong.'; ?>
    <?php else : ?>
        <?php foreach ($koordinators as $koordinator): ?>

            <tr>

                <td><?php echo $koordinator['Koordinator']['kode_koordinator']; ?></td>
                <td><?php echo $koordinator['User']['nama']; ?></td>
                <td><?php echo $koordinator['Koordinator']['no_hp']; ?></td>
                <td><?php echo $koordinator['Pasar']['nama_pasar']; ?></td>
                <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $koordinator['Koordinator']['id'])); ?>
                <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $koordinator['Koordinator']['id']), array('confirm' => 'anda yakin?')); ?></td>
            </tr>

        <?php endforeach; ?>
    <?php endif; ?>
</table>




