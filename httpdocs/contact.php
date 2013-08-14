<?php
require_once("config.php");

require_once(PHP_INCLUDES."header.php");
?>
      <h2>Contact Us</h2>
      <hr />
      <p>Please feel free to contact us with any questions about our company and/or to discuss your glass and packaging needs:</p>
      <ul class="infoList">
        <li><strong>Address:</strong><span>1521 South Fresno Avenue<br />Stockton, CA 95206</span></li>
        <li>
          <strong>&nbsp;</strong><iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1521+South+Fresno+Avenue,+Stockton,+CA&amp;aq=0&amp;oq=1521+s.+fresno+ave.,+&amp;sll=37.269174,-119.306607&amp;sspn=15.070753,28.54248&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=1521+S+Fresno+Ave,+Stockton,+California+95206&amp;ll=37.934721,-121.312065&amp;spn=0.032494,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=1521+South+Fresno+Avenue,+Stockton,+CA&amp;aq=0&amp;oq=1521+s.+fresno+ave.,+&amp;sll=37.269174,-119.306607&amp;sspn=15.070753,28.54248&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=1521+S+Fresno+Ave,+Stockton,+California+95206&amp;ll=37.934721,-121.312065&amp;spn=0.032494,0.054932&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>  
        </li>
        <li><strong>Phone:</strong><span>209-462-6705</span></li>
      </ul>
      <hr />
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