<?php
$_output="";

For ($_jaar = 1900; $_jaar<= 2100; $_jaar++)
{
  $_feb = cal_days_in_month(CAL_GREGORIAN,2,$_jaar);

  if ($_feb > 28)
  {
    $_schrikkeljaar= "&nbsp;&nbsp;*";
  }
  else
  {
    $_schrikkeljaar= "";
  }
  
  $_output.= ("   $_jaar &nbsp;&nbsp;-->&nbsp;&nbsp; $_feb $_schrikkeljaar </br>");
}

echo $_output;
?>

