<H1> SID: C112181113 <BR>
NAME: 何品賢 </H1>
<P>
<?php
$weekday = array(
   1 => "Mon",
        "Thu",
        "Wed",
        "Thu", 
        "Sat",
        "Sun"
);
for ($i = 1; $i <= count(value: $weekday); $i++){
   echo " $i : $weekday[$i]";
}
?>