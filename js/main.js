document.addEventListener("DOMContentLoaded", function () {

  // Load Header
  fetch("includes/header.html")
    .then(res => res.text())
    .then(data => {
      const header = document.getElementById("header");
      if (header) {
        header.innerHTML = data;
      }
    });

  // Load Footer
 
  fetch("includes/footer.html")
    .then(res => res.text())
    .then(data => {
      document.getElementById("footer").innerHTML = data;

      // ✅ year set AFTER footer loaded
      const yearEl = document.getElementById("year");
      if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
      }
    });
});

