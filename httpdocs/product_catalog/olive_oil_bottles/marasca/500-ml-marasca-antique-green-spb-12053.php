<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2 style="margin-top: 105px;"><a href="/product_catalog/" title="Return to Spirited Packaging Product Catalog" style="font-weight: bold;">Product Catalog</a> > 500ml Marasca Olive Oil bottle, Antique Green &#8212; SPB-12053</h2>
      <hr />
      <div style="float: left;">
      <a href="/images/products/wine_bottles/500-ml-marasca-olive-oil-antique-green-spb-12053-large.jpg" title="500ml Marasca olive oil bottle, Antique Green - SPB-12053 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/500-ml-marasca-olive-oil-antique-green-spb-12053.jpg" alt="500ml Marasca olive oil bottle, Antique Green - SPB-12053" style="margin-bottom: 10px;" /></a>
      </div>
      <div style="float: right;">
      <a href="/images/products/wine_bottles/data_sheets/500-ml-marasca-olive-oil-spb-12051_front.pdf" title="Data sheet for 500ml Marasca olive oil bottle, Antique Green - SPB-12053 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/data_sheets/500-ml-marasca-olive-oil-spb-12051_front.gif" alt="Data sheet for 500ml Marasca olive oil bottle, Antique Green - SPC-12053" style="margin-bottom: 10px;" /></a>
      </div>  
      <hr />
      <h3>Product Specifications:</h3>
      <ul class="infoList">
        <li><strong>Part #:</strong><span>SPC-12053</span></li>
        <li><strong>Capacity:</strong><span>500ml</span></li>
        <li><strong>Weight:</strong><span>390g</span></li>
        <li><strong>Color:</strong><span>Antique Green</span></li>
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
  $_POST['emailSubject'] = 'RE: SPC-12053';

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>