<?php 
// "",''
// herdoc : <<<EOD EOD,
// nowdoc :<<<'EOD' EOD;

$name="Nazrul Rafi";
$str="This is $name \n";
echo $str;

$herdoc=<<<EOD
amaro porano jaha cay
tmi tai tmi tai go
amaro porano jaha cay \n
EOD;
echo $herdoc;

$nulldoc=<<<'EOD'
This is $name
EOD;
echo $nulldoc;