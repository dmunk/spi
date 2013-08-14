<?php
require_once("../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2>Site Administration</h2>
      <ul style="list-style-type: circle; margin-left: 30px; line-height: 20px;">
        <li>
          Contact Management
          <ul style="list-style-type: circle; margin-left: 30px;">
            <li><a href="companies.php" title="Manage Companies">Manage Companies</a></li>
          </ul>
        </li>
        <li>
          <a href="products.php" title="Manage Products">Manage Products</a>
          <ul style="list-style-type: circle; margin-left: 30px;">
            <li><a href="categories.php" title="Manage Product Categories">Manage Categories</a></li>
            <li><a href="colors.php" title="Manage Product Colors">Manage Colors</a></li>
            <li><a href="enclosures.php" title="Manage Product Enclosures">Manage Enclosures</a></li>
            <li><a href="styles.php" title="Manage Product Styles">Manage Styles</a></li>
          </ul>
        </li>
      </ul>
<?php
require_once(PHP_INCLUDES."footer.php");
?>