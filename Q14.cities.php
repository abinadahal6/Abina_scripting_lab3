[21:00, 9/18/2026] piter💗: <?php

$country = $_GET['country'] ?? '';

$cities = [
    "Nepal" => [
        "Kathmandu",
        "Pokhara",
        "Chitwan",
        "Lalitpur"
    ],
    "India" => [
        "Delhi",
        "Mumbai",
        "Kolkata",
        "Bangalore"
    ],
    "USA" => [
        "New York",
        "Los Angeles",
        "Chicago",
        "Houston"
    ]
];

if (!empty($country) && isset($cities[$country]))
{
    foreach ($cities[$country] as $cityName)
    {
        echo "<option value='$cityName'>$cityName</option>";
    }
}
else
{
    echo "<option value=''>Select City</option>";
}

?>
