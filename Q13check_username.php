<?php
// ---------- AJAX BACKEND PART ----------
// If this request is the AJAX call (has 'username' in POST and is an AJAX request),
// check the database and stop here — don't render the HTML page below.
if (
    $_SERVER['REQUEST_METHOD'] === 'POST' && 
    isset($_POST['username'])
 ) {
    $conn = mysqli_connect("localhost", "root", "", "ajaxdb");
    if (!$conn) {
        echo "Error: Could not connect to database.";
        exit;
    }

    $username = mysqli_real_escape_string($conn, trim($_POST['username']));

    if ($username === '') {
        echo "";
        exit;
    }

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    echo (mysqli_num_rows($result) > 0) ? "Username not available" : "Username available";

    mysqli_close($conn);
    exit; // stop script here so the HTML page below is not printed
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Password Reset</h2>

<form method="post" id="resetForm">
    Enter Username:
    <input type="text" name="username" id="username" onkeyup="checkUsername()">
    <p id="status"></p>

    <button type="submit" name="submit_form">Submit</button>
</form>

<script>
function checkUsername() {
    var username = document.getElementById("username").value.trim();
    var statusBox = document.getElementById("status");

    if (username === "") {
        statusBox.innerHTML = "";
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "reset_password.php", true); // same file, POST method
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            statusBox.innerHTML = xhr.responseText;
            statusBox.style.color = xhr.responseText.includes("not") ? "red" : "green";
        }
    };

    xhr.send("username=" + encodeURIComponent(username));
}
</script>

</body>
</html>