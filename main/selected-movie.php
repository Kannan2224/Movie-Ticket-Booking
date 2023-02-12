<?php
include "../all_files/connection.php";
include "../all_files/html-header.php";
include "../all_files/boot-nav.php";

?>
<?php
//for movie names and certificate
if (isset($_GET["clicked-id"])) {
    $clicked_id = $_GET["clicked-id"];

    $read_movie_query = "SELECT * FROM movies WHERE movie_id=$clicked_id";
    $read_movie_query_result = mysqli_query($connection, $read_movie_query);
    if (!$read_movie_query_result) {
        echo "read_movie_query_result not connected";
    }
    $movie = mysqli_fetch_assoc($read_movie_query_result);
}
?>

<?php
//for clicked movies based on his details
if (isset($_GET["clicked-id"])) {
    $clicked_id = $_GET["clicked-id"];

    $read_selectMovie_query = "SELECT * FROM selected_movie_list WHERE click_movie_id=$clicked_id";
    $read_selectMovie_query_result = mysqli_query($connection, $read_selectMovie_query);
    if (!$read_selectMovie_query_result) {
        echo "$read_selectMovie_query_result not connected";
    }
    $select_movie = mysqli_fetch_assoc($read_selectMovie_query_result);
    // print_r($select_movie);
}
?>

<body>
    <div class="select_movie-banner" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('../img/<?php echo $movie["movie_img"] ?>') no-repeat;background-size:cover;background-position:50% 10%">
        <div class="select_movie-video">
            <iframe width="510" height="510" src="https://www.youtube.com/embed/<?php echo $select_movie["select_movie_video_link"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="select_movie-content">
            <h1><?php echo $movie["movie_name"] . "(" . $movie["movie_certificate"] . ")" ?>-Tamil</h1><br>
            <h5>tamil | <?php echo $movie["movie_certificate"] ?></h5>
            <p>Action | Thriller | <?php echo $select_movie["select_movie_date"] . ' | ' . $select_movie["select_movie_time"] ?></p>
            <br><br>
            <p>Actors: <?php echo $select_movie["select_movie_actors"] ?></p>
            <p>Director: <?php echo $select_movie["select_movie_director"] ?></p>
            <p>Music Director: <?php echo $select_movie["select_movie_music_dir"] ?></p>
            <br>
            <h3>synopsis</h3>
            <p><?php echo $select_movie["select_movie_bio"] ?></p>

        </div>
    </div>

    <section>
        <p class="movie-overview">Movie Tickets->Tirunelveli->Movies-><?php echo $movie["movie_name"] . "(" . $movie["movie_certificate"] . ")" ?>-Tamil</p>
        <br>
        <div class="days container">
            <div style="color:rgb(117, 117, 10)">
                <h4>FRI</h4>
                <h5>21</h5>
            </div>
            <div>
                <h4>SAT</h4>
                <h5>22</h5>
            </div>
            <div>
                <h4>SUN</h4>
                <h5>23</h5>
            </div>
            <div>
                <h4>MON</h4>
                <h5>24</h5>
            </div>
            <div>
                <h4>TUE</h4>
                <h5>25</h5>
            </div>
        </div>
        <hr>

        <?php

        $theater_details = "SELECT * FROM theater_details";
        $theater_details_result = mysqli_query($connection, $theater_details);
        while ($theater = mysqli_fetch_assoc($theater_details_result)) {
            // print_r($row);

        ?>

            <div class="theatre-details container">
                <div class="theatre-name">
                    <h1><?php echo $theater["theater_details_name"] ?></h1>
                    <p><?php echo $theater["theater_details_address"] ?></p>
                    <button>4k</button>
                    <button>Dolby Atmos</button>
                </div>
                <div class="theatre-timing">

                    <p><a href="./booking_sec.php?clk_id=<?php echo $clicked_id . "&theater-id=" . $theater["theater_details_id"] . "&theater-show=" . $theater["theater_details_1st_show"] ?>"><?php echo $theater["theater_details_1st_show"] ?></a></p>

                    <p><a href="./booking_sec.php?clk_id=<?php echo $clicked_id . "&theater-id=" . $theater["theater_details_id"] . "&theater-show=" . $theater["theater_details_2nd_show"] ?>"><?php echo $theater["theater_details_2nd_show"] ?></a></p>


                    <p><a href="./booking_sec.php?clk_id=<?php echo $clicked_id . "&theater-id=" . $theater["theater_details_id"] . "&theater-show=" . $theater["theater_details_3rd_show"] ?>"><?php echo $theater["theater_details_3rd_show"] ?></a></p>
                    <!-- itulah 3 ethu get la send pantran yanah 1st clicked_id entha movieah clk pannirukan athu and entha theater click pannirukan athu and enth show vah click pannirukan athu -->
                </div>
            </div><br>
        <?php
        }
        ?>
    </section>
    <br><br><br><br><br><br>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>