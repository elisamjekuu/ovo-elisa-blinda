<?php
include '../components/header.php';
include '../CRUD/DatabaseHandler.php';
?>

<section class="projects">
  <div class="wrapper projects__wrapper">
    <div class="projects__grid">
      <h2 class="projects__headline header-xl">Stores</h2>
      <a href="#" class="projects__contact underline">Official</a>
      <?php
      if (!empty($storesData)) : ?>
        <?php foreach ($storesData as $row) : ?>
          <div class="projects__item">

            <picture class="projects__picture">
              <source media="(min-width: 62.5em)" srcset=<?php echo $row['productImage'] ?> />
              <img class="projects__image" src="<?php echo $row['productImage'] ?>" width-="343" height="253" />
            </picture>
            <h3 class="projects__name"><?php echo $row['productTitle'] ?></h3>
            <p class="projects__tags">
              <span><?php echo $row['productSubtitle'] ?></span>
            </p>
            <div class="projects__links">
              <a href="" class="underline">Visit</a>
              <a href="" class="underline">Info</a>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <h1>No clothes yet</h1>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php
include '../components/footer.php'
?>