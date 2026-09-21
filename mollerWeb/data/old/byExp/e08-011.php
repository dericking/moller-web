<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E08-011 PVDIS, November - December 2009');
PageDate('Fri, 22 October 2010');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for  
   <a href="http://www1.jlab.org/Ul/ul_office/experimentdb/view_experiment_detail.cfm?paperid=PR-08-011">E08-011 PVDIS</a>
   running in November 02  - December 23, 2009. 
<p>

   The Møller results are presented in a table below and on a <a href="plots/e08-011.pdf">plot.pdf</a> or  <a href="plots/e08-011.png">plot.png</a>  <br>

	<br>
	For PVDIS experiment the Møller measurements results were reanalyzing in summer 2010. New analysis includes 
        more accurate beam polarization calculation by using scalers fit and more detailed systematic error analysis. <br>
        PVDIS was running at 5 passes. Møller measurements were done at beam current ~1microA. Hall C was not running all 
        the time. 
        Due to that, Hall A and Hall C energy locks were not available for the Møller measurements for the most of measurements. <br>
        ARC2 energy lock was used for the Møller measurements. This lock is available beginning the beam current 1microA. 
        Due to that most of Møller were done only with using two thinnest Møller targets (target 5 - Supermendur 7microns, and target 4 - Iron 
        9microns). Special study shows that  difference in results of the beam polarization measurement with using two targets 
       (4 and 5) and all four targets is ~0.2%. <br>
        For the most of measurements ARC2 lock was not able to provide required stability of the beam energy and the same 
        beam energy as for PVDIS. For that measurements Møller results correction on the beam energy precession have been done. 
	<br>

<pre>
  #    date      day*   raw polar.  Cor. polar  Stat.err.   Syst.err.  
                                   
  --------------------------------------------------------------------- 
  1  11.06.2009    5     +87.33       +87.76    +/- 0.09    +/- 2.0%    
  2  11.12.2009   11     +89.10       +88.17    +/- 0.10    +/- 2.0%
  3  11.17.2009   16     -89.42       -88.73    +/- 0.12    +/- 2.0%
  4  11.24.2009   23     +87.19       +87.54    +/- 0.12    +/- 2.0%    
  5  11.30.2009   29     +87.78       +88.88    +/- 0.12    +/- 2.0%
  6  12.02.2009   32     -89.34       -89.88    +/- 0.14    +/- 2.0%
  7  12.10.2009   40     +88.24       +88.24    +/- 0.10    +/- 1.7%
  8  12.16.2009   46     -90.49       -91.13    +/- 0.11    +/- 2.0%
  9  12.18.2009   48     +90.40       +90.40    +/- 0.11    +/- 1.7% 
</pre>

  * day - day of experiment running <br>
         11.04 - The first Møller measurement. The measurement time was dedicated to the Møller tuning and study. 
         The beam polarization measurement was not done. <br>
         11.06 - The beam polarization measurement with all four Møller targets was done. <br>
         12.02 - Three points spin dance. <br>
         12.10 - Study of the beam polarization dependence of the injector laser phase. Hall C energy lock was used. Due 
                 to that the beam energy was stable and the Møller data correction was not needed. The beam 
                 polarization measurement with all four Møller targets was done. <br>
         12.16 - Beam energy fluctuation was very large. <br>
         12.18 - Hall C energy lock was used. Due to that the beam energy was stable and the Møller data correction 
                 was not needed. The beam polarization measurement with all four Møller targets was done. <br>
<p>
 The details of the measurements can be found 
<a href="http://www.jlab.org/~moller/2009_raw_results_archive.html">here</a>.
</p>
</div>
<?php
PageEnd();
