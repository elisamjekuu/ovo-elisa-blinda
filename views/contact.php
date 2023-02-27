<?php
include '../components/header.php'
?>

<section id="contact" class="contact bg-dark">
  <div class="wrapper contact__wrapper bottom-border">
    <div class="contact__text">
      <h2 class="contact__headline header-xl">Contact</h2>
      <p class="contact__description">
        We would love to hear about your feedback and review.
        Please fill in the form, and we'll get back to you as soon as
        possible.
      </p>
    </div>
    <?php 
    include '../CRUD/DatabaseHandler.php';
    $dbHandler = new DatabaseHandler();
    $dbHandler->insertForm();
    ?>
    <form action="" class="contact__form" method="post">
      <div class="contact__control">
        <label for="name" class="visually-hidden">Name</label>
        <input type="text" id="name" name="name" placeholder="Name" />
      </div>
      <div class="contact__control">
        <label for="email" class="visually-hidden">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" />
      </div>
      <div class="contact__control">
        <label for="message" class="visually-hidden">Message</label>
        <textarea name="message" id="message" cols="30" rows="3" placeholder="Message" ></textarea>
      </div>
      <div class="contact__control align-right">
        <button id="contact-submit" name="contact-submit" type="submit">Send Message</button>
      </div>
    </form>
  </div>
  <img class="contact__rings" src="../app/images/pattern-rings.svg" alt="" width="530" height="129" />
</section>

<?php
include '../components/footer.php'
?>
<script src="../app//js/contact.js"></script>