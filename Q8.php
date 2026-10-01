<!DOCTYPE html>
<html>
<head>
    <title>jQuery Effects</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        #box {
            width: 250px;
            height: 100px;
            background: lightblue;
            padding: 30px;
            margin-top: 20px;
            text-align: center;
        }

        button {
            margin: 5px;
            padding: 8px;
        }
    </style>
</head>

<body>

<h2>jQuery Effects</h2>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="toggle">Toggle</button>
<button id="fadeIn">Fade In</button>
<button id="fadeOut">Fade Out</button>
<button id="fadeToggle">Fade Toggle</button>
<button id="slideUp">Slide Up</button>
<button id="slideDown">Slide Down</button>
<button id="slideToggle">Slide Toggle</button>
<button id="animate">Animate</button>

<div id="box">
    Hello! This is jQuery Effect.
</div>

<script>

$("#hide").click(function() {
    $("#box").hide();
});

$("#show").click(function() {
    $("#box").show();
});

$("#toggle").click(function() {
    $("#box").toggle();
});

$("#fadeIn").click(function() {
    $("#box").fadeIn();
});

$("#fadeOut").click(function() {
    $("#box").fadeOut();
});

$("#fadeToggle").click(function() {
    $("#box").fadeToggle();
});

$("#slideUp").click(function() {
    $("#box").slideUp();
});

$("#slideDown").click(function() {
    $("#box").slideDown();
});

$("#slideToggle").click(function() {
    $("#box").slideToggle();
});

$("#animate").click(function() {
    $("#box").animate({
        width: "400px",
        height: "150px"
    });
});

</script>

</body>
</html>