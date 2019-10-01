<?php
include "tableHandler.php";

$required_field = [
    'name'    => 'Name field is required!',
    'surname' => 'Surname field is required!',
    'email'   => 'Email field is required!',
    'num'     => 'Number field is required!!',
];

$data = array_filter(array_flip(array_intersect_key($required_field, $_POST)), function ($key) use($required_field) {
    if (empty($_POST[$key])) { ?>
        <h1 style="color: red; font-size: 24px;"><?php print $required_field[$key]; ?></h1>
        <?php
        return false;
    } else {
        return true;
    }
});

if (count($data) == 4) {
    insertNewUser($name, $surname, $email, $num);
};