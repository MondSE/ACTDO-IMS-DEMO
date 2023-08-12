<link rel="stylesheet" href="./src/components/login/login.css">
<?php include_once("./src/database/database_connection.php");?>

<div class="login-page-background bg-danger">
    <div class="container login-page">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <?php include_once("./src/api/api_login.php");?>
              <h3 class="mb-3 text-light">Login Employee</h3>
                <div class="bg-white shadow rounded">
                    <div class="row">
                        <div class="col-md-7 pe-0">
                            <div class="form-left h-100 py-5 px-5 rounded">
                                <form action="" method="POST" class="row g-4">
                                        <div class="col-12">
                                            <label>Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">&#128100;</div>
                                                <input type="text" class="form-control" name="user" placeholder="Enter Username" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <div class="input-group-text">&#128274;</div>
                                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <a href="#" class="float-end text-primary">Forgot Password?</a>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-4 float-end mt-4" name="login">Sign In</button>
                                        </div>
                                        <?php $refresher;?>
                                </form>
                                <?php echo $loading;?>
                            </div>
                        </div>
                        <div class="col-md-5 ps-0 d-none d-md-block">
                            <div class="form-right h-100 bg-white text-secondary text-center pt-2 rounded border-start">
                            <img src="./src/assets/img/289703730_332715262372516_2351437684184213259_n.jpg" alt="logo" srcset="">
                            <h2 class="fs-1">Welcome User</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-end text-light mt-3">Angeles City Traffic Development Office Login Page</p>
            </div>
        </div>
    </div>
</div>