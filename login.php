<?php
    require_once('Inc/fonctions.php');
    
    if(CheckLogin()){
        header('Location: ');
    }

    $title = "Login";
    require('Inc/Dash.php');
?>

    <!-- Main -->
    <section class="section_main">
        <div class="main">
            <img src="https://i.imgur.com/l9hMrQO.gif" alt="">
            <h1>Marshal's Project</h1>
            <p>The Best Most powerfull token grabber with user interface.</p>
            <form class="login_form" action="async/login.php" method="post">
                <input type="password" name="password" placeholder="Enter Access Password ...">
                <button type="submit">Login</button>
                <?php
                    if(isset($_GET['error']) && $_GET['error'] == "invalid") {
                        echo "<p style='color: red;'>Invalid Password</p>";
                    }
                ?>
            </form>
        </div>
    </section>

    <footer>
        Copyright ©️ Made By <a target="_blank" href="https://github.com/cepheidev">Marshal`s Lab</a>
    </footer>
</body>
</html>
