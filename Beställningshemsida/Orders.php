<?php

    $statement = $db->prepare("SELECT * FROM contacts");
    $statement->execute();
    $result = $statement->fetchAll();

    print_r($result)

?>