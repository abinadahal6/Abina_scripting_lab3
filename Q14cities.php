<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['country'])) {
    // Clear any accidental earlier output so JSON stays clean
    if (ob_get_length()) {
        ob_clean();
    }

    $cityData = [
        "Nepal" => ["Kathmandu", "Pokhara", "Chitwan", "Biratnagar"],
        "India" => ["Delhi", "Mumbai", "Bangalore", "Chennai"],
        "USA"   => ["New York", "Los Angeles", "Chicago", "Houston"],
    ];

    $country = trim($_POST['country']);
    $cities = $cityData[$country] ?? [];

    header('Content-Type: application/json');
    echo json_encode($cities);
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Select Country and City</h2>

<form method="post" id="locationForm">
    Country:
    <select name="country" id="country" onchange="loadCities()">
        <option value="">--Select Country--</option>
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
    </select>

    City:
    <select name="city" id="city">
        <option value="">--Select City--</option>
    </select>
</form>

<p id="debug" style="color:gray; font-size:0.85em;"></p>

<script>
function loadCities() {
    var country = document.getElementById("country").value;
    var citySelect = document.getElementById("city");
    var debugBox = document.getElementById("debug");

    citySelect.innerHTML = "<option value=''>--Select City--</option>";
    debugBox.innerHTML = "";

    if (country === "") return;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "Q14cities.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status !== 200) {
                debugBox.innerHTML = "Request failed. Status: " + xhr.status;
                return;
            }

            try {
                var cities = JSON.parse(xhr.responseText);
                if (cities.length === 0) {
                    debugBox.innerHTML = "No cities found for '" + country + "'.";
                    return;
                }
                cities.forEach(function(city) {
                    citySelect.innerHTML += "<option value='" + city + "'>" + city + "</option>";
                });
            } catch (e) {
                // This shows you EXACTLY what the server actually sent back,
                // instead of failing silently.
                debugBox.innerHTML = "JSON parse error. Raw response: " + xhr.responseText;
            }
        }
    };

    xhr.send("country=" + encodeURIComponent(country));
}
</script>

</body>
</html>