<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" style="font-weight: bold;">Product Catalog</a> > <a href="/product_catalog/olive_oil_bottles" style="font-weight: bold;">Specialty &amp; Olive Oil Bottles</a> > 187ml</h2>
      <hr />
      <p>
        At Spirited Packaging, we're excited to bring you a variety of glass and packaging solutions tailored to the craft wine and olive oil producer. We currently 
        have in stock the following bottles, which we're offering at discounted prices in small lots:
      </p>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-left: 130px; margin-bottom: 10px;">
          <a href="187-ml-bordeaux-screw-top-antique-green-spc-12016.php" title="187ml Bordeaux screw top wine bottle, Antique Green - SPC-12016"><img src="/images/products/wine_bottles/187-ml-bordeaux-screw-top-antique-green-spc-12016-thumb.jpg" alt="187ml Bordeaux screw top wine bottle, Antique Green - SPC-12016" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="187-ml-bordeaux-screw-top-antique-green-spc-12016.php" title="187ml Bordeaux screw top wine bottle, Antique Green - SPC-12016">SPC-12016: 187ml Bordeaux screw top, Antique Green</a></div>
        </div>
        <div class="left" style="border: 1px solid #000; margin-left: 190px; margin-bottom: 10px;">
          <a href="187-ml-bordeaux-screw-top-flint-spc-12017.php" title="187ml Bordeaux screw top wine bottle, Flint - SPC-12017"><img src="/images/products/wine_bottles/187-ml-bordeaux-screw-top-flint-spc-12017-thumb.jpg" alt="187ml Bordeaux screw top wine bottle, Flint - SPC-12017" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="187-ml-bordeaux-screw-top-flint-spc-12017.php" title="187ml Bordeaux screw top wine bottle, Flint - SPC-12017">SPC-12017: 187ml Bordeaux screw top, Flint</a></div>
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