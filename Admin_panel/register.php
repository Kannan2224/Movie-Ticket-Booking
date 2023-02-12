<?php
session_start();
ob_start();
include "../all_files/html-header.php";
include "../all_files/connection.php";
?>


<?php

?>

<body class="container" style="margin-top:5%">

    <div class="card my-5 login-form" style="width:50%;margin:auto;">
        <div class="card-header">
            <h3>Register</h3>
        </div><br>
        <div class="card-body">

            <form action="./register.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="fname" id="name" class="form-control">
                </div>
                <br>
                <div>
                    <label for="mail" class="form-label">Email</label>
                    <input type="email" name="email" id="mail" class="form-control">
                </div>
                <br>

                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div><br>

                <br>
                <button type="submit" class="btn btn-primary w-100" name="user_register">Register</button>
                <br>
                <br>

                <br>
            </form>


        </div>
    </div>

    <?php
    if (isset($_POST["user_register"])) {
        // print_r($_POST);
        $user_name = $_POST["fname"];
        $user_mail = $_POST["email"];
        $user_password = $_POST["password"];
        $user_query = "INSERT INTO users(user_name,user_email,user_password) VALUES ('$user_name','$user_mail','$user_password')";
        $user_query_result = mysqli_query($connection, $user_query);
        if (!$user_query_result) {
            echo "not connected";
        }
    }
    ?>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>