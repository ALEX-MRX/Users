<?php
session_start();
    require "header.php";
    require 'connect.php';
    
    $id_user = $_SESSION['id'];
    $user_info = [
        "name"=>[], 
        "phoneNumber"=>[],
        "street"=>[],
        "mail"=>[],
        
    ];
    $result = $mysql->query("SELECT * FROM `contacts` WHERE `id_user` = '$id_user'");
    
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            array_push($user_info["name"], $row['content']);
            array_push($user_info["phoneNumber"], $row['phoneNumber']);
            array_push($user_info["street"], $row['street']);
            array_push($user_info["mail"], $row['mail']);
              
        }
    }
    
    $mysql->close();

?>

<div class="conteiner" style="width: 500px; margin: 50px auto;">
    <div class="row">
        <div class="col">
            <h1>Список сохраненных контактов:</h1></br>
                        <?php
                           for ($i=0; $i < count($user_info["name"]); $i++) { 
                                echo '<li class="list-group-item item">';
                                    echo '<h3>'.$user_info["name"][$i]. '</h3>';
                                    echo '<ul>';
                                        echo '<li class="list-group-item item">';
                                            echo '<label>' ."Номер телефона:". '</label>';
                                            echo '<span style="margin-left:10px">' .$user_info["phoneNumber"][$i].'</span>';
                                            echo '</br>';
                                            echo '<label>' ."Адрес:". '</label>';
                                            echo '<span style="margin-left:10px">' .$user_info["street"][$i]. '</span>';
                                            echo '</br>';
                                            echo '<label>' ."Почта:". '</label>';
                                            echo '<span style="margin-left:10px">' .$user_info["mail"][$i]. '</span>';
                                        echo '</li>';
                                    echo '</ul>';
                                echo '</li>';
                                echo '</br>';
                           }

                        ?> 
        </div>
    </div>
</div>
 <!--echo '<ul class="list-group">';
                                echo '<li>';
                                    foreach ($user_info["name"] as $key => $value) {
                                        echo '<h3>' .$value. '</h3>';
                                        echo '<ul>';
                                            echo '<li class="list-group-item item">';
                                               echo '<label>' ."Номер телефона:". '</label>';
                                               echo '<span>';
                                                foreach ($user_info["phoneNumber"] as $key => $value) {
                                                    echo $value;
                                                }
                                               echo'</span>'; 
                                            echo '</li>';

                                            echo '<li class="list-group-item item">';
                                               echo '<label>' ."Адрес:". '</label>';
                                               echo '<span>';
                                                foreach ($user_info["street"] as $key => $value) {
                                                    echo $value;
                                                }
                                               echo'</span>'; 
                                            echo '</li>';

                                            echo '<li class="list-group-item item">';
                                               echo '<label>' ."Почта:". '</label>';
                                               echo '<span>';
                                                foreach ($user_info["mail"] as $key => $value) {
                                                    echo $value;
                                                }
                                               echo'</span>'; 
                                            echo '</li>';
                                        echo '</ul>';
                                    }

                                echo '</li>';
                                echo '</br>';
                            echo '</ul>';-->