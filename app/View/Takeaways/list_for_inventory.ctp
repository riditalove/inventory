<!-- In app/View/Takeaways/list_for_inventory.ctp -->
<h1>Takeaways for Inventory: <?php echo h($inventory['Inventory']['id']); ?></h1>

<!-- Display inventory details (optional) -->
<p>Inventory ID: <?php echo h($inventory['Inventory']['id']); ?></p>
<p>Inventory Quantity: <?php echo h($inventory['Inventory']['order_quantity']); ?> kg</p>

<!-- Display the list of takeaways -->
<h2>Takeaway Entries</h2>
<table class="table">
    <thead>
        <tr>
            <th>Date of Takeaway</th>
            <th>Quantity Taken</th>
            <th>Remaining Quantity</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($takeaways)): ?>
            <?php foreach ($takeaways as $takeaway): ?>
                <tr>
                    <td><?php echo h($takeaway['Takeaway']['date']); ?></td>
                    <td><?php echo h($takeaway['Takeaway']['quantity_removed']); ?> kg</td>
                    <td><?php echo h($takeaway['Takeaway']['remaining_quantity']); ?> kg</td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">No takeaways for this inventory.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
