/**
 * Using the LocalStorage API, save the contents of the text box
 * when users click the "save" button. 
 * Load the saved text when users click the "Load" button.
 *
 * Here's the documentation you need:
 * https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage
 */
var storage = localStorage;
var saveButton = document.getElementById('save-button');
var loadButton = document.getElementById('load-button');

/**
 * Gets the text from the element for you
 * @return {String}
 */
 

 
function getText() {
    return document.getElementById('save-me').value;
}

 loadButton.addEventListener("click", function()
  {
    storage.getItem("save-me");
  
 });

/**
 * Puts different text
 * @param {String} text the stuff you want to put in the box
 */
 
 
function setText(text) {
 return document.getElementById('save-me').value = text;
}

saveButton.addEventListener("click", function(){
  
  storage.setItem("save-button", getText());
  
  });
  
  
loadButton.addEventListener("click", function()  {
    setText(storage.getItem("text"));
 });