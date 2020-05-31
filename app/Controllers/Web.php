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
}
