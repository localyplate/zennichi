<?php
$userdata = array(
    "user_login" => "00001001",
    "user_pass" => "0120446666",
    "user_tel" => "0120446666",
    "user_company" => "架空会社イマジナリー",
);
echo wp_insert_user($userdata);

