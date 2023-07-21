<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\MembersModel;

class MembersController extends BaseController
{
    use ResponseTrait;

    /**
     * Member model.
     * 
     *
     * @var MembersModel
     */
    protected MembersModel $membersModel;

    public function __construct()
    {
        $this->membersModel = new MembersModel();
    }

   
    /**
     * Register
     *
     * @return void
     */
    public function signUp()
    {   
        // Get data from request.
        $data = $this->request->getPost();

        $name       = $data['name'];
        $email      = $data['email'];
        $password   = $data['password'];
        $rePassword = $data['rePassword'];

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name'      => 'required|max_length[100]',
            'email'     => 'required|max_length[100]',
            'password'  => 'required|max_length[100]|min_length[3]',

        ])) {
            return $this->fail("Account data is error.", 403);
        }

        if ($name === null || $password === null || $email === null || $rePassword === null) {
            return $this->fail("Account data is null.", 404);
        }

        if ($name === " " || $password === " " || $email === " " || $rePassword === " ") {
            return $this->fail("Account data is not found.", 404);
        }

        if ($this->membersModel->where(["m_email" => $email])->first() !== null) {
            return $this->fail("Account already exists.", 403);
        }

        //Confirm that the two passwords are the same
        if($password != $rePassword){
            return $this->fail("The two passwords are not the same.", 403);
        }
        
        //Insert data to database.
        $memberData = $this->membersModel->insert([
            "m_name"     => $name,
            "m_email"    => $email,
            "m_password" => sha1($password)  
        ]);

        // If not, return fail response.
        if ($memberData === null) {
            return $this->fail("Signup fail.");
        } else {
            return redirect()->to("/signupSuccess");
        }
    }

    /**
     * Login
     *
     * @return void
     */
    public function signIn()
    { 
        // Get data from request.
        $data = $this->request->getPost();

        $email      = $data['email'];
        $password   = $data['password'];

        // Checks whether the submitted data passed the validation rules.
        if ($email === null || $password === null) {
            return $this->fail("Account data is null.", 404);
        }

        if ($email === " " || $password === " ") {
            return $this->fail("Account data is not found.", 404);
        }

        // Check memberData is correct.
        $memberData = $this->membersModel->where([
            "m_email"    => $email,
            "m_password" => sha1($password)
        ])->first();

        if($memberData === null){
            return $this->fail("Login fail.", 403);
        }else{
            $memberData = [
                'email' => $memberData["m_email"],
                'name'  => $memberData["m_name"],
                'id'    => $memberData["m_id"]
            ];
        }

        return $this->respond([
            "msg"  => "Loin success.",
            "data" => $memberData,
        ]);

    }
}