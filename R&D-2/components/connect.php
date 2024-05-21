<?php

$host = "localhost";
$dbName = "ecommercesite";
$userName = "root";
$password = "";

try
{
	$con = new PDO("mysql:host={$host};dbname={$dbName}",$userName,$password);
	//echo "Connection Good!";
}

catch(PDOException $e)
{
	echo "Connection error: ".$e->getMessage();
}

// Check if the function exists before declaring it
if (!function_exists('create_unique_id')) {
    function create_unique_id()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i=0; $i < 20; $i++) 
        { 
            $randomString .= $characters[mt_rand(0, $charactersLength -1)];

        }
        return $randomString;
        
    }
}
