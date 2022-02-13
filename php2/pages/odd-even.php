<?php

include 'pages/include/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-capitalize">ODD / EVEN</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Start Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="firstnum" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">End Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="lastnum" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Select</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio"name="type"value="odd">ODD</label>
                                    <label for=""><input type="radio"name="type" checked  value="even">Even</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-8 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" value="<?php echo isset($result) ? $result : ''?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Submit</label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" name="button">
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
