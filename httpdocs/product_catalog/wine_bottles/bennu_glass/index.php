<?php
require_once("../../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2><a href="/product_catalog/" style="font-weight: bold;">Product Catalog</a> > <a href="/product_catalog/wine_bottles/" style="font-weight: bold;">Wine Bottles</a> > Bennu Glass</h2>
      <hr />
      <p>
        At Spirited Packaging, we're excited to bring you a variety of glass and packaging solutions tailored to the craft wine and olive oil producer. 
        We currently have in stock the following bottles, which we're offering at discounted prices in small lots:
      </p>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="../claret_bordeaux/bennu-glass-standard-bordeaux-bx571.php" title="Bennu Glass Standard Claret/Bordeaux wine bottle - BX571"><img src="/images/products/wine_bottles/bennu-glass-standard-bordeaux-bx571-thumb.jpg" alt="Bennu Glass Standard Claret/Bordeaux wine bottle - BX571" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="../claret_bordeaux/bennu-glass-standard-bordeaux-bx571.php" title="Bennu Glass Standard Claret/Bordeaux wine bottle - BX571">BX571: Bennu Glass Standard Claret/Bordeaux</a></div>
        </div>
        <div class="left" style="border: 1px solid #000; margin-left: 260px; margin-bottom: 10px;">
          <a href="../claret_bordeaux/bennu-glass-stelvin-bordeaux-bx572.php" title="Bennu Glass Stelvin Claret/Bordeaux wine bottle - BX572"><img src="/images/products/wine_bottles/bennu-glass-stelvin-bordeaux-bx572-thumb.jpg" alt="Bennu Glass Stelvin Claret/Bordeaux wine bottle - BX572" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="../claret_bordeaux/bennu-glass-stelvin-bordeaux-bx572.php" title="Bennu Glass Stelvin Claret/Bordeaux wine bottle - BX572">BX572: Bennu Glass Stelvin Claret/Bordeaux</a></div>
        </div>
        <div class="right" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="../claret_bordeaux/bennu-glass-tall-straight-bordeaux-bx576.php" title="Bennu Glass Tall Straight Claret/Bordeaux wine bottle - BX576"><img src="/images/products/wine_bottles/bennu-glass-tall-straight-bordeaux-bx576-thumb.jpg" alt="Bennu Glass Tall Straight Claret/Bordeaux wine bottle - BX576" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="../claret_bordeaux/bennu-glass-tall-straight-bordeaux-bx576.php" title="Bennu Glass Tall Straight Claret/Bordeaux wine bottle - BX576">BX576: Bennu Glass Tall Straight Claret/Bordeaux</a></div>
        </div>
      </div>
      <div class="clear">
        <div class="left" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="../burgundy/bennu-glass-standard-burgundy-by517.php" title="Bennu Glass Standard Burgundy wine bottle - BY517"><img src="/images/products/wine_bottles/bennu-glass-standard-burgundy-by517-thumb.jpg" alt="Bennu Glass Standard Burgundy wine bottle - BY517" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="../burgundy/bennu-glass-standard-burgundy-by517.php" title="Bennu Glass Standard Burgundy wine bottle - BY517">BY517: Bennu Glass Standard Burgundy</a></div>
        </div>
        <div class="left" style="border: 1px solid #000; margin-left: 260px; margin-bottom: 10px;">
          <a href="../burgundy/bennu-glass-stelvin-burgundy-by518.php" title="Bennu Glass Stelvin Burgundy wine bottle - BY518"><img src="/images/products/wine_bottles/bennu-glass-stelvin-burgundy-by518-thumb.jpg" alt="Bennu Glass Stelvin Burgundy wine bottle - BY518" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="../burgundy/bennu-glass-stelvin-burgundy-by518.php" title="Bennu Glass Stelvin Burgundy wine bottle - BY518">BY518: Bennu Glass Stelvin Burgundy</a></div>
        </div>
        <div class="right" style="border: 1px solid #000; margin-bottom: 10px;">
          <a href="../burgundy/bennu-glass-symphony-burgundy-by521.php" title="Bennu Glass Symphony Burgundy wine bottle - BY521"><img src="/images/products/wine_bottles/bennu-glass-symphony-burgundy-by521-thumb.jpg" alt="Bennu Glass Symphony Burgundy wine bottle - BY521" /></a>
          <div style="line-height: 20px; width: 150px; text-align: center;"><a href="../burgundy/bennu-glass-symphony-burgundy-by521.php" title="Bennu Glass Symphony Burgundy wine bottle - BY521">BY521: Bennu Glass Symphony Burgundy</a></div>
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