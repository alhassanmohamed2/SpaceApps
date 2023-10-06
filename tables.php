<?php

return [

    "userlogin" => [
        'id' => "int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
        'email' => "varchar(255)",
        'password' => "varchar(255)"
    ],
    "userdata" => [
        'id' => "int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY",
        'userlogin_id' => 'INT UNSIGNED NOT NULL',
        'name' => "varchar(255)",
        'githubLink' => "varchar(255)",
        'linkedinLink' => "varchar(255)",
        'bio' => 'TEXT',
        'role' => "varchar(255)",
        'skills' => 'varchar(255)',
        'subskills' => 'varchar(255)',
        '' =>
        'FOREIGN KEY (userlogin_id) REFERENCES userlogin(id)'

    ]
];