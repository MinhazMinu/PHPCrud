<?php
require_once 'header.php';
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Edit</h2>
                            <p class="text-white-50 mb-5">Please Edit Your Data!</p>

                            <form action="editprocess.php" method="post">
                                <div class="form-outline form-white mb-4">
                                    <input type="name" id="name" class="form-control form-control-lg" name="id" value=<?php echo $_GET['userid']; ?> />
                                    <label class="form-label" for="name">ID</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="name" id="name" class="form-control form-control-lg" name="username" value=<?php echo $_GET['name']; ?> />
                                    <label class="form-label" for="name">Name</label>
                                </div>


                                <button class="btn btn-outline-light btn-lg px-5" type="submit" name='edit'>Edit</button>



                            </form>


                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>