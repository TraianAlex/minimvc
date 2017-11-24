<?php

namespace App\Model;

use dbObject;

class Users extends dbObject
{
    protected $dbTable = "users";

    protected $timestamps = ['createdAt', 'updatedAt'];

    protected $jsonFields = ['options'];

    protected $arrayFields = ['sections'];

    protected $dbFields = [
        'first_name' => ['text', 'required'],
        'last_name' => ['text'],
        'email' => ['text', 'required'],
        //'email' => ['/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+.([a-zA-Z])+([a-zA-Z])+)/', 'required'],
        'options' => [],
        'sections' => [],
        'createdAt' => ['datetime'],
        'updatedAt' => ['datetime'],
        //'custom' => ['/^test/'],
      ];

    protected $hidden = [
        'password', 'token'
    ];
}
