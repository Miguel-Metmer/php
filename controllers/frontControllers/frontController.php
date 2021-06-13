<?php

class frontController
{
    public function home()
    {
        include_once ROOT . 'templates/frontend/home.php';
    }

    public function projects()
    {
        include_once ROOT . 'templates/frontend/projects.php';
    }
}