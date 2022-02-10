<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color</title>
    <script src="./color.js"></script>
    <style>
body{
    background-color: rgb(142, 218, 221);
}

h1{
    text-align: center;
    color: rgb(17, 12, 12);
    font-style: italic;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
h2{
    text-align: center;
    color: rgb(247, 239, 239);
    font-style: oblique;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
button{
    padding: 10px;
    margin-left: 600px;
    width: 120px;
} 


    </style>
</head>
<body>
    <h1 >Welcome to javascript</h1>

    <h2 id="click" >Hello this is sachin
      
    </h2>

    <button onclick="red()"> Click here </button>
    <!-- <button onclick="style()">click here again</button> -->

    <script>
        function red() {
    let click = document.getElementById('click');
    click.innerHTML = "Hello this is sachin";
    click.style.color = "red"
}
    </script>

</body>
</html>
