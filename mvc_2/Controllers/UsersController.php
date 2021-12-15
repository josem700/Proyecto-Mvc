<?php

class UsersController extends Controller{

    function index()
    {
        require(ROOT . 'Models/Users.php');

        $users = new User();

        $d['users'] =  $users->showAllUsers();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        
        if (isset($_POST["username"])&&isset($_POST["useremail"]) && isset($_POST["password"]))
        {
            require(ROOT . 'Models/Users.php');

            $users = new User();

            if ($users->create($_POST["username"], $_POST["useremail"], $_POST["password"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        
        }

        $this->render("create");
    }

    function detail($id){

        require(ROOT . 'Models/Users.php');

        $users = new User();

        $d["users"] = $users->showUser($id);
        $this->set($d);

        $this->render("detail");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Users.php');

        $users = new User();

        $d["users"] =  $users->showUser($id);

        if (isset($_POST["title"]))
        {
            if ($users->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        $this->set($d);
        
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Users.php');

        $users = new User();
        
        if ($users->delete($id))
        {
            header("Location: " . WEBROOT . "users/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
