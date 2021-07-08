<?php

function executeConditionals($num1, $num2, $password, $letter)
{
    $condition = substr_count($password, $letter);
   
    if ($condition >= $num1 && $condition <= $num2) {
        return "password correcto: " . $password . "<br>";
    }
}

function checkPasswords()
{
    $data = file_get_contents("./passData.json");
    $list = json_decode($data, true);

    foreach ($list as $item) {
    
        $num1 = $item['num1'];
        $num2 = $item['num2'];
        $letter = $item['letter'];
        $password = $item['password'];

        $result = (executeConditionals($num1, $num2, $password, $letter));

        print_r($result);  
    }
}

checkPasswords();

