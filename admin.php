<?php
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['user_name'])){
        header("Location:no-permission.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="container">
    <section>
        <h1>Admin rozhranie</h1>
        <p>Vítaj admin <?php echo($_SESSION['user_name']);?></p><br>
        <a href="inc/login/logout.php">Odhlásiť sa</a>
    </section>
    
    <section>
        <h2>Kontakty</h2>
        <?php
            $contact = $Contact->get_contact();
            echo '<table class="admin-table">';
                foreach($contact as $c){
                    echo '<tr>';
                    echo '<td>'.$c->contact_name;'</td>';
                    echo '<td>'.$c->contact_email;'</td>';
                    echo '<td>'.$c->contact_subject;'</td>';
                    echo '<td>'.$c->contact_message;'</td>';
                    echo '<td>
                            <form action="inc/contact/edit.php" method="post">
                                <button type = "submit" name="edit_contact" value="'.$c->id.'"'.'>Editovať</button>
                            </form></td>';
                    echo '<td>
                            <form action="inc/contact/delete.php" method="post">
                                <button type = "submit" name="delete_contact" value="'.$c->id.'"'.'>Vymazať</button>
                            </form></td>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
    
</body>
</html>