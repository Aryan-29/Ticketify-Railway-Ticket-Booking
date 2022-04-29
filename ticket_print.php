<?php
session_start();
?>
<DOCTYPE HTML>
<HTML>
</HEAD>
<TITLE>
Ticket Booked
</TITLE>

<style type="text/css">
table
{
border: 3px solid black;
background-image: url('ticket_background.png');
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}
td
{
text-align:center; 
padding: 0px 100px 0px 15px;
}
</style>

</HEAD>
<BODY>
<?php
$sourceStation=$_GET['from'];
$destinationStation=$_GET['to'];
$date=$_GET['date'];
$current_time=date("H:i:s"); 
$seatType=$_GET['seat'];
$adult=$_GET['adult'];
$child=$_GET['child'];
$infant=$_GET['infant'];


?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<table>
<tr>
<th>Happy Journey</th>
<th><img style="width: 100px; height: 100px; padding: 0px 0px 0px 140px;" src="ticket_stamp.png"></th>
</tr>
<tr>
<th colspan="2">Indian Railways</th>
</tr>
<tr>
<td style="padding: 0px 0px 20px 5px;"><label for="date" style="text-align: center; float : left;">Date :  <?php echo(date("d/m/y")); ?></label></td>
<td style="padding: 0px 0px 20px 100px;"><label for="time" style="text-align: center; float : left;">Time :  <?php echo($current_time); ?></label></td>
</tr>
</tr>
<td><label for="source" style="text-align: center; float : left;">Source :  <?php echo($sourceStation); ?></label></td>
</tr>
<tr>
<td><label for="destination" style="text-align: center; float : left;">Destination :  <?php echo($destinationStation); ?></label></td>
</tr>
<tr>
<td><label for="seat" style="text-align: center; float : left;">Seat Type :  <?php echo($seatType); ?></label></td>
</tr>
<tr>
<td><label for="seat" style="text-align: center; float : left;">Adult :  <?php echo($adult); ?></label></td>
</tr>
<tr>
<td><label for="seat" style="text-align: center; float : left;">Child :  <?php echo($child); ?></label></td>
</tr>
<tr>
<td><label for="seat" style="text-align: center; float : left;">Infant :  <?php echo($infant); ?></label></td>
</tr>
<tr>
<th><img style="width: 80px; height: 80px;" src="ticket_signature.png"></th>
</tr>
<tr>
<td style="padding: 0px 30px 30px 30px;"><label for="ticket_signature">Signature</td>
</tr>
</table>
</center>
</BODY>
</HTML>