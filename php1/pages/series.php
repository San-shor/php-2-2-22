<?php
include 'pages/include/header.php';?>

<section  class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="action.php" method="post">
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Starting_Number</label>
                            <div class="col-md-8">
                                <input type="number" name="first_number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Ending_Number</label>
                            <div class="col-md-8">
                                <input type="number" name="last_number" class="form-control">
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Select Type</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio"name="type" value="asc">Low to High</label>
                                    <label for=""><input type="radio"name="type" value="desc">High to Low</label>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Result</label>
                            <div class="col-md-8">
                                <textarea class="form-control"> <?php echo isset($result)? $result : ' ';?>
                            </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="seriesbtn"  class="btn btn-outline-success btn-block" value="Check Result">
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
