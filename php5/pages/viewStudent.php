<?php include "pages/include/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($student as $students){ ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="" alt="<?php echo $students['img']; ?>" class="card-img-top" style="height: 250px;">
                    <div class="card-body">
                        <h2>Student Name:<?php echo $students['name']; ?></h2>
                        <p>Studen email:<?php echo $students['email']; ?></p>
                        <p>Studen contact:<?php echo $students['phn']; ?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-success">View</a>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</section>



<?php include "pages/include/footer.php"; ?>
