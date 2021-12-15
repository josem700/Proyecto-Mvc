<?php

class PostsController extends Controller{
  
    function index()
    {
        require(ROOT . 'Models/Posts.php');

        $posts = new Post();

        $d['posts'] =  $posts->showAllPosts();
        $this->set($d);
        $this->render("index");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Posts.php');

        $posts = new Post();

        if ($posts->delete($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
    }

    function detail($id){

        require(ROOT . 'Models/Posts.php');

        $posts = new Post();

        $d["posts"] = $posts->showPost($id);
        $this->set($d);

        $this->render("detail");
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}

?>