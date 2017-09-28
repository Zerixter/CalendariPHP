<style type="text/css">
    table{
        border-collapse: collapse;
    }
    td{
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <td>Mo</td>
        <td>Tu</td>
        <td>We</td>
        <td>Thu</td>
        <td>Fr</td>
        <td>Sa</td>
        <td>Su</td>
    </tr>
<?php
    $days = cal_days_in_month(CAL_GREGORIAN,date("m"),date("y"));
    $when = date('w', strtotime(date('y')."-".date('m')."-01"));
    $day = 1;
    $count = 1;
    for ($i = 0; $i < 6; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 7; $j++) {
            if ($day > $days){
                echo '</tr>';
                break;
            }else if ($count >= $when){
                echo "<td>$day</td>";
                $day++;
            }else {
                echo "<td></td>";
            }
            $count++;
        }
        echo '</tr>';
        if ($day > $days){ break; }
    }
?>
</table>
