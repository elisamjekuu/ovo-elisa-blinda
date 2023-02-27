<table>
    <h3 style="margin-top: 30px;">Stores Database</h3>
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Modified By</th>
            <th>
                <a href="../CRUD/store_crud/create_store.php" style="color: var(--accent);">Add</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($storesData)) : ?>
            <?php foreach ($storesData as $row) : ?>
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
                        <a href="../CRUD/store_crud/update_store.php?id=<?php echo $row['id']; ?>" style="font-weight: bold;">Edit</a>
                    </td>
                    <td>
                        <a style="color: red;" href="../CRUD/store_crud/delete_store.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this store?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">No stores uploaded yet
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>