<?php
if(!function_exists('register_field_group') ) {
  if (file_exists(BEAU_PLUGIN_DIR. '/libs/advanced-custom-fields/acf.php')) {
      require_once(BEAU_PLUGIN_DIR. '/libs/advanced-custom-fields/acf.php');
  }

  register_field_group(array (
  ));
}
?>
