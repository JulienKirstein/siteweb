<?php
require 'test.php';
echo getValue();

require 'Modele.php';
$vue = getVue();
echo file_get_contents($vue);

function actu() {
echo "j'actualise ..............";
}
actu();