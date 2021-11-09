<?php
include "header.php";
?>


<div class="mb-3 container container_post_page">
    <h1>What is Happening</h1>
    <form action="post.php" method="POST">
    <label for="Input1" class="form-label"></label>
        <input type="text" class="form-control mb-3" id="Input1" maxlength="50" name="post_title" placeholder="Title">

        <label for="Textarea1"></label>
            <textarea class="form-control" id="Textarea1" rows="7" placeholder="Content" maxlength="300" name="post_content"></textarea>
        <p id="word_limit">Maximum 300 words</p>
        <button class="btn-primary btn" name="post_submit" type="submit" id="post_btn">Post</button>
    </form>
</div>







