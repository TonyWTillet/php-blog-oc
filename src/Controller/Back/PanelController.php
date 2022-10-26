<?php

namespace App\Controller\Back;

class PanelController extends BackController
{
    public function index()
    {

        if(!isset($_SESSION['users'])) {
            header("Location: ".PANEL."login");
            exit();
        }


    }

}