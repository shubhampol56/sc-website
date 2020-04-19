
document.addEventListener("DOMContentLoaded", function(event) {    
           //to remove the error "Uncaught TypeError: Cannot read property ‘addEventListener’ of null"
    document.getElementById('myButton').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";

});
      document.getElementById('profile').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";

});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

});

