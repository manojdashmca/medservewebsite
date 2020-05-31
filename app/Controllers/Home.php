<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {

        if (!is_file(APPPATH . '/Views/home/index.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException('index');
        }

        $data['title'] = ucfirst('Home'); // Capitalize the first letter

        echo view('common/header', $data);
        echo view('home/index', $data);
        echo view('common/footer', $data);
    }
    
}
