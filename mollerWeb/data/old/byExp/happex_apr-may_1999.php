<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for HAPPEX, Apr-May 1999');
PageDate('Mon, 16 July 1999');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for the first period of 
<a href="http://www.jlab.org/~parity/">HAPPEX</a> running in 1999.
<p>
The longitudinal beam polarization is calculated as: <br>
<i>P=A/P<sub>targ</sub>/cos(a)/Azz</i>, <br>
where
<ul>
   <li> <i>A</i> is the asymmetry observed
   <li> <i>P<sub>targ</sub></i> is the target polarization. We used a constant value of 
         <i>P<sub>targ</sub></i>=7.6% for all the data
   <li> <i>a</i> is the target angle with respect to the beam. This value was observed
        on a dial attached to the target mechanism and also was calculated using
        the measured counting rates at the given target position and at 90<sup>o</sup>.
        In order to reduce the systematic error we always took an average of two measurements:
        one at about 20<sup>o</sup> and another at about 160<sup>o</sup>. 
   <li> <i>Azz</i> is the analyzing power
</ul>
<p>
It turned out that the polarization measured may depend on the slit-attenuator configuration 
in the injector (see the details <a href="http://www.jlab.org/~moller/laser_phase.html">here</a>),
namely on the phase of the laser. Summarizing, the results look as follows:
<ul>
   <li> The beam current dependence on the phase has a plateau area and a lower tail 
        (<10-20% of the plateau) 
        at least from one of the sides.  
   <li> The beam polarization stays flat on the plateau and drops by about 5% on the tail.
        The tail if included "dilutes" the polarization by about 0.5%.   
   <li> For HAPPEX data taking the slit was fully opened and all the beam passed through.
        The average beam polarization does not depend on the phase of the laser.
   <li> The Møller measurements were done using a narrow slit, therefore selecting
        only a small part of the beam "time" profile. In case the default phase 
        was on the tail (as it happened on May,26 of 1999) the polarization measured
        would be about 5% lower than the average polarization "used" by HAPPEX.
</ul>
The Møller measurements for HAPPEX were taken without concidering the effect 
of the phase. However, the values of the beam current, laser power, laser attenuation and 
the slit widths were recorded for each run making it possible to reconstruct whether
the measurement was done on the plateau or on the tail. Typically, at the tail 
the slit width should be about 5 times larger than at the plateau.
<p>
In order to filter the measurements done for HAPPEX, looking for those likely
been done on the tail, we used 3 values, stored for every run: the beam current,
the laser attenuation and the slit parameter. Assuming that no other parameter
but the laser attenuation and the slit could change the beam current, we
found a factor of the "additional" beam attenuation, atributed to the phase
position off the peak, normalizing to a run definitely taken on the peak.
The definite "tail" run had this factor of about 0.2, consistent
with the the plot 1). This "attenuation factor" is used to select the measurements
taken on the tail. The best we can do is to reject these measurements.
<p>
<pre>
The <a href="http:tab/happex_1_sum_3.tab">table</a> of all the measurements is shown here:
   m   d   h   1-st run   Pol 1            Pol 2            Pol aver     chi2   uA   Las:power atten slit     loss  1/2wave B   C
   4   2  17    5898   66.92 +/- 0.17   67.72 +/- 0.17   67.32 +/- 0.17   0.8  0.274      -1.0   -1. -1.00    1.00   1      0   0
   4   7  13    5948  -67.10 +/- 0.21  -67.60 +/- 0.21  -67.35 +/- 0.21   4.2  0.156      -1.0   -1. -1.00    1.00   0      0   0
   4  10  14    6007  -67.54 +/- 0.10  -67.23 +/- 0.10  -67.38 +/- 0.10   1.7  0.494      60.0  600. 15.70    0.83   0      1   1
   4  16  21    6059  -69.25 +/- 0.13  -68.97 +/- 0.13  -69.11 +/- 0.13   0.7  0.522      88.0  600. 14.80    1.33   0      1   1
   4  19  20    6089   69.80 +/- 0.14   69.85 +/- 0.14   69.82 +/- 0.14   2.1  0.515      88.0  600. 15.10    1.36   1      1   1
   4  21  22    6110  -70.45 +/- 0.14  -70.40 +/- 0.14  -70.42 +/- 0.14   0.4  0.498      90.0  600. 15.00    1.32   0      1   1
   4  23  23    6134   68.60 +/- 0.14   68.50 +/- 0.14   68.55 +/- 0.14   0.7  0.508      92.0  600. 15.00    1.35   1      1   1
   4  26  19    6158  -67.65 +/- 0.14  -67.50 +/- 0.14  -67.57 +/- 0.14   2.5  0.549      94.0  500. 16.30    0.46   0      1   1
   4  30   9    6185   70.55 +/- 0.14   69.85 +/- 0.14   70.20 +/- 0.14   0.7  0.499      75.0  500. 15.60    0.94   1      0   1
   4  30  22    6205   70.80 +/- 0.14   70.80 +/- 0.14   70.80 +/- 0.14   0.5  0.511      75.0  400. 15.50    1.26   1      0   0
   5   3  22    6222  -73.00 +/- 0.18  -72.90 +/- 0.18  -72.95 +/- 0.18   1.5  0.396      75.0  500. 15.10    1.04   0      1   1
   5   5   9    6249   73.30 +/- 0.16   73.20 +/- 0.16   73.25 +/- 0.16   1.6  0.539      75.0  280. 16.50    0.72   1      0   0
   5   7  12    6268  -73.31 +/- 0.19  -73.27 +/- 0.19  -73.29 +/- 0.19   0.8  0.340      74.0  500. 15.10    0.90   0      0   0
   5  10  18    6287  -73.73 +/- 0.18  -73.39 +/- 0.18  -73.56 +/- 0.18   0.7  0.327      74.0  500. 15.70    0.55   0      1   1
   5  14  23    6359   69.03 +/- 0.16   67.82 +/- 0.16   68.43 +/- 0.16   2.3  0.550      74.0  490. 15.45    1.21   1      0   1
   5  16  15    6378   66.20 +/- 0.17   66.05 +/- 0.17   66.12 +/- 0.17   0.5  0.385      75.0  600. 16.25    0.34   1      1   0
   5  17  19    6420   69.18 +/- 0.16   68.87 +/- 0.16   69.02 +/- 0.16   1.6  0.424      75.0  500. 15.50    0.88   1      1   1
   5  18  21    6452  -69.82 +/- 0.17  -69.57 +/- 0.17  -69.70 +/- 0.17   2.2  0.400      75.0  500. 15.00    1.06   0      1   1
   5  20   9    6501   69.60 +/- 0.16   69.43 +/- 0.17   69.52 +/- 0.16   1.0  0.410      75.0  500. 15.00    1.09   1      0   0
   5  20  11    6527   67.47 +/- 0.16   67.11 +/- 0.16   67.29 +/- 0.16   0.7  0.452      75.0  500. 15.25    1.13   1      1   0
   5  22  20    6538   68.46 +/- 0.18   68.36 +/- 0.18   68.41 +/- 0.18   0.7  0.415      75.0  500. 16.10    0.43   1      1   1
   5  25   9    6558  -67.09 +/- 0.20  -66.81 +/- 0.20  -66.95 +/- 0.20   0.3  0.319      75.0  500. 15.99    0.38   0      1   1
   5  26   9    6648   66.46 +/- 0.15   65.72 +/- 0.18   66.16 +/- 0.16   1.3  0.501      75.0  500. 17.30    0.24   1      1   1
   5  27   9    6885   70.70 +/- 0.16   70.47 +/- 0.16   70.59 +/- 0.16   0.7  0.441      75.0  500. 15.40    1.00   1      1   1
</pre>
where the date is given in the first three columns, the polarizations for 2 definitions of the target angle and their
average are presented in the columns called "Pol 1" etc., and the additional attenuation parameter
is shown in the column called "loss". The result obtained on May,26 was definitely taken on the tail (loss=0.24),
while the one from May,27 was taken on the peak (loss=1, by normalization). 
We suggest to make a cut loss>0.5 (about 2*0.24) in order to select measurements on the peak.
5 measurements are rejected by such a cut.
<p>
The Møller results, along with the Mott polarimeter results and indications of injector changes
are presented on a <a href="../plots/happex_apr-may_1999.pdf">plot</a>. 
The PAW macro which creates this plot is available from E.Chudakov.
</div>
<?php
PageEnd();
