<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for 4He(e,e\'p)3H polarization transfer, April-May 2000');
PageDate('Thu, 13 Dec 2001');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for E93-049 
<a href="http://www.jlab.org/exp_prog/CEBAF_EXP/E93049.html">Polarization Transfer in the Reaction 4He(e,e'p)3H in the Quasi-elastic Scattering Region</a> running in Apr-May 2000. 
<p>
The results enclosed have been corrected for the newer value of the target polarization (7.95%),
dead time (1%), and the sign of helicity. The helicity sign belongs to the period 
when the "helicity signal" is in a state of logical 1.
</p>
<pre>
  #   m   d   h        Møller   
  ----------------------------------------------------------------
  1  04  10  12    64.7  +/- 0.2
  2  04  16  21    66.6  +/- 0.2
  3  04  19  20   -67.5  +/- 0.2
  4  04  21  22    68.1  +/- 0.2
  5  04  23  11   -66.2  +/- 0.2
  6  04  26  18    65.3  +/- 0.2
  7  04  30  09   -67.6  +/- 0.2
  7  04  30  22   -68.4  +/- 0.2
  8  05  03  22    70.5  +/- 0.2
  9  05  05  09   -70.7  +/- 0.2
 10  05  07  11    70.8  +/- 0.2
 11  05  10  18    70.8  +/- 0.2
 12  05  14  22   -65.6  +/- 0.2
 13  05  16  15   -63.8  +/- 0.2
 14  05  17  19   -66.6  +/- 0.2
 15  05  18  20    67.2  +/- 0.2
  ----------------------------------------------------------------
</pre>
The errors are statistical only. The systematic error is about 3% relative.
</div>
<?php
PageEnd();
