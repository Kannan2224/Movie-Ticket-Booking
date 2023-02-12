<?php
session_start();
ob_start();
include "../all_files/html-header.php";
include "../all_files/connection.php";
?>


<?php
if (isset($_POST["user_login"])) {
    // print_r($_POST);
    $user_email = $_POST["email"];
    $user_password = $_POST["password"];

    $user_check_query = "SELECT * FROM users WHERE user_email='$user_email'";
    $user_check_query_result = mysqli_query($connection, $user_check_query);
    $user_data = mysqli_fetch_assoc($user_check_query_result);

    if (mysqli_num_rows($user_check_query_result) == 1) {
        $user_id = $user_data["user_id"];
        $reg_email = $user_data["user_email"];
        $reg_password = $user_data["user_password"];
        if ($user_email != $reg_email || $user_password != $reg_password) {
            echo "<center style='font-size:27px;color:red'>Incorrect Password</center>";
        } else if ($user_email == $reg_email && $user_password == $reg_password) {
            $_SESSION["user_id"] = $user_id;
            $_SESSION["user_ticket"] = "Ticket";

            header("location:../main/index.php");
        }
    } else {
        echo "<center style='font-size:27px;color:red'>Invalid user</center>";
    }
}
?>

<body class="container" style="margin-top:5%">

    <div class="card my-5 login-form" style="width:50%;margin:auto;">
        <div class="card-header">
            <h3>Login</h3>
        </div><br>
        <div class="card-body">

            <form action="./login.php" method="POST" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-primary w-100" name="user_login">Login</button>
                <br>
                <br>

                <br>
            </form>


        </div>
    </div>




    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>