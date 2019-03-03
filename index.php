<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <style>

        td{
            padding: 5px;
            margin: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-12">
    <?php div_color() ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
   <?php calendar(5) ?>
    </div>
</div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: PKO
 * Date: 27.02.2019
 * Time: 19:14
 */
function div_color()
{
    $array=['green','red','blue','coral','grey'];
    $conut=count($array);
    $memory = [];
    for ($i=0; $i<5; $i++) {
        if (!empty($memory)) {
            while (true) {
                $color=rand(0,$conut-1);
                if (!in_array($color, $memory)) {
                    $memory[] = $color;
                    break;
                }
            }
        } else {
            $color=rand(0,$conut-1);
            $memory[] = $color;
        }

        //print_r($memory);

        //echo "$color";
        echo "<header style='background: $array[$color]; width: 100px;height: 100px; float: left'></header>";
    }
}

function calendar($num)
{
    $month=date(t, strtotime("2019-$num-01"));
    $day=[];
    for ( $z=1; $z<=$month; $z++){
        $day[] = $z;

    }
    print_r($day);
    echo "<table><tr><td><h4>Mon</h4></td><td><h4>Tue</h4></td><td><h4>Wed</h4></td><td><h4>Thu</h4></td><td><h4>Fri</h4></td><td><h4 style='color: red'>Sat</h4></td><td><h4 style='color: red'>Sun</h4></td></tr>";
    $z=0;
    for ( $i=0; $i<5; $i++)
    {


            echo '<tr><td>'.$day[$z++].'</td><td>'.$day[$z++].'</td><td>'.$day[$z++].'</td><td>'.$day[$z++].'</td><td>'.$day[$z++].'</td><td>'.$day[$z++].'</td><td>'.$day[$z++].'</td></tr>';

    }
    echo '</table>';

}





?>


