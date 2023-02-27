<?php
include '../../components/header.php';
include './ProductController.php';
$productHandler = new ProductController();
$productHandler->createProduct('ClothesTable');
?>
<section id="contact" class="contact" style="background-color: var(--bg-body); padding:100px; padding-top:10px;">
  <div class="wrapper contact_wrapper bottom_border">

  <div class="contact__text">
      <h2 class="contact__headline header-xl">Add product</h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="contact__control">
        <label for="productImage">Product Image</label><br>
        <input type="file" id="productImage" name="productImage" class="file-upload-button"><br>
      </div>
      <div class="contact__control">
        <label for="productTitle">Product Title</label><br>
        <input type="text" id="productTitle" name="productTitle"><br>
      </div>
      <div class="contact__control">
        <label for="productSubtitle">Product Subtitle</label><br>
        <input type="text" id="productSubtitle" name="productSubtitle"><br>
      </div>
      <div class=" contact__control align-left">
        <button class="button" name="product-submit" type="submit" style="color: var(--accent);">Create Product</button>
      </div>
    </form>
  </div>
</section>
<?php
include '../../components/footer.php';
?>