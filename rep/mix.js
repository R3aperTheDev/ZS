function getZitat() {
   var lang = new URLSearchParams(window.location.search).get('lang');
   if (lang === null) {
      lang = 'en'; // Set "en" as the default language
   }
   var getZitatUrl = "getZitat_" + lang + ".php";
   var getNameUrl = "getName_" + lang + ".php";

   var zitatElement = document.getElementById("zitat");
   var nameElement = document.getElementById("name");

   var xhrZitat = new XMLHttpRequest();
   xhrZitat.open("GET", getZitatUrl, true);
   xhrZitat.onreadystatechange = function () {
      if (xhrZitat.readyState === 4 && xhrZitat.status === 200) {
         zitatElement.textContent = xhrZitat.responseText;
      }
   };
   xhrZitat.send();

   var xhrName = new XMLHttpRequest();
   xhrName.open("GET", getNameUrl, true);
   xhrName.onreadystatechange = function () {
      if (xhrName.readyState === 4 && xhrName.status === 200) {
         nameElement.textContent = xhrName.responseText;
      }
   };
   xhrName.send();
}




window.dataLayer = window.dataLayer || [];
function gtag() { dataLayer.push(arguments); }
gtag('js', new Date());
gtag('config', 'UA-141684227-3');
