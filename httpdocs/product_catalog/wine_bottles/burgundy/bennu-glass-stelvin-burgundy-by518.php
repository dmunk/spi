<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" title="Return to Spirited Packaging Product Catalog" style="font-weight: bold;">Product Catalog</a> > Bennu Glass Stelvin Burgundy wine bottle &#8212; BY518</h2>
      <hr />
      <div style="float: left;">
      <a href="/images/products/wine_bottles/bennu-glass-stelvin-burgundy-by518-large.jpg" title="Bennu Glass Stelvin Burgundy wine bottle - BY518 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/bennu-glass-stelvin-burgundy-by518.jpg" alt="Bennu Glass Stelvin Burgundy wine bottle - BY518" style="margin-bottom: 10px;" /></a>
      </div>
      <div style="float: right;">
      <a href="/images/products/wine_bottles/data_sheets/bennu-glass-stelvin-burgundy-by518_front.pdf" title="Data sheet for Bennu Glass Stelvin Burgundy wine bottle - BY518 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/data_sheets/bennu-glass-stelvin-burgundy-by518_front.gif" alt="Data sheet for Bennu Glass Stelvin Burgundy wine bottle - BY518" style="margin-bottom: 10px;" /></a>
      </div>
      <hr />
      <h3>Product Specifications:</h3>
      <ul class="infoList">
        <li><strong>Part #:</strong><span>BY518</span></li>
        <li><strong>Capacity:</strong><span>750ml</span></li>
        <li><strong>Weight:</strong><span>468g</span></li>
        <li><strong>Colors:</strong><span>Antique Green, Dead Leaf Green</span></li>
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
  $_POST['emailSubject'] = 'RE: BY518';

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>