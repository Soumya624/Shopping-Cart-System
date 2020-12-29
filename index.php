<?php
include("header.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<?php

?>
<div class="container" style="margin-top:3%;">
    <div class="row">
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card" style="text-align:center;">
                <img src="images/1.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Bag 1</h5>
                    <p class="card-text">Price: Rs 450</p>
                    <button type="submit" class="btn btn-success" name="Add_To_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Bag 1">
                    <input type="hidden" name="Price" value="450">
                </div>
            </div>
            </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card" style="text-align:center;">
                <img src="images/2.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Bag 2</h5>
                    <p class="card-text">Price: Rs 650</p>
                    <button type="submit" class="btn btn-success" name="Add_To_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Bag 2">
                    <input type="hidden" name="Price" value="650">
                </div>
            </div>
            </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card" style="text-align:center;">
                <img src="images/3.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Bag 3</h5>
                    <p class="card-text">Price: Rs 750</p>
                    <button type="submit" class="btn btn-success" name="Add_To_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Bag 3">
                    <input type="hidden" name="Price" value="750">
                </div>
            </div>
            </form>
            </div>
            <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
            <div class="card" style="text-align:center;">
                <img src="images/4.jpeg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Bag 4</h5>
                    <p class="card-text">Price: Rs 950</p>
                    <button type="submit" class="btn btn-success" name="Add_To_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_Name" value="Bag 4">
                    <input type="hidden" name="Price" value="950">
                </div>
            </div>
            </form>
            </div>
    </div>
</div>
</body>
</html>