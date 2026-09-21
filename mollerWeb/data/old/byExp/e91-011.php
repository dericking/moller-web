<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for N --> D, May-July 2000');
PageDate('Mon, 29 Oct 2001');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for E91-011 
<a href="http://www.jlab.org/exp_prog/CEBAF_EXP/E91011.html">N-->D</a> running in May-July 2000. 
<p>
The results enclosed have been corrected for the newer value of the target polarization (7.95%),
dead time (1%), and the sign of helicity. The helicity sign belongs to the period 
when the "helicity signal" is in a state of logical 1.
</p>
<pre>
  #   m   d   h        Møller   
  ----------------------------------------------------------------
  1  05  23  18   -76.6  +/- 0.2
  2  06  02  18   -77.0  +/- 0.2
  3  06  09  11   -75.8  +/- 0.2
  4  06  14  01   -73.6  +/- 0.2
  5  06  19  22   -71.7  +/- 0.2
  6  06  23  19   -75.9  +/- 0.2
  7  06  26  20   -75.8  +/- 0.2
  8  07  14  09   -74.8  +/- 0.2
  9  07  17  18    68.1  +/- 0.2
  ----------------------------------------------------------------
</pre>
The errors are statistical only.
</div>
<?php
PageEnd();
