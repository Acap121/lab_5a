<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($multiplier){
            $results = [];
            for($i = 1;$i <= 12;$i++){
                $results[]=$i*$multiplier;
            }
            return $results;
        }
        $multiplier=2;
        $results=multiplication($multiplier);
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php for($i=1;$i<=12;$i++): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $multiplier; ?></td>
            <td><?php echo $results[$i-1]; ?></td>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>