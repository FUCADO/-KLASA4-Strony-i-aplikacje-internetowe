<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,th{
            border:solid black 1px;
            
        }
        table{
            border-collapse:collapse;
        }
        td{
            text-align:center;
        }
        
    </style>
</head>
<body>
    <?php $o=("mbank.pl"); 
          $oo=("rnbank.pl");?>
    <table>
        <tr>
            <th><?php print $o?></th>
            <th><?php print $oo?></th>
        </tr>
        <tr>
            <td colspan=2>
                <?php
                if ($o==$oo) {
                    echo ("hasła identyczne");
                } 
                else {
                    echo ("hasła różne");
                }
                 ?></td>
        </tr>
    </table>
</body>
</html>