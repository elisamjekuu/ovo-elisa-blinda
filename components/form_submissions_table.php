<?php
include '../CRUD/DatabaseHandler.php';
?>
<div class="dashboard">
    <table>
        <h3>Contact Form Submissions</h3>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($formData)) : ?>
                <?php foreach ($formData as $row) : ?>
                    <tr>
                        <td><?php echo $row['contactName']; ?></td>
                        <td><?php echo $row['contactEmail']; ?></td>
                        <td><?php echo $row['contactMessage']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3">No Submissions Yet</td>
                </tr>
            <?php endif; ?>
    </table>