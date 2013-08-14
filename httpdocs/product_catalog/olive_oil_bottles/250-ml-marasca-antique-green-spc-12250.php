<?php
require_once("../../config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2 style="margin-top: 0px;"><a href="/product_catalog/" title="Return to Spirited Packaging Product Catalog" style="font-weight: bold;">Product Catalog</a> > 250ml Marasca Olive Oil bottle, Antique Green &#8212; SPC-12250</h2>
      <hr />
      <div style="float: left;">
      <a href="/images/products/wine_bottles/250-ml-olive-oil-antique-green-spc-12250-large.jpg" title="250ml olive oil bottle, Antique Green - SPC-12250 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/250-ml-olive-oil-antique-green-spc-12250.jpg" alt="250ml Marasca olive oil bottle, Antique Green - SPC-12250" style="margin-bottom: 10px;" /></a>
      </div>
      <div style="float: right;">
      <a href="/images/products/wine_bottles/data_sheets/250-ml-olive-oil-antique-green-spc-12250_front.pdf" title="Data sheet for 250ml Marasca olive oil bottle, Antique Green - SPC-12250 -- Click to enlarge" target="_blank"><img src="/images/products/wine_bottles/data_sheets/250-ml-olive-oil-antique-green-spc-12250_front.gif" alt="Data sheet for 250ml Marasca olive oil bottle, Antique Green - SPC-12250" style="margin-bottom: 10px;" /></a>
      </div>
      <hr />
      <h3>Product Specifications:</h3>
      <ul class="infoList">
        <li><strong>Part #:</strong><span>SPC-12250</span></li>
        <li><strong>Capacity:</strong><span>250ml</span></li>
        <li><strong>Weight:</strong><span>260g</span></li>
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
  $_POST['emailSubject'] = 'RE: SPC-12250';

contactForm();

require_once(PHP_INCLUDES."footer.php");
?>