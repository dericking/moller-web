<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E02-013 Gen, February - May 2006');
PageDate('Fri, 14 August 2009');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for  
<a href="http://hallaweb.jlab.org/experiment/E02-013/">E02-013 Gen</a>
running in February 24 - May 12, 2006. 
<p>

The Møller results are presented in a table below and on a <a href="plots/e02-013.pdf">plot</a>. 
	<br>
	For Gen experiment the Møller measurements results were reanalysing in August 2009. New analysis includs more accurate target polarization, 
target position, beam position, target angle 20.5deg etc.
	<br>

<pre>
  #    date      day*      Møller       Syst.err.  
                                   
  --------------------------------------------------------------------- 
  1  02.28.2006    2  -88.43 +/- 0.08    +/- 2.0%
  2  03.04.2006    6  +87.81 +/- 0.10    +/- 2.0%    
  3  03.09.2006   11  -85.05 +/- 0.08    +/- 2.0%
  4  03.25.2006   27  -81.65 +/- 0.09    +/- 2.0%
  5  05.10.2006   73  -85.27 +/- 0.06    +/- 2.0%    
  6  05.12.2006   75  +84.77 +/- 0.20    +/- 2.0%       

</pre>

* day - day of experiment running <br>

<p>
 The details of the measurements can be found 
<a href="http://www.jlab.org/~moller/raw_results.html">here</a>.
</p>
</div>
<?php
PageEnd();
