<?php


echo exec('unoconv -f pdf MyPresentation.pptx');
sleep(1);
echo exec('convert MyPresentation.pdf P_%03d.jpg');
sleep(2);
echo exec('composite -gravity center P_0.jpg panaroma.jpg result_0.jpg');
echo exec('composite -gravity center P_1.jpg panaroma.jpg result_1.jpg');
echo exec('composite -gravity center P_2.jpg panaroma.jpg result_2.jpg');
echo exec('composite -gravity center P_3.jpg panaroma.jpg result_3.jpg');
echo exec('composite -gravity center P_4.jpg panaroma.jpg result_4.jpg');

?>
