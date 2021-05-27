
<div id="slide1">
    <div class="slide_inside">
        <div id="header">
                <a id="logDiscord" href="https://discord.gg/xEVXaUE">Rejoint-Nous : <i class="fab fa-discord"></i></a>
            <span id="userconnect">Bienvenue : user</span>
                <a id="connect" href="/index.php?ctrl=formulaire"><i class="fas fa-user-plus"></i></a>
        </div>
        <figure>
            <img src="/images/titre.png" width="100%" alt="Mundus Sine Nomimé">
        </figure>
    </div>
    <h1 class="ml2">La communauté francophone des jeux de survies</h1>
    <div class="intro">
        Ce site a pour vocation de réunir une communauté française autour des jeux de survies que nous aimons tant.<br>
        Il va faciliter les échanges / partages / découvertes ainsi que les parties entre ses membres,<br>
        sur des serveurs de qualité mis à leur disposition.<br>
        Cet espace étant publique, vous serez amenés à y côtoyer des gens de tous horizons <br>dont les goûts
        / idées / avis seront potentiellement différents des vôtres. <br>Nous vous demandons donc de faire preuve
        de tolérance, de respect et de bienséance lors de vos interventions.
    </div>
</div>

<div id="slide2">
    <div class="slide_inside">
        <div class="presentation">
            <h2>La Communauté Mundus Sine Nominé te salue</h2>
            <div class="art1">
                <span>
                    Survivantes,Survivants toi qui est fan de jeux de survie, de build, de dépassement de soi tu est ici au bon endroit<br>
                    La communauté Mundus Sine Nominé te propose des serveurs de qualité
                </span>
            </div>
        </div>
    </div>
</div>

<div id="slide3">
    <div class="slide_inside">
        <h3>Liste des serveurs disponible</h3>
        <div class="slider">
            <div class="slide-track">
                <div><img src="/images/days.jpg" alt="logo7days"></div>
                <div><img src="/images/ark.png" alt="logoArk"></div>
                <div><img src="/images/valheim.jpg" alt="logoValheim"></div>
                <div><img src="/images/last.png" alt="logoLast"></div>
                <div><img src="/images/scum.jpg" alt="logoScum"></div>
                <div><img src="/images/life.jpg" alt="logoLife"></div>
            </div>
        </div>
         <nav id="serverlist">
             <?php
             foreach($vars as $data_game) {
                 $games[] = new game($data_game['id'], $data_game['name'], $data_game['infogame_fk']);
                 echo "<button class='title'>".$data_game["name"]."</button>";
             }
             ?>
         </nav>

        <div id="infoserv"></div>
        <div id="connectServ"></div>
    </div>
</div>

