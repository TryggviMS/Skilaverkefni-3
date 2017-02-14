<footer>
    <?php
$startYear = 2016;
$thisYear = date('y');
if ($startYear == $thisYear) {
 echo $startYear;
} else {
 echo "{$startYear}&ndash;{$thisYear}";
}
?>
    Einstein Powers</p>
</footer>
 