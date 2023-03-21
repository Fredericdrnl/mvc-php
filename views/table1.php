<html>
    <head>
        <title>
            Test
        </title>
    </head>
    <body>
        <h1>TABLE 1</h1>
        <?php
            foreach ($data as $key => $value){
                echo '<p>entrée $key :</p><ul>';
                foreach ($value as $d) {
                echo '<p>$d</p>';
                }
                echo '</ul>';
            }
        ?>
    </body>
</html>