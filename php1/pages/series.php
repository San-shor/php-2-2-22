<?php
include 'pages/include/header.php';?>

<section  class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="action.php" method="post">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Input Word</label>
                            <div class="col-md-8">
                                <input type="number" name="first_number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Input Word</label>
                            <div class="col-md-8">
                                <input type="number" name="last_number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
                                <textarea class="form-control" readonly name="" id="" cols="30" rows="10">
                               <?php echo isset($result)? $result:'';?>

                            </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Input</label>
                            <div class="col-md-8">
                                <input type="submit" name="seriesbtn"  class="btn btn-outline-success btn-block" value="get_result">
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include 'pages/include/footer.php';?>
