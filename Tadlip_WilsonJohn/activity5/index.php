<?php


echo computeRemainingStocks(1, $first=3);
echo "\n";
echo computeRemainingStocks(1, $second=$first+5);
echo "\n";
echo computeRemainingStocks(2, 5);
echo "\n";
echo computeRemainingStocks(1, $second+50);
echo "\n";
echo computeRemainingStocks(3, 5);



function computeRemainingStocks($itemNumber, $sold) {
  
  if ($itemNumber == 1) {
    $item = 100;
  }
    else if ($itemNumber == 2) {
      $item = 200;
    }
    else if ($itemNumber == 3) {
      $item = 300;
    }
    else {
      return "invalid item number";
    }
    
$remainingStock = $item - $sold; 
    
 echo "item $itemNumber - ($sold) qty  |  Remaining Stocks = $remainingStock";
 
 

}

?>