<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" style="font-weight: bold;">Product Catalog</a> > <a href="/product_catalog/olive_oil_bottles/" style="font-weight: bold;">Specialty &amp; Olive Oil Bottles</a> > 375ml</h2>
      <hr />
      <p>
        At Spirited Packaging, we're excited to bring you a variety of glass and packaging solutions tailored to the craft wine and olive oil producer. We currently 
        have in stock the following bottles, which we're offering at discounted prices in small lots:
      </p>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="375-ml-antique-green-spc-12375a.php" title="375ml olive oil bottle, Antique Green - SPC-12375A"><img src="/images/products/wine_bottles/375-ml-bordeaux-antique-green-spc-12375a-thumb.jpg" alt="375ml olive oil bottle, Antique Green - SPC-12375A" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="375-ml-antique-green-spc-12375a.php" title="375ml olive oil bottle, Antique Green - SPC-12375A">SPC-12375A: 375ml Olive Oil, Antique Green</a></div>
        </div>
        <div class="left" style="border: 1px solid #000; margin-left: 190px; margin-bottom: 10px;">
          <a href="375-ml-bellissima-antique-green-spi-4006ag.php" title="375ml Bellissima olive oil bottle, Antique Green - SPI-4006AG"><img src="/images/products/wine_bottles/375-ml-bellissima-ice-wine-antique-green-spi-4006ag-thumb.jpg" alt="375ml Bellissima olive oil bottle, Antique Green - SPI-4006AG" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="375-ml-bellissima-antique-green-spi-4006ag.php" title="375ml Bellissima olive oil bottle, Antique Green - SPI-4006AG">SPI-4006AG: 375ml Bellissima, Antique Green</a></div>
        </div>
        <div class="right" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="375-ml-bellissima-flint-spi-4006fl.php" title="375ml Bellissima olive oil bottle, Flint - SPI-4006FL"><img src="/images/products/wine_bottles/375-ml-bellissima-ice-wine-flint-spi-4006fl-thumb.jpg" alt="375ml Bellissima olive oil bottle, Flint - SPI-4006FL" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="375-ml-bellissima-flint-spi-4006fl.php" title="375ml Bellissima olive oil bottle, Flint - SPI-4006FL">SPI-4006FL: 375ml Bellissima, Flint</a></div>
        </div>
      </div>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-left: 343px; margin-bottom: 10px;">
          <a href="375-ml-bordeaux-antique-green-spi-106ag.php" title="375ml Bordeaux bottle, Antique Green - SPI-106AG"><img src="/images/products/wine_bottles/375-ml-bordeaux-antique-green-spi-106ag-thumb.jpg" alt="375ml Bordeaux bottle, Antique Green - SPI-106AG" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="375-ml-bordeaux-antique-green-spi-106ag.php" title="375ml Bordeaux bottle, Antique Green - SPI-106AG">SPI-106AG: 375ml Bordeaux, Antique Green</a></div>
        </div>
      </div>
      <hr />
      <p>Please feel free to contact us about any of the products listed above, or to discuss your glass and packaging needs in general:
      <ul class="infoList">
        <li><strong>Address:</strong><span>1521 South Fresno Avenue<br />Stockton, CA 95206</span></li>
        <li><strong>Phone:</strong><span>209-462-6705</span></li>
      </ul>
      <p>Or, you may contact us directly via email by filling out the form below (all fields are required).</p>
<?php
if( !empty( $_GET['resultString'] ) )
{
?>
      <div class="dashboardMsg alert"><?= $_GET['resultString'] ?></div>
<?php
}

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>