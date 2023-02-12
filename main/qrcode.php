<?php
include "../all_files/connection.php";
include "../all_files/html-header.php";
session_start();
?>



<body>
    <div class="container qrcode-container">
        <h1><span>Scan</span> And Pay</h1><br>
        <div class="qr-code">
            <img src="../img/qr.png" alt="qr-ode">
        </div><br>
        <div class="qr-code-details">
            <h4>vijay</h4>
            <p>+91 6379XXXXXX</p>
            <p>6379XXXXX@okcici.bank</p>

            <button>Pay</button>
            <button>Save</button>


        </div>
    </div>
    <p>View your Tickets on Ticket menu from <a href="./index.php"> Home page</a></p>
</body>

<script>
    alert(`send your payment ref Id
         To this watsapp number 6379058562
         to confirm your tickets`)

    console.log("<?php echo "abcd"; ?>");

    let payMoney = document.querySelector(".qr-code-details");
    // console.dir(payMoney.children[3]);
    payMoney.children[3].onclick = function() {
        let confirmResult = confirm(`send your payment ref Id
To this watsapp number 6379058562
to confirm your tickets`);
        if (confirmResult) {
            this.innerText = "Payed";
        } else {
            this.innerText = "Pay";
        }

    }

    let saveBtn = document.querySelector(".qr-code-details");
    // console.dir(payMoney.children[4]);
    saveBtn.children[4].onclick = function() {
        window.print();
    }
</script>

<?php
// for generating codes and update an user table
$words = "qwertypoiuasdflkjhgxcvbnm";

function generatingCodes($val)
{
    $lengthOfWords = strlen($val);
    $codes = "";
    for ($i = 0; $i < 6; $i++) {
        $codes .= $val[mt_rand(0, $lengthOfWords - 1)];
    }
    return $codes;
}
$final = generatingCodes($words);
// echo $final;


// echo $_SESSION['user_id'];
// get this session from login page for which user can login in
if (isset($_GET["clicked-id"])) {
    $clicked_movie_id = $_GET["clicked-id"];
    $user_id = $_SESSION['user_id'];
    $user_payment_update_query = "UPDATE users SET user_payment='true',user_choose_movie_id=$clicked_movie_id,user_code='$final' WHERE user_id=$user_id";
    $user_payment_update_query_result = mysqli_query($connection, $user_payment_update_query);
}
?>