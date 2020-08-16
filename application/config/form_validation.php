<?php
$config = array(
    "login" => array(
        array(
            "field" => "email",
            "label" => "email",
            "rules" => "required|valid_email"
        ),
        array(
            "field" => "password",
            "label" => "password",
            "rules" => "required|min_length[6]"
        )
    ),
    "signup" => array(
        array(
            "field" => "firstname",
            "label" => "firstname",
            "rules" => "required|alpha"
        ),
        array(
            "field" => "lastname",
            "label" => "lastname",
            "rules" => "required|alpha"
        ),
        array(
            "field" => "gender",
            "label" => "gender",
            "rules" => "required|exact_length[1]|in_list[m,f]"
        ),
        array(
            "field" => "contact",
            "label" => "contact",
            "rules" =>  "required|numeric|greater_than[0]"
        ), array(
            "field" => "email",
            "label" => "email",
            "rules" => "required|valid_email"
        ),
        array(
            "field" => "password",
            "label" => "password",
            "rules" => "required|min_length[6]"
        ),
        array(
            "field" => "confpassword",
            "label" => "confirm password",
            "rules" => "required|matches[password]"
        )
    ),
);
