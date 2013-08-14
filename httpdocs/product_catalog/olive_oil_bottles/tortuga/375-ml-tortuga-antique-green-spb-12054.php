<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2 style="margin-top: 105px;"><a href="/product_catalog/" title="Return to Spirited Packaging Product Catalog" style="font-weight: bold;">Product Catalog</a> > 375ml Tortuga olive oil bottle, Antique Green &#8212; SPB-12054</h2>
      <hr />
      <div style="float: left;">
      <a href="/images/products/wine_bottles/375-ml-tortuga-olive-oil-antique-green-spb-12054-large.jpg" title="375ml Tortuga olive oil bottle, Antique Green - SPB-12054 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/375-ml-tortuga-olive-oil-antique-green-spb-12054.jpg" alt="375ml Tortuga olive oil bottle, Antique Green - SPB-12054" style="margin-bottom: 10px;" /></a>
      </div>
      <div style="float: right;">
      <a href="/images/products/wine_bottles/data_sheets/375-ml-tortuga-olive-oil-spb-12054_front.pdf" title="Data sheet for 375ml Tortuga olive oil bottle, Antique Green - SPB-12054 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/data_sheets/375-ml-tortuga-olive-oil-spb-12054_front.gif" alt="Data sheet for 375ml Tortuga olive oil bottle, Antique Green - SPB-12054" style="margin-bottom: 10px;" /></a>
      </div>
      <hr />
      <h3>Product Specifications:</h3>
      <ul class="infoList">
        <li><strong>Part #:</strong><span>SPC-12054</span></li>
        <li><strong>Capacity:</strong><span>375ml</span></li>
        <li><strong>Weight:</strong><span>350g</span></li>
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
  $_POST['emailSubject'] = 'RE: SPC-12054';

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>