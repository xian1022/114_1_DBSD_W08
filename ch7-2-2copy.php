<H1> SID: C112181113 <BR>
NAME: 何品賢 </H1>
<P>
<?php 
$arr = array( "color" => "黑色", "name"=> "何品賢", 
              "shape" => "三角形"); 
if (!isset($arr["type"])) {  
}  
foreach($arr as $key=>$value) echo "$key~$value~<br><hr> ";
echo "<br/>";
$arr["color"] = "紅色";  
$arr["name"] = "何品賢";
$arr["shape"] = "圓形";
unset($arr["type"]);
print_r($arr); echo "<br/>"; 
?>
