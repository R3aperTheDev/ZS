function downloadImage() {
    // Get the quote and name from the HTML elements
    var quote = document.getElementById("zitat").innerText;
    var name = document.getElementById("Name").innerText;

    // Create a canvas element
    var canvas = document.createElement("canvas");

    // Set the canvas size to fit the text
    var ctx = canvas.getContext("2d");
    ctx.font = "80px Arial";
    var quoteWidth = ctx.measureText(quote).width;
    var ZSWidth = ctx.measureText("Zitat Shuffle").width;
    var nameWidth = ctx.measureText("- " + name).width;
    canvas.width = Math.max(quoteWidth) + 300;
    canvas.height = 560;
    ctx.font = "80px Arial";

    // Draw the quote and name on the canvas
    ctx.fillStyle = "#ff9329";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = "#000";
    ctx.fillText("Zitat Shuffle", canvas.width / 2 - ZSWidth / 2, 160);
    ctx.fillText(quote, 100, 320);
    ctx.fillText(name, canvas.width / 2 - nameWidth / 2, 480);


    // Convert the canvas to a data URL
    var dataURL = canvas.toDataURL("image/png");

    // Create a link element and click it to download the image
    var link = document.createElement("a");
    link.download = "Quote.png";
    link.href = dataURL;
    link.click();

    // Remove the canvas element from the document
    canvas.remove();
 }


 function shareImage() {
    // Get the data URL of the canvas image
    var dataURL = canvas.toDataURL("image/png");
    var blob = dataURLToBlob(dataURL);

    // Create a modal dialog box
    var popup = document.createElement("div");
    popup.classList.add("popup");

    // Create a container for the dialog box content
    var popupContent = document.createElement("div");
    popupContent.classList.add("popup-content");

    // Create a close button for the modal dialog box
    var closeBtn = document.createElement("span");
    closeBtn.classList.add("close");
    closeBtn.innerHTML = "&times;";
    closeBtn.onclick = function () {
       popup.style.display = "none";
    };

    // Create a button to copy the image to the clipboard
    var copyBtn = document.createElement("button");
    copyBtn.type = "button";
    copyBtn.innerHTML = "Copy to clipboard";
    copyBtn.onclick = function () {
       navigator.clipboard.write([new ClipboardItem({ 'image/png': blob })])
          .then(function () {
             alert("Image copied to clipboard!");
          })
          .catch(function () {
             alert("Failed to copy image to clipboard");
          });
    };

    // Create placeholders for sharing options
    var InstagramBtn = document.createElement("button");
    InstagramBtn.innerHTML = "Share on Instagram";
    InstagramBtn.classList.add("share-button");
    InstagramBtn.classList.add("instagram");

    var twitterBtn = document.createElement("button");
    twitterBtn.innerHTML = "Share on Twitter";
    twitterBtn.classList.add("share-button");
    twitterBtn.classList.add("twitter");

    var redditBtn = document.createElement("button");
    redditBtn.innerHTML = "Share by Reddit";
    redditBtn.classList.add("share-button");
    redditBtn.classList.add("reddit");

    // Add the dialog box content to the popup dialog box
    popupContent.appendChild(closeBtn);
    popupContent.appendChild(copyBtn);
    popupContent.appendChild(InstagramBtn);
    popupContent.appendChild(twitterBtn);
    popupContent.appendChild(redditBtn);
    popup.appendChild(popupContent);

    // Add the popup dialog box to the document body
    document.body.appendChild(popup);

    // Show the popup dialog box
    popup.style.display = "block";
 }

 function dataURLToBlob(dataURL) {
    var arr = dataURL.split(",");
    var mime = arr[0].match(/:(.*?);/)[1];
    var bstr = atob(arr[1]);
    var n = bstr.length;
    var u8arr = new Uint8Array(n);
    while (n--) {
       u8arr[n] = bstr.charCodeAt(n);
    }
    return new Blob([u8arr], { type: mime });
 }





 function copyToClipboard(text) {
    // Create a temporary input element to hold the text to be copied
    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("value", text);
    document.body.appendChild(input);

    // Select and copy the text
    input.select();
    document.execCommand("copy");

    // Remove the temporary input element
    document.body.removeChild(input);
 }



