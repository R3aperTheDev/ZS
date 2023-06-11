
<html lang="<?php echo $selectedLanguage; ?>" class="color-change">
<Head>
   <link rel="icon" type="image/png" href="facebook_profile_image2.png">
   <title>Zitat Shuffle Info Menu</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="Info.css">
   <meta name="description"
      content="Zitat Shuffle ist eine Website die kostenlos zufällige Zitate mit Namen vermischt.
            Das ist eine seite die Zitate mit namen mischt (shuffle). Deswegen heist sie Zitat Shuffle. Es kommen oft witzige und lustige mischungen raus." />
   <meta name="keywords"
      content="Zitat, Zitate, Namen,Zitat shuffle,zitat shuffle, Black Studios, ZS, Shuffle, Beta, Beta Verion, open beta, Open Beta, open Beta, Open beta, Zitat Shuffle Beta" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
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
   include('languages/inf_menu/' . $language . '.php');


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
        <a href="/ZS/">
            <?php echo $lang['sb_hub']; ?>
        </a>
      <a href="https://discord.gg/xhuqkAT" target="_blank">
            <?php echo $lang['sb_discord']; ?>
        </a>
        <a href="Vorschläge.html">
            <?php echo $lang['sb_suggestion']; ?>
        </a>
        <a href="impressum.html">
            <?php echo $lang['sb_impressum']; ?>
        </a>
        <a href="Info_Menu.html">
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
   <div class="contentholder">
      
      <h1>Info Menu</h1>
      <div class="info">
         <br>
         <p><?php echo $lang['ch_short']; ?>Zitat Shuffle (Quote Shuffle) is a website that randomly shuffles quotes with authors for free.</p>
         <br>
         <p><?php echo $lang['ch_long']; ?>
            Zitat  Shuffle (Quote Shuffle) is a website that offers a random mix of quotes from different authors for free. Although still in development, it's a great way to get inspiration.
                Note, however, that the randomization of the quotes is for entertainment purposes only and should not be relied upon as a serious resource.</p>
         <br><br><br><p style="color: red;"><?php echo $lang['ch_warn']; ?></p> <br>
      </div>
      <br><br><br>
      <div class="btn-container">
         <button class="btn" onclick="self.location=href='Credits.html';"><?php echo $lang['credits']; ?></button>
         <br><br><br><br>
         <button class="btn" onclick="self.location=href='changelog.html';"><?php echo $lang['changelog']; ?></button>
         <br><br><br><br>
         <button class="btn" onclick="self.location=href='Support_us.html';"><?php echo $lang['support']; ?></button>
      </div>
   </div>
   <div class="color-change"></div>
   <script src="/ZS/js/navbar.js"></script>
   <script src="/ZS/js/colorswitch.js"></script>
</body>

</html>