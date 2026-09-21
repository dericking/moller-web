<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for GEP(II), Nov-Dec 2000');
PageDate('Wed, 18 July 2001');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for E99-007 
<a href="http://www.jlab.org/~gayou/e99007/">GE<sub>P</sub>(II)</a> running in Nov-Dec 2000. 
<p>
Because of the injector confuguration during this period, the leak from the the Hall C laser
could produce polarization shifts of about 6%. In the last measurement of this period (#5) the polarization
was measured with the other lasers turned off, and also the contribution from Hall C laser
was measured. The results look consistent: at 500nA Hall C laser contributed about 3% of the
Møller counting rate and diluted the polarization by about 6%. In the previous measurement (#4)
the Hall C counting rate contribution was measured, while for the other measurements
the contributions are unknown. Accordingly to the log files the Hall C laser was on during
these measurements.
</p>
<p>
The measurement #5 does not need to be corrected for the leak. The measurement #4
has been corrected for a leak estimated during this measurement, by 4.4%. The other
measurements have not been corrected. One may assume that the correction needed
is 6% for all the measurement except the #5.
</p>
<p>
The Møller results, along with results from Compton polarimeter
(obtained from the Compton polarimeter <a href="http://www.jlab.org/compton/GeP/data.html">page</a>),
are presented on <a href="../plots/e99-007_with_compton.pdf">a plot</a>.
</p>
<p>
 The Compton results were averaged for 3 periods and are included in the following table: 
</p>
<pre>
  #   m   d   h        Møller      Møller corr by 6%   Compton
                                    for laser leak
  ----------------------------------------------------------------
  1  11  15  15    69.1  +/- 0.2    73.2  +/- 0.2    70.8  +/- 0.1 
  2  11  17  13    67.8  +/- 0.2    71.9  +/- 0.2    
  ----------------------------------------------------------------
  3  12  01  15    72.2  +/- 0.2    76.5  +/- 0.2    76.1  +/- 0.1 
  ----------------------------------------------------------------
  4  12  13  22    68.7  +/- 0.2    69.8  +/- 0.2    72.2  +/- 0.1 
  5  12  18  16    71.6  +/- 0.2    71.6  +/- 0.2                  
  ----------------------------------------------------------------
</pre>
The errors are statistical only. 
<p>
For the measurement #5 (no error beacause of the leak)
the Møller result is 0.8% below the Compton result. 
</p>
</div>
<?php
PageEnd();
