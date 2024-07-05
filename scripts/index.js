/**
 * Toggles the responsive class of the element with the id "myNavbar".
 * If the element has the class "navbar", it adds the class "responsive".
 * If the element does not have the class "navbar", it sets the class to "navbar".
 *
 * @return {void} This function does not return anything.
 */
function myFunction() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

