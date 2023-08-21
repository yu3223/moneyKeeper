<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


class MembersView extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    /**
     * return register page.
     *
     * @return void
     */
    public function registerPage()
    {   
        return view('members/register'); 
    }

    /**
     * return login page.
     *
     * @return void
     */
    public function loginPage()
    {
       return view('members/login');
    }

    /**
     * return success page.
     *
     * @return void
     */
    public function RegisterSuccessPage()
    {
       return view('members/signupSuccess');
    }

}