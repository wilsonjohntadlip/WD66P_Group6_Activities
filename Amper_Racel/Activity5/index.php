<?php

echo totalInventory("Item 1", 3, 100);
echo "\n";
echo totalInventory("Item 1", 5, 97);
echo "\n";
echo totalInventory("Item 2", 5, 200);
echo "\n";
echo totalInventory("Item 1", 50, 92);
echo "\n";
echo totalInventory("Item 3", 5, 300);
 
function totalInventory($item, $qtysold, $itemsStocks) {
   $remainingStock = $itemsStocks - $qtysold;
   return "$item  - ($qtysold) qty  |  Remaining Stocks = $remainingStock";
}
 
?>