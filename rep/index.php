<!DOCTYPE html>
<html lang="<?php echo $selectedLanguage; ?>" class="color-change">

<head>
    <link rel="icon" type="image/png" href="facebook_profile_image2.png">
    <meta charset="utf-8">
    <title>
        Zitat Shuffle
    </title>
    <link rel="stylesheet" href="index.css">
    <meta name="description" content="<?php echo $lang['metaDesc']; ?>" />
    <meta name="keywords" content="<?php echo $lang['metaKey']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" charset="UTF-8"
        src="//cdn.cookie-script.com/s/b4523c4444209ea32c9f0e8f75e86e32.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6X2L83S31J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-6X2L83S31J');
    </script>
</head>

<body>
    <?php
    // Set the default language
    $language = 'en';

    // Check if the language is set in the URL
    if (isset($_GET['lang'])) {
        $language = $_GET['lang'];
    }

    // Load the language file based on the selected language
    include('languages/index/' . $language . '.php');


    ?>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closeb Menu tn" onclick="closeNav()">&times;</a>
        <a>
            <div class="toggle-switch">
                <input onclick="updateCSSVariables()" type="checkbox" id="toggle" class="toggle-checkbox" />
                <label for="toggle" class="toggle-label"></label>
                <p class="toggle-text">
                    <?php echo $lang['sb_toogle']; ?>

                </p>
            </div>

        </a>
        <a href="http://bs.mintimpuls.org">
            <?php echo $lang['sb_hub']; ?>
        </a>
        <a href="https://discord.gg/xhuqkAT" target="_blank">
            <?php echo $lang['sb_discord']; ?>
        </a>
        <a href="Vorschläge.php">
            <?php echo $lang['sb_suggestion']; ?>
        </a>
        <a href="impressum.php">
            <?php echo $lang['sb_impressum']; ?>
        </a>
        <a href="Info_Menu.php">
            <?php echo $lang['sb_info']; ?>
        </a>

    </div>
    <span id="MenuBtn" style="font-size: 20px; cursor: pointer; display: flex; align-items: center;"
        onclick="openNav()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
            style="width: 36px; height: 36px; margin-right: 10px;">
            <path fill="currentColor" d="M3 5h18v2H3zm0 6h18v2H3zm0 6h18v2H3z" />
        </svg>
        <h2 style="margin: 0;">
            <?php echo $lang['sb_nenu']; ?>
        </h2>
    </span>
    <!--<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>-->

    <center>
        <div>
            <a href="?lang=en">English</a> |
            <a href="?lang=de">German</a>
        </div>

        <div class="wip-content">

            <h2 style="font-size:20px ; color:red">
                <?php echo $lang['title_wip']; ?>
            </h2>
            <p>
                <?php echo $lang['test_wip']; ?>
            </p>
        </div>
        <h1 id="Tname" style="font-size:70px">
            Zitat Shuffle
        </h1>
        <div id="myQuote">
            <h2 style="font-size:50px">
                <p id="zitat">
                    <?php echo $lang['main_zitat']; ?>
                </p>
            </h2>

            <h2 style="font-size:50px">
                <p id="name">
                    <?php echo $lang['main_name']; ?>
                </p>
            </h2>
        </div>
    </center>

    <center>
        <button class="mixBtn" onclick="getZitat()">
            <h3 id="Mix">
                <?php echo $lang['btn_mix']; ?>
            </h3>
        </button>
        <br>
        <br>
        <br>
        <br>

        <div class="Btns">
            <a class="share" onclick="shareImage()">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="share">
                    <path
                        d="m21.707 11.293-8-8A1 1 0 0 0 12 4v3.545A11.015 11.015 0 0 0 2 18.5V20a1 1 0 0 0 1.784.62 11.456 11.456 0 0 1 7.887-4.049c.05-.006.175-.016.329-.026V20a1 1 0 0 0 1.707.707l8-8a1 1 0 0 0 0-1.414ZM14 17.586V15.5a1 1 0 0 0-1-1c-.255 0-1.296.05-1.562.085a14.005 14.005 0 0 0-7.386 2.948A9.013 9.013 0 0 1 13 9.5a1 1 0 0 0 1-1V6.414L19.586 12Z">
                    </path>
                </svg>
            </a>
            <a class="download" onclick="downloadImage()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="download">
                    <path
                        d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z">
                    </path>
                </svg>
            </a>
            <a class="social" href="https://www.instagram.com/zitatshuffle_eng/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="instagram">
                    <path
                        d="M11 0H5a5 5 0 0 0-5 5v6a5 5 0 0 0 5 5h6a5 5 0 0 0 5-5V5a5 5 0 0 0-5-5zm3.5 11c0 1.93-1.57 3.5-3.5 3.5H5c-1.93 0-3.5-1.57-3.5-3.5V5c0-1.93 1.57-3.5 3.5-3.5h6c1.93 0 3.5 1.57 3.5 3.5v6z">
                    </path>
                    <path
                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm0 6.5A2.503 2.503 0 0 1 5.5 8 2.503 2.503 0 0 1 8 5.5 2.503 2.503 0 0 1 10.5 8 2.503 2.503 0 0 1 8 10.5z">
                    </path>
                    <circle cx="12.5" cy="3.5" r="1.5"></circle>
                </svg>
            </a>
        </div>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script src="image.js"></script>
    <script src="colorswitch.js"></script>
    <script src="navbar.js"></script>
    <script src="mix.js"></script>
    <script src="art.js"></script>
    <script src="mix.js?lang=<?php echo $language; ?>"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</body>

</html>