require 'Modele.php';

$vue = getVue();
if ($vue == 0)
{
require 'vue0.php';
}
else
{
require 'vue1.php';
}