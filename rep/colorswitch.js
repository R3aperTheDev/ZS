// Get the root element
const root = document.documentElement;

// Track the state of CSS variables
let isSwitched = true;

// Function to update CSS variables
function updateCSSVariables() {
  if (isSwitched) {
    // Switch back to the original CSS variable values
    root.style.setProperty('--color-main', '#ff9329');
    root.style.setProperty('--color-accent', '#111');
  } else {
    // Set new CSS variable values
    root.style.setProperty('--color-main', '#111');
    root.style.setProperty('--color-accent', '#ff9329');
  }

  // Get all the HTML files in the same directory with the class "color-change"
  const htmlFiles = document.querySelectorAll('a[href$=".html"].color-change');

  // Loop through each HTML file and change their color variables
  htmlFiles.forEach((file) => {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', file.href);
    xhr.onload = function () {
      const parser = new DOMParser();
      const htmlDoc = parser.parseFromString(xhr.response, 'text/html');
      const fileRoot = htmlDoc.documentElement;
      
      // Update color variables in the other HTML files
      if (isSwitched) {
        fileRoot.style.setProperty('--color-main', '#ff9329');
        fileRoot.style.setProperty('--color-accent', '#111');
      } else {
        fileRoot.style.setProperty('--color-main', '#111');
        fileRoot.style.setProperty('--color-accent', '#ff9329');
      }
    };
    xhr.send();
  });

  // Toggle the state
  isSwitched = !isSwitched;
}

// Call the function to update CSS variables
updateCSSVariables();
