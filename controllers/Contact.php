<?php
namespace App\Controllers;
use App\Core\Request;

/**
 * https://github.com/TraianAlex/PHP-MySQLi-Database-Class/blob/master/dbObject.md
 */
class Contact
{
    public function index()
    {
        view('pages.contact');
    }

    public function send()
    {
        $email = Request::get('name', 'email', 'text');
        view('pages.contact', ['data' => $email]);
    }

    public function test()
    {
        view1('pages/contact-test');
    }
}
