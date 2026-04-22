<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index For products</title>
</head>

<body>
    <h1>Products</h1>
        <!-- Add Button  -->
    <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'add')); ?>">Add Product</a>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>created </th>
            <th>modified </th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['Product']['id']; ?></td>
                <td><?php echo $product['Product']['name']; ?></td>
                <td><?php echo $product['Product']['price']; ?></td>
                <td><?php echo $product['Product']['description']; ?></td>
                <td><?php echo $product['Product']['created']; ?></td>
                <td><?php echo $product['Product']['modified']; ?></td>
                <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $product['Product']['id'])); ?></td>
                <td><?php echo $this->Html->link('Delete', array('action' => 'delete', $product['Product']['id']), null, 'Are you sure?'); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>