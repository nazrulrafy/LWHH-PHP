<?php 
$str=<<<EOD
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nulla necessitatibus exercitationem earum alias laborumareyindsumconsectetur, eos dolores atque minima aliquam doloremque architecto, praesentium magnam porro et dignissimos? Nulla, illo?
EOD;

echo wordwrap($str,20);
echo "\n==================================\n";
echo wordwrap($str,20,"\n",true);