<header id="header">
    <div id="flex" class="displaynavbar">
        <div onclick="Accueil()" id="recupLogo" class="logo">
            Fatih
        </div>

        <nav>
            <ul>
                <li><a href="#" onclick="Accueil()">Accueil</a></li>
                <li><a href="#" id="aproposDeMoi" onclick="enterSite()">À propos de moi</a></li>
                <li><a href="#" id="realisation_active" onclick="realisation()">Mes réalisations</a></li>
                <li><a href="#" id="contactactive" onclick="contact()">Contact</a></li>
            </ul>
        </nav>

        <div class="toggleButton" onclick="openMenuTel()" id="toggleButtonId">
            <img src="/assets/img/toggleicon.png" id="toggleImageButton" width="40"
                alt="Icon pour ouvrir le menu hamburger" />
        </div>
    </div>
</header>

<div id="navigationMobileRight"> 
    <div id="btnclose_menu" onclick="closeMenuTel()">
        <img src="/assets/img/close.png" width="70" alt="Image fermeture menu">
    </div>

    <ul>
        <li onclick="Accueil()">Accueil</li>
        <li id="aprpos_li_active" onclick="enterSite()">À propos de moi</li>
        <li onclick="realisation()">Mes réalisations</li>
        <li onclick="contact()">Contact</li>
    </ul> 
</div>