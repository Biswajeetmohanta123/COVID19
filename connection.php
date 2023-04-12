<?php

$host = "localhost";
$dbuser = "root";
$psw ="";
$dbname = "corona";

$con = mysqli_connect($host, $dbuser, $psw, $dbname);
if($con){
    ?>
    <script>
        alert("Connection Sucessfull");
    </script>
    <?php
}else{
    ?>
     <script>
        alert("Connection Sucessfull");
    </script>
<?php
}

?>