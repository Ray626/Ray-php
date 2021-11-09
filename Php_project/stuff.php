


<?php
include "header.php"
?>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap-5.1.1-dist/css/bootstrap.css">
    <script src="bootstrap-5.1.1-dist/js/bootstrap.bundle.js"></script>
    <style>
        td{
            height:50px;
        }
    </style>
</head>



<div class="container">
    <table class="table table-dark">
        <tr>
            <th scope="col">Email</th>
            <th scope="col">user_name</th>
            <th scope="col">password</th>

        </tr>


        <?php
        $sql = "SELECT * FROM offical_users;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["username"]."</td>";
                echo "<td>".$row["password"]."</td>";

                echo "</tr>";
            }
        }
        ?>
    </table>
</div>
