<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for HAPPEX, July 1999');
PageDate('Mon, 12 October 1999');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for the second period of 
<a href="http://www.jlab.org/~parity/">HAPPEX</a> running in 1999. The first period
in described <a href="http:happex_apr-may_1999.html">here</a>.
<p>
During this period the laser phase was checked at every measurement. 
<p>
<pre>
The <a href="http:tab/happex_2_sum_3.tab">table</a> of all the measurements is shown here:
   m   d   h   1-st run   Pol 1            Pol 2            Pol aver     chi2   uA   Las:power atten slit     loss  1/2wave B   C
   7  10  15    7006   75.70 +/- 0.20   75.40 +/- 0.20   75.60 +/- 0.20   1.6  0.502      73.0  500. 15.90    0.66   0      0   0
   7  12  17    7023  -74.45 +/- 0.18  -74.25 +/- 0.20  -74.35 +/- 0.18   0.5  0.540      73.0  500. 15.80    0.80   1      1   0
   7  12  18    7051  -74.85 +/- 0.20  -74.75 +/- 0.20  -74.80 +/- 0.20   1.8  0.140      73.0  500. 13.90    0.45   1      1   0
   7  13  17    7063  -75.05 +/- 0.18  -74.80 +/- 0.18  -74.90 +/- 0.18   1.5  0.510      73.0  500. 15.90    0.67   1      1   0
   7  15  14    7126   76.30 +/- 0.20   76.20 +/- 0.20   76.25 +/- 0.20   1.0  0.470      73.0  500. 15.50    0.98   0      0   0
   7  15  20    7146   76.50 +/- 0.20   76.30 +/- 0.20   76.40 +/- 0.20   1.4  0.550      73.0  500. 16.00    0.64   0      1   0
   7  15  21    7177   76.30 +/- 0.20   76.30 +/- 0.20   76.30 +/- 0.20   0.4  0.230      73.0  500. 14.50    0.52   0      1   0
   7  22  08    7189  -71.30 +/- 0.20  -71.10 +/- 0.20  -71.20 +/- 0.20   1.8  0.580      73.0  500. 15.75    0.92   1      1   1
</pre>
where the date is given in the first three columns, the polarizations for 2 definitions of the target angle and their
average are presented in the columns called "Pol 1" etc., and the additional attenuation parameter
is shown in the column called "loss". 
<p>
The Møller results, along with the Mott polarimeter results and indications of injector changes
are presented on a <a href="../plots/happex_july_1999.pdf">plot</a>.
</div>
<?php
PageEnd();
