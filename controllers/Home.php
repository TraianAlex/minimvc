<?php
namespace App\Controllers;

use App\Model\Category;
use App\Model\Users;

class Home
{
    /**
     * https://github.com/TraianAlex/PHP-MySQLi-Database-Class/blob/master/dbObject.md
     * @return [type] [description]
     */
    public function test()
    {
        $users = Category::get();
        foreach ($users as $user) {
          $data[] = $user->data;
        }
        //return view1('pages/home', $data);
        return view('pages.home', ['data' => $data]);
    }

    public function pagination($page = null)
    {
        $page = isset($page) ? $page : 1;
        Category::$pageLimit = 3;
        $users = Category::arraybuilder()->paginate($page);

        return view('pages.category', [
            'data' => $users,
            'page' => $page,
            'total' => Category::$totalPages]);
    }

    public function store()
    {
        $data = ['name' => 'demo1'];
        $cat = new Category ($data);
        $id = $cat->save();
        if ($id == null) {
            $data['error'] = $cat->errors;
            //$data['lastError'] = $db->getLastError;
        } else
            $data[] = "category created with id = " . $id;
        redirect();
    }

    public function delete($id)
    {
        $categories = Category::get();//use for demo
        foreach ($categories as $cat) {
            $id = $cat->data['id'];
        }
        $cat = Category::byId($id);
        $cat->delete();
        redirect();
    }

    public function addUser()
    {
        $user = new Users;
        $user->first_name = 'demo';
        $user->last_name = 'demo';
        $user->email = 'alex@usa.com';
        $user->options = ['canReadNews', 'canPostNews', 'canDeleteNews'];
        $user->sections = ['news', 'companyNews'];
        $id = $user->save();
        if (!$id) {
            $data['error'] = $user->errors;
            //$data['lastQuery'] = $db->getLastQuery();
            //data['lastError'] = $db->getLastError();
        }else
            $data[] = "user were created with id" . $id;
        //redirect();
        view1('pages/home', $data);
    }

    public function setUser($name)
    {
        $user = Users::byId(3);
        $user->first_name = $name;
        $user->options = ['canReadNews', 'canPostNews', 'canDeleteNews'];
        $user->sections = ['news', 'companyNews'];
        $user->save();

        view1('pages/home', [$user->options]);
    }
}
