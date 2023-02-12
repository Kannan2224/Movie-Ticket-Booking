<?php
include "../all_files/connection.php";
include "../all_files/html-header.php";
session_start();
ob_start();
?>
<?php
//read an user_choose_movie_id from user table so..
// get this session from login page for which user can login in
$user_id = $_SESSION['user_id'];

$user_query = "SELECT * FROM users WHERE user_id=$user_id";
$user_query_result = mysqli_query($connection, $user_query);
$users = mysqli_fetch_assoc($user_query_result);
// print_r($users);
$user_choose_movie_id = $users["user_choose_movie_id"];
// echo $user_choose_movie_id;
?>


<?php
if ($user_choose_movie_id == 0) {
    header("location:./movies.php");
} else {
    $read_movie_query = "SELECT * FROM movies WHERE movie_id=$user_choose_movie_id";
    $read_movie_query_result = mysqli_query($connection, $read_movie_query);
    if (!$read_movie_query_result) {
        echo "read_movie_query_result not connected";
    }
    $movie = mysqli_fetch_assoc($read_movie_query_result);
    // print_r($movie);
}

?>

<body>
    <div class="container user-movie-ticket">
        <h1>Welcome <?php echo $users["user_name"] ?></h1><br>
        <div class="view-ticket">
            <div class="choosed-movie">
                <h2><?php echo $movie["movie_name"] ?></h2><br>
                <div class="movie-book-img">
                    <img src="../img/<?php echo $movie["movie_img"] ?>" style="width:100px !important;height:100px !important;" alt="ghilli">
                </div>

                <div class="certificate">
                    <span><?php echo $movie["movie_certificate"] ?></span>
                    <span>Tamil</span>
                    <span>2D</span>
                </div><br>
                <!-- <h6>sri balaji,ambasamudram</h6><br> -->
                <form action="./user-movies.php" method="POST" id="movie-code">
                    <input type="text" name="code" placeholder="Enter the code"><br><br>
                    <button type="submit" name="entered-code">View your ticket</button><br><br>
                </form><br><br>
            </div>
        </div>
    </div>
</body>



<?php

if (isset($_POST["entered-code"])) {
    $user_entered_data = $_POST["code"];
    // echo $user_entered_data;

    if ($users["user_code"] == $user_entered_data) {
        // echo "jii";
        header("location:./ticketSuccess.php?user_choose_movie_id=$user_choose_movie_id");
    }
}
?>