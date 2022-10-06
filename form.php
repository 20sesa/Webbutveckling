<?php
    include_once "../public_html/DB.php";
    
    $sql_query = "INSERT INTO `contact` (`id`, `name`, `gmail`, `message`)
    VALUES (NULL,:firstname, :lastname, :gmail, :contactmessage);"; 
    
    $sql_param = [
        "firstname" => $_GET["name"],
        "lastname"  => $_GET["name"],
        "gmail" => $_GET["gmail"],
        "message" => $_GET["message"]
    ];

    $statement = $db->prepare($sql_query);
    $statement->execute($sql_param); 
?>