<?php
include "../all_files/html-header.php";
include "../all_files/connection.php";
?>

<body class="container">



    <div class="card my-5">
        <div class="card-header">
            <h3>Selected Movies</h3>
        </div><br>
        <div class="card-body">


            <form action="./create-selectMovies.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="movie" class="form-label">Clicked Id</label>
                    <select name="clickedId" id="movie" class="form-control">
                        <!-- <option value="1">1</option>
                        <option value="1">1</option> -->
                        <?php
                        $read_movie_query = "SELECT * FROM movies";
                        $read_movie_query_result = mysqli_query($connection, $read_movie_query);
                        if (!$read_movie_query_result) {
                            echo "read_movie_query_result not connected";
                        }
                        while ($row = mysqli_fetch_assoc($read_movie_query_result)) {
                            $movie_id = $row["movie_id"];
                            $movie_name = $row["movie_name"];
                            echo "<option value='{$movie_id}'>{$movie_name}</option>";
                        }
                        ?>
                    </select>
                </div><br>
                <div>
                    <label for="movie_date" class="form-label">Movie Date</label>
                    <input type="text" name="movieDate" id="movie_date" class="form-control">
                </div>
                <br>

                <div>
                    <label for="movie_time" class="form-label">Movie Time</label>
                    <input type="text" name="movieTime" id="movie_time" class="form-control">
                </div>
                <br>
                <div>
                    <label for="movie_actors" class="form-label">Actors</label>
                    <input type="text" name="movieActors" id="movie_actors" class="form-control">
                </div>
                <br>
                <div>
                    <label for="movie_dir" class="form-label">Director</label>
                    <input type="text" name="movieDir" id="movie_dir" class="form-control">
                </div>
                <br>
                <div>
                    <label for="movie_music_dir" class="form-label">Music director</label>
                    <input type="text" name="movieMusicDir" id="movie_music_dir" class="form-control">
                </div>
                <br>

                <div>
                    <label for="bio" class="form-label">Synopsis</label>
                    <textarea name="movieBio" id="bio" class="form-control"></textarea>
                </div>
                <br>
                <button class="btn btn-primary" name="selected-movies">Create</button>
            </form>


        </div>
    </div>

    <?php
    //for create new movies
    // print_r($_POST);
    if (isset($_POST["selected-movies"])) {
        $movieDate = $_POST["movieDate"];
        $movieTime = $_POST["movieTime"];
        $movieActors = $_POST["movieActors"];
        $movieDir = $_POST["movieDir"];
        $movieMusicDir = $_POST["movieMusicDir"];
        $movieBio = $_POST["movieBio"];
        $clickedId = $_POST["clickedId"];
        // echo $movieDate;
        $selectMovie_insert_query = "INSERT INTO selected_movie_list(select_movie_date,select_movie_time,select_movie_actors,select_movie_director,select_movie_music_dir,click_movie_id,select_movie_bio) VALUES ('$movieDate','$movieTime','$movieActors','$movieDir','$movieMusicDir',$clickedId,' $movieBio')";

        $selectMovie_insert_query_result = mysqli_query($connection, $selectMovie_insert_query);
        if (!$selectMovie_insert_query_result) {
            echo "selectMovie_insert_query_result not connected";
        }
    }

    ?>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>




<!-- <div>
                                    <label for="category_id" class="form-label">Post Category Id</label><br>
                                    <select name="category_id" id="cat_id">

                                        <?php
                                        // $select_cat_title_query = "SELECT * FROM category";
                                        // $select_cat_title_query_result = mysqli_query($connection, $select_cat_title_query);
                                        // if (!$select_cat_title_query_result) {
                                        //     die("query failed");
                                        // }
                                        // while ($row = mysqli_fetch_assoc($select_cat_title_query_result)) {
                                        //     $cat_id = $row['category_id'];
                                        //     $cat_title = $row['category_title'];
                                        //     //for loop an category title into the slect menus
                                        //     echo "<option value='{$cat_id}'>{$cat_title}</option>";
                                        // }
                                        ?>
                                    </select>
                                </div> -->