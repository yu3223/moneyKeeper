<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


class FeaturesView extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    /**
     * return index page.
     *
     * @return void
     */
    public function homePage()
    {   
        $data = [
            'name' => $this->session->get("member")['name'],
        ];
        return view('pages/homePage', $data); 
    }
}