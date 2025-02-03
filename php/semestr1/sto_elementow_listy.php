<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol{
            margin-left:40px;
            list-style-type: upper-roman;
        }
    </style>
</head>
<body>
    <ol ><?php 
    for ($i = 1; $i <= 100; $i++) {
        echo "<li>To jest $i element listy</li>";
    }
    ?></ol>
</body>
</html>