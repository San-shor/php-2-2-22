<?php include "pages/include/header.php";?>




    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Input number</label>
                                <div class="col-md-8">
                                    <input type="number" name="input_value" min="2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" readonly value="<?php echo ($result==1) ?'prime': 'not prime'?>" class="form-control">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Submit</label>
                                <div class="col-md-8">
                                    <input type="submit" name="pbtn"  class="btn btn-outline-success btn-block" value="get_result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "pages/include/footer.php";?><?php
