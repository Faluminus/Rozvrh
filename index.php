<!DOCTYPE html>
<html lang="cz">
    <style>
        table,th,tr{
            border:1px solid black;
        }
    </style>
<head>
    <Content-Type: text\html; charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="deny">
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">
    <title>Rozvrh</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th>8:00-8:45</th>
            <th>8:50-9:35</th>
            <th>9:50-10:35</th>
            <th>10:40-11:25</th>
            <th>11:35-12:25</th>
            <th>12:30-13:10</th>
            <th>13:15-14:00</th>
            <th>14:00-14:45</th>
            <th>14:45-15:30</th>
        </tr>
            <?php
                require_once('logic.php');
                $logic = new Logic();
                
                for($i = 0; $i <= 4; $i++){
                    $logic -> PrintData($i);
                }
                ?>
    </table>
</body>
</html>
