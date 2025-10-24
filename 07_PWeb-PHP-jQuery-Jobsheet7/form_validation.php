<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h1>Form Input dengan Validasi dan AJAX</h1>
<form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
</form>

<div id="hasil" style="margin-top: 15px; color: green;"></div>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); // Mencegah reload halaman

        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        // Validasi Nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        // Validasi Email
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }

        // Validasi Password
        if (password === "") {
            $("#password-error").text("Password harus diisi.");
            valid = false;
        } else if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-error").text("");
        }

        // Jika valid, kirim data ke PHP menggunakan AJAX
        if (valid) {
            $.ajax({
                url: "proses_validasi.php",
                type: "POST",
                data: { nama: nama, email: email, password: password },
                success: function(response) {
                    $("#hasil").html(response);
                }
            });
        }
    });
});
</script>

</body>
</html>
