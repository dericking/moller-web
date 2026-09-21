<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E06-014 d2n, Feb - Mar 2009');
PageDate('Thu, 12 March 2009');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for  
<a href="http://hallaweb.jlab.org/experiment/E06-014/">E06-014 d2n</a>
running in  February - March 2009. 
<p>

The Møller results are presented in a table below and on a <a href="plots/e06-014.pdf">plot</a>.  <br>

<pre>
  #    date day      Møller       Møller with HALLA:p  Syst.err.  WienF 
                                   
  --------------------------------------------------------------------- 
  1  02.07    2  -75.39 +/- 0.11    -79.40 +/- 0.11    +/- 2.0%    30.0
  2  02.09    4  -71.62 +/- 0.13    -71.70 +/- 0.13    +/- 2.0%    30.0
  3  02.11    6  +73.38 +/- 0.15    +74.72 +/- 0.15    +/- 2.0%    23.0
  4  02.19   14  -74.05 +/- 0.11    -74.49 +/- 0.11    +/- 2.0%    23.0
  5  03.03   26  -80.32 +/- 0.12    -79.65 +/- 0.12    +/- 2.0%    30.0
  6  03.06   29  +65.29 +/- 0.11    +63.93 +/- 0.11    +/- 2.0%   -18.0  
  7  03.12   35  -60.79 +/- 0.13    -60.79 +/- 0.13    +/- 1.7%    21.2 
</pre>

* day -                 day of experiment running <br>
* Møller with HALLA:p - Møller results corrected on beam energy fluctuation
* WienF - Wien filter angle, deg 



<p>
       <b> Measurement 2</b> <br>
       1 pass.
</p>
<p>
       <b> Measurement 3</b>  <br>
       Mini spin dance. Wien angle 23deg was choosen.
</p>

<p>
       <b> Measurements  6 and 7 </b> <br>
       4 passes.
</p>
<p>
       <b> Measurement 7: </b> <br> The beam energy was stable (fluctuation was less than +/-0.1MeV). 
         The beam energy correction for the Møller results is not needed. Systematic error is 1.7%
</p>
<p>
 The details of the measurements can be found 
<a href="http://www.jlab.org/~moller/raw_results.html">here</a>.
</p>
</div>
<?php
PageEnd();
