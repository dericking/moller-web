<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter Raw Results Archives 1999');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<section class="legacy-shift" id="20jan99">
    <h3>21 Jan 1999</h3>
    <p class="legacy-shift-crew">20:20-00:20 The beam energy is 0.778 GeV, one linac is 0.368 GeV. The injector angle</p>
    <p>
    is
            -55.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>, the additional 1/2 wave filter was in (?).
           No Mott measurement has been done. 
           <p>
           <table border>
           <caption align="top"> HV </caption>
           <tr>               <th> GeV   <th> 1    <th> 2    <th> 3    <th> 4    <th> 5    <th> 6    <th> 7    <th> 8    </tr>
           <tr align="right"> <td> 0.778 <td> 1948 <td> 1883 <td> 1885 <td> 1875 <td> 1874 <td> 1881 <td> 1899 <td> 1915 </tr>
           </table>
           <p>
           <table border>
           <caption align="top"> Quads </caption>
           <tr>               <th> Quad   <th> 1     <th> 2     <th> 3     <th> Dipole  </tr>
           <tr align="right"> <td> kGs    <td> 1.372 <td> 0.0   <td> 0.190 <td> 1.418   </tr>
           <tr align="right"> <td> GL/BdL <td> 12380 <td> 0.    <td>  1376 <td> 233000 </tr>
           </table>
           <p>
           The dipole field was increased with respect to the regular one (from 222400) in order to get
           all the acceptance into 2 middle rows of LG. The counters LG 1,4,5, and 8 were turned off.
           This helps to reduce the background by about a factor of 2 in one arm and does not affect
           the coinsidence (see the LG <a href="../plots/lg_spectra_5059.pdf">spectra</a>).
           <p>
           There are problems measuring the target angle using the rates. We suppose that the dead 
           time starts playing an important role and reduces the rates at low angles. At 0.1uA beam
           the rate of an apperture counter is about 0.8M/sec at a target angle of 30<sup>o</sup>.
           
           <p>
           The target angles and the polarization were measured:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-7<sup>o</sup>? and the mean analysing power is 0.772 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5040-5041 <td>  88.5 <td> -          <td>  -    <td> -          <td> -   </tr>
           <tr align="right"> <td> 5048-5049 <td>  88.5 <td> -          <td>  -    <td> -          <td> -   </tr>
           <tr align="right"> <td> 5034-5039 <td>  25.5 <td> 71.2+/-0.3 <td>  27.3 <td> 72.3+/-0.3 <td> 1.  </tr>
           <tr align="right"> <td> 5042-5047 <td> 155.0 <td> 68.7+/-0.3 <td> 149.0 <td> 72.6+/-0.3 <td> 1.  </tr>
           <tr align="right"> <td> Average   <td> -     <td> 70.0+/-0.2 <td> -     <td> 72.5+/-0.2 <td> -   </tr>
           <tr align="right"> <td> 5065-5066 <td>  88.5 <td> -          <td>  -    <td> -          <td> -   </tr>
           <tr align="right"> <td> 5050-5054 <td>  30.0 <td> 72.2+/-0.5 <td>  31.5 <td> 72.5+/-0.5 <td> 1.6 </tr>
           <tr align="right"> <td> 5055-5058 <td>  30.0 <td> 69.8+/-0.6 <td>  30.5 <td> 70.2+/-0.3 <td> 2.2 </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.5026-5068">here</a>.
           <p>
           The final result: -70.0 +/- 0.2(stat) +/- 3.0(syst-prelim)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="26jan99">
    <h3>26 Jan 1999</h3>
    <p class="legacy-shift-crew">12:20-14:30 The beam energy is 0.778 GeV, one linac is 0.368 GeV. The injector angle</p>
    <p>
    is
            -55.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>, the additional 1/2 wave filter was in (?).
           No Mott measurement has been done. 
           <p>
           There are problems measuring the target angle using the rates. 
           Calculation using one arm rates gives reasonable results, but the coincidence rate
           at small target angles is lower than it should, thus giving a larger target angle.
           It may happen because of multiple scattering. Simulation is needed to prove this explanation.
           <p>
           The data were taken at 0.1 and 0.4uA in order to study the rate dependence.
           Unfortunately in between the source people noticed that the crystal temperature
           control was not working and started to change the temperature. Therefore there
           is no conclusion on the rate dependence. 
           <p>
           The target angles and the polarization were measured:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-7<sup>o</sup>? and the mean analysing power is 0.772 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5128-5129 <td>  88.5 <td> 0.1uA      <td>  -    <td> -          <td> -   </tr>
           <tr align="right"> <td> 5116-5127 <td>  25.5 <td> 73.4+/-0.7 <td>  23.0 <td> 72.0+/-0.7 <td> 1.7 </tr>
           <tr align="right"> <td> 5130-5135 <td> 155.0 <td> 69.0+/-0.7 <td> 152.5 <td> 70.5+/-0.7 <td> 2.0 </tr>
           <tr align="right"> <td> Average   <td> -     <td> 71.2+/-0.5 <td> -     <td> 71.2+/-0.5 <td> -   </tr>
           <tr align="right"> <td> 5143-5144 <td>  88.5 <td> 0.4uA      <td>  -    <td> -          <td> -   </tr>
           <tr align="right"> <td> 5145-5148 <td>  25.5 <td> 74.5+/-0.8 <td>  23.0 <td> 73.0+/-0.8 <td> 4.0 </tr>
           <tr align="right"> <td> 5136-5141 <td> 155.0 <td> 72.4+/-0.7 <td> 152.5 <td> 74.0+/-0.7 <td> 2.0 </tr>
           <tr align="right"> <td> Average   <td> -     <td> 73.5+/-0.5 <td> -     <td> 73.5+/-0.5 <td> -   </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.5112-5148">here</a>.
           <p>
           The final result: -72.5 +/- 0.5(stat) +/- 3.0(syst-prelim)<br>
           <p>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="31jan99">
    <h3>31 Jan 1999</h3>
    <p class="legacy-shift-crew">21:40-23:30 The beam energy is 0.778 GeV, one linac is 0.368 GeV. The injector angle</p>
    <p>
    is
            -55.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>, the additional 1/2 wave filter was in (?).
           No Mott results have been reported. 
           <p>
           The target angle was measured using the single arm rates.
           <p>
           Strangely, the LG profiles look different. There is a Møller signal in coincidence in the LG#4 (bottom
           left arm), though there is nothing in the bottom right counter. It looks like the left arm
           particles are shifted down, by 2-3cm. We don't know why.
           <p>
           The target angles and the polarization were measured:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-7<sup>o</sup>? and the mean analysing power is 0.772 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5171-5172 <td>  88.5 <td> 0.1uA      <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster OFF </tr>
           <tr align="right"> <td> 5162-5170 <td>  25.5 <td> 76.6+/-0.4 <td>  22.4 <td> 74.8+/-0.4 <td> 1.0 <td> </tr>
           <tr align="right"> <td> 5173-5178 <td> 155.0 <td> 71.8+/-0.4 <td> 151.7 <td> 73.9+/-0.4 <td> 1.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 74.2+/-0.3 <td> -     <td> 74.3+/-0.3 <td> -   <td> </tr>
           <tr align="right"> <td> 5179-5182 <td> 155.5 <td> 70.9+/-0.5 <td> -     <td> -          <td> 1.6 <td>thr=200mV  </tr>
           <tr align="right"> <td> 5183-5186 <td> 155.0 <td> 72.0+/-0.5 <td> -     <td>            <td> 1.0 <td>thr=140mV, raster ON </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.5159-5186">here</a>.
           <p>
           The final result: -74.2 +/- 0.3(stat) +/- 3.0(syst-prelim)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="04feb99">
    <h3>04 Feb 1999</h3>
    <p class="legacy-shift-crew">20:20-00:20 The beam energy is 1.731 GeV, one linac is 0.420 GeV. The injector angle</p>
    <p>
    is
            20.3<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>, the additional 1/2 wave filter was in (?).
           No Mott measurement has been done. 
           <p>
           <table border>
           <caption align="top"> HV </caption>
           <tr>               <th> GeV   <th> 1    <th> 2    <th> 3    <th> 4    <th> 5    <th> 6    <th> 7    <th> 8    </tr>
           <tr align="right"> <td> 1.731 <td> 1890 <td> 1830 <td> 1837 <td> 1802 <td> 1807 <td> 1818 <td> 1836 <td> 1860 </tr>
           </table>
           <p>
           <table border>
           <caption align="top"> Quads </caption>
           <tr>               <th> Quad   <th> 1     <th> 2     <th> 3     <th> Dipole  </tr>
           <tr align="right"> <td> kGs    <td> 1.992 <td> 0.0   <td> 0.714 <td> 3.012   </tr>
           <tr align="right"> <td> GL/BdL <td> 17980 <td> 0.    <td>  5180 <td> 4948000 </tr>
           </table>
           <p>
           The target angles and the polarization were measured:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5307-5308 <td>  89.0 <td> 0.3uA      <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 5301-5306 <td>  26.0 <td> 69.2+/-0.2 <td>  22.8 <td> 67.5+/-0.2 <td> 1.6 <td> </tr>
           <tr align="right"> <td> 5310-5315 <td> 160.0 <td> 66.1+/-0.2 <td> 156.0 <td> 68.0+/-0.2 <td> 3.8 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 67.7+/-0.15<td> -     <td> 67.7+/-0.15<td> -   <td> </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.5286-5317">here</a>.
           <p>
           The final result: -67.7 +/- 0.15(stat) +/- 3.0(syst-prelim)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="08feb99">
    <h3>08 Feb 1999</h3>
    <p class="legacy-shift-crew">14:50-17:00 The beam energy is 1.731 GeV, one linac is 0.420 GeV. The injector angle</p>
    <p>
    is
            20.3<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>, the additional 1/2 wave filter was in (?).
           No Mott measurement has been done. 
           <p>
           The target angles and the polarization were measured:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5333-5334 <td>  89.0 <td> 0.3uA      <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 5323-5328 <td>  26.0 <td> 70.6+/-0.2 <td>  23.0 <td> 68.9+/-0.2 <td> 0.8 <td> </tr>
           <tr align="right"> <td> 5335-5340 <td> 161.0 <td> 68.3+/-0.2 <td> 157.0 <td> 70.3+/-0.2 <td> 1.5 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 69.5+/-0.15<td> -     <td> 69.6+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 5329-5333 <td>  26.0 <td> 70.6+/-0.2 <td>  23.0 <td> 68.9+/-0.2 <td> 1.8 <td>thresholds=180mV </tr>
           <tr align="right"> <td> 5354      <td>  27.0 <td> 70.7+/-0.4 <td> 0.55uA <td>           <td>      <td>threshold 140mV </tr>
           </table>
           <p>
           No dependence on the LG thresholds were found.
           <p>
           Runs 5345,5345,5347-5349,5355 were taken with LED signals in order to estimate the dead time.
           A preliminary result of 3.5% at 0.3uA and 5.5% at 0.6uA were obtained.
           <p>
           The full information is given
           <a href="../tab/run.tab.5321-5355">here</a>.
           <p>
           The final result: -69.5 +/- 0.15(stat) +/- 3.0(syst-prelim)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="12feb99">
    <h3>12 Feb 1999</h3>
    <p class="legacy-shift-crew">10:20-12:50 The beam energy is 1.731 GeV, one linac is 0.420 GeV. The injector angle</p>
    <p>
    is
            20.3<sup>o</sup>, the 1/2 wave plate was <b>OUT?</b>, the additional 1/2 wave filter was in (?).
           No Mott measurement has been done. 
           <p>
           The target angles and the polarization were measured:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5374-5375 <td>  91.0 <td> 0.24uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 5359-5364 <td>  26.0 <td> 70.4+/-0.2 <td>  23.5 <td> 69.0+/-0.2 <td> 1.8 <td> dead time 2.4%</tr>
           <tr align="right"> <td> 5376-5381 <td> 161.0 <td> 68.5+/-0.2 <td> 158.6 <td> 69.6+/-0.2 <td> 0.5 <td> tagr angle=77 </tr> 
           <tr align="right"> <td> Average   <td> -     <td> 69.5+/-0.15<td> -     <td> 69.3+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 5385-5390 <td> 161.0 <td> 67.3+/-0.2 <td>       <td>            <td> 1.0 <td> 0.58uA, dead time 6.3% </tr> 
           </table>
           <p>
           Some dependence on the beam current is found (due to dead time?).
           <p>
           Runs 5368,5384,5393 were taken with LED signals in order to estimate the dead time.
           A preliminary result of 2.4% at 0.24uA and 6.3% at 0.57uA were obtained.
           <p>
           The full information is given
           <a href="../tab/run.tab.5357-5393">here</a>.
           <p>
           The final result: 69.4 +/- 0.15(stat) +/- 3.0(syst-prelim)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="19feb99">
    <h3>19 Feb 1999</h3>
    <p class="legacy-shift-crew">18:00-22:40 The beam energy is 1.733 GeV, one linac is 0.420 GeV. The injector angle</p>
    <p>
    is
            28.3<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>, the additional 1/2 wave filter was in (?).
           Mott measurement: 
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9902_archive/990217084522.html">70.4%</a>
           <p>
           The target angles and the polarization were measured:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5492-5493 <td>  91.0 <td> 0.38uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 5486-5491 <td>  26.5 <td> 73.5+/-0.2 <td>  23.8 <td> 71.9+/-0.2 <td> 1.8 <td> dead time 3.3%</tr>
           <tr align="right"> <td> 5494-5499 <td> 161.0 <td> 69.5+/-0.2 <td> 159.0 <td> 70.4+/-0.2 <td> 0.5 <td>  </tr> 
           <tr align="right"> <td> Average   <td> -     <td> 71.5+/-0.15<td> -     <td> 71.2+/-0.15<td> -   <td> </tr>
           </table>
           <p>
           Runs 5480,5481,5482 were taken with LED signals in order to estimate the dead time.
           A preliminary result of 3.2% at 0.37uA.
           <p>
           The full information is given
           <a href="../tab/run.tab.5454-5501">here</a>.
           <p>
           The final result: -71.3 +/- 0.15(stat) +/- 3.0(syst-prelim)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="28feb99">
    <h3>28 Feb 1999</h3>
    <p class="legacy-shift-crew">08:30-16:30 The beam energy is 1.733 GeV, one linac is 0.420 GeV. The injector angle</p>
    <p>
    is
            28.3<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>, the additional 1/2 wave filter was in (?).
           Mott measurement: 
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9902_archive/990217084522.html">70.4%</a>
           <p>
           Runs 5505-5570 were taken with the Hall A laser attenuated to a minimum. Therefore we got a lot of dark
           current from the other lasers. In all the runs but 4 the polarization measured was about 60%, sharp. In 4 runs
           it was about 70%, also sharp. It is not clear what was the difference between these groups of runs,
           we presume that something was changing on the injector. In runs 5571-5591 the Hall A laser was not attenuated
           while the beam was reduced by the slits. In these period the polarization measured was normal - about 72%, quite
           stable. 
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5577-5580 <td>  91.0 <td> 0.20uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster OFF </tr>
           <tr align="right"> <td> 5571-5576 <td>  24.5 <td> 73.8+/-0.2 <td>  21.6 <td> 72.2+/-0.2 <td> 0.6 <td> dead time 1.0%</tr>
           <tr align="right"> <td> 5581-5588 <td> 161.0 <td> 70.5+/-0.2 <td> 159.0 <td> 71.4+/-0.2 <td> 5.0 <td>  </tr> 
           <tr align="right"> <td> Average   <td> -     <td> 72.2+/-0.15<td> -     <td> 71.8+/-0.15<td> -    <td> </tr>
           <tr align="right"> <td> 5540      <td> 161.0 <td> LED L1-3 and R1-3  <td> - <td> - <td> -  <td> dead time 2.8% </tr> 
           <tr align="right"> <td> 5541      <td> 161.0 <td> LED L2 and R2  <td> - <td> - <td> -  <td> dead time 1.0% </tr> 
           <tr align="right"> <td> 5542      <td> 161.0 <td> LED L3 and R3  <td> - <td> - <td> -  <td> dead time 0.6% </tr> 
           <tr align="right"> <td> 5543      <td> 161.0 <td> LED L1 and R3  <td> - <td> - <td> -  <td> dead time 1.0% </tr> 
           <tr align="right"> <td> 5544      <td> 161.0 <td> LED L3 and R1  <td> - <td> - <td> -  <td> dead time 0.8% </tr> 
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.5505-5591">here</a>.
           <p>
           The final result: -72.0 +/- 0.15(stat) +/- 3.0(syst-prelim)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="02apr99">
    <h3>02 Apr 1999</h3>
    <p class="legacy-shift-crew">15:30-19:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            -2.4<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: missing.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5896-5897 <td>  90.0 <td> 0.20uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 5898-5903 <td> 157.0 <td> 65.5+/-0.3 <td> 153.5 <td> 67.4+/-0.3 <td> 0.8 <td> </tr>
           <tr align="right"> <td> 5916-5921 <td>  23.0 <td> 68.2+/-0.3 <td>  21.5 <td> 67.5+/-0.3 <td> 0.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 66.8+/-0.2 <td> -     <td> 75.5+/-0.2<td> -    <td> </tr>
           <tr align="right"> <td> 5904-5909 <td> 146.5 <td> 65.0+/-0.4 <td> 142.4 <td> 68.7+/-0.4 <td> 0.9 <td> </tr>
           <tr align="right"> <td> 5910-5915 <td>  37.0 <td> 69.1+/-0.4 <td>  35.4 <td> 67.7+/-0.4 <td> 0.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 67.0+/-0.3 <td> -     <td> 68.2+/-0.3 <td> -   <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 66.9+/-0.2 <td> -     <td> 67.8+/-0.2 <td> -   <td> </tr>
           </table>
           <p>
    
           <table border>
           <caption align="top"> Fe target P=7.6% assumed. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5930-5931 <td>  90.0 <td>  <td>  <td>  <td>  <td> 0.8uA </tr>
           <tr align="right"> <td> 5932-5937 <td> 156.5 <td> 60.3+/-0.3 <td> 154.1 <td> 62.0+/-0.3 <td> 0.3 <td> </tr>
           <tr align="right"> <td> 5924-5929 <td>  23.0 <td> 63.3+/-0.3 <td>  21.3 <td> 62.5+/-0.3 <td> 0.2 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 61.8+/-0.2 <td> -     <td> 62.0+/-0.2 <td> -   <td> </tr>
           </table>
           <p>
    
    
           The full information is given
           <a href="../tab/run.tab.5896-5937">here</a>.
           <p>
           The final result: 67.4 +/- 0.2(stat) +/- 3.0(syst-prelim)<br>
           <p>
           The polarization of the Fe target, derived from the supermendur target is 7.00+/-0.03(stat)+/-0.03(syst:targ_angles)%.
           The Supermendur polarization uncertainty should be also included.
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="07apr99">
    <h3>07 Apr 1999</h3>
    <p class="legacy-shift-crew">11:30-14:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: -70.8 for Hall A and 69.8 for Hall B
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990406182137.html">(see ELOG from Apr,6)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 5954-5955 <td>  90.0 <td> 0.25uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 5948-5953 <td>  23.5 <td> 70.0+/-0.3 <td>  20.0 <td> 68.3+/-0.3 <td> 4.2 <td> </tr>
           <tr align="right"> <td> 5956-5961 <td> 158.5 <td> 64.2+/-0.3 <td> 153.3 <td> 66.9+/-0.3 <td> 4.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 67.1+/-0.2 <td> -     <td> 67.6+/-0.2<td> -    <td> </tr>
           <tr align="right"> <td> 5970-5973 <td> 158.5 <td> 57.2+/-1.7 <td> 153.3 <td> 59.6+/-1.7 <td> 2.5 <td> Hall A laser off </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.5948-5973">here</a>.
            Some special runs were taken:
            <ul>
              <li> 5962:  only LG in the L,R coincidence
              <li> 5963:  only App in the L,R coincidence
              <li> 5965:  LED run. The dead time = 1%.
              <li> 5966:  Normal run at low thresholds.
              <li> 5967:  Normal run at the normal thresholds.
            </ul>
           <p>
           The final result: -67.4 +/- 0.2(stat) +/- 3.0(syst-prelim)<br>
           <p>
            We looked for an evidence for the laser cross-talk. Hall A laser was turned off. Hall B laser was on at 
            an energy equivalent to 5uA. Hall C laser was off. With the slits position same as for the runs 5948-5968
    	the coincidence counting rate was about 10<sup>-3</sup> of the previous value `, taken at 0.25uA.
            For the runs 5970-5973 the slit was "retracted" (which should mean it was widely open).
            The counting rate was about 5% of the value observed at 0.25uA. In this case the beam polarisation
    	was measured as +59.6+/-1.7%. So, Hall B laser is now opposite to Hall A laser. It was confirmed by Ch.Sinclair.
            Hall B measured about 60% (with Hall B laser). They reported that the polarization signed 
            became opposite to their previous measurement. When Hall B laser was off (and Hall C laser was still off as well)
            we observed some negligible counting rate.
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="10apr99">
    <h3>10 Apr 1999</h3>
    <p class="legacy-shift-crew">12:00-16:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: -70.8 for Hall A and 69.8 for Hall B
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990406182137.html">(see ELOG from Apr,6)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6020-6021 <td>  89.0 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON 1/2 </tr>
           <tr align="right"> <td> 6007-6017 <td>  20.0 <td> 68.5+/-0.12<td>  17.8 <td> 67.6+/-0.12<td> 1.7 <td> </tr>
           <tr align="right"> <td> 6022-6029 <td> 157.0 <td> 65.6+/-0.17<td> 155.2 <td> 66.5+/-0.17<td> 0.9 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 67.0+/-0.1 <td> -     <td> 67.0+/-0.1 <td> -    <td> </tr>
           <tr align="right"> <td> 6030-6035 <td> 157.0 <td> 65.2+/-0.2 <td> 155.2 <td> 66.1+/-0.2 <td> 1.0 <td> Lasers: A-on, B,C-off </tr>
           <tr align="right"> <td> 6036-6039 <td> 157.0 <td>-58.5+/-1.5 <td> 155.2 <td> 59.3+/-1.5 <td> 1.2 <td> Lasers: B-on, A,C-off, A slit retracted </tr>
           <tr align="right"> <td> 6040-6043 <td> 157.0 <td>-34.0+/-0.8 <td> 155.2 <td> 34.5+/-0.8 <td> 1.  <td> Lasers: C-on, A,B-off, A slit retracted </tr>
           <tr align="right"> <td> 6046-6049 <td> 157.0 <td> 65.6+/-0.3 <td> 155.2 <td> 66.5+/-0.3 <td> 10. <td> Lasers: B-off, A,B-on </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6005-6049">here</a>.
           <p>
           The final result: -67.0 +/- 0.1(stat) +/- 3.0(syst-prelim)<br>
           <p>
            The cross-talk from laser B was equivalent to 0.4uA*0.025 with the Hall A slit retracted. 
            The cross-talk from laser C was equivalent to 0.4uA*0.1.
            No significant change of Hall A polarization with turning Hall B,C lasers on/off was observed.
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="16apr99">
    <h3>16 Apr 1999</h3>
    <p class="legacy-shift-crew">20:30-22:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: not clear what point was selected 
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990414073249.html">(see ELOG from Apr,14)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6065-6066 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 6059-6064 <td>  22.0 <td> 70.8+/-0.17<td>  19.5 <td> 69.6+/-0.17<td> 0.7 <td> </tr>
           <tr align="right"> <td> 6067-6074 <td> 160.5 <td> 67.1+/-0.2 <td> 158.2 <td> 68.1+/-0.2 <td> 1.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 69.0+/-0.1 <td> -     <td> 68.9+/-0.1 <td> -   <td> </tr>
           <tr align="right"> <td> 6075-6076 <td> 160.5 <td> 67.0+/-0.3 <td> 158.2 <td> 68.0+/-0.3 <td> 2.0 <td> 1/2 wave plate IN </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6057-6076">here</a>.
           <p>
           The final result: -69.0 +/- 0.1(stat) +/- 3.0(syst-prelim)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="19apr99">
    <h3>19 Apr 1999</h3>
    <p class="legacy-shift-crew">19:00-20:30 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: reportedly 71%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990414073249.html">(see ELOG from Apr,14)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6095-6096 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 6089-6094 <td>  22.0 <td> 71.7+/-0.2 <td>  19.4 <td> 70.5+/-0.2 <td> 2.1 <td> </tr>
           <tr align="right"> <td> 6097-6102 <td> 161.0 <td> 67.9+/-0.2 <td> 158.2 <td> 69.2+/-0.2 <td> 0.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 69.8+/-0.15<td> -     <td> 69.9+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 6103      <td> 161.0 <td>            <td>       <td>            <td>     <td> LED dead time=3.% </tr>
           <tr align="right"> <td> 6104      <td> 161.0 <td>            <td>       <td>            <td>     <td> No App. counter in the arms </tr>
           <tr align="right"> <td> 6105      <td> 161.0 <td>            <td>       <td>            <td>     <td> No LG  in the arms </tr>
           <tr align="right"> <td> 6106-6107 <td> 161.0 <td> 68.8+/-0.5 <td>       <td>            <td>     <td> 1/2 wave plate OUT </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6087-6107">here</a>.
           <p>
           The final result: +69.9 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="21apr99">
    <h3>21 Apr 1999</h3>
    <p class="legacy-shift-crew">21:00-22:30 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: reportedly 71%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990414073249.html">(see ELOG from Apr,14)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6116-6118 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 6110-6115 <td>  22.0 <td> 72.5+/-0.2 <td>  19.3 <td> 71.2+/-0.2 <td> 0.4 <td> </tr>
           <tr align="right"> <td> 6119-6124 <td> 161.0 <td> 68.4+/-0.2 <td> 158.4 <td> 69.6+/-0.2 <td> 1.0 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 70.5+/-0.15<td> -     <td> 70.4+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 6125-6128 <td> 161.0 <td> 68.5+/-0.3 <td>       <td>            <td> 2.0 <td> 1/2 wave plate IN </tr>
           <tr align="right"> <td> 6129      <td> 161.0 <td>            <td>       <td>            <td>     <td> LED dead time=3.4% </tr>
           <tr align="right"> <td> 6128      <td> 161.0 <td>            <td>       <td>            <td>     <td> No App. counter in the arms </tr>
           <tr align="right"> <td> 6127      <td> 161.0 <td>            <td>       <td>            <td>     <td> No LG  in the arms </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6108-6131">here</a>.
           <p>
           The final result: -70.5 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="23apr99">
    <h3>23 Apr 1999</h3>
    <p class="legacy-shift-crew">11:00-13:10 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: reportedly 71%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990414073249.html">(see ELOG from Apr,14)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6140-6141 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 6134-6139 <td>  22.0 <td> 70.4+/-0.2 <td>  19.2 <td> 69.1+/-0.2 <td> 0.7 <td> 0.5uA </tr>
           <tr align="right"> <td> 6142-6147 <td> 160.5 <td> 66.8+/-0.2 <td> 158.1 <td> 67.9+/-0.2 <td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 68.6+/-0.15<td> -     <td> 68.5+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 6148-6151 <td> 161.0 <td> 66.7+/-0.2 <td>       <td>            <td> 0.8 <td> 0.25uA </tr>
           <tr align="right"> <td> 6152      <td> 161.0 <td>-67.2+/-0.7 <td>       <td>            <td>     <td> 1/2 wave plate OUT</tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6132-6152">here</a>.
           <p>
           The final result: 68.6 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
            An additional measurement was done at 1/2 of the current (runs 6148-6152). It indicates that the dead
            time is low: (0.2+/-0.6)%.
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="26apr99">
    <h3>26 Apr 1999</h3>
    <p class="legacy-shift-crew">18:00-19:30 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: reportedly +72.3+/-0.3%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990426180658.html">(see ELOG from Apr,26)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6167-6168 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 6158-6165 <td>  22.0 <td> 69.8+/-0.2 <td>  19.1 <td> 68.5+/-0.2 <td> 2.5 <td> 0.5uA </tr>
           <tr align="right"> <td> 6169-6174 <td> 160.7 <td> 65.5+/-0.2 <td> 158.4 <td> 66.5+/-0.2 <td> 2.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 67.6+/-0.15<td> -     <td> 67.5+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 6175      <td> 160.7 <td>            <td>       <td>            <td>     <td> No App. counter in the arms </tr>
           <tr align="right"> <td> 6176      <td> 160.7 <td>            <td>       <td>            <td>     <td> No LG  in the arms </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6156-6176">here</a>.
           <p>
           The final result: -67.6 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="30apr99">
    <h3>30 Apr 1999</h3>
    <p class="legacy-shift-crew">08:30-10:30 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: reportedly +71.9+/-0.3%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990429152420.html">(see ELOG from Apr,29)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6191-6192 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6185-6190 <td>  22.0 <td> 72.0+/-0.2 <td>  19.1 <td> 70.6+/-0.2 <td> 0.7 <td> 0.5uA </tr>
           <tr align="right"> <td> 6194-6199 <td> 160.7 <td> 69.1+/-0.2 <td> 158.5 <td> 69.1+/-0.2 <td> 0.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 70.05+/-0.15<td> -    <td> 69.85+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 6201      <td> 160.7 <td>            <td>       <td>            <td>     <td> No App. counter in the arms </tr>
           <tr align="right"> <td> 6200      <td> 160.7 <td>            <td>       <td>            <td>     <td> No LG  in the arms </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6184-6201">here</a>.
           <p>
           The final result: 70.0 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="30apr99_a">
    <h3>30 Apr 1999</h3>
    <p class="legacy-shift-crew">21:00-22:10 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            8.1<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: reportedly +71.9+/-0.3%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9904_archive/990429152420.html">(see ELOG from Apr,29)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6211-6212 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6205-6210 <td>  22.0 <td> 73.0+/-0.2 <td>  19.1 <td> 71.6+/-0.2 <td> 0.5 <td> 0.5uA </tr>
           <tr align="right"> <td> 6214-6219 <td> 160.7 <td> 68.6+/-0.2 <td> 157.7 <td> 70.0+/-0.2 <td> 0.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 70.8+/-0.15<td> -     <td> 70.8+/-0.15<td> -   <td> </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6204-6219">here</a>.
           <p>
           The final result: 70.8 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="03may99_a">
    <h3>03 May 1999</h3>
    <p class="legacy-shift-crew">21:00-22:10 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            7.8<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: reportedly +68.5%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990501185832.html">(see ELOG from May,1)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6228-6229 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6222-6227 <td>  22.0 <td> 74.8+/-0.25<td>  19.3 <td> 73.5+/-0.25<td> 1.5 <td> 0.4uA </tr>
           <tr align="right"> <td> 6230-6237 <td> 160.7 <td> 71.2+/-0.25<td> 158.4 <td> 72.3+/-0.25<td> 0.9 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 73.0+/-0.2 <td> -     <td> 72.9+/-0.2 <td> -   <td> </tr>
           <tr align="right"> <td> 6238-6241 <td> 160.7 <td> 70.7+/-0.3 <td>       <td>            <td> 1.  <td> LG only </tr>
           <tr align="right"> <td> 6242-6243 <td> 160.7 <td> 71.2+/-0.4 <td>       <td>            <td> 1.  <td> Aperture only </tr>
           <tr align="right"> <td> 6244-6245 <td> 160.7 <td>            <td>       <td>            <td>     <td> LED: dead time=2.6% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6220-6245">here</a>.
           <p>
           The final result:-73.0 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
           We measured the beam polarization using LG only and using the aperture counters only.
           No significant change was observed (see the runs 6238-6243).
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="05may99_a">
    <h3>05 May 1999</h3>
    <p class="legacy-shift-crew">08:30-10:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            5.6<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: +76.0+/-0.3%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990504181427.html">(see ELOG from May,4)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6255-6256 <td>  91.0 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6249-6254 <td>  22.0 <td> 74.7+/-0.23<td>  19.3 <td> 73.4+/-0.23<td> 1.6 <td> 0.4uA </tr>
           <tr align="right"> <td> 6257-6262 <td> 160.7 <td> 71.9+/-0.23<td> 158.3 <td> 73.0+/-0.23<td> 0.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 73.3+/-0.16<td> -     <td> 73.2+/-0.16<td> -   <td> </tr>
           <tr align="right"> <td> 6263      <td> 160.7 <td> 72.3+/-0.7 <td>       <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6264      <td> 160.7 <td> 70.1+/-0.8 <td>       <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6265      <td> 160.7 <td>            <td>       <td>            <td>     <td> LED: dead time=2.9% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6246-6265">here</a>.
           <p>
           The final result:+73.2 +/- 0.16(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="07may99_a">
    <h3>07 May 1999</h3>
    <p class="legacy-shift-crew">11:20-12:30 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.4<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: +73.0+/-0.3%
            <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990506191323.html">(see ELOG from May,6)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6274-6275 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6268-6273 <td>  22.0 <td> 74.9+/-0.26<td>  19.8 <td> 73.8+/-0.26<td> 0.8 <td> 0.4uA </tr>
           <tr align="right"> <td> 6276-6281 <td> 160.7 <td> 71.6+/-0.27<td> 158.3 <td> 72.7+/-0.27<td> 1.0 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 73.3+/-0.20<td> -     <td> 73.3+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6282      <td> 160.7 <td> 70.8+/-0.9 <td>       <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6283      <td> 160.7 <td> 71.6+/-0.9 <td>       <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6284      <td> 160.7 <td>            <td>       <td>            <td>     <td> LED: dead time=2.5% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6266-6284">here</a>.
           <p>
           The final result:-73.3 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="10may99_a">
    <h3>10 May 1999</h3>
    <p class="legacy-shift-crew">17:00-18:40 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.4<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: +69.1% prelim (poor results).
            <a href="http://opweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990509155545.html">(see ELOG from May,10)</a>.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6297-6298 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6287-6296 <td>  22.0 <td> 75.1+/-0.23<td>  19.8 <td> 73.8+/-0.23<td> 0.7 <td> 0.4uA </tr>
           <tr align="right"> <td> 6299-6304 <td> 160.7 <td> 71.4+/-0.30<td> 158.0 <td> 72.7+/-0.30<td> 1.4 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 73.25+/-0.20<td> -     <td> 73.25+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6282      <td> 160.7 <td> 71.9+/-0.6 <td>       <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6283      <td> 160.7 <td> 71.7+/-0.6 <td>       <td>            <td> -   <td> Aperture only </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6285-6306">here</a>.
           <p>
           The final result:-73.3 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="14may99_a">
    <h3>14 May 1999</h3>
    <p class="legacy-shift-crew">22:00-23:40 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: missing.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6365-6366 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6359-6364 <td>  22.0 <td> 69.9+/-0.22<td>  19.1 <td> 68.6+/-0.22<td> 2.3 <td> 0.4uA </tr>
           <tr align="right"> <td> 6367-6372 <td> 160.7 <td> 68.0+/-0.24<td> 158.0 <td> 66.9+/-0.24<td> 1.4 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 68.0+/-0.20<td> -     <td> 67.8+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6373      <td> 160.7 <td> 71.9+/-0.6 <td>       <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6374      <td> 160.7 <td> 71.7+/-0.6 <td>       <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6275      <td> 160.7 <td>            <td>       <td>            <td>     <td> LED </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6357-6374">here</a>.
           <p>
           The final result:+67.9 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="16may99_a">
    <h3>16 May 1999</h3>
    <p class="legacy-shift-crew">14:00-15:40 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: +67.0+/-1% (May,15, taken from the white board, no ELOG found).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6384-6385 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6378-6383 <td>  22.0 <td> 67.8+/-0.24<td>  19.3 <td> 66.6+/-0.24<td> 0.5 <td> 0.4uA </tr>
           <tr align="right"> <td> 6386-6391 <td> 160.7 <td> 64.6+/-0.24<td> 158.5 <td> 65.5+/-0.24<td> 1.1 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 66.2+/-0.20<td> -     <td> 66.1+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6392      <td> 160.7 <td> 64.5+/-1.0 <td>       <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6393      <td> 160.7 <td> 63.7+/-0.9 <td>       <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6294      <td> 160.7 <td>            <td>       <td>            <td>     <td> LED </tr>
           </table>
           <p>
           <table border>
           <caption align="top"> Iron target P=7.1% (assumed). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6401-6402 <td>  90.5 <td> 0.6 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6395-6400 <td>  22.0 <td> 65.2+/-0.34<td>  19.9 <td> 64.3+/-0.33<td> 2.0 <td> 0.6uA </tr>
           <tr align="right"> <td> 6403-6408 <td> 160.7 <td> 62.5+/-0.25<td> 158.4 <td> 63.4+/-0.25<td> 1.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 63.5+/-0.20<td> -     <td> 63.7+/-0.20<td> -   <td> </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6376-6408">here</a>.
           <p>
           The final result:+66.1 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
           Iron target polarization, normalized to P=7.6% for the supermendur target is 6.83+/-0.03%
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="17may99_a">
    <h3>17 May 1999</h3>
    <p class="legacy-shift-crew">19:00-19:50 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: +67.0+/-1% (May,15, taken from the white board, no ELOG found).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6426-6426 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6420-6425 <td>  22.0 <td> 70.5+/-0.22<td>  19.0 <td> 69.1+/-0.22<td> 1.6 <td> 0.4uA </tr>
           <tr align="right"> <td> 6428-6433 <td> 160.7 <td> 67.6+/-0.24<td> 158.4 <td> 68.6+/-0.24<td> 1.2 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 69.1+/-0.20<td> -     <td> 68.9+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6434      <td> 160.7 <td> 67.6+/-1.0 <td>       <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6435      <td> 160.7 <td> 65.7+/-1.0 <td>       <td>            <td> -   <td> Aperture only </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6418-6437">here</a>.
           <p>
           The final result:+69.0 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="18may99_a">
    <h3>18 May 1999</h3>
    <p class="legacy-shift-crew">19:00-22:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Mott: ? (May,18 measured, but no ELOG found).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6458-6459 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6452-6457 <td>  22.0 <td> 71.2+/-0.23<td>  18.9 <td> 69.8+/-0.23<td> 2.2 <td> 0.4uA </tr>
           <tr align="right"> <td> 6460-6467 <td> 160.7 <td> 68.2+/-0.25<td> 158.2 <td> 69.3+/-0.25<td> 1.2 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 69.7+/-0.20<td> -     <td> 69.6+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6468      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6469      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6470      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> LED dead time 2.6% </tr>
           <tr align="right"> <td> 6471-6476 <td> 160.7 <td> 68.4+/-0.24<td> 0.2uA <td>            <td> -   <td> </tr>
           <tr align="right"> <td> 6480      <td> 160.7 <td>            <td> 0.2uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6481      <td> 160.7 <td>            <td> 0.2uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6482      <td> 160.7 <td>            <td> 0.2uA <td>            <td> -   <td> LED dead time 1.3% </tr>
           <tr align="right"> <td> 6484-6487 <td> 160.7 <td> 67.3+/-0.20<td> 1.0uA <td>            <td> -   <td> </tr>
           <tr align="right"> <td> 6488      <td> 160.7 <td>            <td> 1.0uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6490      <td> 160.7 <td>            <td> 1.0uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6483      <td> 160.7 <td>            <td> 1.0uA <td>            <td> -   <td> LED dead time 6.7% </tr>
           <tr align="right"> <td> 6493-6497 <td> 160.7 <td> 65.3+/-0.17<td> 1.0uA <td>            <td> -   <td> </tr>
           <tr align="right"> <td> 6492      <td> 160.7 <td>            <td> 1.0uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6491      <td> 160.7 <td>            <td> 1.0uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6498      <td> 160.7 <td>            <td> 1.0uA <td>            <td> -   <td> LED dead time 12.8% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6450-6498">here</a>.
           <p>
           The final result:-69.6 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
             The dead time measured with the LED looks overestimated. The more correct value is 4% from 0.2 uA to 2uA.
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="20may99">
    <h3>20 May 1999</h3>
    <p class="legacy-shift-crew">08:00-09:30 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: 71.1+/-0.1 (May,18 measured, see 
           <a href="http://opweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990519114007.html">ELOG record</a>).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6508-6509 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6501-6506 <td>  22.0 <td> 71.1+/-0.22<td>  18.8 <td> 69.6+/-0.22<td> 1.0 <td> 0.4uA </tr>
           <tr align="right"> <td> 6510-6515 <td> 160.7 <td> 68.1+/-0.22<td> 158.2 <td> 69.2+/-0.25<td> 0.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 69.6+/-0.20<td> -     <td> 69.4+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6516      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6517      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6518      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> LED dead time 2.4% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6499-6518">here</a>.
           <p>
           The final result:+69.5 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="20may99_a">
    <h3>20 May 1999</h3>
    <p class="legacy-shift-crew">10:00-11:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
            This measurement was done just after recesiation of the cathode.
           <p>
           Mott: 71.1+/-0.1 (May,18 measured, see 
           <a href="http://opweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990519114007.html">ELOG record</a>).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6525-6526 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6527-6532 <td>  22.0 <td> 68.9+/-0.21<td>  18.8 <td> 67.5+/-0.21<td> 0.7 <td> 0.4uA </tr>
           <tr align="right"> <td> 6519-6524 <td> 160.7 <td> 65.6+/-0.24<td> 158.2 <td> 66.6+/-0.24<td> 0.5 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 67.3+/-0.20<td> -     <td> 67.1+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6533      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6534      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6535      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LED dead time 3.2% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6519-6535">here</a>.
           <p>
           The final result:+67.2 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="22may99_a">
    <h3>22 May 1999</h3>
    <p class="legacy-shift-crew">20:00-21:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
            This measurement was done just after recesiation of the cathode.
           <p>
           Mott: 69.1+/-0.7 (May,21 measured, see 
           <a href="http://devweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990521121400.html">ELOG record</a>).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6544-6545 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6538-6543 <td>  22.0 <td> 69.9+/-0.25<td>  18.8 <td> 68.5+/-0.25<td> 0.7 <td> 0.4uA </tr>
           <tr align="right"> <td> 6546-6551 <td> 160.7 <td> 66.9+/-0.26<td> 158.4 <td> 68.2+/-0.26<td> 1.2 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 68.4+/-0.20<td> -     <td> 68.2+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6552      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6553      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6554-6555 <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LED dead time 4.0% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6536-6555">here</a>.
           <p>
           The final result:+68.3 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="25may99_a">
    <h3>25 May 1999</h3>
    <p class="legacy-shift-crew">08:30-10:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            This measurement was done just after recesiation of the cathode.
           <p>
           Mott: 69.5+/-0.4 (May,24 measured, see 
           <a href="http://opweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990524144633.html">ELOG record</a>).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6566-6567 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON </tr>
           <tr align="right"> <td> 6558-6565 <td>  22.0 <td> 69.0+/-0.28<td>  18.9 <td> 67.6+/-0.28<td> 0.3 <td> 0.4uA </tr>
           <tr align="right"> <td> 6568-6573 <td> 160.7 <td> 64.9+/-0.30<td> 158.3 <td> 65.9+/-0.30<td> 1.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 67.0+/-0.20<td> -     <td> 66.8+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6574      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6575      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6576-6577 <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LED dead time 2.0% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6556-6641">here</a>.
           <p>
           The final result:-66.9 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
           Laser attenuation calibration can be found 
           <a href="http://opweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990525112911.html">here</a>.
           
           Various measurements have been done with different laser attenuation and slit positions. 
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?. The target angle was 160.7<sup>o</sup>.
           The laser phase was varied.
            The error is statistical only.</caption>
           <tr> <th>   runs  <th> Atten <th> Slit <th> att.cal <th> las.phase <th> Lasers <th> beam <th> (coinc-accid)/sec <th> Polarization % <th> chi2 <th>comments </tr>
           <tr align="right"> <td> 6558-6565 <td> 500 <td> 15.99 <td> 0.84 <td> -14 <td> ABC <td> 0.34 uA <td> 125100 <td> -64.9+/-0.26 <td> 1.6 <td> . </tr>
           <tr align="right"> <td> 6578-6583 <td> 250 <td> 19.7  <td> 0.20 <td> -14 <td> ABC <td> 0.32 uA <td> 121100 <td> -61.2+/-0.28 <td> 3.0 <td> . </tr>
           <tr align="right"> <td> 6586-6591 <td>  80 <td> 36.   <td> 0.002<td> -14 <td> ABC <td> 0.30 uA <td> 113000 <td> -51.6+/-0.30 <td> 1.2 <td> . </tr>
           <tr align="right"> <td> 6592-6597 <td> 250 <td> 19.7  <td> 0.20 <td> -14 <td> ABC <td> 0.32 uA <td> 117000 <td> -61.3+/-0.27 <td> 0.8 <td> . </tr>
           <tr align="right"> <td> 6598-6603 <td> 500 <td> 15.99 <td> 0.84 <td> -14 <td> ABC <td> 0.24 uA <td> 196000 <td> -65.4+/-0.28 <td> 0.6 <td> . </tr>
           <tr align="right"> <td> 6604-6609 <td>  80 <td> 36.   <td> 0.002<td> -14 <td> ABC <td> 0.28 uA <td> 107000 <td> -51.0+/-0.26 <td> 1.4 <td> . </tr>
           <tr align="right"> <td> 6610-6615 <td> 500 <td> 15.99 <td> 0.84 <td> -14 <td> A__ <td> 0.30 uA <td> 105000 <td> -64.9+/-0.26 <td> 0.6 <td> . </tr>
           <tr align="right"> <td> 6616-6616 <td> 250 <td> 19.7  <td> 0.20 <td> -14 <td> _BC <td>  .      <td>   3350 <td> +25.4+/-2.0  <td>  .  <td> . </tr>
           <tr align="right"> <td> 6619-6619 <td> 250 <td> 19.7  <td> 0.20 <td> -14 <td> _B_ <td>  .      <td>   1315 <td> +67.4+/-5.0  <td>  .  <td> . </tr>
           <tr align="right"> <td> 6620-6625 <td> 250 <td> 19.7  <td> 0.20 <td> -14 <td> AB_ <td> 0.38 uA <td> 145000 <td> -63.1+/-0.21 <td> 0.8 <td> . </tr>
           <tr align="right"> <td> 6626-6631 <td> 380 <td> 19.7  <td> 0.54 <td>  -9 <td> AB_ <td> 0.36 uA <td> 134000 <td> -62.2+/-0.23 <td> 1.3 <td> . </tr>
           <tr align="right"> <td> 6632-6637 <td> 120 <td> 19.7  <td> 0.011<td> -19 <td> AB_ <td> 0.36 uA <td> 128000 <td> -65.8+/-0.23 <td> 1.6 <td> . </tr>
           <tr align="right"> <td> 6638-6643 <td> 250 <td> 19.7  <td> 0.20 <td> -14 <td> AB_ <td> 0.39 uA <td> 145000 <td> -64.5+/-0.22 <td> 0.8 <td> . </tr>
           </table>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="26may99_a">
    <h3>26 May 1999</h3>
    <p class="legacy-shift-crew">15:00-16:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
           Mott: 69.5+/-0.4 (May,24 measured, see 
           <a href="http://opweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990524144633.html">ELOG record</a>).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6654-6655 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 6648-6653 <td>  22.0 <td> 68.0+/-0.19<td>  19.1 <td> 66.7+/-0.28<td> 1.3 <td> 0.5uA </tr>
           <tr align="right"> <td> 6656-6661 <td> 160.7 <td> 64.0+/-0.24<td> 158.3 <td> 65.0+/-0.24<td> 1.4 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 66.0+/-0.15<td> -     <td> 65.9+/-0.15<td> -   <td> </tr>
           <tr align="right"> <td> 6662      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6663      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6644-6881">here</a>.
           <p>
           The final result:+66.0 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
           It turned out that in this measurement we have been sitting on a tail of the laser phase
           profile and therefore the measured polarization is systematically lower.
           <p>
           
           Various measurements have been done with different laser attenuation and slit positions. 
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?. The target angle was 160.7<sup>o</sup>.
           The laser phase was varied.
            The error is statistical only.</caption>
           <tr> <th>   runs  <th> Atten <th> Slit <th> att.cal <th> las.phase <th> Lasers <th> beam <th> (coinc-accid)/sec <th> Polarization % <th> chi2 <th>comments </tr>
           <tr align="right"> <td> ????-???? <td> 500 <td> 15.99 <td> 0.84 <td> -14 <td> ABC <td> 0.34 uA <td> 125100 <td> -64.9+/-0.26 <td> 1.6 <td> . </tr>
           </table>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="27may99">
    <h3>27 May 1999</h3>
    <p class="legacy-shift-crew">07:30-11:00 The beam energy is 3.362 GeV (MCC) or 3.355 (EP), one linac is 0.550 GeV.</p>
    <p>
    The injector angle is
            3.8<sup>o</sup> (changed during spin dance), the 1/2 wave plate was <b>IN</b>. 
           The laser A phase was at -23<sup>o</sup> for most of the measurements.
           <p>
           Mott: 70.3+/-0.5 (May,27 measured, see 
           <a href="http://opweb.cebaf.gov/internal/ops/daily_activity_log/html/9905_archive/990527131103.html">ELOG record</a>).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Wien=3.8<sup>o</sup>. Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only. </caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6891-6892 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON, phase=-23 </tr>
           <tr align="right"> <td> 6885-6890 <td>  22.0 <td> 72.3+/-0.22<td>  18.6 <td> 70.7+/-0.22<td> 0.7 <td> 0.4uA, phase=-23 , wien=3.8, att=500, slit=15.4</tr>
           <tr align="right"> <td> 6893-6898 <td> 160.7 <td> 68.8+/-0.24<td> 157.6 <td> 70.2+/-0.24<td> 1.5<td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 70.6+/-0.20<td> -     <td> 70.5+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6899      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6900      <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 6901-6902 <td> 22.   <td>            <td> 0.4uA <td>            <td> -   <td> LED dead time 2.6% </tr>
           <tr align="right"> <td> 6903-6908 <td> 160.7 <td> 68.1+/-0.26<td>       <td>            <td> 0.28<td> att=108, slit=-1(retracted),Newtral Density filter ON, B,C - off</tr>
           <tr align="right"> <td> 6909-6914 <td> 160.7 <td> 68.1+/-0.24<td>       <td>            <td>      <td> as before, but phase=-14 </tr>
           </table>
           <p>
           <table border>
           <caption align="top"> Wien=-70.<sup>o</sup>. Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only. </caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6921-6922 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON, phase=-23, </tr>
           <tr align="right"> <td> 6923-6928 <td>  22.0 <td> 26.5+/-0.25<td>  19.1 <td> 26.0+/-0.25<td> 0.35 <td> 0.4uA, phase=-23 , att=500, slit=15.4</tr>
           <tr align="right"> <td> 6915-6920 <td> 160.7 <td> 32.2+/-0.25<td> 158.4 <td> 32.7+/-0.25<td> 0.4<td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 29.3+/-0.20<td> -     <td> 29.4+/-0.20<td> -   <td> </tr>
           </table>
           <p>
    
           <table border>
           <caption align="top"> Wien=-95.<sup>o</sup>. Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only. </caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 6935-6936 <td>  90.5 <td> 0.4 uA     <td>  -    <td> -          <td> -   <td>thresholds=137mV, raster ON, phase=-23, </tr>
           <tr align="right"> <td> 6929-6934 <td>  22.0 <td> -6.8+/-0.24<td>  19.1 <td> -6.67+/-0.24<td> 0.7 <td> 0.4uA, phase=-23 , att=500, slit=15.4</tr>
           <tr align="right"> <td> 6937-6942 <td> 160.7 <td> 0.95+/-0.25<td> 158.4 <td> 1.0+/-0.25<td> 0.4<td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -2.9+/-0.20<td> -     <td> -2.9+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 6943      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 6944      <td> 160.7 <td>            <td> 0.4uA <td>            <td> -   <td> Aperture only </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.6882-6944">here</a>.
           <p>
           The final result:+70.6 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="10jul99">
    <h3>10 July 1999</h3>
    <p class="legacy-shift-crew">15:00-16:00 The beam energy is 3.325 GeV (MCC) or 3.3?? (EP), one linac is 0.5437 GeV</p>
    <p>
    . The injector angle is
            45.5<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was shifted from 8.6<sup>o</sup> to 4.0<sup>o</sup> in order to be more far from the slope
             <a href="../plots/laser_rf1.pdf">(see the plot)</a>.
           <p>
           Mott: no info so far
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7012-7013 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7006-7011 <td>  21.5 <td> 76.9+/-0.25<td>  18.7 <td> 75.5+/-0.25<td> 1.6 <td> 0.5uA </tr>
           <tr align="right"> <td> 7014-7019 <td> 163.3 <td> 74.5+/-0.25<td> 161.3 <td> 75.3+/-0.25<td> 1.0 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 75.7+/-0.20<td> -     <td> 75.4+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 7020      <td> 21.5  <td>            <td> 0.5uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 7021      <td> 21.5  <td>            <td> 0.5uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 7022      <td> 21.5  <td>            <td> 0.5uA <td>            <td> -   <td> LED, dead time = 3.3% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7006-7022">here</a>.
           <p>
           The final result:+75.6 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="12jul99">
    <h3>12 July 1999</h3>
    <p class="legacy-shift-crew">17:00-19:00 The beam energy is 3.325 GeV (MCC) or 3.3?? (EP), one linac is 0.5437 GeV</p>
    <p>
    . The injector angle is
            45.6<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. 
            Laser spot was moved since the last measurement.
           <p>
            The laser phase was at 3.<sup>o</sup>. The beam currents measured were: 
            0.<sup>o</sup> - 0.50uA, 
            3.<sup>o</sup> - 0.54uA, 
            6.<sup>o</sup> - 0.65uA, 
           10.<sup>o</sup> - 0.14uA.
    
           <p>
           Mott: 73.8 +/- 0.8% <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9907_archive/990712152221.html">(see ELOG)</a> 
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7031-7032 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7023-7030 <td>  22.0 <td> 75.4+/-0.25<td>  19.3 <td> 74.1+/-0.25<td> 0.5 <td> 0.5uA </tr>
           <tr align="right"> <td> 7033-7038 <td> 163.5 <td> 73.5+/-0.24<td> 161.4 <td> 74.4+/-0.24<td> 1.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 74.45+/-0.18<td> -    <td> 74.25+/-0.18<td> -   <td> </tr>
           <tr align="right"> <td> 7039      <td> 22.0  <td>            <td> 0.5uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 7040      <td> 22.0  <td>            <td> 0.5uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 7041      <td> 22.0  <td>            <td> 0.5uA <td>            <td> -   <td> LED, dead time = 4.0% </tr>
           <tr align="right"> <td> 7051-7052 <td>  90.5 <td> 0.15 uA    <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7053-7058 <td>  22.0 <td> 76.1+/-0.27<td>  19.5 <td> 74.9+/-0.27<td> 1.8 <td> 0.15uA </tr>
           <tr align="right"> <td> 7043-7048 <td> 163.5 <td> 73.6+/-0.28<td> 161.1 <td> 74.6+/-0.28<td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> 74.85+/-0.20<td> -    <td> 74.75+/-0.20<td> -   <td> </tr>
           <tr align="right"> <td> 7042      <td> 22.0  <td>            <td> 0.15uA<td>            <td> -   <td> LED, dead time = 1.0% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7023-7058">here</a>.
           <p>
           The final result:-74.3 +/- 0.18(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
           The problem of dead time is still standing. The LED signals give 1.0% losses at 0.15uA and 4.0% losses at 0.55uA,
           which is consistent with about 7.3%/uA. However the polarization measured drops from 0.15 to 0.55uA by 0.7%, though one
           may expect a 3% drop comparing the LED signals. Either the LED signals suffer a higher dead time for some reason,
           or the polarization measured is compensated by some effect still not identified.
        </p>
  </section>

  <section class="legacy-shift" id="13jul99">
    <h3>13 July 1999</h3>
    <p class="legacy-shift-crew">17:00-19:00 The beam energy is 3.325 GeV (MCC) or 3.3?? (EP), one linac is 0.5437 GeV</p>
    <p>
    . The injector angle is
            45.6<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. 
           <p>
            Spin dance measurement. There were network problems which made most of EPICS data bogus or missing.
           <p>
            The laser phase was at 3.<sup>o</sup>. The slit was 15.9. The beam currents measured were: 
            0.<sup>o</sup> - 0.47uA, 
            3.<sup>o</sup> - 0.51uA, 
            6.<sup>o</sup> - 0.57uA, 
           10.<sup>o</sup> - 0.14uA.
    
           <p>
           Mott: 73.8 +/- 0.8% <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9907_archive/990712152221.html">(see ELOG)</a> 
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top"> Wien angle at +45.6<sup>o</sup> . Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7072-7073 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7066-7071 <td>  22.0 <td> -77.0+/-0.25<td>  19.0 <td> -75.5+/-0.25<td> 1.5 <td> 0.5uA </tr>
           <tr align="right"> <td> 7074-7079 <td> 163.5 <td> -75.1+/-0.25<td> 161.3 <td> -74.4+/-0.25<td> 1.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -75.05+/-0.18<td> -     <td> -74.8+/-0.18<td> -   <td> Av: -75.9+/-0.18</tr>
           <tr align="right"> <td> 7080      <td> 22.0  <td>            <td> 0.5uA <td>            <td> -   <td> LG only </tr>
           <tr align="right"> <td> 7081      <td> 22.0  <td>            <td> 0.5uA <td>            <td> -   <td> Aperture only </tr>
           <tr align="right"> <td> 7082      <td> 22.0  <td>            <td> 0.5uA <td>            <td> -   <td> LED, dead time = 3.3% </tr>
           </table>
           <p>
           <table border>
           <caption align="top"> Wien angle at -47.55<sup>o</sup> . Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7089-7090 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7091-7096 <td>  22.0 <td>  -0.7+/-0.25<td>  19.4 <td>  -0.7+/-0.25<td> 0.8 <td> 0.5uA </tr>
           <tr align="right"> <td> 7083-7088 <td> 163.5 <td>  -7.8+/-0.25<td> 161.3 <td>  -7.9+/-0.25<td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  -4.3+/-0.2 <td> -     <td>  -4.3+/-0.2 <td> - <td> Av: -4.3+/-0.2</tr>
           </table>
           <p>
           <table border>
           <caption align="top"> Wien angle at -74.8<sup>o</sup> . Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7103-7104 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7097-7101 <td>  22.0 <td>  32.7+/-0.28<td>  19.4 <td>  32.1+/-0.28<td> 2.8 <td> 0.5uA </tr>
           <tr align="right"> <td> 7105-7110 <td> 163.5 <td>  26.2+/-0.28<td> 161.3 <td>  26.5+/-0.27<td> 2.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  29.5+/-0.2 <td> -     <td>  29.3+/-0.2 <td> - <td> Av: 29.4+/-0.2</tr>
           </table>
           <p>
           <table border>
           <caption align="top"> Wien angle at -20.3<sup>o</sup> . Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7117-7118 <td>  90.5 <td> 0.5 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7120-7125 <td>  22.0 <td> -33.7+/-0.24<td>  19.3 <td> -33.1+/-0.24<td> 0.6 <td> 0.5uA </tr>
           <tr align="right"> <td> 7111-7116 <td> 163.5 <td> -38.8+/-0.24<td> 161.3 <td> -39.3+/-0.24<td> 0.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -36.3+/-0.2 <td> -     <td> -36.2+/-0.2 <td> - <td> Av: -36.2+/-0.2</tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7063-7125">here</a>.
           <p>
           The final result (at wien=45.6):-75.9 +/- 0.18(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
    
           The spin-dance results presented on <a href="../plots/spin_dance_3.pdf">a plot</a> show the zero crossing at
           about -50.8+/-0.5<sup>o</sup>. That would mean that the optimal settings should be 39.2<sup>o</sup> (not 45.6<sup>o</sup>).
           The angle predicted by my program (E.Ch) for the linac energy of 0.5437GeV is about 40.7<sup>o</sup>.
           We rounded the number to 40.<sup>o</sup> and asked the MCC to tune to this angle for the future.
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="15jul99">
    <h3>15 July 1999</h3>
    <p class="legacy-shift-crew">14:00-15:00 The beam energy is 3.325 GeV (MCC) or 3.3?? (EP), one linac is 0.5437 GeV</p>
    <p>
    . The injector angle is
            40.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at 2.<sup>o</sup>. The slit was 15.4. The beam currents measured were: 
            0.<sup>o</sup> - 0.43uA, 
            2.<sup>o</sup> - 0.47uA, 
            4.<sup>o</sup> - 0.52uA, 
            6.<sup>o</sup> - 0.42uA.
            8.<sup>o</sup> - 0.18uA.
    
           <p>
           Mott: 73.8 +/- 0.8% <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9907_archive/990712152221.html">(see ELOG)</a> 
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7133-7134 <td>  90.5 <td> 0.47 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7127-7132 <td>  22.0 <td>  77.1+/-0.27<td>  19.9 <td>  76.0+/-0.27<td> 1.0 <td> 0.5uA </tr>
           <tr align="right"> <td> 7135-7140 <td> 163.5 <td>  75.5+/-0.26<td> 161.3 <td>  76.4+/-0.26<td> 1.4 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  76.3+/-0.2 <td> -     <td>  76.2+/-0.20<td> -   <td> Av: 76.2+/-0.20</tr>
           <tr align="right"> <td> 7143      <td> 163.5 <td>             <td> 0.47uA<td>             <td> -   <td> LED, dead time = 3.1% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7126-7144">here</a>.
           <p>
           The final result: +76.2 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="15jul99_b">
    <h3>15 July 1999</h3>
    <p class="legacy-shift-crew">20:00-21:40 The beam energy is 3.325 GeV (MCC) or 3.3?? (EP), one linac is 0.5437 GeV</p>
    <p>
    . The injector angle is
            40.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at 3.<sup>o</sup>. The slit was 16.0 The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_2.pdf">plot</a>.
    
           <p>
           Mott: 73.8 +/- 0.8% <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9907_archive/990712152221.html">(see ELOG)</a> 
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7153-7154 <td>  90.5 <td> 0.54 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7147-7152 <td>  22.0 <td>  77.4+/-0.25<td>  19.3 <td>  76.0+/-0.25<td> 1.4 <td> 0.54uA </tr>
           <tr align="right"> <td> 7155-7160 <td> 163.5 <td>  75.7+/-0.25<td> 161.3 <td>  76.6+/-0.24<td> 0.5 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  76.5+/-0.2 <td> -     <td>  76.3+/-0.20<td> -   <td> Av: 76.4+/-0.20</tr>
           <tr align="right"> <td> 7161      <td> 163.5 <td>             <td> 0.54uA<td>             <td> -   <td> LG only </tr>
           <tr align="right"> <td> 7142      <td> 163.5 <td>             <td> 0.54uA<td>             <td> -   <td> App only </tr>
           <tr align="right"> <td> 7163      <td> 163.5 <td>             <td> 0.54uA<td>             <td> -   <td> LED, dead time = 4.2% </tr>
           <tr align="right"> <td> 7187-7188 <td>  90.5 <td> 0.24 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7177-7184 <td>  22.5 <td>  77.6+/-0.26<td>  20.0 <td>  76.3+/-0.26<td> 0.4 <td> 0.24uA </tr>
           <tr align="right"> <td> 7165-7176 <td> 163.5 <td>  75.1+/-0.26<td> 161.0 <td>  76.2+/-0.26<td> 1.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  76.3+/-0.2 <td> -     <td>  76.3+/-0.20<td> -   <td> Av: 76.3+/-0.20</tr>
           <tr align="right"> <td> 7161      <td> 163.5 <td>             <td> 0.54uA<td>             <td> -   <td> LG only </tr>
           <tr align="right"> <td> 7142      <td> 163.5 <td>             <td> 0.54uA<td>             <td> -   <td> App only </tr>
           <tr align="right"> <td> 7164      <td> 163.5 <td>             <td> 0.24uA<td>             <td> -   <td> LED, dead time = 1.8% </tr>
           <tr align="right"> <td> 7185      <td>  22.5 <td>             <td> 0.24uA<td>             <td> -   <td> LED, dead time = 1.67% </tr>
           <tr align="right"> <td> 7186      <td>  90.0 <td>             <td> 0.24uA<td>             <td> -   <td> LED, dead time = 0.57% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7146-7188">here</a>.
           <p>
           The final result: +76.3 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
           Measurements done at 0.24 and 0.54uA give the same result. Still, the LED dead time indicate 
           that there should be a 2.5% difference between them.
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="22jul99">
    <h3>22 July 1999</h3>
    <p class="legacy-shift-crew">08:00-09:40 The beam energy is 3.325 GeV (MCC) or 3.3?? (EP), one linac is 0.5437 GeV</p>
    <p>
    . The injector angle is
            44.9<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. 
           <p>
            The laser phase was at 2.<sup>o</sup>. The slit was 15.7 The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_3.pdf">plot</a>.
    
           <p>
           Mott: 
             67.0 +/- ?% - with reservations 
             <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9907_archive/990720222708.html">(see ELOG)</a> 
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7196-7197 <td>  90.5 <td> 0.54 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7190-7195 <td>  22.5 <td> -72.1+/-0.24<td>  19.8 <td> -70.8+/-0.24<td> 1.8 <td> 0.54uA </tr>
           <tr align="right"> <td> 7198-7203 <td> 163.5 <td> -70.6+/-0.23<td> 161.4 <td> -71.4+/-0.23<td> 0.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -71.3+/-0.2 <td> -     <td> -71.1+/-0.20<td> -   <td> Av:-71.2+/-0.20</tr>
           <tr align="right"> <td> 7204      <td> 163.5 <td>             <td> 0.54uA<td>             <td> -   <td> App only </tr>
           <tr align="right"> <td> 7205      <td> 163.5 <td>             <td> 0.54uA<td>             <td> -   <td> LG only </tr>
           <tr align="right"> <td> 7208      <td> 163.5 <td>             <td> 0.54uA<td> ther=140mV  <td> -   <td> LED, dead time = 4.3% </tr>
           <tr align="right"> <td> 7209      <td> 163.5 <td>             <td> 0.54uA<td> ther= 40mV  <td> -   <td> LED, dead time = 3.8% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7189-7209">here</a>.
           <p>
           The final result: -71.2 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN)<br>
           <p>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="27jul99">
    <h3>27 July 1999</h3>
    <p class="legacy-shift-crew">0:00-1:20 The beam energy is 3.325 GeV (MCC) or 3.3?? (EP), one linac is 0.5437 GeV.</p>
    <p>
    Thermionic gun.
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7218-7219 <td>  90.5 <td> 0.51 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7212-7217 <td>  22.5 <td> 0.32+/-0.26<td>  19.5 <td> 0.31+/-0.26<td> 0.7 <td> 0.51uA </tr>
           <tr align="right"> <td> 7198-7203 <td> 163.5 <td> -0.51+/-0.25<td> 161.1 <td> -0.52+/-0.25<td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -0.1+/-0.2 <td> -     <td> -0.1+/-0.2<td> -   <td> Av:-0.1+/-0.20</tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7212-7229">here</a>.
           <p>
           The final result: -0.1 +/- 0.20(stat) +/- 3.0(syst-prelim)% <br>
           <p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="03aug99">
    <h3>03 August 1999</h3>
    <p class="legacy-shift-crew">22:20-04:50 The beam energy is 1.148 GeV (MCC) or ?? (EP), one linac is 0.544 GeV. Th</p>
    <p>
    e injector angle is
            29.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -80.<sup>o</sup>. The slit was 14.58 The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_4.pdf">plot</a>.
    
           <p>
           Mott: no result
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-12<sup>o</sup>? and the mean analysing power is 0.77 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7330-7331 <td>  90.5 <td> 0.24 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7318-7329 <td>  22.5 <td> +82.0+/-0.38<td>  19.5 <td> +80.4+/-0.38<td> 0.7 <td> 0.24uA </tr>
           <tr align="right"> <td> 7339-7348 <td> 163.5 <td> +77.8+/-0.35<td> 161.4 <td> +78.7+/-0.35<td> 0.6 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> +79.9+/-0.27 <td> -    <td> +79.6+/-0.27<td> -   <td> Av:-79.7+/-0.27</tr>
           <tr align="right"> <td> 7349      <td> 163.5 <td>             <td> 0.24uA<td>             <td> -   <td> App only </tr>
           <tr align="right"> <td> 7350      <td> 163.5 <td>             <td> 0.24uA<td>             <td> -   <td> LG only </tr>
           <tr align="right"> <td> 7351      <td> 163.5 <td>             <td> 0.24uA<td> ther=140mV  <td> -   <td> LED, dead time = 3.1% </tr>
           <tr align="right"> <td> 7356-7365 <td> 163.5 <td> +75.0+/-0.27<td>  . <td> . <td> . <td> Apperture counters removed from the coincidence</tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7299-7365">here</a>.
           <p>
           The final result: +79.7 +/- 0.30(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
           Comment: the PLU input 8 is dead.
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="12aug99">
    <h3>12 August 1999</h3>
    <p class="legacy-shift-crew">11:40-14:30 The beam energy is 0.857 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV. T</p>
    <p>
    he injector angle is
            -81.8<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -108.6<sup>o</sup>. The slit was 16.5. The measurement of the phase dependence was not
            successful because the BCM readout was at zero. 
           <!--
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_4.pdf">plot</a>.
           -->
           <p>
           Mott: no result (from 74 to 78 from private communication).
           <p>
           The target angles and the polarization measured with a non-attenuated laser were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-12<sup>o</sup>? and the mean analysing power is 0.774 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7409-7410 <td>  90.5 <td> 0.20 uA     <td>  -    <td> -          <td> -   <td>thresholds=121mV, raster ON </tr>
           <tr align="right"> <td> 7393-7402 <td>  22.5 <td> +79.4+/-0.30<td>  19.5 <td> +77.8+/-0.30<td> 2.8 <td> 0.20uA </tr>
           <tr align="right"> <td> 7411-7420 <td> 163.5 <td> +77.9+/-0.30<td> 162.3 <td> +78.4+/-0.30<td> 1.0 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> +78.5+/-0.20 <td> -    <td> +78.1+/-0.20<td> -   <td> Av:+78.3+/-0.2</tr>
           <tr align="right"> <td> 7403-7408 <td>  22.5 <td> +80.1+/-0.40<td>  19.5 <td> +78.5+/-0.30<td> 1.6 <td> thresholds=160mV    </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7388-7420">here</a>.
           <p>
           The final result: +78.3 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
           Comment: the PLU input 8 is bypassed.
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="14aug99">
    <h3>14 August 1999</h3>
    <p class="legacy-shift-crew">16:00-18:30 The beam energy is 1.669 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV. T</p>
    <p>
    he injector angle is
            91.4<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -108.0<sup>o</sup>. The slit was 15.5. The phase is OK.
           <!--
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_4.pdf">plot</a>.
           -->
           <p>
           Mott: no result (from 74 to 78 from private communication).
           <p>
           The target angles and the polarization measured were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7432-7433 <td>  90.5 <td> 0.28 uA     <td>  -    <td> -          <td> -   <td>thresholds=121mV, raster ON </tr>
           <tr align="right"> <td> 7424-7431 <td>  22.5 <td> +79.5+/-0.30<td>  20.0 <td> +78.2+/-0.30<td> 1.7 <td> 0.28uA </tr>
           <tr align="right"> <td> 7434-7439 <td> 163.5 <td> +75.3+/-0.30<td> 161.3 <td> +76.0+/-0.30<td> 2.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> +77.4+/-0.20 <td> -    <td> +77.1+/-0.20<td> -   <td> Av:+77.2+/-0.2</tr>
           <tr align="right"> <td> 7448      <td> 163.5 <td>             <td> 0.28uA<td> ther=120mV  <td> -   <td> LED, dead time = 3.0% </tr>
           <tr align="right"> <td> 7441-7446 <td> 163.5 <td> +73.3+/-0.24<td> 161.3 <td> +74.0+/-0.30<td> 0.8 <td> No aperture counters</tr>
           <tr align="right"> <td> 7449      <td> 163.5 <td>             <td> 0.28uA<td> ther=120mV  <td> -   <td> No ap., LED dead time = 0.9% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7422-7449">here</a>.
           <p>
           The final result: +77.2 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="18aug99">
    <h3>18 August 1999</h3>
    <p class="legacy-shift-crew">12:00-13:30 The beam energy is 1.669 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV. T</p>
    <p>
    he injector angle is
            91.4<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -108.0<sup>o</sup>. The slit was 16.15. The phase was not checked.
           <!--
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_4.pdf">plot</a>.
           -->
           <p>
           Mott: no result (from 74 to 78 from private communication).
           <p>
           The target angles and the polarization measured were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7460-7461 <td>  90.5 <td> 0.25 uA     <td>  -    <td> -          <td> -   <td>thresholds=121mV, raster ON </tr>
           <tr align="right"> <td> 7452-7459 <td>  22.5 <td> +79.7+/-0.30<td>  20.1 <td> +78.4+/-0.30<td> 0.9 <td> 0.25uA </tr>
           <tr align="right"> <td> 7462-7469 <td> 163.5 <td> +77.6+/-0.30<td> 161.4 <td> +77.4+/-0.30<td> 1.0 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> +77.6+/-0.20 <td> -    <td> +77.4+/-0.20<td> -   <td> Av:+77.5+/-0.2</tr>
           <tr align="right"> <td> 7470      <td> 163.5 <td>             <td> 0.25uA<td> ther=120mV  <td> -   <td> LED, dead time = 2.7% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7450-7470">here</a>.
           <p>
           The final result: +77.5 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="19aug99">
    <h3>19 August 1999</h3>
    <p class="legacy-shift-crew">20:00-23:30 The beam energy is 4.108 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV. T</p>
    <p>
    he injector angle is
            -55.5<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -103.0<sup>o</sup>. The slit was 15.5. 
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_5.pdf">plot</a>.
           <p>
           Mott: no result (about 78 from private communication).
           <p>
           The target angles and the polarization measured were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7485-7486 <td>  90.5 <td> 0.52 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster OFF </tr>
           <tr align="right"> <td> 7477-7484 <td>  22.5 <td> -81.7+/-0.20<td>  20.4 <td> -80.5+/-0.20<td> 1.6 <td> 0.52uA </tr>
           <tr align="right"> <td> 7487-7494 <td> 163.5 <td> -79.9+/-0.19<td> 162.2 <td> -80.5+/-0.19<td> 1.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -80.8+/-0.15 <td> -    <td> -80.5+/-0.15<td> -   <td> Av:-80.6+/-0.15</tr>
           <tr align="right"> <td> 7495      <td> 163.5 <td>             <td> 0.52uA<td> ther=140mV  <td> -   <td> LED, dead time = 2.9% </tr>
           <tr align="right"> <td> 7497-7502 <td> 163.5 <td> -79.9+/-0.30<td> 162.2 <td> -80.5+/-0.19<td> 0.24 <td> Collimator at -5000 steps (1/2size)</tr>
           <tr align="right"> <td> 7505-7518 <td> 163.5 <td> -80.3+/-0.19<td> 162.2 <td> -80.9+/-0.19<td> 0.24 <td> Collimator back at max, Raster ON</tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7471-7518">here</a>.
           <p>
           The final result: -80.6 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="24aug99">
    <h3>24 August 1999</h3>
    <p class="legacy-shift-crew">7:00-8:30 The beam energy is 4.108 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV. Th</p>
    <p>
    e injector angle is
            -56.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -103.0<sup>o</sup>. The slit was 15.45. 
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_6.pdf">plot</a>.
           <p>
           Mott: 74.5 (+/- 1 rel.stat.) (+2.7 -1.9 rel.sys)% (see 
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9908_archive/990820205503.html">ELOG</a>).
           <p>
           The target angles and the polarization measured were:
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7618-7619 <td>  90.5 <td> 0.50 uA     <td>  -    <td> -          <td> -   <td>thresholds=141mV, raster ON </tr>
           <tr align="right"> <td> 7608-7617 <td>  22.5 <td> -81.1+/-0.20<td>  19.4 <td> -79.4+/-0.20<td> 1.3 <td> 0.50uA </tr>
           <tr align="right"> <td> 7620-7627 <td> 163.5 <td> -79.2+/-0.20<td> 160.7 <td> -80.5+/-0.20<td> 1.8 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -80.2+/-0.15 <td> -    <td> -80.0+/-0.15<td> -   <td> Av:-80.1+/-0.15</tr>
           <tr align="right"> <td> 7495      <td> 163.5 <td>             <td> 0.52uA<td> ther=140mV  <td> -   <td> LED, dead time = 1.0% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7608-7628">here</a>.
           <p>
           The final result: -80.1 +/- 0.15(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="24aug99a">
    <h3>24 August 1999</h3>
    <p class="legacy-shift-crew">18:00-19:00. After recesiation.</p>
    <p>
    The beam energy is 1.669 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV. The injector angle is
            91.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -108.0<sup>o</sup>. The slit was 15.3 
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_7.pdf">plot</a>.
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7649-7650 <td>  90.5 <td> 0.30 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7639-7648 <td>  22.5 <td>  77.1+/-0.24<td>  19.3 <td>  75.5+/-0.24<td> 1.1 <td> 0.30uA </tr>
           <tr align="right"> <td> 7651-7660 <td> 163.5 <td>  75.0+/-0.24<td> 161.1 <td>  73.8+/-0.24<td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  75.0+/-0.18 <td> -    <td>  74.6+/-0.18<td> -   <td> Av: 74.8+/-0.18</tr>
           <tr align="right"> <td> 7461      <td> 163.5 <td>             <td> 0.30uA<td> ther=120mV  <td> -   <td> LED, dead time = 3.1% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7636-7661">here</a>.
           <p>
           The final result: 74.8 +/- 0.18(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="26aug99">
    <h3>26 August 1999</h3>
    <p class="legacy-shift-crew">16:00-17:20. After recesiation and a spot change.</p>
    <p>
    The beam energy is 1.669 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV (N=0.406 S=0.405, inj=0.046). The injector angle is
            91.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -100.0<sup>o</sup>. The slit was 15.0
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_8.pdf">plot</a>.
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7674-7675 <td>  90.5 <td> 0.30 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7664-7673 <td>  22.5 <td>  77.6+/-0.24<td>  19.6 <td>  76.1+/-0.24<td> 1.1 <td> 0.30uA </tr>
           <tr align="right"> <td> 7676-7685 <td> 163.5 <td>  73.1+/-0.28<td> 161.5 <td>  73.9+/-0.28<td> 1.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  75.3+/-0.20 <td> -    <td>  75.3+/-0.20<td> -   <td> Av: 75.3+/-0.20</tr>
           <tr align="right"> <td> 7686      <td> 163.5 <td>             <td> 0.30uA<td> ther=120mV  <td> -   <td> LED, dead time = 2.8% </tr>
           <tr align="right"> <td> 7687      <td> 163.5 <td>             <td> 0.30uA<td> ther=120mV  <td> -   <td> LED, dead time = 2.8% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7662-7687">here</a>.
           <p>
           The final result: +75.3 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="27aug99">
    <h3>27 August 1999</h3>
    <p class="legacy-shift-crew">19:00-20:20. After a spot change.</p>
    <p>
    The beam energy is 1.669 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV (N=0.406 S=0.405, inj=0.046). The injector angle is
            91.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -95.0<sup>o</sup>. The slit was 15.0
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_9.pdf">plot</a>.
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7700-7701 <td>  90.5 <td> 0.30 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7690-7699 <td>  22.5 <td>  78.6+/-0.24<td>  19.6 <td>  77.1+/-0.24<td> 1.3 <td> 0.30uA </tr>
           <tr align="right"> <td> 7702-7711 <td> 163.5 <td>  73.3+/-0.22<td> 161.1 <td>  74.3+/-0.22<td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  76.0+/-0.20 <td> -    <td>  75.7+/-0.20<td> -   <td> Av: 75.8+/-0.20</tr>
           <tr align="right"> <td> 7712      <td> 163.5 <td>             <td> 0.35uA<td> ther=120mV  <td> -   <td> LED, dead time = 4.0% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7688-7712">here</a>.
           <p>
           The final result: +75.8 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="30aug99">
    <h3>30 August 1999</h3>
    <p class="legacy-shift-crew">10:30-11:50. After a spot change.</p>
    <p>
    The beam energy is 1.669 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV (N=0.406 S=0.405, inj=0.046). The injector angle is
            91.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -95.0<sup>o</sup>. The slit was 15.3
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_10.pdf">plot</a>.
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7728-7729 <td>  90.5 <td> 0.30 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7718-7727 <td>  22.5 <td>  78.6+/-0.23<td>  19.3 <td>  76.9+/-0.24<td> 0.9 <td> 0.30uA </tr>
           <tr align="right"> <td> 7730-7739 <td> 163.5 <td>  73.9+/-0.22<td> 161.1 <td>  74.9+/-0.22<td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  76.2+/-0.20 <td> -    <td>  75.9+/-0.20<td> -   <td> Av: 76.1+/-0.20</tr>
           <tr align="right"> <td> 7740      <td> 163.5 <td>             <td> 0.35uA<td> ther=120mV  <td> -   <td> LED, dead time = 4.0% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7715-7740">here</a>.
           <p>
           The final result: +76.1 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="31aug99">
    <h3>31 August 1999</h3>
    <p class="legacy-shift-crew">15:00-16:00. After a spot change.</p>
    <p>
    The beam energy is 1.669 GeV (MCC) or ?? (EP), one linac is 0.4055 GeV (N=0.406 S=0.405, inj=0.046). The injector angle is
            91.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at -95.0<sup>o</sup>. The slit was 15.2
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_11.pdf">plot</a>.
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7753-7754 <td>  90.5 <td> 0.30 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7743-7752 <td>  22.5 <td>  78.8+/-0.25<td>  19.3 <td>  77.1+/-0.25<td> 1.8 <td> 0.30uA </tr>
           <tr align="right"> <td> 7755-7764 <td> 163.5 <td>  73.5+/-0.23<td> 161.2 <td>  74.4+/-0.23<td> 2.3 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  76.1+/-0.20 <td> -    <td>  75.7+/-0.20<td> -   <td> Av: 75.9+/-0.20</tr>
           <tr align="right"> <td> 7765      <td> 163.5 <td>             <td> 0.30uA<td> ther=120mV  <td> -   <td> LED, dead time = 3.9% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7741-7765">here</a>.
           <p>
           The final result: +75.9 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="21sep99">
    <h3>21 September 1999</h3>
    <p class="legacy-shift-crew">09:30-11:00.</p>
    <p>
    The beam energy is 1.269 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            -17.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at 62.0<sup>o</sup>. The slit was 17.1, attenuator at 200.
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_12.pdf">plot</a>.
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.765 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7788-7789 <td>  90.5 <td> 0.23 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 7778-7787 <td>  22.5 <td>  65.3+/-0.30<td>  19.5 <td>  64.0+/-0.30<td> 2.2 <td> 0.23uA </tr>
           <tr align="right"> <td> 7790-7799 <td> 163.5 <td>  64.9+/-0.30<td> 161.7 <td>  65.5+/-0.30<td> 0.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  65.1+/-0.20 <td> -    <td>  64.8+/-0.20<td> -   <td> Av: 65.0+/-0.20</tr>
           <tr align="right"> <td> 7800      <td> 163.5 <td>             <td> 0.23uA<td> ther=140mV  <td> -   <td> LED, dead time = 3.4% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7777-7800">here</a>.
           <p>
           The final result: +65.0 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="24sep99">
    <h3>24 September 1999</h3>
    <p class="legacy-shift-crew">10:00-11:30.</p>
    <p>
    The beam energy is 2.503 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            -46.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at 65.0<sup>o</sup>. The slit was 16.2, attenuator at 600.
           <!--
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
           -->
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7817-7818 <td>  90.5 <td> 0.33 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 7807-7816 <td>  22.5 <td>  66.2+/-0.26<td>  20.4 <td>  65.4+/-0.26<td> 1.4 <td> 0.33uA </tr>
           <tr align="right"> <td> 7819-7828 <td> 163.5 <td>  63.3+/-0.24<td> 162.9 <td>  63.5+/-0.24<td> 0.4 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  64.8+/-0.20 <td> -    <td>  64.5+/-0.20<td> -   <td> Av: 64.6+/-0.20</tr>
           <tr align="right"> <td> 7829      <td> 163.5 <td>             <td> 0.23uA<td> ther=140mV  <td> -   <td> LED, dead time = 2.9% </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7807-7829">here</a>.
           <p>
           The final result: +64.6 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="27sep99">
    <h3>27 September 1999</h3>
    <p class="legacy-shift-crew">11:00-13:30.</p>
    <p>
    The beam energy is 2.503 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            -46.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <p>
            The laser phase was at 67.0<sup>o</sup>. The slit was 16.2, attenuator at 600.
           <!--
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
           -->
           <p>
           Mott: no result.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7845-7846 <td>  90.5 <td> 0.45 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 7834-7843 <td>  22.5 <td>  64.5+/-0.20<td>  18.4 <td>  62.8+/-0.20<td> 6.0 <td> 0.45uA </tr>
           <tr align="right"> <td> 7851-7856 <td> 163.5 <td>  60.4+/-0.24<td> 159.9 <td>  61.7+/-0.24<td> 3.0 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  62.5+/-0.20 <td> -    <td>  62.3+/-0.20<td> -   <td> Av: 62.4+/-0.20</tr>
           <tr align="right"> <td> 7857      <td> 163.5 <td>             <td> 0.45uA<td> ther=140mV  <td> -   <td> LED, dead time = 3.3% </tr>
           <tr align="right"> <td> 7858      <td> 163.5 <td>             <td> 0.2uA <td>  <td> <td> </tr>
           <tr align="right"> <td> 7859      <td> 163.5 <td>             <td> 0.8uA <td>  <td> <td> </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7831-7859">here</a>.
           <p>
           The final result: +62.4 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="02oct99">
    <h3>02 October 1999</h3>
    <p class="legacy-shift-crew">11:30-13:30.</p>
    <p>
    The beam energy is 2.503 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            -46.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           A new polarized gun is used.
           <p>
            The laser phase was at -70.0<sup>o</sup>. The slit was 15.47, attenuator at 600.
           
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
           The point in the middle dropped because the beam was interrupted at that moment.
           <p>
           Mott: no definite result (see <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991001194215.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7869-7870 <td>  90.5 <td> 0.42 uA     <td>  -    <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 7863-7867 <td>  22.5 <td>  62.6+/-0.30<td>  19.7 <td>  61.4+/-0.30<td> 2.2 <td> 0.42uA </tr>
           <tr align="right"> <td> 7871-7876 <td> 163.5 <td>  60.0+/-0.30<td> 161.5 <td>  60.7+/-0.30<td> 0.8 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  61.3+/-0.20 <td> -    <td>  61.0+/-0.20<td> -   <td> Av: 61.2+/-0.20</tr>
           <tr align="right"> <td> 7877      <td> 163.5 <td>             <td> 0.4uA<td> ther=140mV  <td> -   <td> LED, dead time = 4.9% </tr>
           </table>
           <p>
           There was a problem with the target angle measurements at 160 degrees. The arms counting rates gave absurdly low values of about 12 degrees,
           while the coincidence rates gave about 16 deg. Perhaps it happened because of a strong (2.5mm) beam misplacement.
           <p>
           <table border>
           <caption align="top">  Iron target P=6.83% (from <a href="http:#16may99_a">May,16 1999</a>). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7879-7888 <td>  22.5 <td>  64.8+/-0.40<td>     <td>  <td> 2.6 <td> 0.38uA </tr>
           </table>
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7860-7888">here</a>.
           <p>
           The final result: +61.2 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="05oct99">
    <h3>05 October 1999</h3>
    <p class="legacy-shift-crew">13:30-18:30.</p>
    <p>
    The beam energy is 2.503 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            -46.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Injector is at a new spot.
           <p>
            The laser phase was at -62.0<sup>o</sup>. The slit was 15.0, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
            -->
           <p>
           Mott: no data
           <!-- 
           no definite result (see <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991001194215.html">(see ELOG)</a>
           -->
           <p>
           It seems that the detector was damaged by radiation at the stage of beam tuning 
           (and, parhaps, during 2h of fighting with coda), which took place at about 10:00-11:00. The top left LG module
           lost about 50% of the amplitude, the others lost less and the bottom modules stayed unchanged.
           We increased the HV in order to get all the signals to about ADC=200.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76 ?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7921-7922 <td>  90.5 <td> 0.36 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7915-7921 <td>  22.5 <td>  60.1+/-0.30<td>   ?    <td>  ??+/-0.30<td> 1.0 <td> 0.36uA, open collimator </tr>
           <tr align="right"> <td> 7923-7928 <td> 163.5 <td>  57.7+/-0.30<td>   ?    <td>  ??+/-0.30<td> 1.7 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  58.9+/-0.20 <td>  -    <td>  ??.0+/-0.20<td> -   <td> Av:58.9+/-0.20</tr>
           <tr align="right"> <td> 7830      <td> 163.5 <td>             <td> 0.36uA<td> ther=120mV  <td> -   <td> LED, dead time = 2.8% </tr>
           <tr align="right"> <td> 7933-7942 <td> 163.5 <td>  57.8+/-0.30<td>   ?    <td>  ??+/-0.30<td> 1.2 <td> collimator about 1/2 open</tr>
           <tr align="right"> <td> 7831-7832 <td> 163.5 <td>             <td> 0.36uA<td> ther=120mV  <td> -   <td> LED, dead time = 1.83% </tr>
           </table>
           <p>
           The target angle measurements gave absurd results. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. Perhaps the beam is far from the center.
           <p>
           A dead time study was performed by closing down the collimator by a factor of 2 (-5000 steps of the motor).
           The LED measured dead-time went down by a factor of about 1.6. One could expect a 1% relative 
           rise in the polarization measured (or about 0.6% absolute increase). The polarization did not change. The statistical
           accuracy was not enough to see a change at this level.
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7897-7942">here</a>.
           <p>
           The final result: +58.9 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="08oct99">
    <h3>08 October 1999</h3>
    <p class="legacy-shift-crew">13:30-18:30.</p>
    <p>
    The beam energy is 2.503 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            -46.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
           Injector is at a new spot.
           <p>
            The laser phase was at -62.0<sup>o</sup>. The slit was 15.0, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
            -->
           <p>
           Mott: no data
           <!-- 
           no definite result (see <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991001194215.html">(see ELOG)</a>
           -->
           <p>
           The detector has partially recovered after it had been damaged by radiation before the previous measurement.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7953-7954 <td>  90.5 <td> 0.29 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7947-7952 <td>  22.5 <td>  68.5+/-0.30<td>   ?    <td>  ??+/-0.30<td> 0.6 <td> 0.29uA, open collimator </tr>
           <tr align="right"> <td> 7955-7960 <td> 163.5 <td>  64.7+/-0.30<td>   ?    <td>  ??+/-0.30<td> 1.0 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  66.6+/-0.20 <td>  -    <td>  ??.0+/-0.20<td> -   <td> Av:66.6+/-0.20</tr>
           <tr align="right"> <td> 7861-7862 <td> 163.5 <td>             <td> 0.29uA <td> thre=120mV   <td> -   <td> LED, dtim = 2.20,2.20% </tr>
           <tr align="right"> <td> 7863-7864 <td> 163.5 <td>             <td> 1.10uA <td> thre=120mV   <td> -   <td> LED, dtim = 8.70,8.90% </tr>
           <tr align="right"> <td> 7965-7972 <td> 163.5 <td> 64.69+/-0.12<td> 1.10uA <td> collim ~30mm <td> 11.0<td>   </tr>
           <tr align="right"> <td> 7873-7874 <td> 163.5 <td>             <td> 1.10uA <td> collim ~30mm <td> -   <td> LED, dtim = 8.45,8.47% </tr>
           <tr align="right"> <td> 7875-7876 <td> 163.5 <td>             <td> 1.10uA <td> collim ~15mm <td> -   <td> LED, dtim = 5.48,5.50% </tr>
           <tr align="right"> <td> 7977-7984 <td> 163.5 <td>65.24+/-0.115<td> 1.10uA <td> collim ~15mm <td> 6.6 <td>   </tr>
           <tr align="right"> <td> 7885-7886 <td> 163.5 <td>             <td> 1.10uA <td> collim ~15mm <td> -   <td> LED, dtim = 5.42,5.41% </tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. Perhaps the beam is far from the center.
           <p>
           A dead time study was performed by closing down the collimator by a factor of 2 (-5000 steps of the motor), at a high
           current of about 1uA. The dead times measured with the LEDs for 30mm slit was about 8.5% while for 15mm slit it was 5.45%.
           Simulation showed that the analysing powers are the same. One could expect a difference in polarization 
           of about 3% relative or 1.95% absolute. We observe a change of 0.55+/-0.17% absolute. 
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7944-7986">here</a>.
           <p>
           The final result: +66.6 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="15oct99">
    <h3>15 October 1999</h3>
    <p class="legacy-shift-crew">17:00-17:55.</p>
    <p>
    The beam energy is 2.498 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            -46.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at -58.2<sup>o</sup>. The slit was 16.2, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
            -->
           <p>
           Mott: no data
           <!-- 
           no definite result (see <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991001194215.html">(see ELOG)</a>
           -->
           <p>
           The detector has partially recovered after it had been damaged by radiation before the previous measurement.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 7990-7991 <td>  22.5 <td> 41.8     <td>  -    <td> -          <td> -   <td>thresholds=40mV, Wien =0.38 </tr>
           <tr align="right"> <td> 8002-8003 <td>  90.5 <td> 0.29 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 7995-8000 <td>  22.5 <td>  69.9+/-0.30<td>   ?    <td>  ??+/-0.30<td> 9.0 <td> 0.29uA, Wien=-46.3 </tr>
           <tr align="right"> <td> 8004-8009 <td> 163.5 <td>  66.7+/-0.30<td>   ?    <td>  ??+/-0.30<td> 3.2 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td>  68.3+/-0.20 <td>  -    <td>  ??.0+/-0.20<td> -   <td> Av:68.3+/-0.20</tr>
           <tr align="right"> <td> 8010 <td> 163.5 <td>             <td> 0.29uA <td> thre=120mV   <td> -   <td> LED, dtim = 2.9% </tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. Perhaps the beam is far from the center.
           <p>
    
           <p>
    
           The full information is given
           <a href="../tab/run.tab.7990-8000">here</a>. and
           <a href="../tab/run.tab.8002-8011">here</a>.
           <p>
           The final result: +68.3 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="20oct99">
    <h3>20 October 1999</h3>
    <p class="legacy-shift-crew">15:00-17:00.</p>
    <p>
    The beam energy is 3.115 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            71.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at -58.2<sup>o</sup>. The slit was 16.7, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
            -->
           <p>
           Mott: no data
           <!-- 
           no definite result (see <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991001194215.html">(see ELOG)</a>
           -->
           <p>
           The beam current  asymmetry is very high (about 2%).
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8022-8023 <td>  90.5 <td> 0.29 uA     <td>  -    <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 8016-8021 <td>  22.5 <td> -70.0+/-0.30<td>   ?    <td>  ??+/-0.30<td> 5.3 <td> 0.29uA, open collimator </tr>
           <tr align="right"> <td> 8024-8029 <td> 163.5 <td> -67.6+/-0.30<td>   ?    <td>  ??+/-0.30<td> 8.1 <td> </tr>
           <tr align="right"> <td> Average   <td> -     <td> -68.8+/-0.20 <td>  -    <td>  ??.0+/-0.20<td> -   <td> Av:68.8+/-0.20</tr>
           <tr align="right"> <td> 8030-8031 <td> 163.5 <td>             <td> 0.29uA <td> thre=140mV   <td> -   <td> LED, dtim = 2.60,2.55% </tr>
           <tr align="right"> <td> 8032-8033 <td> 163.5 <td>             <td> 0.10uA <td> thre=140mV   <td> -   <td> LED, dtim = 1.00,1.00% </tr>
           <tr align="right"> <td> 8034-8035 <td> 163.5 <td> -67.2+/-0.30<td> 0.10uA <td>  ??+/-0.30<td> 46. <td> </tr>
           <tr align="right"> <td> 8037-8038 <td> 163.5 <td> -67.1+/-0.30<td> 0.20uA <td>  ??+/-0.30<td> 50. <td> </tr>
           <tr align="right"> <td> 8039-8040 <td> 163.5 <td>             <td> 0.20uA <td> thre=140mV   <td> -   <td> LED, dtim = 1.90,1.80% </tr>
           <tr align="right"> <td> 8041      <td> 163.5 <td>             <td> 0.70uA <td> thre=140mV   <td> -   <td> LED, dtim = 6.50% </tr>
           <tr align="right"> <td> 8042-8045 <td> 163.5 <td> -68.6+/-0.30<td> 0.70uA <td>  ??+/-0.30<td> 55. <td> </tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. Perhaps the beam is far from the center.
           <p>
    
           <p>
    
           The full information is given
           <a href="../tab/run.tab.8013-8045">here</a>. 
           <p>
           The final result: -68.8 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           If the poor chi2 is taken into account the statistical error goes to about 1%.
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="23oct99">
    <h3>23 October 1999</h3>
    <p class="legacy-shift-crew">8:30-10:20.</p>
    <p>
    The beam energy is 3.115 GeV (MCC) or ?? (EP), one linac is 0.308 GeV (N=0.308 S=0.308, inj=0.03465). The injector angle is
            65.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at -58.0<sup>o</sup>. The slit was 17.4, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_13.pdf">plot</a>.
            -->
           <p>
           Mott: no data
           <!-- 
           no definite result (see <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991001194215.html">(see ELOG)</a>
           -->
           <p>
           The beam current  asymmetry is very high (about 2%).
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8055-8056 <td>  90.5 <td> 0.32 uA     <td>  -     <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 8049-8054 <td>  22.5 <td> -68.5+/-0.32<td>   ?    <td>  ??+/-0.30<td> 4.8 <td> 0.32uA, open collimator </tr>
           <tr align="right"> <td> 8057-8062 <td> 163.5 <td> -66.9+/-0.30<td>   ?    <td>  ??+/-0.30<td> 2.3 <td> Coil=9.A</tr>
           <tr align="right"> <td> Average   <td> -     <td> -67.7+/-0.20 <td>  -    <td>  ??.0+/-0.20<td> -   <td> Av:-67.7+/-0.20</tr>
           <tr align="right"> <td> 8063-8064 <td> 163.5 <td>             <td> 0.32uA <td> thre=120mV   <td> -   <td> LED, dtim = 2.82,2.62% </tr>
           <tr align="right"> <td> 8065-8070 <td> 163.5 <td> -67.2+/-0.22<td> 0.35uA <td>  ??+/-0.30<td> 8.2 <td> Coil=7.A</tr>
           <tr align="right"> <td> 8071-8074 <td> 163.5 <td> -66.2+/-0.27<td> 0.35uA <td>  ??+/-0.30<td> 19. <td> Coil=5.A</tr>
           <tr align="right"> <td> 8075-8078 <td> 163.5 <td> -61.6+/-0.26<td> 0.35uA <td>  ??+/-0.30<td> 8.1 <td> Coil=2.A</tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. 
           <p>
           No strong dependence of the asymmetry observed on the current in the coils has been found
           (see <a href="../plots/coils_1.pdf">a plot</a>).
           <p>
           The full information is given
           <a href="../tab/run.tab.8046-8078">here</a>. 
           <p>
           The final result: -67.7 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           If the poor chi2 is taken into account the statistical error goes to about 0.5%.
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="29oct99">
    <h3>29 October 1999</h3>
    <p class="legacy-shift-crew">13:30-15:45.</p>
    <p>
    The beam energy is 1.947 GeV (MCC) or ?? (EP), one linac is 0.474 GeV (N=0.474 S=0.474, inj=0.05333). The injector angle is
            47.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at -61.8<sup>o</sup>. The slit was 15.3, attenuator at 600.
           
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_14.pdf">plot</a>.
           
           <p>
           Mott: 
           66+/-5%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991027180017.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8096-8097 <td>  90.5 <td> 0.25 uA     <td>  -     <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 8090-8095 <td>  22.5 <td>-71.12+/-0.25<td>   ?    <td>  ??+/-0.30<td> 2.0 <td> 0.25uA, open collimator </tr>
           <tr align="right"> <td> 8098-8104 <td> 163.5 <td>-69.72+/-0.24<td>   ?    <td>  ??+/-0.30<td> 1.0 <td> Coil=9.A</tr>
           <tr align="right"> <td> Average   <td> -     <td>-70.4+/-0.20 <td>  -     <td>  ??.0+/-0.20<td> -   <td> Av:-70.4+/-0.20</tr>
           <tr align="right"> <td> 8105-8106 <td> 163.5 <td>             <td> 0.25uA <td> thre=140mV   <td> -   <td> LED, dtim = 3.2,3.12% </tr>
           <tr align="right"> <td> 8107-8112 <td> 163.5 <td>-69.13+/-0.34<td> 0.12uA <td>  ??+/-0.30<td> 1.6 <td> </tr>
           <tr align="right"> <td> 8113-8114 <td> 163.5 <td>             <td> 0.12uA <td> thre=140mV   <td> -   <td> LED, dtim = 1.5,1.5% </tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. 
           <p>
           The full information is given
           <a href="../tab/run.tab.8081-8114">here</a>. 
           <p>
           The final result: -70.4 +/- 0.20(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="02nov99">
    <h3>02 November 1999</h3>
    <p class="legacy-shift-crew">13:30-15:45.</p>
    <p>
    The beam energy is 1.947 GeV (MCC) or ?? (EP), one linac is 0.474 GeV (N=0.474 S=0.474, inj=0.05333). The injector angle is
            47.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at -61.7<sup>o</sup>. The slit was 14.8, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_14.pdf">plot</a>.
           -->
           <p>
           Mott: 
           66+/-5%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991027180017.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8124-8125 <td>  90.5 <td> 0.29 uA     <td>  -     <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 8118-8123 <td>  22.5 <td>-74.10+/-0.24<td>   ?    <td>  ??+/-0.30<td> 0.8 <td> 0.25uA, open collimator </tr>
           <tr align="right"> <td> 8126-8131 <td> 163.5 <td>-72.50+/-0.24<td>   ?    <td>  ??+/-0.30<td> 0.9 <td>  </tr>
           <tr align="right"> <td> Average   <td> -     <td>-73.30+/-0.17 <td>  -     <td>  ??.0+/-0.20<td> -   <td> Av:-73.3+/-0.17</tr>
           <tr align="right"> <td> 8132-8133 <td> 163.5 <td>             <td> 0.29uA <td> thre=140mV   <td> -   <td> LED, dtim = 3.2,3.2% </tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. 
           <p>
           The full information is given
           <a href="../tab/run.tab.8116-8133">here</a>. 
           <p>
           The final result: -73.3 +/- 0.17(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="05nov99">
    <h3>05 November 1999</h3>
    <p class="legacy-shift-crew">17:40-19:30.</p>
    <p>
    The beam energy is 4.792 GeV (MCC) or ?? (EP), one linac is 0.474 GeV (N=0.474 S=0.474, inj=0.05333). The injector angle is
            47.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at -61.8<sup>o</sup>. The slit was 15.1, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_14.pdf">plot</a>.
           -->
           <p>
           Mott: 
           66+/-5%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991027180017.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-14<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8146-8147 <td>  90.5 <td> 0.29 uA     <td>  -     <td> -          <td> -   <td>thresholds=140mV, raster ON </tr>
           <tr align="right"> <td> 8138-8145 <td>  22.5 <td>-70.78+/-0.27<td>   ?    <td>  ??+/-0.30<td> 2.0 <td> 0.25uA, open collimator </tr>
           <tr align="right"> <td> 8148-8153 <td> 163.5 <td>-69.32+/-0.25<td>   ?    <td>  ??+/-0.30<td> 2.1 <td>  </tr>
           <tr align="right"> <td> Average   <td> -     <td>-70.00+/-0.18 <td>  -     <td>  ??.0+/-0.20<td> -   <td> Av:-70.0+/-0.18</tr>
           <tr align="right"> <td> 8154-8155 <td> 163.5 <td>             <td> 0.29uA <td> thre=140mV   <td> -   <td> LED, dtim = 1.8,1.8% </tr>
           <tr align="right"> <td> 8156-8157 <td> 163.5 <td>             <td> 0.72uA <td> thre=140mV   <td> -   <td> LED, dtim = 4.2,4.2% </tr>
           <tr align="right"> <td> 8158-8163 <td> 163.5 <td>-69.23+/-0.16<td> 0.68uA <td>  ??+/-0.30<td> 1.6 <td>  </tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. 
           <p>
           The full information is given
           <a href="../tab/run.tab.8134-8163">here</a>. 
           <p>
           The final result: -70.0 +/- 0.18(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="06nov99">
    <h3>06 November 1999</h3>
    <p class="legacy-shift-crew">14:30-17:30.</p>
    <p>
    The beam energy is 1.000 GeV (MCC) or ?? (EP), one linac is 0.474 GeV (N=0.474 S=0.474, inj=0.05333). The injector angle is
            53.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at -61.8<sup>o</sup>. The slit was 14.8, attenuator at 600.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_14.pdf">plot</a>.
           -->
           <p>
           Mott: 
           66+/-5%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/9910_archive/991027180017.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-1?<sup>o</sup>? and the mean analysing power is 0.77.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8175-8176 <td>  90.5 <td> 1.29 uA     <td>  -     <td> -          <td> -   <td>thresholds=120mV, raster ON </tr>
           <tr align="right"> <td> 8167-8174 <td>  22.5 <td>-74.17+/-0.24<td>   ?    <td>  ??+/-0.30<td> 0.9 <td> 0.19uA, open collimator </tr>
           <tr align="right"> <td> 8177-8184 <td> 163.5 <td>-73.81+/-0.23<td>   ?    <td>  ??+/-0.30<td> 0.6 <td>  </tr>
           <tr align="right"> <td> Average   <td> -     <td>-74.00+/-0.17 <td>  -     <td>  ??.0+/-0.20<td> -   <td> Av:-74.0+/-0.17</tr>
           <tr align="right"> <td> 8185-8186 <td> 163.5 <td>             <td> 0.19uA <td> thre=120mV   <td> -   <td> LED, dtim = 3.3,3.3% </tr>
           <tr align="right"> <td> 8187-8188 <td> 163.5 <td>             <td> 0.19uA <td> thre=90mV   <td> -   <td> LED, dtim = 3.5,3.5% </tr>
           <tr align="right"> <td> 8189-8194 <td> 163.5 <td>-73.05+/-0.27<td> 0.19uA <td>  ??+/-0.30<td> 1.5 <td> thr=90mV  </tr>
           <tr align="right"> <td> 8195-8200 <td> 163.5 <td>-72.42+/-0.27<td> 0.19uA <td>  ??+/-0.30<td> 0.4 <td> thr=70mV  </tr>
           <tr align="right"> <td> 8201-8202 <td> 163.5 <td>             <td> 0.19uA <td> thre=70mV   <td> -   <td> LED, dtim = 4.1,4.1% </tr>
           <tr align="right"> <td> 8203-8205 <td> 163.5 <td>             <td> 0.06uA <td> thre=120mV   <td> -   <td> LED, dtim = 1.1,1.1% </tr>
           <tr align="right"> <td> 8206-8207 <td> 163.5 <td>-73.9+/-1.3  <td> 0.06uA <td>  ??+/-0.30<td> 3.2 <td> thr=120mV  </tr>
           <tr align="right"> <td> 8208-8209 <td>  90.5 <td>             <td> 0.06uA <td>              <td> <td> thr=120mV  </tr>
           <tr align="right"> <td> 8210-8211 <td>  22.5 <td>-72.5+/-1.4  <td> 0.06uA <td>  ??+/-0.30<td> 8.5 <td> thr=120mV  </tr>
           </table>
           <p>
           The target angle measurements gave absurd results again. The polarization is consistent with our typical
           angles of about 19.5 and 160.5 degrees. 
           <p>
           The full information is given
           <a href="../tab/run.tab.8165-8211">here</a>. 
           <p>
           The final result: -74.0 +/- 0.17(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT)<br>
           <p>
    </ul>
    </div>
        </p>
  </section>
</div>
<?php
PageEnd();
