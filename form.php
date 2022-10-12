<?php
    include_once "../../private_html/Details.php";

    $pdoparam = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $db = new PDO('mysql:host='.$db_host.';dbname='.$db_db, $db_user, $db_pass, $pdoparam);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $sql_query = "INSERT INTO `contact` (`id`, `name`, `gmail`, `contactmessage`)
    VALUES (NULL, :name, :gmail, :contactmessage);"; 
    
    $sql_param = [
        "name" => $_GET["name"],
        "gmail" => $_GET["gmail"],
        "contactmessage" => $_GET["message"]
    ];

    $statement = $db->prepare($sql_query);
    $statement->execute($sql_param); 

    header('Location: index.html');
?>