<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();


if (!$form->validate($email, $password)) {
    return view('session/create.view.php', [
        'errors' => $form->errors()
    ]);
}

$auth = new Authenticator();

if ($auth->attempt($email, $password)) {
    header('location: /');
    exit();
} else {
    return view('session/create.view.php', [
        'errors' => [
            'email' => 'No matching account found for that email address and password.'
        ]
    ]);
}



