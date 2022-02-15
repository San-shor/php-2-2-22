
<?php include 'pages/include/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="ro">
            <div class="col-md-6">
                <img src="<?php echo $productDetails['img'] ?>"  class="img-fluid" style="height: 150px" alt="">
            </div>
            <div class="col-md-6">
                <div class="card card-body" style="height: 400px;">
                    <h2 class="font-weight-bold">Product Name<?php echo $productDetails['name'] ?></h2>
                    <p>Pric: <?php echo $productDetails['price'] ?> BDT</p>
                    <p>Description<?php echo $productDetails['description'] ?></p>
                    <a href="javscript:void(0)" class="btn btn-outline-success">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/include/footer.php';?>