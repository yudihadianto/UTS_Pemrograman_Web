<?php

include 'mysql_connect.php'

?>

<?php

if (isset($_POST['simpanproduct'])) {

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_category = $_POST['product_category'];
    $product_origin = $_POST['product_origin'];
    $product_description = $_POST['product_description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $status = $_POST['status'];

    $query = "INSERT INTO product VALUES ('$product_id', '$product_name', '$product_category', '$product_origin', '$product_description', '$quantity', '$price', '$status')";

    $insert = mysqli_query($conn, $query);

    if ($insert) {

        echo "<script>
		alert('Data Barang Berhasil Disimpan');
		</script>";

        header("Location: product_list.php");

    } else {
        echo 'Data Barang Gagal Disimpan';
    }
}

?>