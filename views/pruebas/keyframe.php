<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .div{
            width: 300px;
            height: 300px;
            background-color: orange;
            transition: 1s;
        }

        .div::after{
            transform: rotate(50deg);
        }
        
        .div:hover {
           transform: translate(10px, 10px);
           transform: rotate(5deg);
           rotate: -4deg;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>keyframes</h1>
        <hr><br>

        <div class="div">Hola Mundo</div>
    </div>
</body>
</html>