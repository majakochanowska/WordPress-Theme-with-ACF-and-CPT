var down = document.getElementById("down");
var up = document.getElementById("up");

down.addEventListener("click", function() {
    window.scrollTo({
        top: 750,
        left: 0,
        behavior: 'smooth'
      })
});

up.addEventListener("click", function() {
    window.scrollTo({
        top: 10,
        left: 0,
        behavior: 'smooth'
      })
});