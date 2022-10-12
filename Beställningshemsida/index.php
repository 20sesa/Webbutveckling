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

            $sql_query = "SELECT * FROM contact";

            $statement = $db->prepare($sql_query);
            $statement->execute();
            $result = $statement->fetchAll();

            ?>

            <ol>
                
                <?php
                    for($i = 0; $i < count($result); $i++) {
                ?>      
                        <div class="output">
                            <li><?= $result[$i]['name']?></li>
                            <li><?= $result[$i]['gmail']?></li>
                            <li><?= $result[$i]['contactmessage']?></li>
                        </div>
                        <?php
                    }
                ?>
                
            </ol>
        </div>
    </body>
</html>