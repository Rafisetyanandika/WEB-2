<?php

namespace controllers;

require_once __DIR__ . '/../models/User.php';

use models\User;

class UserController
{
    public function store()
    {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        User::create($data);
        header('Location: /users');
        exit;
    }

    public function edit($id)
    {
        $user = User::find($id);
        require_once __DIR__ . '/../views/users/edit.php';
    }

    public function update()
    {
        $data = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];

        User::update($data);
        header('Location: /users');
        exit;
    }

    public function destroy($id)
    {
        User::delete($id);
        header('Location: /users');
        exit;
    }
}