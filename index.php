<?php

require_once __DIR__ . '/Form.php';
require_once __DIR__ . '/Button.php';
require_once __DIR__ . '/TextInput.php';
require_once __DIR__ . '/PasswordInput.php';


$form = new Form('/register.php', 'POST');
$form->addElement(new TextInput('firstname', 'First name'));
$form->addElement(new TextInput('email', 'Email'));
$form->addElement(new PasswordInput('password', 'Password'));
$form->addElement(new Button("Submit"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Widget</title>
</head>
<body>
    <?php
        echo $form->render();
    ?>
</body>
</html>