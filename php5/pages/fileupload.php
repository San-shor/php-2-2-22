<?php include "pages/include/header.php"; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Student Information</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($msg)){?>

                        <h2 class="text-success"><?php echo $msg; ?></h2>
                        <?php }?>

                        <div>
                            <form action="action.php"method="post"enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Contact</label>
                                    <div class="col-md-8">
                                        <input type="number" name="phn" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="img" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 "></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-success" value="save student info"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










<?php include "pages/include/footer.php"; ?>

