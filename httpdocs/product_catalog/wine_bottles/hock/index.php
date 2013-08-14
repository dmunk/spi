<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" style="font-weight: bold;">Product Catalog</a> > <a href="/product_catalog/wine_bottles/" style="font-weight: bold;">Wine Bottles</a> > Hock</h2>
      <hr />
      <p>
        At Spirited Packaging, we're excited to bring you a variety of glass and packaging solutions tailored to the craft wine and olive oil producer. 
        We currently have in stock the following bottles, which we're offering at discounted prices in small lots:
      </p>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="standard-hock-antique-green-spi-3006ag.php" title="Standard Hock wine bottle, Antique Green - SPI-3006AG"><img src="/images/products/wine_bottles/standard-hock-antique-green-spi-3006ag-thumb.jpg" alt="Standard Hock wine bottle, Antique Green - SPI-3006AG" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="standard-hock-antique-green-spi-3006ag.php" title="Standard Hock wine bottle, Antique Green - SPI-3006AG">SPI-3006AG: Standard Hock, Antique Green</a></div>
        </div>
        <div class="left" style="border: 1px solid #000; margin-left: 260px; margin-bottom: 10px;">
          <a href="standard-hock-dark-green-spi-3006dg.php" title="Standard Hock wine bottle, Dark Green - SPI-3006DG"><img src="/images/products/wine_bottles/standard-hock-dark-green-spi-3006dg-thumb.jpg" alt="Standard Hock wine bottle, Dark Green - SPI-3006DG" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="standard-hock-dark-green-spi-3006dg.php" title="Standard Hock wine bottle, Dark Green - SPI-3006DG">SPI-3006DG: Standard Hock, Dark Green</a></div>
        </div>
        <div class="right" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="standard-hock-screw-top-antique-green-spi-3056ag.php" title="Standard Hock Screw Cap wine bottle, Antique Green - SPI-3056DLG"><img src="/images/products/wine_bottles/standard-hock-screw-top-antique-green-spi-3056ag-thumb.jpg" alt="Standard Hock Screw Top wine bottle, Antique Green - SPI-3056AG" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="standard-hock-screw-top-antique-green-spi-3056ag.php" title="Standard Hock Screw Cap wine bottle, Antique Green - SPI-3056AG">SPI-3056AG: Standard Hock Screw Top, Antique Green</a></div>
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