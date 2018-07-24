<?php

class PostModel
{
    // connection resource
    private $conn;
    
    // config object for db connection
    private $config;

    public function __construct()
    {
        $this->config = new Config();
        $this->conn = $this->config->mysql_connect(HOST, USER, PASSWORD, DB_NAME);
    }

    /**
     * function to return all list of post
     */
    public function getPosts()
    {
        $queryFetchAllPosts = 'SELECT * FROM my_posts';
        $posts = $this->config->mysql_db_query(DB_NAME, $queryFetchAllPosts, $this->conn);
        return $this->config->mysql_fetch_array($posts);
    }
}