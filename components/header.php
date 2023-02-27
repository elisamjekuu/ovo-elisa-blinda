<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet" />
  <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/ovo/app/images/ovo.jpeg" />
  <link rel="stylesheet" href="http://localhost/ovo/app/style/style.css" />
  <title>October's Very Own</title>
</head>

<body>
  <header class="header">
    <h2 class="visually-hidden">Header</h2>
    <div class="wrapper">
      <nav class="header__nav">
        <h2 class="visually-hidden">Navigation</h2>
        <a href="http://localhost/ovo/views/index.php" class="header__home">
          October's Very Own
          <span class="visually-hidden">(to home page)</span>
        </a>
        <?php if (!isset($_SESSION['userRole'])) { ?>
          <a href="http://localhost/ovo/views/products.php" class="header__social" style="color: white;display:none;">
            New Arrivals
          </a>
          <a href="http://localhost/ovo/views/stores.php" class="header__social" style="display:none;">
            Stores
          </a>
          <a href="http://localhost/ovo/views/contact.php" class="header__social">
            Contact Us</span>
          </a>
          <a href="http://localhost/ovo/views/info.php" class="header__social" style="display:none;">
          Info</span>
        </a>
        <?php } else { ?>
          <a href="http://localhost/ovo/views/products.php" class="header__social"">
            New Arrivals
          </a>
          <a href="http://localhost/ovo/views/stores.php" class="header__social">
            Stores
          </a>
          <a href="http://localhost/ovo/views/contact.php" class="header__social" style="display: none;">
            Contact Us</span>
          </a>
          <a href="http://localhost/ovo/views/info.php" class="header__social">
          Info</span>
        </a>
        <?php } if (isset($_SESSION['userRole']) && $_SESSION['userRole'] == 'admin') { ?>
          <a href="http://localhost/ovo/views/dashboard.php" class="header__social" style="color: var(--accent);">
            Dashboard
          </a>
          <a href="http://localhost/ovo/auth/signout.php" class="header__social" style="color: var(--accent);">
            Sign out
          </a>
        <?php } else if (isset($_SESSION['userRole'])) { ?>
          <a href="http://localhost/ovo/auth/signout.php" class="header__social" style="color: var(--accent);">
            Sign out
          </a>
        <?php } else { ?>
          <a href="http://localhost/ovo/views/signin.php" class="header__social" style="color: var(--accent);">
            Sign In
          </a>
        <?php } ?>
      </nav>

    </div>
  </header>