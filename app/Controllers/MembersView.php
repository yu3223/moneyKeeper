<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Controllers\BaseController;

class MembersView extends BaseController
{
    /**
     * return register page.
     *
     * @return void
     */
    public function registerPage()
    {       
        return view('members/register');       
    }
}