<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E97-110 (GDH), July-August 2003');
PageDate('Thu, 13 Aug 2003');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for E97-110 
<a href="http://www.jlab.org/exp_prog/CEBAF_EXP/E97110.html">
The GDH Rule and the Spin Structure of <sup>3</sup>He and the Neutron Using
Nearly Real Photons
</a> running in July-August 2003. 
<p>
 The results have been corrected for the leakthrough from Hall C.
 The final value of polarization in Hall A (the column marked "Leak. corr.")
 contains the systematic error estimate, associated with this correction.
 The other systematic errors are about 3% relative. The statistical
 errors are about 0.2% absolute. The polarization sign convention
 is opposite to the one used for HRS analysis and Compton polarimeter.
 The polarization is positive, if the beam particle helicity is +1
 during the period when the NIM polarization signal is at logical unit (-0.8V). 
</p>
<p>
 The last column presents an estimate of the injector polarization,
 obtained using the spin angle prediction, in order to check the stability
 of the results. The sign flip in the measurements 3-5 is understood
 (it was caused by an accidental removal of a HWP from the injector at the given
  time period). The error given is associated with the accuracy of 
 the precession angle calculation, with the beam energy accuracy of 0.05%.
</p>
<pre>
  # date         1-st     Energy, GeV     N         spin       Polarization in A       Injector
  #  m  d  h      run    beam   linac   pass  HWP   turns   not corr.   Leak. corr.    polariz.
  1 07 17 22    10907   2.1366  0.51955   2    0    4.041     0.723     0.737 +/-0.4    76.2 +/-0.3
  2 07 21 18    10932   2.1366  0.51955   2    1    4.041    -0.721    -0.746 +/-0.6    77.2 +/-0.3
  3 07 26 00    10956   4.2169  0.51981   4    0   17.921    -0.602    -0.652 +/-1.2   -74.3 +/-2.1
  4 07 28 19    10982   2.1374  0.51975   2    1    4.043     0.725     0.747 +/-0.5   -77.5 +/-0.4
  5 07 31 20    11001   2.8492  0.46615   3    1    9.022     0.737     0.767 +/-0.7   -77.5 +/-0.5
  6 08 08 19    11030   3.7818  0.46619   4    0   16.041     0.764     0.765 +/-0.03   79.0 +/-1.6
  7 08 14 19    11047   1.1482  0.54355   1    0    1.041     0.758     0.762 +/-0.1    78.8 +/-0.1
  8 08 16 19    11048   2.2359  0.54369   2    0    4.522    -0.751    -0.761 +/-0.2    76.8 +/-0.1
  9 08 21 23    11085   4.4153  0.54427   4    0   18.990     0.751     0.756 +/-0.1    75.8 +/-0.1
 10 08 25 21    11104   3.3241  0.54383   3    1   10.510     0.774     0.778 +/-0.1    78.0 +/-0.1

</pre>
<p>
 The details of the measurements can be found 
<a href="http://www.jlab.org/~moller/raw_results.html#17jul2003">here</a>.
</p>
</div>
<?php
PageEnd();
