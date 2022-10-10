<html>
    <head>
        <link rel="stylesheet" href="Beställning.css">
    </head>

    <body>
        <div class="Content">
            <?php
            include_once "../../../private_html/Details.php";

            $pdoparam = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $db = new PDO('mysql:host='.$db_host.';dbname='.$db_db, $db_user, $db_pass, $pdoparam);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $statement = $db->prepare("SELECT * FROM contacts");
            $statement->execute();
            $result = $statement->fetchAll();

            print_r($result)
            ?>

            <ol>
                <?php
                    for($i = 0; $i < count($result); $i++) {
                        echo "<li>" . $result[$i]["name"] . "<li>";
                    }

                ?>
            </ol>
        </div>
    </body>
</html>