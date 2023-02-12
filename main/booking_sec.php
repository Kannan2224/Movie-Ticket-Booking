<?php
// session_start();
// ob_start();



include "../all_files/connection.php";
include "../all_files/html-header.php";
include "../all_files/boot-nav.php";


if (isset($_GET["clk_id"])) {

    $clicked_id = $_GET["clk_id"];

    $read_movie_query = "SELECT * FROM movies WHERE movie_id=$clicked_id";
    $read_movie_query_result = mysqli_query($connection, $read_movie_query);
    if (!$read_movie_query_result) {
        echo "read_movie_query_result not connected";
    }
    $movie = mysqli_fetch_assoc($read_movie_query_result);
    // print_r($movie);
}
?>


<!-- //fullamm function ullah wrap panni kellah if clause iru athulah potrulam -->
<?php
function bookingSection($val, $connection, $clicked_id)
{
?>


    <body>

        <div class="paying-layout">
            <div class="ticket-booking-blue">
                <h1 style="text-align:center;padding-top:2%;color:#fff">Complete Your Booking</h1><br>
                <br>
                <br>
                <br>
            </div>
            <div class="paying_sec">
                <div class="choosed-movie">

                    <h2><?php echo $val["movie_name"] ?></h2>
                    <div class="movie-book-img">
                        <img src="../img/<?php echo $val["movie_img"] ?>" alt="ghilli">
                    </div>

                    <div class="certificate">
                        <span><?php echo $val["movie_certificate"] ?></span>
                        <span>Tamil</span>
                        <span>2D</span>
                    </div>

                    <!-- <h6>sri balaji,ambasamudram</h6> -->
                    <hr>
                    <div class="movie-basic-details">
                        <?php
                        $theater_id = $_GET["theater-id"];
                        $theater_details = "SELECT * FROM theater_details WHERE theater_details_id=$theater_id";
                        $theater_details_result = mysqli_query($connection, $theater_details);
                        $theater = mysqli_fetch_assoc($theater_details_result);
                        ?>

                        <div class="date-time">
                            <p>sun,13 Nov 22</p>
                            <h6><?php echo $_GET["theater-show"] ?></h6>
                        </div>
                        <div class="screen">
                            <p>screen</p>
                            <h6><?php echo $theater["theater_details_name"] ?></h6>
                        </div>

                    </div>
                    <br>
                    <div class="seats">
                        <p>Seats</p>
                        <h6><?php echo $theater["theater_details_seat"] ?></h6>
                    </div>
                    <br>
                </div>


                <div class="booking-summary">
                    <h2>Booking Summary</h2><br>
                    <form action="">
                        <label for="ticket" class="form-label">Ticket Count</label>
                        <select name="ticket_count" id="ticket">
                            <!-- <option value="0">0</option> -->
                            <!-- <option onclick="ticket_counter()" value="1">1</option> -->
                        </select>
                    </form><br>
                    <div class="booking_summary_details">
                        <h6><span class="ticket-count-num">1</span> Ticket</h6>
                        <strong class="ticket-price">₹100</strong>
                    </div>
                    <div class="booking_summary_details">
                        <h6>Taxes & Fees</h6>
                        <strong>₹25</strong>
                    </div><br>
                    <div class="valid-offer">
                        <h4>Offers for You</h4>
                        <h6>Chance to Win Rs.1000</h6>
                        <button>Apply</button>
                    </div>
                    <div class="proceed-pay">
                        <div class="booking_summary_details">
                            <h6>Total</h6>
                            <strong class="total-price">₹125</strong>
                        </div>
                        <button><a href="./qrcode.php?clicked-id=<?php echo $clicked_id ?>">Procced To Pay</a></button>

                    </div>
                </div>


            </div>
            <br>
            <br>
        </div>
        <?php

        // boooking theater details and update into success_theater_details table
        $sucess_theater_details_time = $_GET["theater-show"];
        $sucess_theater_details_day = "";
        $sucess_theater_details_name = $theater["theater_details_name"];
        $sucess_theater_details_seat = $theater["theater_details_seat"];
        $user_id = $_SESSION["user_id"];
        // echo $user_id;
        // echo $sucess_theater_details_name;

        //read query
        $sucess_theater_details_query1 = "SELECT * from sucess_theater_details WHERE sucess_theater_user_id=$user_id";
        $sucess_theater_details_query_result1 = mysqli_query($connection, $sucess_theater_details_query1);
        $success_data = mysqli_fetch_assoc($sucess_theater_details_query_result1);
        $sucess_data_id = $success_data["sucess_theater_user_id"];
        // echo $sucess_data_id;
        //mela ethuku query ah read pannirukanah ippom suppose new user book pannah new row create aganum ila old user book pannah already avangah book pannatha update pannanum

        //update query
        if ($user_id == $sucess_data_id) {

            $sucess_theater_details_query3 = "UPDATE sucess_theater_details SET sucess_theater_details_day=now(),sucess_theater_details_time='$sucess_theater_details_time',sucess_theater_details_name='$sucess_theater_details_name',sucess_theater_details_seat ='$sucess_theater_details_seat' WHERE sucess_theater_user_id= $user_id";

            $sucess_theater_details_query_result3 = mysqli_query($connection, $sucess_theater_details_query3);
        } else {
            //insert query
            $sucess_theater_details_query2 = "INSERT INTO sucess_theater_details(sucess_theater_details_day,sucess_theater_details_time,sucess_theater_details_name,sucess_theater_details_seat,sucess_theater_user_id) VALUES (now(),'$sucess_theater_details_time','$sucess_theater_details_name','$sucess_theater_details_seat',$user_id)";
            $sucess_theater_details_query_result2 = mysqli_query($connection, $sucess_theater_details_query2);
        }



        ?>

        <script>
            //change apply btn into applied
            let applyClicked = document.querySelector(".valid-offer button");
            applyClicked.onclick = function(event) {
                event.target.textContent = "Applied";
            }



            //loop an ticket count value
            let ticket_count = document.querySelector("#ticket");

            for (let index = 1; index <= 10; index++) {
                ticket_count.innerHTML += `<option value=${index}>${index}</option>`;
            }


            //increment ticket value based on ticket count

            let ticket_count_option = document.querySelector("#ticket");
            let ticket_price = document.querySelector(".ticket-price");
            let total_price = document.querySelector(".total-price");
            let ticket_count_num = document.querySelector(".ticket-count-num");

            ticket_count_option.onchange = function() {
                console.dir(ticket_count_option.value);

                ticket_count_num.innerText = ticket_count_option.value;

                let changed_price = ticket_count_option.value * 100;

                ticket_price.innerText = changed_price;

                total_price.innerText = changed_price + 25;
            }


            //change date and time in current
            let dateChanged = document.querySelector(".date-time p");
            let days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            let months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];

            let date = new Date();

            dateChanged.innerText = days[date.getDay()] + " ," + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear()

            console.log(date.getDate());
            console.log();
            console.log();
        </script>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </body>
<?php
}
?>


<?php

if (!isset($_SESSION["user_ticket"])) {
    header("location:../Admin_panel/login.php");
} else {
    bookingSection($movie, $connection, $clicked_id);
}
?>