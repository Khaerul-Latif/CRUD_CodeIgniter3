<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Form</title>
</head>
<body>
    <h2><?= isset($product) ? 'Edit Product' : 'Create Product' ?></h2>
    
    <form action="<?= isset($product) ? site_url('product/update/' . $product['id']) : site_url('product/save') ?>" method="post">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="<?= isset($product) ? $product['name'] : '' ?>" required>
        
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="<?= isset($product) ? $product['price'] : '' ?>" required>
        
        <button type="submit"><?= isset($product) ? 'Update' : 'Save' ?></button>
    </form>
    
    <a href="<?= site_url('product') ?>">Back to Product List</a>
</body>
</html>
