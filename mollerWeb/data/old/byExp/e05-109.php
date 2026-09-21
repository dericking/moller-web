<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E05-109 HAPPEX-III: A Measurement of Nucleon Strange Form Factors at High Q2 , August - October 2009');
PageDate('Fri, 26 October 2010');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for  
   <a href="http://www1.jlab.org/Ul/ul_office/experimentdb/view_experiment_detail.cfm?paperid=PR-05-109">E05-109 HAPPEX-III</a>
   running on August 21  - October 25, 2009. 
<p>

   The Møller results are presented in a table below and on plots <a href="plots/e05-109.pdf">1</a> 
   and  <a href="plots/e05-109-1.pdf">2</a> <br>

	<br>
	The Møller measurements results for HAPPEX-III running time were reanalyzing in summer 2010. New analysis includes 
        more accurate beam polarization calculation by using scalers fit and more detailed systematic error analysis. <br>
	<br>

<pre>
  #    date       Beam Polar.  Stat.err.  Syst.err.  Wien,deg                    
  ---------------------------------------------------------------
  1  08.27.2009    -79.07     +/- 0.11    +/- 1.7%    44.3048
  2  08.28.2009    -79.89     +/- 0.09    +/- 1.7%    44.3048
  3  08.31.2009    -88.65     +/- 0.11    +/- 1.7%    14.20
  4  09.05.2009    -89.69     +/- 0.10    +/- 1.7%    17.20
  5  09.11.2009    +89.86     +/- 0.10    +/- 1.7%    17.20
  6  09.17.2009    -88.73     +/- 0.10    +/- 1.7%    17.20
  7  09.23.2009    -89.41     +/- 0.10    +/- 1.7%    17.20
  8  10.04.2009    -89.45     +/- 0.09    +/- 1.7%    17.20
  9  10.11.2009    +88.92     +/- 0.10    +/- 1.7%    17.20
 10  10.13.2009    -88.79     +/- 0.11    +/- 1.7%    17.20
 11  10.22.2009    -89.49     +/- 0.09    +/- 1.7%    17.20
</pre> 
<p>
         08.31 - Spin dance. Wien filter angle change. <br>
         09.05 - New Wien filter angle. <br>
         09.11 - 86.12 +/- 1.28stat +/- 1.03sys (IHWP=OUT). <br>
         09.17 - Mott: 84.21 +/- 2.01stat +/- 1.01sys (IHWP=OUT, after beam spot move). <br>
         09.23 - Mott: 86.63 +/- 0.93stat +/- 1.04sys (IHWP=IN). <br> 
         10.04 - Mott: 84.08 +/- 1.01stat +/- 1.01sys (IHWP=IN, after beam spot move). <br>
         10.13 - Hall A: 12 October beam spot move was done. <br>
                 MOTT: IHWP=IN, Mott Data Taken: 16Oct09 08:36:28, Polarization: (86.38 +/- 0.92stat +/- 1.04sys) % <br>
                 Hall A: IHWP=OUT, Mott Data Taken: 16Oct09 08:43:48, Polarization: (85.62 +/- 0.87stat +/- 1.03sys) % <br>
                 Mott: (IHWP=IN) 86.38 +/- 0.92stat +/- 1.04sys <br>
         10.22 - Measurement was done after power outage (22 October). <br>
         10.25 - Hall A laser phase study. No beam polarization measurement was done. <br>
<p>
        The details of the measurements can be found 
        <a href="http://www.jlab.org/~moller/2009_raw_results_archive.html">here</a>.
</p>
</div>
<?php
PageEnd();
