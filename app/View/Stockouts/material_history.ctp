<h2>Stockout History for Material Name: <?php echo h($materialName); ?></h2>

<?php echo $this->Html->link('Add Stockout', ['action' => 'add', $materialId], ['class' => 'btn']); ?>


<table>
    <tr>
        <th>ID</th><th>Quantity Removed</th><th>Date</th><th>Actions</th>
    </tr>
    <?php foreach ($stockouts as $stockout): ?>
    <tr>
        <td><?php echo h($stockout['Stockout']['id']); ?></td>
        <td><?php echo h($stockout['Stockout']['quantity_removed']); ?></td>
        <td><?php echo h($stockout['Stockout']['out_date']); ?></td>
        <td>
            <?php echo $this->Html->link('Edit', ['action' => 'edit', $stockout['Stockout']['id']]); ?>
            <?php echo $this->Form->postLink('Delete', ['action' => 'delete', $stockout['Stockout']['id']], ['confirm' => 'Are you sure?']); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
