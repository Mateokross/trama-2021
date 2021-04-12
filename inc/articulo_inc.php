<?php

// Check if there's an id set
if(isset($_GET['id'])){
    //Check if id exists
    if(array_key_exists($_GET['id'], $entries)){
        //id exists
        //save entry
        $entry = $entries[$_GET['id']];
    }else{
        //not a valid id
        redirect_to_blog();
    }
}else{
    //no id set in url
    redirect_to_blog();
}

function redirect_to_blog(){
    echo "<script>window.location.replace('blog.php')</script>";
}