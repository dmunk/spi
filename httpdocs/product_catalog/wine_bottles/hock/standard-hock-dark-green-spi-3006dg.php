<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" title="Return to Spirited Packaging Product Catalog" style="font-weight: bold;">Product Catalog</a> > Standard Hock wine bottle, Dark Green &#8212; SPI-3006DG</h2>
      <hr />
      <div style="float: left;">
      <a href="/images/products/wine_bottles/standard-hock-dark-green-spi-3006dg-large.jpg" title="Standard Hock wine bottle, Dark Green - SPI-3006DG -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/standard-hock-dark-green-spi-3006dg.jpg" alt="Standard Hock wine bottle, Dark Green - SPI-3006DG" style="margin-bottom: 10px;" /></a>
      </div>
      <div style="float: right;">
      <a href="/images/products/wine_bottles/data_sheets/standard-hock-spi-3006_front.pdf" title="Data sheet for Standard Hock wine bottle, Dark Green - SPI-3006DG -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/data_sheets/standard-hock-spi-3006_front.gif" alt="Data sheet for Standard Hock wine bottle, Dark Green - SPI-3006DG" style="margin-bottom: 10px;" /></a>
      </div>
      <hr />
      <h3>Product Specifications:</h3>
      <ul class="infoList">
        <li><strong>Part #:</strong><span>SPI-3006DG</span></li>
        <li><strong>Capacity:</strong><span>750ml</span></li>
        <li><strong>Weight:</strong><span>542g</span></li>
        <li><strong>Color:</strong><span>Dark Green</span></li>
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
  $_POST['emailSubject'] = 'RE: SPI-3006DG';

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>