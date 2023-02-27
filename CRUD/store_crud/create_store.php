<?php
include '../../components/header.php';
include './StoreController.php';
$productHandler = new StoreController();
$productHandler->createProduct('ClothesTable');
?>
<section id="contact" class="contact" style="background-color: var(--bg-body); padding:100px; padding-top:10px;">
  <div class="wrapper contact_wrapper bottom_border">

  <div class="contact__text">
      <h2 class="contact__headline header-xl">Create store</h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="contact__control">
        <label for="productImage">Store Image</label><br>
        <input type="file" id="productImage" name="productImage" class="file-upload-button"><br>
      </div>
      <div class="contact__control">
        <label for="productTitle">Store Title</label><br>
        <input type="text" id="productTitle" name="productTitle"><br>
      </div>
      <div class="contact__control">
        <label for="productSubtitle">Store Subtitle</label><br>
        <input type="text" id="productSubtitle" name="productSubtitle"><br>
      </div>
      <div class=" contact__control align-left">
        <button class="button" name="product-submit" type="submit" style="color: var(--accent);">Create Store</button>
      </div>
    </form>
  </div>
</section>
<?php
include '../../components/footer.php';
?>