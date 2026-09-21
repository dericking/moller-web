<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Measurements for E08-027 (g2p) and E08-007, February 16 - May 17, 2012');
PageDate('February, 26 2013');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
The summary is given of the M&#248;ller measurements done for  
   <a href="http://hallaweb.jlab.org/experiment/E08-027/">E08-027 G2P</a> and 
   <a href="http://hallaweb.jlab.org/experiment/E08-007/">E08-007</a>
   experiments. Both experiments were running in the Hall A on period February 16  - May 17, 2012. 
<p>

     The M&#248;ller results are presented in a table below and on the <a href="plots/e08-027.pdf">plot.pdf</a> or  
      <a href="plots/e08-027.png">plot.png</a>  <br>

<pre>
 Summary for the M&#248;ller measurements for E08-027 G2P and E08-007 
  #    date            M&#248;ller         Syst.err.     Comments
  --------------------------------------------------------------------- 
  1  03.03.2012    -79.91 +/- 0.20    +/- 1.7%
  2  03.30.2012    -80.43 +/- 0.46    +/- 1.7%   IHWP=IN
  3  03.30.2012    +79.89 +/- 0.58    +/- 1.7%   IHWP=OUT
  4  04.10.2012    -88.52 +/- 0.30    +/- 1.7%   
  5  04.23.2012    +89.72 +/- 0.29    +/- 1.7% 
  6  05.04.2012    -83.47 +/- 0.57    +/- 1.7%   IHWP=OUT PAS=OUT  Wien=-60.85
  7  05.04.2012    -81.82 +/- 0.59    +/- 1.7%   IHWP=OUT PAS=IN   Wien=-60.85
  8  05.04.2012    +80.40 +/- 0.45    +/- 1.7%   IHWP=IN  PAS=OUT  Wien=-60.2 
  9  05.15.2012    +83.59 +/- 0.31    +/- 1.7%    
</pre>
   05.04 - Spin dance <br>   

<p>
   The details of the measurements can be found  
   <a href="http://hallaweb.jlab.org/equipment/M&#248;ller/2012_raw_results_archive.html">here</a>.
 </p>

	<p>
        <i>Systematic error.</i> Low field (tilted) <a href="http://hallaweb.jlab.org/equipment/M&#248;ller/new_target.html">polarized electron target</a> was used for the beam polarization measurements at the period of 
        E08-007\E08-027  
        experiments running. The target has four foils made of different materials (pure Iron and Supermendur alloy) 
        and with different thicknesses. Usually averaged result of the beam polarization measurement with all four foils 
        is used. Due to a different foils thickness the beam current 0.2&#45;0.5&mu;A is required for the beam 
        polarization measurements with all four foils.
        <br>
        E08-007\E08-027 experiments were done at low beam current  ~0.1&mu;A. Due to that only one foil 
        (foil &#35;2 Supermendur alloy 29.4&mu;m) was used to reduce time of the beam polarization measurements. 
        <br>
        The <a href="plots/t25_sum2.pdf">plot.pdf</a> or the <a href="plots/t25_sum2.png">plot.png</a> is a summary of 
        a five years of the low field polarized electron target running. As it is seen from the plot a difference between 
        the results of the beam polarization measurements with averaging of all four foils and with only foil &#35;2 is 
        <0.1%. Thus, systematic error of the beam polarization measurements with the foil &#35;2 for the period of 
        E08-007\E08-027 experiments running was 1.7% - the same as for the measurements with all four foils.
        </p>
        <p>
        Two beam charge asymmetry tests (January 31 and March 03) were done at the period of the experiments running to 
        prove a correct sign of the measured beam polarization. 
        </p>
         
        <p>
        At the experiments running period Hall C was running with very high beam current ~100&mu;A. The beam bleed-through 
        measurements were done for all beam polarization measurements except the first one (March 3). The results of the beam 
        bleed-through measurement are summarized in the table bellow.
        </p>

<pre>
 Summary for the beam bleed-through measurements for E08-027 G2P and E08-007 
  #    date          Bleed-through      Slit          Comments
  --------------------------------------------------------------------- 
  1  03.30.2012      (+2.5 +/- 44)%     15.15       as experiment running
  2  03.30.2012      (-2.1 +/- 3.0)%    -1.0        fully open
  3  04.10.2012      (-3.3 +/- 2.6)%    -1.0        fully open
  4  04.23.2012       (-15 +/- 87)%     14.0        as experiment running
  5  05.04.2012       (-14 +/- 102)%    -1.0        fully open
  6  05.15.2012      (-1.0 +/- 3.8)%    -1.0        fully open    
</pre>

      <p>
     Large statistical errors of the bleed-through measurements is a result of combination of very low bleed-through current 
     and 1kHz helicity frequency. As the result of this combination rate per helicity cycle was ~1.3 electrons. Thus, the 
     beam asymmetry/polarization distribution was extremely wide (see on the <a href="plots/bleedthrough.png">plot.png</a> the beam asymmetry distribution for one of the bleed-through measurement runs). As it is seen from the picture 
     the beam asymmetry value is more than order smaller than RMS/error. A few hours of the bleed-through measurements 
     could help to reduce the statistical error.
      
      </p>

       <p>
       The beam current for the experiments running and the beam polarization measurements was the same. The beam energy 
       at the periods of the beam polarization measurements was stable. Thus no correction on the beam fluctuation was needed.
        </p>

        Spin dance measurement was done on May 4. The result is shown on the <a href="plots/spin_prec_17.pdf">plot.pdf</a>
	<br>
</div>
<?php
PageEnd();
