<?php
include "header.php"
?>
<div class="container container_index">


<?php
$sql = "SELECT * FROM offical_post;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $userid = $row['poster_id'];
        $sql1 = "SELECT * FROM offical_users WHERE id = '$userid';";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        $post_name = $row1['username'];
        $post_title = $row['title'];
        $post_content = $row['content'];
        $pid = $row['poster_id'];
        $thumb = $row['thumb_up'];
        echo"<div class='card' style='margin:auto 15% 10px 15%;'>
                <div class='card-header'>
                    <h4>$post_name</h4>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$post_title</h5>
                    <p class='card-text'>$post_content</p>
                </div>
                <div class='card-footer row m-0'>
                    <div class='col text-center'>
                       <form action='thumb.php' method='POST'>
                        <button class='btn shadow-none' name='like_button'>
                        <input type='hidden' name='the_post_id' value = '$pid'> 
                            <svg style='width: 18px; height: 18px; padding-bottom: 3px;' id='图层_1'  data-name='图层 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 38.89 34.47'><defs><style>.cls-1{fill:#999;}</style></defs><title>like</title><g id='页面1'><path id='形状' class='cls-1' d='M10.28,32.77h2.5V13.19h-2.5ZM25,10.55H35.42a4.15,4.15,0,0,1,3.33,1.67,4.38,4.38,0,0,1,.56,3.47L34.86,30.41a6.37,6.37,0,0,1-6,4.86H5.56a4.52,4.52,0,0,1-4.31-2.36,5.61,5.61,0,0,1-.69-2.5V15.55a4.93,4.93,0,0,1,2.5-4.31,8.38,8.38,0,0,1,2.5-.69h6.25l6.8-8.49A3.83,3.83,0,0,1,25.25,5Zm10.14,2.51H22.22l.28-2.92L22.92,5a1.26,1.26,0,0,0-.18-1,1.28,1.28,0,0,0-.82-.56,1.11,1.11,0,0,0-1.25.42l-6.36,8.2-.83,1.11H5.14a2,2,0,0,0-.83.28,2.28,2.28,0,0,0-1.25,2.08V30.41a2,2,0,0,0,.42,1.25,2,2,0,0,0,2.08,1.11H28.89a2.38,2.38,0,0,0,1.39-.41,3.61,3.61,0,0,0,2.08-2.78L36.8,15l2.5.56L36.8,15a2.45,2.45,0,0,0-.14-1.39,2.89,2.89,0,0,0-1.52-.54l.28-2.5Z' transform='translate(-0.56 -0.82)'/></g></svg>
                            $thumb
                        </button>
                        </form>
                        </div>";
        echo "
                    
                    <div class='col text-center'>

                    </div>                    
                </div>
            </div>";
    }
}
?>

</div>





