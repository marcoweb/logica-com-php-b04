<?php
echo  "FOR\n";

for($cont = 0;$cont < 10;$cont++) {
    echo $cont . "\n";
}

echo "WHILE\n";

$cont_w = 10;
while($cont_w < 10) {
    echo $cont_w++ . "\n";
}

echo "DO...WHILE\n";
$cont_d = 10;
do {
    echo $cont_d++ . "\n";
} while($cont_d < 10);