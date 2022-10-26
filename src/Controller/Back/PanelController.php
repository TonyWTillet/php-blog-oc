<?php

namespace App\Controller\Back;

class PanelController extends BackController
{
    public function index()
    {
        dump($_SESSION['user']);die;
        $this->login();
        die('panelcontroller');
    }

}