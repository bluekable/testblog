<?php

class PostController{

    // Shows one post
    public function show(){
        require_once('./views/postShowView.php');    
    }

    // Lists many posts
    public function list(){
        require_once('./views/postListView.php');    
    }
}
