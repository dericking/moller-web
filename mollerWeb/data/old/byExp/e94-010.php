<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E94-010, Sep-Dec 1998');
PageDate('Fri, 16 July 1999');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for 
<a href="http://www.jlab.org/~incerti/">E94-010</a> running in 1998.
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
namely on the phase of the laser. At the E94-010 period no note of the injector
settings were done and it is not possible to reconstruct the phase-attenuator-slit
configuration. However, since the current for the experiment was about 15uA only,
one may expect that the phase was tuned to the middle of the distribution.
<p>
 For the first period of 1.7 GeV 7 Møller measurements have been done. The beam tune
 was not very good during this period (once the Møller detector was damaged
 by radiation). This lead to difficulties in measuring the target angle 
 using the event rates. Therefore the statistical error for these 7 points
 is increased by adding to it 0.5% (absolute) in quadratures. 
<p>
<pre>
 day, since Sep 1   Polarization  sign
      28.7         69.5 +/- 0.6    -1.
      29.5         68.1 +/- 0.6    -1.
      31.7         68.0 +/- 2.1    -1.
      33.8         68.0 +/- 0.6     1.
      35.7         67.5 +/- 0.5     1.
      41.9         67.8 +/- 0.6     1.
      44.7         68.1 +/- 0.6     1.
      46.5         69.7 +/- 0.4     1.
      48.1         71.7 +/- 0.2     1.
      53.8         71.7 +/- 0.2     1.
      57.8         72.6 +/- 0.2     1.
      61.5         73.1 +/- 0.2     1.
      67.7         73.1 +/- 0.2    -1.
      70.3         72.9 +/- 0.2    -1.
      74.3         72.1 +/- 0.2    -1.
      84.3         73.2 +/- 0.3     1.
      93.4         70.2 +/- 0.2    -1.
      95.5         70.8 +/- 0.2    -1.
     100.5         70.6 +/- 0.2    -1.
     100.9         71.0 +/- 0.2     1.
     104.6         72.3 +/- 0.2     1.
     106.9         73.0 +/- 0.2    -1.
     110.7         71.4 +/- 0.2    -1.
     111.9         73.2 +/- 0.2    -1.
     113.7         71.3 +/- 0.2    -1.
     115.2         72.4 +/- 0.2    -1.
</pre>
<p>
The Møller results, along with the Mott polarimeter results
are presented on a 
<a href="../plots/e94-010.pdf">plot</a>. 
The PAW macro which creates this plot is available
<a href="http:e94-010_summ.kumac">here</a>.
</div>
<?php
PageEnd();
