<?php
  include 'conn.php';

   $itemName = mysqli_real_escape_string($conn, md5($_POST['itemName']));
   $ImageLink= mysqli_real_escape_string($conn, md5($_POST['ImageLink']));
   $itemDes = mysqli_real_escape_string($conn, md5($_POST['itemDes']));
   $price= mysqli_real_escape_string($conn, md5($_POST['price']));

   $sql="INSERT INTO products (itemName,ImageLink,itemDes,price) VALUES ('$itemName','$ImageLink','$itemDes','$price');";

   $result=mysqli_query($conn,$sql);
   header=("Location:inserted.html")

?>

<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List item</title>
    <!-- google fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Audiowide"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@700&family=Montserrat:wght@100;400;500;900&display=swap"
      rel="stylesheet"
    />

    <!-- styles including bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body class="h-100">
    <div class="row h-100">
      <div class="col-auto mx-auto my-auto column listing-form">
        <div class="card content">
          <div class="card-body">
            <div class="login">
              <img src="ecom.jpg" class="imgx" />
              <form action="makeListing.php" method="POST">
                <h1 class="card-title listing-page-title">Add your Item</h1>

                <label for="Item-name">Item Name</label>
                <input
                  type="text"
                  id="Item-name"
                  name="Item-name"
                  class="w-100"
                  required
                />

                <label for="image-link">Image Thumbnail </label>
                <input
                  type="text"
                  id="image-link"
                  name="image-link"
                  class="w-100"
                  required
                />

                <label for="itemDes" class="">Description </label>
                <textarea
                  name="itemDes"
                  id="itemDes"
                  cols="30"
                  rows="10"
                  class="w-100"
                  required
                ></textarea>

                <label for="ItemTitle" class="">Price </label>
                <input
                  type="text"
                  id="price"
                  name="price"
                  class="w-100 listing-id-price"
                  required
                />

                <div class="listing-button">
                  <button type="submit" class="btn btn-dark btn-lg">
                    List
                  </button>
                  <button
                    id="cancel"
                    type="button"
                    class="btn btn-outline-secondary btn-lg"
                  >
                    Cancel
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
