<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E06-002 PREX, March - June 2010');
PageDate('Mar, 07 2011');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
Here a summary is given of the Møller measurements done for  
   <a href="http://hallaweb.jlab.org/parity/prex/">E02-006 PREX</a>
   running on March 11  - June 20, 2010. 
<p>

       The Møller results are presented in a table below and on the <a href="plots/e06-002.pdf">plot.pdf</a> or  
        <a href="plots/e06-002.png">plot.png</a>  <br>

	<br>
        For PREX new 'BRUTE FORCE' Møller target was built and installed. It uses a superconducting magnet for the Møller target magnetization 
        saturation. Two alignments of the magnet magnetic field were done by alignment group (March 30 and April 16). <br>
        Three different Møller quads settings were used for PREX running period. Different combinations of the magnet alignment and quads 
        settings require using different analyzing power value for the Møller data analyzes. 
        The most of Møller measurement were done at 3T magnetic field. As it was shown later, the Møller target was not fully saturated 
        at this magnetic field. Due to that, correction on the target saturation was done for 3T measurements. <br>
        As a result of combination of low beam energy, different quads setting and magnet misalignment, we had different Levchuk-effect 
        ( <a href="http://www-spires.slac.stanford.edu/spires/find/hep?key=2623820">ref1</a> and 
         <a href="http://www-spires.slac.stanford.edu/spires/find/hep?key=3299120">ref2</a>) contribution for different magnetic fields. <br>
        Corrections of the Møller results on all of the effects were done. <br>
        More information about the corrections and systematic error is given 
         <a href="http://hallaweb.jlab.org/equipment/moller/Talks/PREX_Col_01_29_2011.pdf">here</a>. <br>
         Beam polarization measurements with the Møller polarimeter were done at the beam current 1.5-3.0uA. Beam current for PREX data 
         taken was about 50uA. Possible systematic error caused by the beam current difference was studied in the 
         <a href="http://www-spires.slac.stanford.edu/spires/find/hep?key=7314590">ref</a>. Summary of the test with three different 
         methods of the beam current adjustment is presented on the <a href="plots/hi_current.pdf">plot</a>. From the plot a contribution 
         to the systematic error due to the beam current difference for PREX running and Møller measurements is +/-0.3%. The total 
         systematic error (including the beam current correction) is 1.12% 
	<br>

<pre>
  #    date      raw polar.  Cor. polar*  Stat.err.   Syst.err.  Wien filter 
                                   
  --------------------------------------------------------------------- 
  1  04.03.2010    -85.31       -84.85    +/- 0.10    +/- 1.12%   -59.0 
  2  04.05.2010    -88.71       -87.24    +/- 0.20    +/- 1.12%   -52.0
  3  04.17.2010    -88.53       -89.08    +/- 0.14    +/- 1.12%   -52.0
  4  04.22.2010    +90.58       +90.88    +/- 0.14    +/- 1.12%   -52.0   
  5  04.28.2010    -89.30       -89.60    +/- 0.12    +/- 1.12%   -52.0
  6  05.05.2010    -91.00       -90.39    +/- 0.15    +/- 1.12%   -52.0
  7  05.08.2010    +90.89       +90.29    +/- 0.15    +/- 1.12%   -52.0
  8  05.15.2010    -92.49       -89.94    +/- 0.16    +/- 1.12%   -52.0
  9  06.07.2010    -91.37       -90.49    +/- 0.11    +/- 1.12%   -52.0
</pre>

  * Levchuk-effect and target saturation corrections <br>
         03.30 - New Møller magnet alignment test. <br>
         03.31 - New Møller detector HV adjustment. <br>
         04.03 - The first Møller measurement with 'BRUTE FORCE' target. Target saturation test <br>
         04.05 - Spin dance <br>
         04.17 - New SC magnet alignment.  <br>
         04.22 - Møller quads scan. Change Q1 setting <br>
         04.28 - EXPERT mode test (9uA of the beam current). <br>
         05.05 - New Q1 setting. EXPERT mode test. <br>
         05.08 - Møller quad Q1 scan. Target position test. <br>
         05.15-16 - Target saturation test <br>
         06.06 - The beam large charge asymmetry test. <br>
         06.07 - Repeat the beam large charge asymmetry test. Target saturation test. <br>

<p>
 The details of the measurements can be found 
<a href="http://www.jlab.org/~moller/2010_raw_results_archive.html">here</a>.
</p>
</div>
<?php
PageEnd();
