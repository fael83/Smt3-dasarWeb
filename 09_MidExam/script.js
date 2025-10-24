document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("registrationForm");
    const result = document.getElementById("hasil");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const nama = document.getElementById("nama").value;
        const email = document.getElementById("email").value;
        const noHP = document.getElementById("noHP").value;
        const jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked').value;
        const program = document.getElementById("program").value;
        const tujuan = document.getElementById("tujuan").value;

        document.getElementById("rNama").textContent = nama;
        document.getElementById("rEmail").textContent = email;
        document.getElementById("rNoHP").textContent = noHP;
        document.getElementById("rJenisKelamin").textContent = jenisKelamin;
        document.getElementById("rProgram").textContent = program;
        document.getElementById("rTujuan").textContent = tujuan;

        result.style.display = "block";
    });
});
