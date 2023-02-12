<?php
include "../all_files/connection.php";
include "../all_files/html-header.php";
session_start();
?>
<?php
if (isset($_SESSION["user_ticket"])) {
    $user_choose_movie_id = $_GET["user_choose_movie_id"];
    // echo $_GET["user_choose_movie_id"];
    $read_movie_query = "SELECT * FROM movies WHERE movie_id=$user_choose_movie_id";
    $read_movie_query_result = mysqli_query($connection, $read_movie_query);
    if (!$read_movie_query_result) {
        echo "read_movie_query_result not connected";
    }
    $movie = mysqli_fetch_assoc($read_movie_query_result);
    // print_r($movie);
?>

    <?php
    // for dispaly an sucess-theaater-details tables
    $user_id = $_SESSION["user_id"];
    //enthe user log in pannirukanoh antha user ku sucess_theater_details iruku athu etha marri info kondu varuthu
    $sucess_theater_details_query = "SELECT * FROM sucess_theater_details WHERE sucess_theater_user_id=$user_id";
    $sucess_theater_details_query_result = mysqli_query($connection, $sucess_theater_details_query);
    $sucess_details = mysqli_fetch_assoc($sucess_theater_details_query_result);
    ?>

    <body>

        <div class="ticket-booking-success">
            <div class="ticket-booking-success-green">
                <h1 style="text-align:center;padding-top:2%;color:#fff">Booking Confirmed</h1><br>
                <br>
                <br>
                <br>
            </div>
            <!-- <div class="ticket-booking-confirmed"> -->
            <div class="ticket-success-movie">
                <div class="choosed-movie choosd-movie-success">
                    <h2><?php echo $movie["movie_name"] ?></h2>
                    <div class="movie-book-img">
                        <img src="../img/<?php echo $movie["movie_img"] ?>" alt="ghilli">
                    </div>

                    <div class="certificate">
                        <span><?php echo $movie["movie_certificate"] ?></span>
                        <span>Tamil</span>
                        <span>2D</span>
                    </div>
                    <!-- <h6>sri balaji,ambasamudram</h6> -->
                    <hr>
                    <div class="movie-basic-details">

                        <div class="date-time">
                            <p><?php echo $sucess_details["sucess_theater_details_day"] ?></p>
                            <h6><?php echo $sucess_details["sucess_theater_details_time"] ?></h6>
                        </div>
                        <div class="screen">
                            <p>screen</p>
                            <h6><?php echo $sucess_details["sucess_theater_details_name"] ?></h6>
                        </div>

                    </div><br>

                    <div class="seats">
                        <p>Seats</p>
                        <h6><?php echo $sucess_details["sucess_theater_details_seat"] ?></h6>
                    </div>

                </div>
                <!-- </div> -->

                <div class="qr-code-sec">
                    <p>SCAN QR CODE AT CINEMA</p>
                    <img src="../img/qr.png" alt="qr code">
                    <br><br>
                    <h6>Booking ID 446434/1453567574</h6>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </body>

<?php
}
?>