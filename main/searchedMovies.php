<?php
include "../all_files/connection.php";
include "../all_files/html-header.php";

?>

<body>
    <!-- nav starting------------------------------ -->
    <?php
    include "../all_files/boot-nav.php";
    ?>
    <!-- nav ending------------------------------ -->

    <!-- main section-------------------- -->

    <?php
    // get an searched name in movies.php file
    // print_r($_POST);
    $searched_name = $_POST["searching_movie"];
    if (strlen($searched_name) < 1) {
        header("location:./movies.php");
    }
    ?>
    <div class="row">
        <div class="col-md-9 all-movies">

            <div class="row my-5">
                <?php
                //to read movies table content
                $movie_details = "SELECT * FROM movies WHERE movie_name LIKE '%$searched_name%' LIMIT 1";
                $movie_details_query = mysqli_query($connection, $movie_details);
                if (!$movie_details_query) {
                    echo "query not working";
                }

                //when empty it display as no result
                $row_when_empty = mysqli_num_rows($movie_details_query);
                // echo "<h2>{$row_when_empty}<h2>";
                if ($row_when_empty == 0) {
                    echo "<h1 style='text-align:center;color:red;margin-top:10%;'>No Result Founded as \"{$searched_name}\"</h1>";
                }
                while ($row = mysqli_fetch_assoc($movie_details_query)) {
                    // print_r($row);

                ?>

                    <div class="col-md-4"></div>
                    <div class="col-md-4 movies-inform">
                        <div class="movie-banner">
                            <img src="../img/<?php echo $row['movie_img'] ?>" alt="">
                            <span class="rating">❤️<?php echo $row['movie_rating'] ?></span>
                        </div>

                        <div class="movie-details">
                            <div class="movies-name">
                                <h4><?php echo $row['movie_name'] ?></h4>
                                <p class="text-muted"><?php echo $row['movie_certificate'] ?> . Tamil&nbsp;&nbsp;<span>2D</span></p>

                            </div>

                            <a href="selected-movie.php?clicked-id=<?php echo $row['movie_id'] ?>">Book Now</a>
                        </div>
                    </div>
                <?php
                }
                //while loop ending
                ?>
            </div>


        </div>
        <div class="col-md-3 search-bar-section">

            <!-- <form action="./searchedMovies.php" method="POST">
                <input type="text" placeholder="Search Movies" name="searching_movies">
                <button type="submit">=></button>
            </form> -->
            <div class="rated-movies">
                <h1>Top Rated Movies</h1><br>
                <ul type="none">

                    <li><a href="">mersal</a></li><br>
                    <li><a href="">anbae shivam</a></li><br>
                    <li><a href="">Ayan</a></li><br>
                    <li><a href="">soorai pottru</a></li><br>
                    <li><a href="">Jaibhim</a></li>

                </ul>
            </div>

        </div>
    </div>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>