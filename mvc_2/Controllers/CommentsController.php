<?php


class CommentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Comments.php');
        require(ROOT . 'Models/Users.php');

        $comments = new Comments();
        $users = new User();

        $d['comments'] =  $comments->showAllComments();
        $this->set($d);

        $d['users'] =  $users->showAllUsers();
        $this->set($d);

        $this->render("index");
    }

    function create()
    {
        require(ROOT . 'Models/Posts.php');
        require(ROOT . 'Models/Users.php');

        $posts = new Post();
        $users = new User();

        $a['users'] = $users->showAllUsers();
        $this->set($a);

        $d['posts'] = $posts->showAllPosts(); 
        $this->set($d);

        if (isset($_POST["title"]) && isset($_POST["idpost"]) && isset($_POST["iduser"]) )
        {
            require(ROOT . 'Models/Comments.php');

            $comments = new Comments();
         
            if ($comments->create($_POST["title"],$_POST['idpost'],$_POST['iduser']))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        
        }
        $this->render("create");
    }

    function detail($id,$userid){

        require(ROOT . 'Models/Users.php');
        require (ROOT . 'Models/Comments.php');

        $comment = new Comments();
        $users = new User();

        $d["comments"] = $comment->showComment($id);
        $this->set($d);

        $d["users"] = $users->showUser($userid);
        $this->set($d);

        $this->render("detail");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Comments.php');

        $comments = new Comments();

        $d["comments"] =  $comments->showComment($id);

        if (isset($_POST["commentBody"]))
        {
            if ($comments->edit($id, $_POST["commentBody"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }

        $this->set($d);

        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Comments.php');

        $comment = new Comments();
        if ($comment->delete($id))
        {
            header("Location: " . WEBROOT . "");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
} 
?>