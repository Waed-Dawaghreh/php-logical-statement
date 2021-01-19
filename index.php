<?php
//1- Write php script to calculate Electricity bill
$unitCost1 = 2.50;
$unitCost2 = 5.00;
$unitCost3 = 6.20;
$unitCost4 = 7.50;
$units=140;

if($units <= 50) {
    $bill = $units * $unitCost1;
}
else if($units > 50 && $units <= 100) {
    $temp = 50 * $unitCost1;
    $totalUnits = $units - 50;
    $bill = $temp + ($totalUnits * $unitCost2);
}
else if($units > 100 && $units <= 200) {
    $temp = (50 * 2.5) + (100 * $unitCost2);
    $totalUnits = $units - 150;
    $bill = $temp + ($totalUnits * $unitCost3);
}
else {
    $temp = (50 * 2.5) + (100 * $unitCost2) + (100 * $unitCost3);
    $totalUnits = $units - 250;
    $bill = $temp + ($totalUnits * $unitCost4);
}
    echo "1- Write php script to calculate Electricity bill";
    echo "<br>";
    echo "The Bill Will Cost = $bill";
    echo "<br>";
    echo "<hr>";
//===================================

//2- ​Write php script to make​ a calculator
$operation='+';
$number1=9;
$number2=10;
$total=0;
if($operation=='+'){
    $total=$number1+$number2;
}elseif ($operation=='-') {
    $total=$number1-$number2;
}elseif ($operation=='*') {
    $total=$number1*$number2;
}elseif ($operation=='/') {
    $total=$number1/$number2;
}
echo "2- ​Write php script to make​ a calculator";
echo "<br>";
echo "Total is = $total";
echo "<br>";
echo "<hr>";

//3-Write php script ​to check if a person is eligible to vote
function checkVote() 
{
    $name = "Waed";
    $age = 22;
    if ($age >= 18) {
        echo $name . ", you Are Eligible To Vote";
    } else {
        echo $name . ", Sorry you are not eligible To vote";
    }
}
echo "3- ​Write php script to check if a person is eligible to vote";
echo "<br>";
checkVote(); 
echo "<br>";
echo "<hr>";

//4-Write php script ​ to​ check whether a number is positive,negative or zero
function CheckNumber($x) {
    if ($x>0){
        echo "$x Is A Positive Number";
    }elseif ($x<0) {
        echo "$x Is A Negative Number";
    }elseif ($x==0) {
        echo "Zero";
    }else {
        echo "You Should Enter A Number";
    }
  }
  echo "4- ​Write php script to​ check whether a number is positive,negative or zero";
  echo "<br>";
  CheckNumber(20);
  echo "<br>";
 
  CheckNumber(-1);
  echo "<br>";
  

?>

