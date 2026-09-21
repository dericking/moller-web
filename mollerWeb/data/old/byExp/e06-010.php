<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E06-010 Transversity, Oct 2008 - Feb 2009');
PageDate('Thu, 04 March 2009');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for  
<a href="http://hallaweb.jlab.org/experiment/transversity/body.html">E06-010 Transversity</a>
running in October 2008 - February 2009. 
<p>

The Møller results are presented in a table below and on a <a href="plots/e06-010.pdf">plot 1</a> 
and <a href="plots/e06-010_1.pdf">plot 2</a>. <br>

<pre>
  #    date      day*      Møller      Møller with HALLA:p  Syst.err.  
                                   
  --------------------------------------------------------------------- 
  1  11.02.2008   12  +88.09 +/- 0.17    +88.09 +/- 0.17    +/- 1.7%
  2  11.12.2008   22  -74.85 +/- 0.10    -79.47 +/- 0.10    +/- 2.0%    
  3  11.17.2008   27  -74.03 +/- 0.10    -79.63 +/- 0.10    +/- 2.0%
  4  11.20.2008   30  -74.15 +/- 0.13    -76.94 +/- 0.13    +/- 2.0%
  5  11.28.2008   38  +80.26 +/- 0.11    +78.03 +/- 0.11    +/- 2.0%    
  6  12.08.2008   48  -53.81 +/- 0.11    +54.10 +/- 0.11    +/- 2.0%    
  7  12.09.2008   49  -78.65 +/- 0.10    +79.08 +/- 0.10    +/- 2.0%    
  8  12.17.2008   57  -79.59 +/- 0.18    -78.47 +/- 0.16    +/- 2.0%    
  9  01.13.2009   63  -81.12 +/- 0.15    -79.88 +/- 0.16    +/- 2.0%    
 10  01.24.2009   74  -78.55 +/- 0.16    -79.88 +/- 0.16    +/- 2.0%
 11  02.03.2009   85  -75.84 +/- 0.16    -79.14 +/- 0.16    +/- 2.0%    

</pre>

* day - day of experiment running <br>
<p>
       <b> Measurement 1:</b> (11.02.2008) <br>
       There is no energy fluctuation. Beam energy correction was not done.
</p>
<p>
       <b> Measurements 2 - 11 </b> <br>
       The Møller measurements 2-8 were done at ~0.5uA curent. At this current HALLA:p energy reading is more noisy and for a part of 
       measurements energy correction can not be correctly done at all. This is the reason to increase systematic error from 1.7% to 2.0%.
</p>
<p>
        <b> Measurement 6: </b> (08.12.2008): <br>
        From Eugine's words the beam polarization was low due to the injector problem.
</p>
<p>
       <b> Measurement 9: Spin Dance </b> (01.13.2009) <br>
       The plot is given <a href="plots/spin_prec_13.pdf">here</a>.
</p>


<p>
 The details of the measurements can be found 
<a href="http://www.jlab.org/~moller/raw_results.html">here</a>.
</p>
</div>
<?php
PageEnd();
