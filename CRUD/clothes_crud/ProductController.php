<?php

include '../DatabaseHandler.php';

class ProductController extends DatabaseHandler {
    public function createProduct()
    {
        if (isset($_POST['product-submit'])) {
            $productImage = $_FILES['productImage']['name'];
            $productTitle = $_POST['productTitle'];
            $productSubtitle = $_POST['productSubtitle'];
            $modifiedBy = $_SESSION['userName'];

            $imageDir = '../app/images/' . $productImage;
            if (empty($productTitle) || empty($productSubtitle)) {
                echo "<script>alert('All fields are required');</script>";
                return;
            }
            $query = "INSERT INTO ClothesTable(productImage, productTitle, productSubtitle, modifiedBy) VALUES ('$imageDir', '$productTitle', '$productSubtitle', '$modifiedBy')";
            if ($sql = $this->conn->query($query)) {
                echo "<script>alert('Product uploaded successfully');</script>";
                header("Location: ../../views/dashboard.php");
            } else {
                echo "<script>alert('Product upload failed');</script>";
            }
        }
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM ClothesTable where id = $id";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function editProduct($id)
    {
        $data = null;
        $query = "SELECT * FROM ClothesTable WHERE id = $id";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data = $row;
            }
        }
        return $data;
    }

    public function updateProduct($data)
    {
        $query = "UPDATE ClothesTable SET productImage='$data[productImage]', productTitle='$data[productTitle]', productSubtitle='$data[productSubtitle]', modifiedBy='$data[modifiedBy]' WHERE id='$data[id]'";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
