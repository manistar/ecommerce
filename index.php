<?php 
// require_once "content/header.php";

// if ($page != "") {
//     require_once "pages/page-ini.php";
// }

require_once "inis/ini.php";
require_once "content/header.php";
echo '<div class="app-content content">';

if ($page != "") {
    require_once "pages/page-ini.php";
} 
echo "</div>";
require_once "content/footer.php";
?>