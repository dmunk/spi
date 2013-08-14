<?php
class Category
{
  private $_category_id;
  private $_parent_category;
  private $_category_name;
  private $_category_description;
  
  function __construct( $category_name, $category_id = NULL, $category_description = NULL, $parent_category = NULL )
  {
    $this->_category_id = $category_id;
    $this->_category_name = $category_name;
    $this->_category_description = $category_description;
    $this->_parent_category = $parent_category;
  }
  
  public function getCategoryName()
  {
    return $this->_category_name;
  }
  
  public function setCategoryName( $category_name )
  {
    $this->_category_name = $category_name;
  }
  
  public function getCategoryId()
  {
    return $this->_category_id;
  }
  
  public function getCategoryDescription()
  {
    return $this->_category_description;
  }
  
  public function setCategoryDescription( $category_description )
  {
    $this->_category_description = $category_description;
  }
  
  public function getParentCategory()
  {
    return $this->_parent_category;
  }
  
  public function setParentCategory( Category $parent_category )
  {
    $this->_parent_category = $parent_category;
  }
  
  public function save()
  {
    require_once( PHP_CLASSES."sql.php" );
    
    $rawCategoryData = get_object_vars( $this );
    $categoryData = array();

    foreach( $rawCategoryData as $key => $item )
    {
      if( $key == '_parent_category' && !is_null( $this->_parent_category ) )
        $categoryData[substr($key, 1).'_id'] = $this->_parent_category->getCategoryId();
      else
        $categoryData[substr($key, 1)] = $item;
    }

    if( !is_null( $this->_category_id ) )
      $result = updateData( 'product_categories', $categoryData, 'category_id' );
    else
    {
      $result = insertData( 'product_categories', $categoryData );
      
      if( $result )
        $this->_category_id = $result;
    }
  }
}
?>