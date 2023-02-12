<?php
include "../all_files/html-header.php";
?>

<body>
    <!-- nav starting------------------------------ -->
    <?php
    include "../all_files/boot-nav.php";
    ?>


    <!-- ending nav--------------------------- -->

    <!-- banner start--------------------------- -->


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item  active">
                <div class="banner-2">
                    <div class="banner-content">
                        <h1>Ancient cinemas</h1>
                        <p>Ancient cinemas we are screened at old cinemas at low cost and huge offre ! Visit and celebreate an vintage actors</p>
                        <img src="../img/cine2.png" alt="cinema"><br>
                        <button><a href="../Admin_panel/login.php" style="text-decoration:none;color:#fff">LogIn</a></button>
                        <button><a href="../Admin_panel/register.php" style="text-decoration:none;color:#fff">Register</a></button>
                        <div class="social-icons">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <!-- <div class="banner-img">

                    </div> -->
                </div>
            </div>
            <div class="carousel-item">
                <sectiom id="banner-1">
                    <div class="banner-1">

                    </div>
                    <div class="offer">

                        <p>pay via</p>
                        <img src="../img/Paytm_Logo.png" alt="">
                        <h3>Get 10% CASEBACK UPTO ₹100</h3><br>
                        <button>Use Code</button>
                        <button>TICKETNEW100</button>
                        <i>T&C Apply</i>
                    </div>
                </sectiom>

            </div>
            <div class="carousel-item">
                <sectiom id="banner-1">
                    <div class="banner-3">

                    </div>
                    <div class="offer">

                        <p>pay via</p>
                        <img src="../img/Paytm_Logo.png" alt="">
                        <h3>Get 10% CASEBACK UPTO ₹100</h3><br>
                        <button>Use Code</button>
                        <button>TICKETNEW100</button>
                        <i>T&C Apply</i>
                    </div>
                </sectiom>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!--  -->

    <!--  -->
    <!-- -->
    <!--  -->

    <!-- banner end----------------------------------- -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>