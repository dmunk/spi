<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" title="Return to Spirited Packaging Product Catalog" style="font-weight: bold;">Product Catalog</a> > 187ml Bordeaux screw top wine bottle, Flint &#8212; SPC-12017</h2>
      <hr />
      <div style="float: left;">
      <a href="/images/products/wine_bottles/187-ml-bordeaux-screw-top-flint-spc-12017-large.jpg" title="187ml Bordeaux screw top wine bottle, Flint - SPC-12017 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/187-ml-bordeaux-screw-top-flint-spc-12017.jpg" alt="187ml Bordeaux screw top wine bottle, Flint - SPC-12017" style="margin-bottom: 10px;" /></a>
      </div>
      <hr />
      <h3>Product Specifications:</h3>
      <ul class="infoList">
        <li><strong>Part #:</strong><span>SPC-12017</span></li>
        <li><strong>Capacity:</strong><span>187ml</span></li>
        <li><strong>Weight:</strong><span>153g</span></li>
        <li><strong>Color:</strong><span>Flint</span></li>
      </ul>
      <p>We are currently offering discounted pricing for small lots on this product, and have it in stock in our Stockton warehouse. 
        Please contact us at 209-462-6705 today to take advantage of this limited time pricing.</p>
      <p>Or, you may contact us directly via email by filling out the form below (all fields are required).</p>
<?php
if( !empty( $_GET['resultString'] ) )
{
?>
      <div class="dashboardMsg alert"><?= $_GET['resultString'] ?></div>
<?php
}

if( empty( $_POST['emailSubject'] ) )
  $_POST['emailSubject'] = 'RE: SPC-12017';

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>