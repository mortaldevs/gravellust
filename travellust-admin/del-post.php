<?php
    include 'database.php';
    $reference = $_GET['delete'];
    $delQuery = "update blog_posts set status='trashed' where post_id='$reference'";
    $run = mysqli_query($connection, $delQuery) or die(mysqli_error($connection));
    if($run){
        echo "<scrip>alert('Post Deleted Successfully...!')</script>";
        echo "<script>window.open('posts.php','_self')</script>";
    } else {
        echo "<scrip>alert('Something went wrong in the code...!')</script>";
        echo "<script>window.open('posts.php','_self')</script>";
    }
?>