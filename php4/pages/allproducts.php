<?php include 'pages/include/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="<?php echo $product['img'] ?>" alt="" class="card-img-top" style="height: 350px;"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $product['name'] ?></h3>
                        <p class="">Price :<?php echo $product['price'] ?></p>
                        <p class="text-justify"><?php echo $product['description'] ?></p>
                        <a href="action.php?pages=productDetails&&product_id=<?php $product['id']?>" class="btn btn-outline-info float-right">View</a>
                    </div>
                </div>
            </div>
            <?php }    ?>
        </div>

    </div>
</section>



<?php include 'pages/include/footer.php';?>















<?php include 'pages/include/footer.php';?>
