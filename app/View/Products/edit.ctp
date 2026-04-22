<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the product </title>

</head>

<body>
    <h1>Edit the product </h1>


    <?php
    echo $this->Form->create('Product');
    echo $this->Form->input('name');
    echo $this->Form->input('price');
    echo $this->Form->input('description');
    echo $this->Form->end('Save');

    ?>
</body>

</html>