<?php
class CategoryList
{
  private $_categories;
  
  public function __construct()
  {
    $this->_categories = array();
  }
  
  public function addCategory( Category $category )
  {
    $this->_categories[] = $category;
  }
  
  public function getCategories()
  {
    return $this->_categories;
  }

  public function setCategories( CategoryList $categoryList )
  {
    $this->_categories = $categoryList;
  }
  
  public function loadCategories()
  {
    $select = sqlquery( "SELECT * FROM product_categories" );
    
    if( !empty( $select['data'] ) ) 
    {
      foreach( $select['data'] as $cat )
        $this->addCategory( new Category( $cat['category_name'], $cat['category_id'], $cat['category_description'], NULL ) );
    }
    
    return $this->_categories;
  }
}
?>