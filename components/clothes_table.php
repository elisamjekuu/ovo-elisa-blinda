<table>
    <h3 style="margin-top: 30px;">Clothes Database</h3>
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Modified By</th>
            <th>
                <a href="../CRUD/clothes_crud/create_product.php" style="color: var(--accent);">Add</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($clothesData)) : ?>
            <?php foreach ($clothesData as $row) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <div class="tableimg">
                            <img style="width:145px;" src="<?php echo $row['productImage'] ?>">
                        </div>
                    </td>
                    <td><?php echo $row['productTitle']; ?></td>
                    <td><?php echo $row['productSubtitle']; ?></td>
                    <td><?php echo $row['modifiedBy']; ?></td>
                    <td>
                        <a href="../CRUD/clothes_crud/update_product.php?id=<?php echo $row['id']; ?>" style="font-weight: bold;">Edit</a>
                    </td>
                    <td>
                        <a style="color: red;" href="../CRUD/clothes_crud/delete_product.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">No clothes uploaded yet</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>