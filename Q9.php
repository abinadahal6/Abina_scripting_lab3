
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        form {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
        }

        input, select {
            width: 95%;
            padding: 8px;
            margin: 8px 0;
        }

        input[type="radio"] {
            width: auto;
        }

        #submit {
            width: 100%;
            background: green;
            color: white;
            border: none;
            padding: 10px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

<h2 align="center">Registration Form</h2>
<div id="successMessage"
     style="color:green; font-weight:bold; text-align:center; margin-bottom:10px;">
</div>
<form id="registrationForm">

    <label>Name:</label>
    <input type="text" id="name">
    <span class="error" id="nameError"></span>

    <label>Address:</label>
    <input type="text" id="address">
    <span class="error" id="addressError"></span>

    <label>Username:</label>
    <input type="text" id="username">
    <span class="error" id="usernameError"></span>

    <label>Email:</label>
    <input type="text" id="email">
    <span class="error" id="emailError"></span>

    <label>Password:</label>
    <input type="password" id="password">
    <span class="error" id="passwordError"></span>

    <label>Website:</label>
    <input type="text" id="website">

    <label>Phone:</label>
    <input type="text" id="phone">
    <span class="error" id="phoneError"></span>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <span class="error" id="genderError"></span>

    <br><br>

    <label>Course:</label>
    <select id="course">
        <option value="">-- Select Course --</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="BIT">BIT</option>
        <option value="BIM">BIM</option>
    </select>
    <span class="error" id="courseError"></span>

    <br><br>

    <input type="submit" id="submit" value="Register">

</form>


<script>
$(document).ready(function() {

    $("#registrationForm").submit(function(event) {

        event.preventDefault();

        // Clear previous errors
        $(".error").text("");
    $("#successMessage").text("");
        let valid = true;

        // Get values
        let name = $("#name").val().trim();
        let address = $("#address").val().trim();
        let username = $("#username").val().trim();
        let email = $("#email").val().trim();
        let password = $("#password").val();
        let phone = $("#phone").val().trim();
        let gender = $("input[name='gender']:checked").val();
        let course = $("#course").val();


        // Name Validation
        if (name == "") {
            $("#nameError").text("Name is required");
            valid = false;
        }
        else if (!/^[A-Za-z ]+$/.test(name)) {
            $("#nameError").text("Name must contain only letters");
            valid = false;
        }


        // Address Validation
        if (address == "") {
            $("#addressError").text("Address is required");
            valid = false;
        }


        // Username Validation
        if (username == "") {
            $("#usernameError").text("Username is required");
            valid = false;
        }
        else if (!/^[A-Za-z0-9_]+$/.test(username)) {
            $("#usernameError").text(
                "Username can contain letters, numbers and underscore only"
            );
            valid = false;
        }


        // Email Validation
        if (email == "") {
            $("#emailError").text("Email is required");
            valid = false;
        }
        else if (!email.includes("@")) {
            $("#emailError").text("Email must contain @");
            valid = false;
        }


        // Password Validation
        if (password == "") {
            $("#passwordError").text("Password is required");
            valid = false;
        }
        else if (
            password.length < 8 ||
            !/[0-9]/.test(password) ||
            !/[A-Z]/.test(password) ||
            !/[a-z]/.test(password) ||
            !/[!@#$%^&*]/.test(password)
        ) {
            $("#passwordError").text(
                "Password must have 8 characters, digit, uppercase, lowercase and special character"
            );
            valid = false;
        }


        // Phone Validation
        if (phone == "") {
            $("#phoneError").text("Phone is required");
            valid = false;
        }
        else if (!/^(98|97|96)[0-9]{8}$/.test(phone)) {
            $("#phoneError").text(
                "Phone must be 10 digits and start with 98, 97 or 96"
            );
            valid = false;
        }


        // Gender Validation
        if (!gender) {
            $("#genderError").text("Please select gender");
            valid = false;
        }


        // Course Validation
        if (course == "") {
            $("#courseError").text("Please select a course");
            valid = false;
        }


        // Final Result
       if (valid) {
    $("#successMessage").text("Registration Successful!");
    $("#registrationForm")[0].reset();
}

    });

});
</script>

</body>
</html>

