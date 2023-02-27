<?php
include '../components/header.php'
?>

<section id="contact" class="contact bg-less-dark">
  <div class="wrapper contact__wrapper bottom-border">
    <div class="contact__text">
      <h2 class="contact__headline header-xl">Sign in</h2>
      <p class="contact__description">
        You don't already have an account? <br />
        Click here to <a style="color: var(--accent);" href="./signup.php">Sign up.</a>
      </p>
    </div>
    <form action="../auth/UserAuth.php" class="contact__form" method="post">
      <div class="contact__control">
        <input type="text" id="username" name="username" placeholder="Username" />
      </div>
      <div class="contact__control">
        <input type="password" id="password" name="password" placeholder="Password" />
      </div>
      <div class="contact__control align-right">
        <button id="signin" name="signin-submit" type="submit">Sign in</button>
      </div>
    </form>
  </div>
  <img class="contact__rings" src="../app/images/pattern-rings.svg" alt="" width="530" height="129" />
</section>

<?php
include '../components/footer.php'
?>

<script src="../app/js/signin.js"></script>