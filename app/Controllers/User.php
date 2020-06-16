<?php

namespace App\Controllers;

class User extends BaseController {
    

    public function myAccount() {

        if (!is_file(APPPATH . '/Views/user/myaccount.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('myaccount');
        }

        $data['title'] = ucfirst('My Account'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('user/myaccount', $data);
        echo view('common/footer', $data);
    }
    public function myOrders() {

        if (!is_file(APPPATH . '/Views/user/myorders.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('myorders');
        }

        $data['title'] = ucfirst('My Orders'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('user/myorders', $data);
        echo view('common/footer', $data);
    }
    
    public function walletTransaction() {

        if (!is_file(APPPATH . '/Views/user/wallettransaction.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('wallettransaction');
        }

        $data['title'] = ucfirst('Wallet Transaction'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('user/wallettransaction', $data);
        echo view('common/footer', $data);
    }
    
    public function manageAddress(){
        if (!is_file(APPPATH . '/Views/user/manageaddress.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('manageaddress');
        }

        $data['title'] = ucfirst('Manage Address'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('user/manageaddress', $data);
        echo view('common/footer', $data);
    }
    
    public function changePassword(){
        if (!is_file(APPPATH . '/Views/user/changepassword.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('changepassword');
        }

        $data['title'] = ucfirst('Change Password'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('user/changepassword', $data);
        echo view('common/footer', $data);
    }
    
    public function logout(){
        
    }
    
    
}
