<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color:yellowgreen;
            border-top:double 10px greenyellow;
            border-bottom:double 10px greenyellow;
            font-size:24px;
            margin-top:10px;
            margin-bottom:10px;
            text-shadow: 1px 1px 5px forestgreen;
        }
    </style>
</head>
<body>
    <p><?php 
    for ($i = -10; $i <= 10; $i++) {
        echo $i.",";
    }
    ?></p>
</body>
</html>