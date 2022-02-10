function openForm() {
  console.log("function");
  document.getElementById("popup").style.display = "block";
  var tween = gsap.from(".popup", {
    duration: 0.5,
    opacity: 0,
    y: 80,
  });
}

function closeForm() {
  console.log("function");
  console.log("Working");
  document.getElementById("popup").style.display = "none";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    console.log("Working");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
