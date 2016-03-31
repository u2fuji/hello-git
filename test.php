<?php
phpinfo();
$strs = array();
for ($i=0;$i<10;$i++) {
    print("$i\n");
    $strs[] = "Test" . $i;
}
print_r($strs);
?>