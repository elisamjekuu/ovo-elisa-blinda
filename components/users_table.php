<table>
    <h3 style="margin-top: 30px;">Users Database</h3>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($userData)) : ?>
            <?php foreach ($userData as $row) : ?>
                <tr>
                    <td><?php echo $row['userId']; ?></td>
                    <td><?php echo $row['userName']; ?></td>
                    <td><?php echo $row['userEmail']; ?></td>
                    <td><?php echo $row['userPassword']; ?></td>
                    <td><?php echo $row['userRole']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="5">User not found</td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>