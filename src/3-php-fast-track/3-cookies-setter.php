<?php
/**
 * This works only in browser
 */
setcookie("wp1", "It's web programming", time() + (3600 * 30), "/");
setcookie("wp2", "It's web programming-Secure", time() + (3600 * 30), "/","",true);
?>