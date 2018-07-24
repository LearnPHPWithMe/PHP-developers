<?php
require_once ('webroot/models/posts.model.php');

class PostController
{

    public function __construct()
    {}

    public function getPosts()
    {
        $objPostModel = new PostModel();
        $getPostResult = $objPostModel->getPosts();
         
        require_once 'webroot/view/posts.php';
    }

    public function getAbout()
    {
        require_once 'webroot/view/about.php';
    }

    public function getWork()
    {
        die('This is Work Page');// not implemented yet
    }

    public function getContact()
    {
        die('This is Contact Page');// not implemented yet
    }

    public function getSingle()
    {
        die('This is Single Page');// not implemented yet
    }
}