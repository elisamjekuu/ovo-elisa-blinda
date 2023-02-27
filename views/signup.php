<?php
include '../components/header.php'
?>

<section id="contact" class="contact bg-less-dark">
  <div class="wrapper contact__wrapper bottom-border">
    <div class="contact__text">
      <h2 class="contact__headline header-xl">Sign up</h2>
      <p class="contact__description">
        You already have an account? <br />
        Click here to <a style="color: var(--accent);" href="./signin.php">Sign in.</a>
      </p>
    </div>
    <?php 
    include '../CRUD/DatabaseHandler.php';
    $dbHandler = new DatabaseHandler();
    $dbHandler->insertUser();
    ?>
    <form action="" class="contact__form" method="post">
      <div class="contact__control">
        <!-- <label for="username" class="visually-hidden">Username</label> -->
        <input type="text" id="username" name="username" placeholder="Username" />
      </div>
      <div class="contact__control">
        <!-- <label for="email" class="visually-hidden">Email</label> -->
        <input type="email" id="email" name="email" placeholder="Email" />
      </div>
      <div class="contact__control">
        <!-- <label for="password" class="visually-hidden">Password</label> -->
        <input type="password" id="password" name="password" placeholder="Password" />
      </div>
      <div class="contact__control align-right">
        <button id="signup" name="signup-submit" type="submit">Sign up</button>
      </div>
    </form>
  </div>
  <img class="contact__rings" src="../app/images/pattern-rings.svg" alt="" width="530" height="129" />
</section>

<?php
include '../components/footer.php'
?>

<script src="../app/js/signup.js"></script>