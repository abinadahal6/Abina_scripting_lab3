<!DOCTYPE html>
<html>

<head>
    <title>Movie List</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        img {
            width: 80px;
        }
    </style>
</head>

<body>

<h2>Movie Information</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Poster</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Director</th>
            <th>Country</th>
            <th>Language</th>
            <th>Actors</th>
        </tr>
    </thead>

    <tbody id="movieData">
    </tbody>
</table>

<script>
let xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function()
{
    if (this.readyState == 4 && this.status == 200)
    {
        let movies = JSON.parse(this.responseText);

        console.log(movies);
        let output = "";

        movies.forEach(function(movie)
        {
            output += "<tr>";
            output += "<td>" + movie.id + "</td>";
            output += "<td>" + movie.title + "</td>";
            output += "<td><img src='" + movie.poster + "'></td>";
            output += "<td>" + movie.year + "</td>";
            output += "<td>" + movie.genre + "</td>";
            output += "<td>" + movie.rating + "</td>";
            output += "<td>" + movie.director + "</td>";
            output += "<td>" + movie.country + "</td>";
            output += "<td>" + movie.language + "</td>";
            output += "<td>" + movie.actors + "</td>";
            output += "</tr>";
        });

        document.getElementById("movieData").innerHTML = output;
    }
};

xhttp.open(
    "GET",
    "https://freetestapi.com/api/v1/movies",
    true
);

xhttp.send();
</script>

</body>
</html>