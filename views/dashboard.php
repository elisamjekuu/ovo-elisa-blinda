<?php
include '../components/header.php';
?>

<section id="dashboard">

    <?php
    if (isset($_SESSION['userRole']) && $_SESSION['userRole'] == 'admin') {
    ?>
        <h1 class="dashboard_title">Dashboard • Welcome, <span><?php echo $_SESSION['userName'] ?></span></h1>
    <?php
    } else { ?>
        <h1>Dashboard</h1>
    <?php
    }
    ?>
    <?php
    include '../components/form_submissions_table.php';
    include '../components/users_table.php';
    include '../components/stores_table.php';
    include '../components/clothes_table.php'; ?>
</section>

<?php
include '../components/footer.php';
?>