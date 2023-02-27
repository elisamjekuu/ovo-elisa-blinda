<?php
include '../components/header.php'
?>

<section class="hero">
  <div class="wrapper hero__wrapper bottom-border">
    <div class="hero__content">
      <picture style="transition: 1s ease-in-out;">
        <source id="heroImageSlider1" media="(min-width: 62.5em)" srcset="../app/images/heroImage.avif" />
        <source id="heroImageSlider2" media="(min-width: 37.5em)" srcset="../app/images/heroImage.avif" />
        <img id="heroImageSlider3" class="hero__image" src="../app/images/heroImage.avif" width-="174" height="383" />
      </picture>
      <img class="hero__rings" src="../app/images/pattern-rings.svg" alt="" width="530" height="129" />
      <img class="hero__circle" src="../app/images/pattern-circle.svg" alt="" width="129" height="129" />
      <div class="hero__text">
        <h1 class="hero__headline header-xl">
          OVO<br />
          Women's <span>Collection</span>.
        </h1>
        <p class="hero__description">
          October's Very Own (OVO) is a Canadian born lifestyle brand headquartered in Toronto.
          Established in 2008 by founders Aubrey “Drake” Graham, Oliver El-Khatib and Noah “40” Shebib.
        </p>
        <?php
        if (isset($_SESSION['userRole'])) {
        ?>
          <a href="./products.php" class="hero__contact underline">Shop Now</a>
        <?php
        } else {
        ?>
          <a href="#" onclick="alert('Please sign in first')" class="hero__contact underline">Shop Now</a>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</section>

<section class="banner">
</section>

<section id="contact" class="contact" style="background-color: var(--bg-body);">
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
        <textarea name="message" id="message" cols="30" rows="3" placeholder="Message"></textarea>
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
<script src="../app//js/script.js"></script>
<script src="../app/js/contact.js"></script>