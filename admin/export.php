<?php
require('../conn.php');
$sql="select * from customer";
$res=mysqli_query($conn,$sql);
$html='<table><tr>
<td>ID</td>
<td>Embossment ID</td>
<td>Device Type</td>
<td>Station</td>
<td>Department</td>
<td>Model</td>
<td>Region</td>
<td>Serial Number</td>
<td>Status</td>
<td>Comments</td>
</tr>';
while($row=mysqli_fetch_assoc($res)){
$html.='<tr>
<td>'.$row['userid'].'</td>
<td>'.$row['emboss'].'</td>
<td>'.$row['stype'].'</td>
<td>'.$row['station'].'</td>
<td>'.$row['department'].'</td>
<td>'.$row['town'].'</td>
<td>'.$row['region'].'</td>
<td>'.$row['snumber'].'</td>
<td>'.$row['avail'].'</td>
<td>'.$row['comment'].'</td>
</tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>