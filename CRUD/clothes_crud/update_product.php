<?php
include '../../components/header.php';
include './ProductController.php';
$productHandler = new ProductController();
$id = $_GET['id'];
$row = $productHandler->editProduct($id);
$data = [];
if (isset($_POST['product-submit'])) {
    $data['id'] = $id;
    $data['productImage'] = "../app/images/" .  $_FILES['productImage']['name'];
    $data['productTitle'] = $_POST['productTitle'];
    $data['productSubtitle'] = $_POST['productSubtitle'];
    $data['modifiedBy'] = $_SESSION['userName'];
    
    $updateProduct = $productHandler->updateProduct($data);

    if ($updateProduct) {
        echo "<script>alert('Product updated successfully');</script>";
        echo "<script>window.location.href = '../../views/dashboard.php';</script>";
    } else {
        echo "<script>alert('Product update failed');</script>";
        echo "<script>window.location.href = '../../views/dashboard.php';</script>";
    }
}
?>
<section id="contact" class="contact" style="background-color: var(--bg-body); padding:100px; padding-top:10px;">
  <div class="wrapper contact_wrapper bottom_border">

  <div class="contact__text">
      <h2 class="contact__headline header-xl">Update product</h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="contact__control">
        <input type="file" id="productImage" name="productImage" class="file-upload-button"><br>
      </div>
      <div class="contact__control">
        <input type="text" id="productTitle" name="productTitle" value="<?php echo $row['productTitle']; ?>"><br>
      </div>
      <div class="contact__control">
        <input type="text" id="productSubtitle" name="productSubtitle" value="<?php echo $row['productSubtitle'];?>"><br>
      </div>
      <div class=" contact__control align-left">
        <button class="button" name="product-submit" type="submit" style="color: var(--accent);">Update product</button>
      </div>
    </form>
  </div>
</section>
<?php
include '../../components/footer.php';
?>