<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2 style="margin-top: 90px;"><a href="/product_catalog/" style="font-weight: bold;">Product Catalog</a> > <a href="/product_catalog/olive_oil_bottles/" style="font-weight: bold;">Specialty &amp; Olive Oil Bottles</a> > Tortuga</h2>
      <p>
        At Spirited Packaging, we're excited to bring you a variety of glass and packaging solutions tailored to the craft wine and olive oil producer. We currently 
        have in stock the following bottles, which we're offering at discounted prices in small lots:
      </p>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="375-ml-tortuga-antique-green-spb-12054.php" title="375ml Tortuga olive oil bottle, Antique Green - SPB-12054"><img src="/images/products/wine_bottles/375-ml-tortuga-olive-oil-antique-green-spb-12054-thumb.jpg" alt="375ml Tortuga olive oil bottle, Antique Green - SPB-12054" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="375-ml-tortuga-antique-green-spb-12054.php" title="375ml Tortuga olive oil bottle, Antique Green - SPB-12054">SPB-12054: 375ml Tortuga, Antique Green</a></div>
        </div>
        <div class="left" style="border: 1px solid #000; margin-left: 190px; margin-bottom: 10px;">
          <a href="500-ml-tortuga-antique-green-spb-12055.php" title="500ml Tortuga olive oil bottle, Antique Green - SPB-12055"><img src="/images/products/wine_bottles/500-ml-tortuga-olive-oil-antique-green-spb-12055-thumb.jpg" alt="500ml Tortuga olive oil bottle, Antique Green - SPB-12055" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="500-ml-tortuga-antique-green-spb-12055.php" title="500ml Tortuga olive oil bottle, Antique Green - SPB-12055">SPB-12055: 500ml Tortuga, Antique Green</a></div>
        </div>
        <div class="right" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="750-ml-tortuga-antique-green-spb-12056.php" title="750ml Tortuga olive oil bottle, Antique Green - SPB-12056"><img src="/images/products/wine_bottles/750-ml-tortuga-olive-oil-antique-green-spb-12056-thumb.jpg" alt="750ml Tortuga olive oil bottle, Antique Green - SPB-12056" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="750-ml-tortuga-antique-green-spb-12056.php" title="750ml Tortuga olive oil bottle, Antique Green - SPB-12056">SPB-12056: 750ml Tortuga, Antique Green</a></div>
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