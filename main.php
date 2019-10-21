<?php

require_once 'prime_number.php';

print '数字を入力してください。素数判定を行います。数字:';
$number = trim(fgets(STDIN));

$result = primeNumberJudgment($number);

if($result) echo $number ,' は素数です。';
else echo $number ,'は素数ではありません。';