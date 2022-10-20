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

            <ul>
                
                <?php
                    for($i = 0; $i < count($result); $i++) {
                ?>      
                        <div class="output">
                            <div class="Name">
                                <label>Name:</label>
                                <li><?= $result[$i]['name']?></li>
                            </div>    
                            <div class="Email">
                                <label>Email:</label>
                                <li><?= $result[$i]['gmail']?></li>
                            </div>
                            <div class="Message">
                                <label>Message:</label>
                                <li><?= $result[$i]['contactmessage']?></li>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                
            </ul>
        </div>
    </body>
</html>