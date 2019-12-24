<?php ob_start(); $title="Allo"; ?>
<p>PAGE HOME</p>
<?php $content = ob_get_clean(); 
require 'vue/template.php';
?>
