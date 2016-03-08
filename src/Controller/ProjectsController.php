<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ProjectsController extends AppController
{

    /**
     * Displays the Frannca project
     *
     * @return void
     */
    public function frannca()
    {
        $this->set('siteName', '');
    }

    /**
     * Displays the CMA project
     *
     * @return void
     */
    public function cma()
    {
        $this->set('siteName', '');
    }

    /**
     * Displays the AESGA project
     *
     * @return void
     */
    public function aesga()
    {
        $this->set('siteName', '');
    }

    /**
     * Displays the CESPA project
     *
     * @return void
     */
    public function cespa()
    {
        $this->set('siteName', '');
    }
}
