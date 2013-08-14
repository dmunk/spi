<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" title="Return to Spirited Packaging Product Catalog" style="font-weight: bold;">Product Catalog</a> > 375ml Bellissima Ice Wine bottle, Flint &#8212; SPI-4006FL</h2>
      <hr />
      <div style="float: left;">
      <a href="/images/products/wine_bottles/375-ml-bellissima-ice-wine-flint-spi-4006fl-large.jpg" title="375ml Bellissima Ice Wine bottle, Flint - SPI-4006FL -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/375-ml-bellissima-ice-wine-flint-spi-4006fl.jpg" alt="375ml Bellissima Ice Wine bottle, Flint - SPI-4006FL" /></a>
      </div>
      <div style="float: right;">
      <a href="/images/products/wine_bottles/data_sheets/375-ml-bellissima-ice-wine-spi-4006_front.pdf" title="Data sheet for 375ml Bellissima Ice Wine bottle, Flint - SPI-4006FL -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/data_sheets/375-ml-bellissima-ice-wine-spi-4006_front.gif" alt="Data sheet for 375ml Bellissima Ice Wine bottle, Flint - SPI-4006FL" style="margin-bottom: 10px;" /></a>
      </div>  
      <hr />
      <h3>Product Specifications:</h3>
      <ul class="infoList">
        <li><strong>Part #:</strong><span>SPI-4006FL</span></li>
        <li><strong>Capacity:</strong><span>375ml</span></li>
        <li><strong>Weight:</strong><span>500g</span></li>
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
  $_POST['emailSubject'] = 'RE: SPI-4006FL';

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>