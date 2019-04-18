<?php
include_once ('MyLinkListTest.php');

$linkedList = new MyLinkListTest();

$linkedList->insertFirst(27);

$linkedList->insertFirst(17);

$linkedList->insertLast(117);

$linkedList->insertLast(258);

$linkedList->deleteMyLinkList(117);

$linkedList->insertFirst(25);

$linkedList->reverseList();

$totalMylinkList = $linkedList->totalMyLinkList();

$linkData = $linkedList->readList();

echo $totalMylinkList."<br>";

echo implode ('-' , $linkData);