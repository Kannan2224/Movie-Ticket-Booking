<?php
include "../all_files/html-header.php";

?>

<body>

    <div class="col-md-3">
        <div class="admin-menus">
            <h1>😊Vk Admin</h1>
            <br>
            <h6>Dashboard</h6><br><br>
            <!-- posts -->
            <li class="nav-item posts">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapsing">
                    <i>@</i>
                    <span class="">Posts</span><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></i>
                </a>

            </li>
            <div id="collapsing" class="collapse">
                <div class=" card card-body" style="width:95%;margin:auto">
                    <a class="collapse-item" href="./posts.php?page">View all posts</a>
                    <hr>
                    <a class="collapse-item" href="">Add new Posts</a>
                </div>
            </div>

            <!-- categories -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i>@</i>
                    <span class="">Categories</span>
                </a>
            </li>
            <!-- comments-->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i>@</i>
                    <span class="">Comments</span>
                </a>
            </li>
            <!-- Users -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapsing2">
                    <i>@</i>
                    <span class="">Users</span><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></i>
                </a>

            </li>
            <div id="collapsing2" class="collapse">
                <div class="card card-body" style="width:95%;margin:auto">
                    <a class="collapse-item" href="">View Users</a>
                    <hr>

                </div>
            </div>
            <!-- profile-->
            <li class=" nav-item" style="margin-left:-23px">
                <a class="nav-link" href="">
                    <i>@</i>
                    <span class="">Profile</span>
                </a>
            </li>
        </div>
    </div>




</body>