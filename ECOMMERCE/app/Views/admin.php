<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Basic CSS styles with the color changed to #6F61C0 */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #6F61C0;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
        }

        nav {
            text-align: right;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #6F61C0;
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .edit-btn, .delete-btn {
            text-decoration: none;
            color: #6F61C0; /* Change the color of buttons to match the header color */
            margin-right: 10px;
        }

        .edit-btn:hover, .delete-btn:hover {
            text-decoration: underline;
        }

        .add-product-form {
            margin-top: 30px;
        }

        .add-product-form h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-footer {
            margin-top: 20px;
            text-align: right;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #ccc;
            color: #333;
        }

        .btn-secondary:hover {
            background-color: #999;
        }

        .btn-success {
            background-color: #6F61C0; /* Change the button color to match the header color */
            color: white;
        }

        .btn-success:hover {
            background-color: #5D5494; /* Darken the button color on hover */
        }
    </style>
</head>
<body>
<header>
        <h1>Admin Panel</h1>
        <nav>
            <a href="/logout" class="btn btn-success">Log Out</a>
        </nav>
    </header>

    <div class="container">
        <section class="product-list">
            <h2>Products</h2>
            <table class="table">
                <!-- Table header here -->
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Item Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows here -->
                    <?php if (isset($items)): ?>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><img src="/uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="100"></td>
                                <td><?= $item['name']; ?></td>
                                <td><?= $item['description']; ?></td>
                                <td><?= $item['price']; ?></td>
                                <td>
                                    <a href="/edit/<?= $item['id'] ?>" class="edit-btn">Edit</a>
                                    <a href="/delete/<?= $item['id'] ?>" class="delete-btn">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No items found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
		<br>
		<br>

        <section class="add-product-form">
            <h2>Add/Edit Product</h2>
            <form method="post" action="/save" enctype="multipart/form-data">
                <!-- Form fields here -->
                <div class="form-group">
                    <label for="image">Item Image</label>
                    <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required value="<?= isset($pro['name']) ? $pro['name'] : '' ?>">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required><?= isset($pro['description']) ? $pro['description'] : '' ?></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required value="<?= isset($pro['price']) ? $pro['price'] : '' ?>">
                </div>

                <div class="form-footer">
                    <a href="/admin" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </section>
    </div>

</body>
</html>
