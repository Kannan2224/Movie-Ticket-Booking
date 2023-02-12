<?php
include "../all_files/html-header.php";
include "../all_files/connection.php";
?>

<body class="container">



    <div class="card my-5">
        <div class="card-header">
            <h3>Add Movies</h3>
        </div><br>
        <div class="card-body">


            <form action="./create-movies.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="movie_name" class="form-label">Movie Name</label>
                    <input type="text" name="movieName" id="movie_name" class="form-control">
                </div>
                <br>

                <div>
                    <label for="img" class="form-label">Thumbnail</label>
                    <input type="file" name="movieImg" id="img" class="form-control">
                </div><br>
                <div>
                    <label for="cert" class="form-label">Certificate</label>
                    <input type="text" name="movieCert" id="cert" class="form-control">
                </div><br>
                <div>
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" name="movieRating" id="rating" class="form-control">
                </div>
                <br>
                <button class="btn btn-primary" name="add-movies">Create</button>
            </form>


        </div>
    </div>

    <?php
    //for create new movies
    // print_r($_POST);
    if (isset($_POST["add-movies"])) {
        $movieName = $_POST["movieName"];
        $movieCertificate = $_POST["movieCert"];
        $movieRating = $_POST["movieRating"];

        $movieImg = $_FILES["movieImg"]["name"];
        $tmp_img = $_FILES["movieImg"]["tmp_name"];
        move_uploaded_file($tmp_img, "../img/$movieImg");
        // move_uploaded_file($post_temp_img, "../images/$post_img");
        // print_r($movieImg);
        // echo  $movieName, $movieCertificate, $movieRating;
        $movie_insert_query = "INSERT INTO movies(movie_name,movie_img,movie_certificate,movie_rating) VALUES ('$movieName','$movieImg','$movieCertificate',$movieRating)";
        $movie_insert_query_result = mysqli_query($connection, $movie_insert_query);
        if (!$movie_insert_query_result) {
            echo "movie_insert_query_result not connected";
        }
    }

    ?>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>