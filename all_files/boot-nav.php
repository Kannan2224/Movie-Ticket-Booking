<?php
session_start();
?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Movie Ticket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./movies.php">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Theatres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Events</a>
                </li>

                <?php
                if (isset($_SESSION["user_ticket"])) {
                    echo "<li class='nav-item'>
                    <a class='nav-link active' aria-current='page' href='../main/user-movies.php'>{$_SESSION['user_ticket']}</a>
                </li>";
                    echo "<li class='nav-item'>
                <a class='nav-link active' aria-current='page' href='../Admin_panel/logout.php'>Logout</a>
            </li>";
                }
                ?>

            </ul>
        </div>
</nav>