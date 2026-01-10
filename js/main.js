document.addEventListener("DOMContentLoaded", function () {
  fetch("includes/header.html")
    .then(res => res.text())
    .then(data => {
      document.getElementById("header").innerHTML = data;
    });
});
