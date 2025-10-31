document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registrationForm");
  const successMsg = document.getElementById("successMessage");

  successMsg.style.display = "none";

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const btn = form.querySelector("button");
    btn.textContent = "Mengirim...";
    btn.disabled = true;

    setTimeout(() => {
      form.reset();
      btn.textContent = "Registrasi Sekarang";
      btn.disabled = false;

      successMsg.style.display = "block";
      successMsg.scrollIntoView({ behavior: "smooth" });

      setTimeout(() => {
        successMsg.style.display = "none";
      }, 5000);
    }, 1500);
  });
});
