<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include('./Components/head.php')
    ?>
    <title>Login | E-Arsip</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 14vh;">
            <div class="card shadow-lg col rounded-4">
                <div class="card-body m-5">
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <img class="img-fluid" src="./assets/images/logo-earsip-png.png" alt="logo" width="334px" height="230px">
                        </div>
                        <div class="col">
                            <div class="card-text">
                                <div class="display-5 fw-normal mb-4">Login Dulu Bro!!</div>
                            </div>
                            <form action="backend/proses_login.php" method="POST">
                                <div class="form-group mb-4">
                                    <label for="" class="h6 fw-normal">Username</label>
                                    <input type="text" name="username"  class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="h6 fw-normal">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-check mb-4">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" >
                                        Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary px-5 "><div class="fw-normal">Submit</div></button>
                                <div class="form-group mt-4">
                                    <div class="row justify-content-center">
                                        <div class="col text-center">
                                        <?php
                                        if (isset($_SESSION['login_gagal'])) {
                                            echo '<div class="alert alert-warning text-center" role="alert">';
                                            echo $_SESSION['login_gagal'];
                                            echo '</div> ';
                                            session_unset();
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include('./Components/footer.php')
    ?>
</body>
</html>