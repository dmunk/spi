<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2 style="margin-top: 90px;"><a href="/product_catalog/" style="font-weight: bold;">Product Catalog</a> > <a href="/product_catalog/olive_oil_bottles/" style="font-weight: bold;">Specialty &amp; Olive Oil Bottles</a> > Marasca</h2>
      <p>
        At Spirited Packaging, we're excited to bring you a variety of glass and packaging solutions tailored to the craft wine and olive oil producer. We currently 
        have in stock the following bottles, which we're offering at discounted prices in small lots:
      </p>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="250-ml-marasca-flint-spb-12050.php" title="250ml Marasca olive oil bottle, Flint - SPB-12050"><img src="/images/products/wine_bottles/250-ml-marasca-olive-oil-flint-spb-12050-thumb.jpg" alt="250ml Marasca olive oil bottle, flint - SPB-12050" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="250-ml-marasca-flint-spb-10250.php" title="250ml Marasca olive oil bottle, Flint - SPB-12050">SPB-12050: 250ml Marasca, Flint</a></div>
        </div>
        <div class="left" style="border: 1px solid #000; margin-left: 190px; margin-bottom: 10px;">
          <a href="500-ml-marasca-flint-spb-12051.php" title="500ml Marasca olive oil bottle, Flint - SPC-12051"><img src="/images/products/wine_bottles/500-ml-marasca-olive-oil-flint-spb-12051-thumb.jpg" alt="500ml Marasca olive oil bottle, Flint - SPB-12051" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="500-ml-marasca-flint-spb-12051.php" title="500ml Marasca olive oil bottle, Flint - SPB-12051">SPB-12051: 500ml Marasca, Flint</a></div>
        </div>
        <div class="right" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="250-ml-marasca-antique-green-spb-12052.php" title="250ml Marasca olive oil bottle, Antique Green - SPB-12052"><img src="/images/products/wine_bottles/250-ml-marasca-olive-oil-antique-green-spb-12052-thumb.jpg" alt="250ml Marasca olive oil bottle, Antique Green - SPB-12052" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="250-ml-marasca-antique-green-spb-12052.php" title="250ml Marasca olive oil bottle, Antique Green - SPB-12052">SPB-12052: 250ml Marasca, Antique Green</a></div>
        </div>
      </div>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-left: 342px; margin-bottom: 10px;">
          <a href="500-ml-marasca-antique-green-spb-12053.php" title="500ml Marasca olive oil bottle, Antique Green - SPB-12053"><img src="/images/products/wine_bottles/500-ml-marasca-olive-oil-antique-green-spb-12053-thumb.jpg" alt="500ml Marasca olive oil bottle, Antique Green - SPB-12053" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="500-ml-marasca-antique-green-spb-12053.php" title="500ml Marasca olive oil bottle, Antique Green - SPB-12053">SPB-12053: 500ml Marasca, Antique Green</a></div>
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