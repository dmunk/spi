<?php
require_once("../config.php");

require_once(PHP_CLASSES."category.php");
require_once(PHP_CLASSES."category_list.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2>Manage Product Categories</h2>
<?php
// test code
try {
  $cat_list = new CategoryList();
  
  $cat_list = $cat_list->loadCategories();
  
  var_dump( $cat_list );
}
catch( Exception $e )
{
  echo $e->getMessage();
}

require_once(PHP_INCLUDES."footer.php");
?>