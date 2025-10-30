<H1> SID: C112181113 <BR>
NAME: 何品賢 </H1>
<P>
<?php
$scores = array(22, 16, 30, 24);
$total = 0;
foreach ($scores as $element) {
   echo "$element ";
   $total += $element;
}
echo "<br/>得分總和: ". $total. "<br/>";
print_r($scores);   
echo "<br/>";
?>