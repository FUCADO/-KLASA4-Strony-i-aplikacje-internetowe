<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<fieldset><legend>lorem50!</legend>
   
        <?php
if ($_SERVER["REQUEST_METHOD"]=="POST" && !empty($_POST["text"]))
{
    echo '<p>Oto wpisany tekst:</p>';
    echo '<p style="color:red">'.$_POST["text"].'</p>';
}
else
{
?>

<form method="POST">
        
     <textarea name="text" cols="50" rows="5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, ad. Quae ipsam veniam obcaecati consequuntur eius mollitia maxime, quaerat sapiente alias quam architecto facilis sequi sed Libero, explicabo a. Voluptatibus, ipsa doloribus voluptate sequi enim facere ad inventore sint, odit aliquid eveniet molestias ex perferendis nostrum velit natus amet beatae</textarea></br>
        

        <input type="submit" value="wyślij">
        
    </form>
    <?php
}
?>
</fieldset>
</body>
</html>