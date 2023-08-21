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
        if ($this->session->get("member") !== null) {
            return redirect()->to(base_url("/homepage"));
        } else {
            return view('members/register');
        }
    }

    /**
     * return login page.
     *
     * @return void
     */
    public function LoginPage()
    {   
        if ($this->session->get("member") !== null) {
            return redirect()->to(base_url("/homepage"));
        } else {
            return view('members/login');
        }
    }

    /**
     * return success page.
     *
     * @return void
     */
// <<<<<<< login
//     public function registerSuccessPage()
// =======
//     public function RegisterSuccessPage()
// >>>>>>> dev
//     {
//        return view('members/signupSuccess');
//     }

}