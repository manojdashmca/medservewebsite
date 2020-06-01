<?php

namespace App\Controllers;

class Web extends BaseController {
    

    public function privacyPolicy() {

        if (!is_file(APPPATH . '/Views/web/privacyPolicy.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('privacyPolicy');
        }

        $data['title'] = ucfirst('Privacy Policy'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/privacyPolicy', $data);
        echo view('common/footer', $data);
    }
    public function contactUs() {

        if (!is_file(APPPATH . '/Views/web/contactUs.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('contactUs');
        }

        $data['title'] = ucfirst('Contact Us'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/contactUs', $data);
        echo view('common/footer', $data);
    }
    
    public function shipping() {

        if (!is_file(APPPATH . '/Views/web/shipping.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('shipping');
        }

        $data['title'] = ucfirst('Contact Us'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/shipping', $data);
        echo view('common/footer', $data);
    }
    
    public function aboutUs(){
        if (!is_file(APPPATH . '/Views/web/aboutus.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('aboutus');
        }

        $data['title'] = ucfirst('About Us'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/aboutus', $data);
        echo view('common/footer', $data);
    }
    
    public function whyChooseUs(){
        if (!is_file(APPPATH . '/Views/web/whychooseus.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('whychooseus');
        }

        $data['title'] = ucfirst('Why Choose Us'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/whychooseus', $data);
        echo view('common/footer', $data);
    }
    
    public function checkOut(){
        if (!is_file(APPPATH . '/Views/web/checkout.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('checkout');
        }

        $data['title'] = ucfirst('Checkout'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/checkout', $data);
        echo view('common/footer', $data); 
    }
    
    public function shoppingCart(){
        if (!is_file(APPPATH . '/Views/web/shoppingcart.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('shoppingcart');
        }

        $data['title'] = ucfirst('Shopping Cart'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/shoppingcart', $data);
        echo view('common/footer', $data);
    }
    
    public function weareHiring(){
        if (!is_file(APPPATH . '/Views/web/carrier.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('carrier');
        }

        $data['title'] = ucfirst('Carrier At Medserver'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('web/carrier', $data);
        echo view('common/footer', $data); 
    }
}
