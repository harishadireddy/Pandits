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
  document.getElementById("popup").style.display = "none";
}

function dropdown() {
  var x = document.getElementById("dcontainer");
  if (x.style.display === "none") {
    x.style.display = "block";
    var tween = gsap.from("#dcontainer", {
      duration: 0.3,
      opacity: 0,
      y: -20,
    });
  } else {
    x.style.display = "none";
  }
}
