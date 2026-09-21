<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter Raw Results Archives 2000');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<section class="legacy-shift" id="08apr2000">
    <h3>08 April 2000</h3>
    <p class="legacy-shift-crew">00:30-05:30.</p>
    <p>
    The beam energy is 3.407 GeV (MCC) or ?? (EP), one linac is 0.420 GeV (N=0.4185 S=0.4185, inj=0.04708). The injector angle is
            28.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at 4.9<sup>o</sup>. The slit was 23., attenuator at 140.
           
           <!-- The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_14.pdf">plot</a>.
           -->
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8374-8375 <td>  90.5 <td> 0.5  uA     <td>  -     <td> -          <td> -   <td>thresholds=136mV, raster OFF </tr>
           <tr align="right"> <td> 8364-8371 <td>  22.5 <td>-68.46+/-0.26<td> 18.8   <td>  66.8+/-0.25<td> 3.5 <td> 0.5uA, open collimator </tr>
           <tr align="right"> <td> 8376-8383 <td> 163.0 <td>-63.79+/-0.22<td>162.1   <td>  64.1+/-0.22<td> 3.5 <td>  </tr>
           <tr align="right"> <td> Average   <td> -     <td>-66.10+/-0.20 <td>  -    <td>  65.5+/-0.20<td> -   <td> Av:-65.8+/-0.20</tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8354-8383">here</a>. 
           <p>
            It occured that at the run 8367 the Wien settings were changed! This seems to increase the polarization
            by 2%. 
           <p>
           The final result: -65.8 +/- 0.20(stat) +/- 3.0(syst-prelim) -2%(Wien filter messed up) (1/2 wave plate OUT)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="12apr2000">
    <h3>12 April 2000</h3>
    <p class="legacy-shift-crew">13:30-18:30.</p>
    <p>
    The beam energy is 4.234 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            39.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at 4.9<sup>o</sup>. 
           The beam current dependence on the phase is given on the 
           <a href="../plots/laser_phase_15.pdf">plot</a>.
    
           The slit was at 2 settings: 16., attenuator at 70 and the open slit and attenuator at 500 and the slit at 16.2.
           The former setting happens to add much of cross-talk from halls B and/or C which dilutes the polarization by about 15%.
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8403-8404 <td>  90.5 <td> 0.5 uA     <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=500 </tr>
           <tr align="right"> <td> 8395-8402 <td>  23.0 <td>-82.85+/-0.23<td> 19.2   <td> -80.76+/-0.23<td> 1.0 <td> 0.5uA, open collimator </tr>
           <tr align="right"> <td> 8405-8412 <td> 163.5 <td>-79.69+/-0.21<td> 162.0  <td> -80.30+/-0.21<td> 2.0 <td> Wien at 39<sup>o</sup> </tr>
           <tr align="right"> <td> Average   <td> -     <td>-81.30+/-0.17<td>  -     <td> -80.50+/-0.17<td> -   <td> Av:-80.9+/-0.17</tr>
           <tr align="right"> <td> 8387-8394 <td>  23.0 <td>-62.63+/-0.24<td>  -     <td>  - <td> 3.0 <td> att=70, open slit </tr>
           <tr align="right"> <td> 8416-8427 <td> 163.5 <td>-67.90+/-0.19<td>  -     <td>  - <td> 1.3 <td> att=70, open slit </tr>
           <tr align="right"> <td> Average   <td> -     <td>-65.20+/-0.17<td>  -     <td>  - <td> -   <td> </tr>
           <tr align="right"> <td> 8416-8427 <td> 163.5 <td>-67.90+/-0.19<td>  -     <td>  - <td> 1.3 <td> att=70, open slit </tr>
           <tr align="right"> <td> 8428-8433 <td> 163.5 <td>-79.20+/-0.26<td>  -     <td>  - <td> 1.0 <td> att=70, lasers B,C off </tr>
           <tr align="right"> <td> 8434-8435 <td> 163.5 <td>rate 0.2%    <td>  -     <td>  - <td> -   <td> att=500,slit 16.0, laser A off   </tr>
           <tr align="right"> <td> 8441-8448 <td> 163.5 <td>+58.30+/-0.7  <td> rate=10%  <td>  - <td> -   <td> att=70,slit open, laser A off   </tr>
           <tr align="right"> <td> 8449-8456 <td> 163.5 <td>-78.74+/-0.21<td>  -     <td>  - <td> 0.7 <td> att=500, slit 16. </tr>
           <tr align="right"> <td> 8465-8468 <td>  90.5 <td> - <td>  -  <td>  - <td>  <td> att=500, Wien=47<sup>o</sup> </tr>
           <tr align="right"> <td> 8457-8463 <td> 163.5 <td>-76.73+/-0.21<td> 161.5  <td>  -77.60+/-0.23 <td> 0.6 <td> att=500, Wien=47<sup>o</sup> </tr>
           <tr align="right"> <td> 8469-8476 <td>  23.0 <td>-81.52+/-0.22<td>  19.1  <td>  -79.40+/-0.22 <td> 0.6 <td>  </tr>
           <tr align="right"> <td> Average   <td> -     <td>-79.20+/-0.17<td>  -     <td>  -78.50+/-0.17<td> -   <td> Av:-78.9+/-0.17</tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8385-8477">here</a>. 
           <p>
            A strong cross-talk of from halls B,C was found. The polarization could be diluted by 15%. The polarization should be measured at
            a low laser attenuation (500)!
           <p>
           The Wien filter angle change did not produce a significant change in polarization. With the last setting of 47<sup>o</sup>
           (suggested by Jay Benesch on the basis of the energy evaluation) the polarization seems to be 2% absolute lower than
           at 39<sup>o</sup>.
           <p>
           The final result: -78.9 +/- 0.17(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 47<sup>o</sup> Wien angle)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="16apr2000">
    <h3>16 April 2000</h3>
    <p class="legacy-shift-crew">11:00-13:30.</p>
    <p>
    The beam energy is 4.234 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            47.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at 7.9<sup>o</sup>. 
           <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_15.pdf">plot</a>.
           -->
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8509-8510 <td>  90.5 <td> 0.5 uA     <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=600 </tr>
           <tr align="right"> <td> 8511-8516 <td>  23.0 <td>-80.31+/-0.24<td> 19.8   <td> -78.00+/-0.24<td> 0.8 <td> 0.5uA, open collimator </tr>
           <tr align="right"> <td> 8503-8508 <td> 163.5 <td>-76.60+/-0.24<td> 161.6  <td> -77.45+/-0.24<td> 1.6 <td>     </tr>
           <tr align="right"> <td> Average   <td> -     <td>-78.45+/-0.17<td>  -     <td> -78.00+/-0.17<td> -   <td> Av:-78.2+/-0.2</tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8503-8517">here</a>. 
           <p>
           The final result: -78.2 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 47<sup>o</sup> Wien angle)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="19apr2000">
    <h3>19 April 2000</h3>
    <p class="legacy-shift-crew">11:00-13:30.</p>
    <p>
    The beam energy is 4.234 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            47.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
         
            The laser phase was at 7.9<sup>o</sup>. 
           <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_15.pdf">plot</a>.
           -->
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8525-8526 <td>  90.5 <td> 0.58 uA    <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=600 </tr>
           <tr align="right"> <td> 8521-8524 <td>  23.0 <td>-79.92+/-0.24<td> 19.3   <td> -77.95+/-0.24<td> 1.2 <td> 0.58uA, open collimator </tr>
           <tr align="right"> <td> 8527-8530 <td> 163.5 <td>-75.93+/-0.22<td> 162.1  <td> -76.31+/-0.24<td> 0.5 <td>     </tr>
           <tr align="right"> <td> Average   <td> -     <td>-77.92+/-0.17<td>  -     <td> -77.10+/-0.17<td> -   <td> Av:-77.6+/-0.17</tr>
           <tr align="right"> <td> 8531-8531 <td> 163.5 <td>             <td> 0.58uA <td> thre=136mV   <td> -   <td> LED, dtim = 2.7% </tr>
           <tr align="right"> <td> 8536-8536 <td> 163.5 <td>             <td> 0.24uA <td> thre=136mV   <td> -   <td> LED, dtim = 1.1% </tr>
           <tr align="right"> <td> 8538-8539 <td>  90.5 <td> 0.24 uA    <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=600 </tr>
           <tr align="right"> <td> 8540-8543 <td>  23.0 <td>-78.73+/-0.36<td> 19.6   <td> -76.93+/-0.36<td> 2.7 <td> 0.24uA,    </tr>
           <tr align="right"> <td> 8532-8535 <td> 163.5 <td>-74.23+/-0.30<td> 161.1  <td> -75.03+/-0.24<td> 0.3 <td> 0.24uA     </tr>
           <tr align="right"> <td> Average   <td> -     <td>-76.50+/-0.25<td>  -     <td> -75.98+/-0.25<td> -   <td> Av:-76.2+/-0.25</tr>
           <tr align="right"> <td> 8544-8547 <td>  23.0 <td>-79.57+/-0.22<td>        <td>              <td> 3.5 <td> 0.59uA,    </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8520-8547">here</a>. 
           <p>
           The final result: -77.6 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 47<sup>o</sup> Wien angle)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="23apr2000">
    <h3>23 April 2000</h3>
    <p class="legacy-shift-crew">19:00-22:00.</p>
    <p>
    The beam energy is 4.234 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            47.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            BCM V to F converters did not work. A different converter was used.
           <p>
            The laser phase was at 7.1<sup>o</sup>. 
           <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_15.pdf">plot</a>.
           -->
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8569-8571 <td>  90.5 <td> 0.58 uA?   <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=600 </tr>
           <tr align="right"> <td> 8561-8568 <td>  23.0 <td>             <td>        <td>              <td>     <td> 0.58uA ?, open collimator </tr>
           <tr align="right"> <td> 8587-8588 <td>  23.0 <td>-79.72+/-0.25<td> 19.3 ? <td> -77.90+/-0.25<td> 11. <td>                         </tr>
           <tr align="right"> <td> 8573-8585 <td> 163.5 <td>-76.19+/-0.20<td> 162.1 ?<td> -77.21+/-0.20<td> 3.7 <td>     </tr>
           <tr align="right"> <td> Average   <td> -     <td>-78.0 +/-0.3 <td>  -     <td> -77.6 +/-0.3 <td> -   <td> Av:-77.8+/-0.3 </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8561-8588">here</a>.
            <p>
            A the results were not very stable, in particularly at the forward target angle. It is reflected in the chi2
            of the measurement. The statistical error is increased to 0.3 in order to account for high chi2. 
           <p>
           The final result: -77.8 +/- 0.3(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 47<sup>o</sup> Wien angle)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="03may2000">
    <h3>03 May 2000</h3>
    <p class="legacy-shift-crew">18:00-20:00.</p>
    <p>
    The beam energy is 4.234 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            42.7<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 1.5<sup>o</sup>. 
            The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_16.pdf">plot</a>.
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8602-8603 <td>  90.5 <td> 0.51 uA?   <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=600 </tr>
           <tr align="right"> <td> 8594-8601 <td>  23.0 <td>-80.51+/-0.25<td> 19.4   <td> -78.57+/-0.25<td> 1.4 <td>                         </tr>
           <tr align="right"> <td> 8604-8611 <td> 163.5 <td>-77.97+/-0.23<td> 161.8  <td> -78.70+/-0.25<td> 1.7 <td>     </tr>
           <tr align="right"> <td> Average   <td> -     <td>-79.23+/-0.17<td>  -     <td> -78.63+/-0.17<td> -   <td> Av:-79.0+/-0.2 </tr>
           <tr align="right"> <td> 8604-8611 <td> 163.5 <td>-78.68+/-0.20<td>        <td>              <td> 1.1 <td> Laser phase=11<sup>o</sup> </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8590-8621">here</a>.
            <p>
           The final result: -79.0 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 42.7<sup>o</sup> Wien angle)<br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="05may2000">
    <h3>05 May 2000</h3>
    <p class="legacy-shift-crew">15:30-18:30.</p>
    <p>
    The beam energy is 4.234 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            42.7<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 1.5<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_16.pdf">plot</a>.
            -->
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8633-8634 <td>  90.5 <td> 0.51uA      <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=600 </tr>
           <tr align="right"> <td> 8625-8632 <td>  23.0 <td>-81.56+/-0.25<td> 19.3   <td> -79.54+/-0.25<td> 1.9 <td>                         </tr>
           <tr align="right"> <td> 8635-8642 <td> 163.5 <td>-78.21+/-0.23<td> 161.8  <td> -78.94+/-0.23<td> 0.4 <td>     </tr>
           <tr align="right"> <td> Average   <td> -     <td>-79.89+/-0.18<td>  -     <td> -79.24+/-0.18<td> -   <td> Av:-79.57+/-0.218 </tr>
           <tr align="right"> <td> 8643-8643 <td> 163.5 <td> 0.52uA      <td>        <td>              <td>     <td> LED: dtime=2.4% </tr>
           <tr align="right"> <td> 8644-8644 <td> 163.5 <td> 1.60uA      <td>        <td>              <td>     <td> LED: dtime=7.8% </tr>
           <tr align="right"> <td> 8645-8648 <td> 163.5 <td>-79.33+/-0.21<td>        <td>              <td> 0.2 <td> 1.6uA    </tr>
           <tr align="right"> <td> 8649-8656 <td> 163.5 <td>-76.59+/-0.23<td>        <td>              <td> 0.6 <td> 0.51uA, after recesiation </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8622-8656">here</a>.
            <p>
           Before recesiation:<br>
           The final result: -79.6 +/- 0.2(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 42.7<sup>o</sup> Wien angle)<br>
            <p>
           After recesiation:<br>
           The final result: -77.9 +/- 0.3(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 42.7<sup>o</sup> Wien angle), scaled
           from the measurements at 163.5<sup>o</sup><br>
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="09may2000">
    <h3>09 May 2000</h3>
    <p class="legacy-shift-crew">21:30-24:30.</p>
    <p>
    The beam energy is 3.395 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            24.4<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 3.0<sup>o</sup>. 
            The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>.
           
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8677-8678 <td>  90.5 <td> 0.51uA      <td>  -     <td> -          <td> -   <td>thr=136mV, raster ON, atten=600 </tr>
           <tr align="right"> <td> 8659-8664 <td>  23.0 <td> 74.47+/-0.29<td>  -     <td> -            <td> 2.1 <td> beam x,y=0               </tr>
           <tr align="right"> <td> 8665-8668 <td>  23.0 <td> 74.14+/-0.34<td>  -     <td> -            <td> 0.1 <td> beam x=-1.5mm,y=0          </tr>
           <tr align="right"> <td> 8669-8670 <td>  23.0 <td> 75.50+/-0.50<td>  -     <td> -            <td> 1.5 <td> beam x=+1.5mm,y=0          </tr>
           <tr align="right"> <td> 8671-8676 <td>  23.0 <td> 74.07+/-0.28<td>  -     <td> -            <td> 0.6 <td> beam x,y=0               </tr>
           <tr align="right"> <td> 8659-8676 <td>  23.0 <td> 74.36+/-0.16<td> 19.4?  <td>  72.57+/-0.16<td> 1.3 <td> average over all  </tr>
           <tr align="right"> <td> 8679-8688 <td> 163.5 <td> 68.75+/-0.21<td> 161.8? <td>  69.39+/-0.21<td> 2.3 <td> -   </tr>
           <tr align="right"> <td> Average   <td> -     <td> 71.50+/-0.15<td>  -     <td>  71.00+/-0.15<td> -   <td> Av: 71.2+/-0.2 </tr>
           <tr align="right"> <td> 8679-8682 <td> 163.5 <td> 69.40+/-0.23<td>  -     <td>  -           <td> 1.3 <td> beam x,y=0                </tr>
           <tr align="right"> <td> 8683-8684 <td> 163.5 <td> 68.58+/-0.46<td>  -     <td>  -           <td> 1.3 <td> beam x,y=+1.5mm           </tr>
           <tr align="right"> <td> 8685-8688 <td> 163.5 <td> 68.19+/-0.33<td>  -     <td>  -           <td> 3.2 <td> beam x,y=-1.5mm           </tr>
           <tr align="right"> <td> 8689-8692 <td> 154.0 <td> 65.87+/-0.42<td> 152.0  <td>  67.05+/-0.42<td> 0.3 <td> beam x,y=0    </tr>
           <tr align="right"> <td> 8693-8694 <td> 163.5 <td> 68.49+/-0.63<td>  -     <td>  -           <td> 1.3 <td> beam x,y=0 , beam 0.3uA </tr>
           <tr align="right"> <td> 8695-8695 <td> 163.5 <td> 0.31uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=2.4% </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8657-8695">here</a>.
            <p>
           The final result:  71.2 +/- 0.2(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 24.4<sup>o</sup> Wien angle)<br>
    
            <p>
           At low target angles (about 20<sup>o</sup>) the beam is scraping over something, which causes 
           a high counting rates. The rate at 90<sup>o</sup> and 154<sup>o</sup> look normal.
           Moving the beam in X,Y did not help. However, the polarization does not look affected.<br>
           It occured later that the OTR was in during our measurements.
           <p>
           The polarization at 154<sup>o</sup> is lower. Perhaps it is an influence of the transverse polarization
           or a smaller target polarization.
           <p> The Wien angle should provide the spin angle of 14<sup>o</sup> (cos(14<sup>o</sup>)=0.97).
        </p>
  </section>

  <section class="legacy-shift" id="12may2000">
    <h3>12 May 2000</h3>
    <p class="legacy-shift-crew">9:30-12:30.</p>
    <p>
    The beam energy is 0.884 GeV (MCC) or ?? (EP), one linac is N=0.4185 S=0.4185, inj=0.04708. The injector angle is
            96.3<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 3.1<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-13<sup>o</sup>? and the mean analysing power is 0.774?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8720-8721 <td>  90.5 <td> 0.27uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON, atten=565 </tr>
           <tr align="right"> <td> 8706-8711 <td>  23.0 <td>-81.87+/-0.44<td> 19.1   <td>-79.75+/-0.44 <td> 1.6 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8722-8727 <td> 163.0 <td>-79.25+/-0.35<td>162.0   <td>-79.90+/-0.35 <td> 0.8 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td>-80.56+/-0.27<td>  -     <td>-79.82+/-0.27 <td> -   <td> Av: -80.2+/-0.3 </tr>
           <tr align="right"> <td> 8702-8705 <td>  23.0 <td>-81.1+/-0.6  <td>        <td> -            <td> 0.94<td>thr=120mV                </tr>
           <tr align="right"> <td> 8712-8715 <td>  23.0 <td>-82.9+/-0.5  <td>        <td> -            <td> 1.3 <td>thr=160mV                </tr>
           <tr align="right"> <td> 8716-8719 <td>  23.0 <td>-83.0+/-0.5  <td>        <td> -            <td> 2.0 <td>thr=190mV                </tr>
           <tr align="right"> <td> 8728-8728 <td> 163.5 <td> 0.27uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=4.8% </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8696-8728">here</a>.
            <p>
           The final result: -80.2 +/- 0.3(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 96.2<sup>o</sup> Wien angle)<br>
          
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="23may2000">
    <h3>23 May 2000</h3>
    <p class="legacy-shift-crew">17:30-20:00.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            72.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 7.4<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8743-8744 <td>  90.5 <td> 0.36uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster OFF, atten=600 </tr>
           <tr align="right"> <td> 8737-8743 <td>  23.0 <td> 81.25+/-0.25<td> 20.2   <td> 79.69+/-0.25 <td> 2.2 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8745-8750 <td> 163.0 <td> 78.00+/-0.23<td>162.5   <td> 78.42+/-0.23 <td> 1.1 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 79.62+/-0.17<td>  -     <td> 79.05+/-0.17 <td> -   <td> Av:  79.34+/-0.17 </tr>
           <tr align="right"> <td> 8753-8756 <td> 163.0 <td> 79.56+/-0.17<td>        <td>              <td> 0.5 <td>beam 1.04uA att=600      </tr>
           <tr align="right"> <td> 8761-8764 <td> 163.0 <td> 78.80+/-0.19<td>        <td>              <td> 0.2 <td>beam 0.78uA att=350      </tr>
           <tr align="right"> <td> 8765-8768 <td> 163.0 <td> 78.26+/-0.26<td>        <td>              <td> 2.3 <td>beam 0.40uA att=200      </tr>
           <tr align="right"> <td> 8772-8775 <td> 163.0 <td> 78.04+/-0.26<td>        <td>              <td> 0.1 <td>beam 0.44uA att=600      </tr>
           <tr align="right"> <td> 8758-8759 <td> 163.5 <td> 1.04uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=5.0%  </tr>
           <tr align="right"> <td> 8760-8760 <td> 163.5 <td> 0.78uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=3.7%  </tr>
           <tr align="right"> <td> 8770-8770 <td> 163.5 <td> 0.40uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=1.8%  </tr>
           <tr align="right"> <td> 8771-8771 <td> 163.5 <td> 0.44uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=2.1%  </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8734-8775">here</a>.
            <p>
           The final result:  79.34 +/- 0.17(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 72.1<sup>o</sup> Wien angle)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="02jun2000">
    <h3>02 June 2000</h3>
    <p class="legacy-shift-crew">17:30-22:00.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            72.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 11.5<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
            The beam deflection at the last BPM (1H04B) was measured. The dipole was set to 5.65 GeV. The beam shifted in Y from -0.84 to -4.1mm,
            so the net shift was -3.26mm. For 5.65 GeV beam one should expect an additional  deflection of -2.6mm with respect to the 4.5 GeV.
            The absolute position should be about -3.5mm with the same tune as we have now.
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8789-8790 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 8783-8788 <td>  23.0 <td> 81.66+/-0.21<td> 19.4   <td> 79.69+/-0.21 <td> 0.8 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8791-8796 <td> 163.0 <td> 78.44+/-0.20<td>162.1   <td> 79.03+/-0.20 <td> 0.4 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 80.05+/-0.17<td>  -     <td> 79.36+/-0.17 <td> -   <td> Av:  79.70+/-0.17 </tr>
           <tr align="right"> <td> 8797-8797 <td> 163.0 <td> 0.55uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=2.7%  </tr>
           <tr align="right"> <td> 8798-8798 <td> 163.0 <td> 1.08uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=5.1%  </tr>
           <tr align="right"> <td> 8799-8804 <td> 163.0 <td> 79.16+/-0.14<td>        <td>              <td> 0.6 <td>beam 1.08uA att=600      </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8777-8804">here</a>.
            <p>
           The final result:  79.70 +/- 0.17(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 72.1<sup>o</sup> Wien angle)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="09jun2000">
    <h3>09 June 2000</h3>
    <p class="legacy-shift-crew">10:30-12:30.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            72.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 13.4<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           Mott: 
           73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8817-8818 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 8811-8816 <td>  22.5 <td> 80.94+/-0.20<td> 18.5   <td> 78.85+/-0.20 <td> 1.3 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8819-8824 <td> 163.5 <td> 76.69+/-0.20<td>161.7   <td> 77.45+/-0.20 <td> 0.6 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 78.81+/-0.15<td>  -     <td> 78.15+/-0.15 <td> -   <td> Av:  78.48+/-0.17 </tr>
           <tr align="right"> <td> 8825-8825 <td> 163.5 <td> 0.55uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=2.6%  </tr>
           <tr align="right"> <td> 8826-8840 <td> 163.0 <td> 0.55uA      <td>  -     <td>  -           <td> -   <td> HV study for Apperture counters </tr>
           <tr align="right"> <td> 8799-8804 <td> 163.0 <td> 79.16+/-0.14<td>        <td>              <td> 0.6 <td>beam 1.08uA att=600      </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8805-8840">here</a>.
            <p>
           The final result:  78.50 +/- 0.15(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 72.1<sup>o</sup> Wien angle)<br>
            <p>
           Since the counting rate on the left apperture counter was about half of the right arm, we 
           checked the HV. The results are presented on the
            <a href="../plots/hv_apperture_1.pdf">plot</a>. We have to raise the HV on App.Left to at least 1900V. 
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="14jun2000">
    <h3>14 June 2000</h3>
    <p class="legacy-shift-crew">00:00-01:00.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            72.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 13.2<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           Mott: 74% - private communication
            <!-- 73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8849-8850 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 8843-8848 <td>  23.0 <td> 78.25+/-0.15<td> 20.3   <td> 76.80+/-0.15 <td> 1.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8851-8856 <td> 163.5 <td> 74.59+/-0.14<td>161.1   <td> 75.40+/-0.14 <td> 2.2 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 76.42+/-0.11<td>  -     <td> 76.10+/-0.11 <td> -   <td> Av:  76.25+/-0.11 </tr>
           <tr align="right"> <td> 8857-8857 <td> 163.5 <td> 0.55uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=3.1%  </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8841-8857">here</a>.
            <p>
           The final result:  76.25 +/- 0.11(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 72.1<sup>o</sup> Wien angle)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="19jun2000">
    <h3>19 June 2000</h3>
    <p class="legacy-shift-crew">21:20-22:40.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            72.1<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 13.3<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           <!-- Mott: 74% - private communication
             73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8866-8867 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 8860-8865 <td>  23.0 <td> 76.47+/-0.15<td> 20.5   <td> 75.15+/-0.15 <td> 2.2 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8868-8873 <td> 163.5 <td> 72.26+/-0.14<td>161.6   <td> 73.02+/-0.14 <td> 1.4 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 74.36+/-0.10<td>  -     <td> 74.08+/-0.10 <td> -   <td> Av:  74.22+/-0.10 </tr>
           <tr align="right"> <td> 8874-8874 <td> 163.5 <td> 0.55uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=3.0%  </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8858-8874">here</a>.
            <p>
           The final result:  74.22 +/- 0.10(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 72.1<sup>o</sup> Wien angle)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="23jun2000">
    <h3>23 June 2000</h3>
    <p class="legacy-shift-crew">19:00-20:00.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            72.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 13.5<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           <!-- Mott: 74% - private communication
             73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8881-8882 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 8877-8880 <td>  23.0 <td> 80.43+/-0.15<td> 20.5   <td> 79.04+/-0.19 <td> 2.5 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8883-8886 <td> 163.5 <td> 76.92+/-0.17<td>160.8   <td> 78.10+/-0.17 <td> 0.8 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 78.68+/-0.12<td>  -     <td> 78.57+/-0.12 <td> -   <td> Av:  78.62+/-0.12 </tr>
           <tr align="right"> <td> 8887-8887 <td> 163.5 <td> 0.55uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=2.7%  </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8875-8887">here</a>.
            <p>
           The final result:  78.62 +/- 0.12(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 72.1<sup>o</sup> Wien angle)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="26jun2000">
    <h3>26 June 2000</h3>
    <p class="legacy-shift-crew">19:20-20:40.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            72.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 13.3<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           <!-- Mott: 74% - private communication
             73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.6%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8898-8899 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 8890-8897 <td>  23.0 <td> 80.39+/-0.16<td> 20.5   <td> 79.00+/-0.16 <td> 2.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8900-8905 <td> 163.5 <td> 76.77+/-0.15<td>161.0   <td> 77.85+/-0.15 <td> 2.2 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 78.58+/-0.11<td>  -     <td> 78.42+/-0.11 <td> -   <td> Av:  78.50+/-0.11 </tr>
           <tr align="right"> <td> 8906-8906 <td> 163.5 <td> 0.55uA      <td>  -     <td>  -           <td> -   <td> LED: dtime=2.8%  </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8888-8906">here</a>.
            <p>
           The final result:  78.50 +/- 0.11(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 72.1<sup>o</sup> Wien angle)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="10jul2000">
    <h3>10-12 July 2000</h3>
    <p class="legacy-shift-crew">03:40 10 July - 9:00 12 July . Spin dance.</p>
    <p>
    The beam energy is 5.65289 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            -8.9<sup>o</sup> (start), the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 13.4<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           <!-- Mott: 74% - private communication
             73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.76%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>  runs <th rowspan=2> Wien <sup>o</sup> <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 
                     <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 8921-8922 <td>  -8.9<td>  90.5 <td> 0.48uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON, laser DC </tr>
           <tr align="right"> <td> 8916-8919 <td>      <td>  23.0 <td> 76.81+/-0.19<td> 20.7   <td> 75.58+/-0.19 <td> 1.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8923-8928 <td>      <td> 163.5 <td> 75.18+/-0.15<td>161.9   <td> 75.84+/-0.15 <td> 0.8 <td>thr=140mV, 0.48uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 76.00+/-0.14<td>  -     <td> 75.71+/-0.14 <td> -   <td> Av:  75.85+/-0.14 </tr>
           <tr align="right"> <td> 8931-8931 <td>      <td> 163.5 <td>  -          <td> 0.48uA <td>  -           <td> -   <td> LED: dtime=2.2%  </tr>
           <tr align="right"> <td> 8934-8939 <td>      <td> 163.5 <td> 75.80+/-0.19<td> 0.12uA <td>  -           <td> 1.8 <td>thr=140mV,               </tr>
           <tr align="right"> <td> 8940-8940 <td>      <td> 163.5 <td>  -          <td> 0.12uA <td>  -           <td> -   <td> LED: dtime=0.6%  </tr>
           <tr align="right"> <td> 8942-8947 <td>      <td> 163.5 <td> 73.48+/-0.13<td> 1.48uA <td>  -           <td> 1.6 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8948-8948 <td>      <td> 163.5 <td>  -          <td> 1.48uA <td>  -           <td> -   <td> LED: dtime=6.9%  </tr>
           <tr align="right"> <td> 8950-8953 <td>      <td> 163.5 <td> 74.61+/-0.13<td> 0.93uA <td>  -           <td> 2.6 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8949-8949 <td>      <td> 163.5 <td>  -          <td> 0.93uA <td>  -           <td> -   <td> LED: dtime=3.4%  </tr>
           <tr align="right"> <td> 8955-8968 <td>      <td> 163.5 <td> 75.98+/-0.13<td> 0.31uA <td>  -           <td> 2.8 <td>thr=140mV, 0.30uA        </tr>
           <tr align="right"> <td> 8966-8966 <td>      <td> 163.5 <td>  -          <td> 0.31uA <td>  -           <td> -   <td> LED: dtime=1.4%  </tr>
           <tr align="right"> <td> 8977-8978 <td>      <td>  90.5 <td>  -          <td> 0.62uA <td> -            <td> -   <td>thr=140mV, raster ON, laser RF   </tr>
           <tr align="right"> <td> 8971-8976 <td>      <td>  23.0 <td> 74.72+/-0.15<td> 20.6   <td> 73.48+/-0.15 <td> 1.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8979-8984 <td>      <td> 163.5 <td> 72.34+/-0.13<td>161.3   <td> 73.23+/-0.13 <td> 0.8 <td>thr=140mV, 0.62uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 73.53+/-0.10<td>  -     <td> 73.35+/-0.10 <td> -   <td> Av:  73.44+/-0.10 </tr>
           <tr align="right"> <td> 8985-8985 <td>      <td> 163.5 <td>  -          <td> 0.62uA <td>  -           <td> -   <td> LED: dtime=2.3%  </tr>
           <tr align="right"> <td> 8990-8991 <td>  55.7<td>  90.5 <td>  -          <td> 0.50uA <td> -            <td> -   <td>thr=140mV, raster ON, laser DC   </tr>
           <tr align="right"> <td> 8986-8989 <td>      <td>  23.0 <td> 40.73+/-0.19<td> 20.4   <td> 40.00+/-0.19 <td> 0.1 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8992-8995 <td>      <td> 163.5 <td> 33.51+/-0.17<td>161.5   <td> 33.88+/-0.17 <td> 1.6 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 37.12+/-0.14<td>  -     <td> 36.94+/-0.14 <td> -   <td> Av:  37.02+/-0.14 </tr>
           <tr align="right"> <td> 8996-8996 <td>      <td> 163.5 <td>  -          <td> 0.50uA <td>  -           <td> -   <td> LED: dtime=2.3%  </tr>
           <tr align="right"> <td> 9004-9005 <td> 107.0<td>  90.5 <td>  -          <td> 0.50uA <td> -            <td> -   <td>thr=140mV, raster ON, laser DC   </tr>
           <tr align="right"> <td> 9006-9011 <td>      <td>  23.0 <td>-30.05+/-0.14<td> 20.5   <td>-29.53+/-0.14 <td> 1.6 <td>thr=140mV                </tr>
           <tr align="right"> <td> 8998-9003 <td>      <td> 163.5 <td>-35.18+/-0.14<td>161.5   <td>-35.57+/-0.14 <td> 0.3 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td>-32.62+/-0.10<td>  -     <td>-32.55+/-0.14 <td> -   <td> Av:  32.58+/-0.10 </tr>
           <tr align="right"> <td> 9015-9020 <td>  91.2<td>  23.0 <td> -6.25+/-0.15<td> 20.5   <td> -6.14+/-0.15 <td> 6.8 <td>thr=140mV, laser DC      </tr>
           <tr align="right"> <td> 9021-9034 <td>      <td> 163.5 <td>-12.81+/-0.10<td>161.5   <td>-13.03+/-0.10 <td> 2.0 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> -9.53+/-0.11<td>  -     <td> -9.53+/-0.11 <td> -   <td> Av:  -9.56+/-0.11 </tr>
           <tr align="right"> <td> 9015-9020 <td>      <td>  23.0 <td> -4.94+/-0.18<td> 20.5   <td> -4.85+/-0.18 <td> 5.2 <td>thr=140mV, laser RF      </tr>
           <tr align="right"> <td> 9021-9034 <td>      <td> 163.5 <td>-11.77+/-0.17<td>161.5   <td>-11.97+/-0.17 <td> 2.0 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> -8.36+/-0.14<td>  -     <td> -8.41+/-0.14 <td> -   <td> Av:  -8.38+/-0.14 </tr>
           <tr align="right"> <td> 9058-9063 <td>  76.1<td>  22.5 <td> 16.68+/-0.15<td> 20.0   <td> 16.40+/-0.15 <td> 1.8 <td>thr=140mV, laser DC      </tr>
           <tr align="right"> <td> 9053-9056 <td>      <td> 163.5 <td>  8.08+/-0.18<td>161.5   <td>  8.23+/-0.18 <td> 5.1 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 12.38+/-0.14<td>  -     <td> 12.32+/-0.14 <td> -   <td> Av:  12.35+/-0.14 </tr>
           <tr align="right"> <td> 9068-9069 <td>  36.1<td>  90.5 <td>  -          <td> 0.50uA <td> -            <td> -   <td>thr=140mV, raster ON, laser DC   </tr>
           <tr align="right"> <td> 9064-9067 <td>      <td>  22.5 <td> 64.44+/-0.19<td> 19.7   <td> 63.24+/-0.19 <td> 1.4 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9070-9075 <td>      <td> 163.5 <td> 57.29+/-0.14<td>161.3   <td> 57.99+/-0.14 <td> 3.6 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 60.87+/-0.13<td>  -     <td> 60.62+/-0.13 <td> -   <td> Av:  60.75+/-0.10 </tr>
           <tr align="right"> <td> 9086-9091 <td>  11.5<td>  23.0 <td> 76.46+/-0.15<td> 20.5   <td> 74.86+/-0.15 <td> 1.1 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9080-9085 <td>      <td> 163.5 <td> 72.46+/-0.14<td>161.5   <td> 73.25+/-0.14 <td> 1.7 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 74.46+/-0.13<td>  -     <td> 75.06+/-0.13 <td> -   <td> Av:  74.76+/-0.13 </tr>
           <tr align="right"> <td> 9092-9097 <td>  -8.7<td>  23.0 <td> 76.92+/-0.15<td> 20.5   <td> 75.31+/-0.15 <td> 1.1 <td>thr=140mV, laser DC      </tr>
           <tr align="right"> <td> 9098-9103 <td>      <td> 163.5 <td> 75.44+/-0.14<td>161.5   <td> 76.27+/-0.14 <td> 1.7 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 76.18+/-0.13<td>  -     <td> 75.79+/-0.13 <td> -   <td> Av:  75.98+/-0.13 </tr>
           <tr align="right"> <td> 9104-9111 <td>  -8.7<td>  23.0 <td> 75.40+/-0.13<td> 20.5   <td> 74.10+/-0.13 <td> 3.8 <td>thr=140mV, laser RF      </tr>
           <tr align="right"> <td> 9112-9119 <td>      <td> 163.5 <td> 73.69+/-0.12<td>161.5   <td> 74.77+/-0.12 <td> 1.7 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 74.68+/-0.11<td>  -     <td> 74.43+/-0.11 <td> -   <td> Av:  74.56+/-0.11 </tr>
           <tr align="right"> <td> 9120-9125 <td> -56.9<td>  23.0 <td> 44.07+/-0.15<td> 20.5   <td> 43.31+/-0.13 <td> 0.9 <td>thr=140mV, laser DC      </tr>
           <tr align="right"> <td> 9126-9131 <td>      <td> 163.5 <td> 48.21+/-0.14<td>161.5   <td> 48.74+/-0.14 <td> 0.8 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 46.14+/-0.11<td>  -     <td> 46.03+/-0.11 <td> -   <td> Av:  46.08+/-0.11 </tr>
           <tr align="right"> <td> 9138-9143 <td> -81.6<td>  23.0 <td>  9.03+/-0.17<td> 20.5   <td>  8.87+/-0.17 <td> 1.5 <td>thr=140mV, laser DC      </tr>
           <tr align="right"> <td> 9132-9137 <td>      <td> 163.5 <td> 17.60+/-0.14<td>161.5   <td> 17.79+/-0.14 <td> 21. <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td> 13.31+/-0.13<td>  -     <td> 13.33+/-0.13 <td> -   <td> Av:  13.32+/-0.13 </tr>
           <tr align="right"> <td> 9144-9149 <td>-106.0<td>  23.0 <td>-28.28+/-0.16<td> 20.5   <td>-27.79+/-0.17 <td> 7.7 <td>thr=140mV, laser DC      </tr>
           <tr align="right"> <td> 9150-9159 <td>      <td> 163.5 <td>-20.71+/-0.11<td>161.5   <td>-20.94+/-0.11 <td> 8.1 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td>-24.50+/-0.15<td>  -     <td>-24.36+/-0.15 <td> -   <td> Av: -24.43+/-0.15 </tr>
           <tr align="right"> <td> 9160-9165 <td>-106.0<td>  23.0 <td>  0.45+/-0.18<td>  -     <td>              <td> 5.3 <td>thr=140mV, laser DC, Depolarizer</tr>
           <tr align="right"> <td> 9150-9159 <td>      <td> 163.5 <td>  0.69+/-0.19<td>  -     <td>              <td> 2.2 <td>thr=140mV, 0.50uA        </tr>
           <tr align="right"> <td> Average   <td>      <td> -     <td>  0.57+/-0.15<td>  -     <td>   -          <td> -   <td> -                 </tr>
           </table>
           <p>
           <table border>
           <caption align="top">  Spin dance results </caption>
           <tr> <th rowspan=2> Wien <sup>o</sup> <th colspan=5 > Polarization % 
           <tr> <th> Hall A <th> Hall B <th> Hall C <th> Compton<th> Mott   </th> 
           <tr align="right"> <td>   -8.9 <td>  75.85+/-0.14 <td>  -           <td>  -            <td> -75.35+/-2.8   <td>  13.63+/-0.25  </tr>
           <tr align="right"> <td>   55.7 <td>  37.02+/-0.14 <td> -33.5+/-0.9  <td>  73.80+/-0.28 <td> -              <td> -58.05+/-0.30  </tr>
           <tr align="right"> <td>  107.1 <td> -32.52+/-0.14 <td> -71.4+/-0.8  <td>  43.91+/-0.25 <td> -              <td> -68.00+/-0.30  </tr>
           <tr align="right"> <td>   91.2 <td>  -9.56+/-0.14 <td> -64.8+/-0.8  <td>  60.16+/-0.21 <td>   9.97+/-1.0   <td> -71.70+/-0.30  </tr>
           <tr align="right"> <td>   76.1 <td>  12.35+/-0.14 <td> -52.80+/-0.8 <td>  70.00+/-0.42 <td> -12.45+/-1.4   <td> -69.60+/-0.30  </tr>
           <tr align="right"> <td>   36.1 <td>  60.75+/-0.14 <td>  -8.70+/-0.8 <td>  67.88+/-0.20 <td> -              <td>   -            </tr>
           <tr align="right"> <td>   11.5 <td>  74.76+/-0.14 <td>  24.00+/-0.8 <td>  49.76+/-0.40 <td> -              <td> -10.50+/-0.40  </tr>
           <tr align="right"> <td>   -8.7 <td>  75.98+/-0.14 <td>  43.90+/-0.8 <td>  28.90+/-0.26 <td> ?              <td>  13.73+/-0.43  </tr>
           <tr align="right"> <td>  -38.7 <td>  -            <td> -            <td>  -            <td> -61.00+/-0.61  <td>  47.30+/-0.40  </tr>
           <tr align="right"> <td>  -56.9 <td>  46.08+/-0.14 <td>  69.50+/-0.8 <td> -30.93+/-0.20 <td> -              <td>  62.00+/-0.40  </tr>
           <tr align="right"> <td>  -81.6 <td>  13.31+/-0.14 <td>  62.00+/-3.0 <td> -58.57+/-0.22 <td> -              <td>  ?             </tr>
           <tr align="right"> <td> -106.0 <td> -24.43+/-0.14 <td>  ??.00+/- .0 <td>  ??.  +/-0.22 <td> -              <td>  ?             </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.8911-9170">here</a>.
            <p>
           The point at -81.6<sup>o</sup> Wien angle, at 163.5<sup>o</sup> target angle has a high chi2 value of 21.
           Apparently, the value of polarization changed just during the measurement. The first 3 points
           are at about P=0.19, while the last 3 points are at 0.16. The latter matches the measurement
           at the forward target angle (23<sup>o</sup>) which was done right after the measurement
           at 163.5.
            <p>
            
            <p>
           <table border>
           <caption align="top">  Comparison of the DC and RF measurements with Hall A Møller.  </caption>
           <tr> <th> # <th> Polarization with (DC) % <th> Polarization (RF) % <th> DC-RF, % relative </th> 
           <tr align="right"> <td> 1 <td>  75.98+/-0.13   <td> 74.56+/-0.11 <td> 1.4+/-0.2 </tr>
           <tr align="right"> <td> 2 <td>  75.85+/-0.14   <td> 73.44+/-0.10 <td> 2.4+/-0.2 </tr>
           </table>
           <p>
            The results for all the measurements, presented on the <a href="../plots/all_pol_ang_1.pdf">plot 1</a>
            indicate a deviation of the Wien filter angles from the expected ones at large angles. 
            Removing the points at -85&lt; theta_wien&lt; 85 <a href="../plots/all_pol_ang_2.pdf">plot 2</a>
            does not change the results significantly. Hall A measures two "zero-crossings". Presumably because
            of the Wien angle distortion the results from the left and right crossings differ considerably - by about 4<sup>o</sup>
            (see <a href="../plots/halla_pol_ang_1.pdf">plot 3</a>). 
           <p>
           The transverse polarization of the beam has been taken into account for the analysis of Hall A Møller
           data. The longitudinal polarization measured has not been affected by the transverse polarization,
           since the forward and backward target angles are nearly the same and in such a case the transverse component
           cancels while the average for two target position is taken  (see <a href="../plots/halla_pol_transv_1.pdf">plot 4</a>). 
           The transverse polarization was evaluated taking a difference of the results at forward and
           backward target angles (see the same plot). The predicted dependence was fit to these data yielding
           the full polarization of 70.4+\-1.2 (compare with 76.2+/-0.12 for the longitudinal polarization) and 
           the angle of -5+/-1<sup>o</sup> (compare with -3.2+/-0.4<sup>o</sup> for the longitudinal polarization), 
           more or less consistent with the longitudinal polarization. 
           <p>
           The final result for Hall A Møller:  76.90 +/- 0.13(stat) +/- 2.4(syst-prelim) <br>
            <p>
           <table border>
           <caption align="top">  Spin angles, assumed linac energy of 0.5590GeV. 
                                  The polarization for Hall A and C was evaluated in a Wien angle range of +/-85<sup>o</sup>.
                                  For Hall A Møller a correction for dead time of +1% was done. Hall A Compton result was projected to the DC mode
                                  using a correction factor of +1.9% obtained with Hall A Møller polarimeter. The errors shown are statistical.
           </caption>
           <tr> <th> Polarimeter <th> Predicted angle <sup>o</sup> <th> Measured angle <sup>o</sup> <th> chi2/ndf <th> shift <sup>o</sup> <th> 
                          D(E)/E linac <th> Polarization % </th> 
           <tr align="right"> <td> Mott      <td>   0.   <td>    1.9+/-0.4 <td> 1.7  <td> +1.9+/-0.3 <td> -        <td> 71.64+/-0.21  </tr>
           <tr align="right"> <td> Compton A <td> -7.77  <td>   -4.7+/-0.6 <td> 2.3  <td> +3.1+/-0.6 <td> 0.00029  <td> 73.12+/-0.45  </tr>
           <tr align="right"> <td> Møller A  <td> -7.77  <td>   -3.2+/-0.3 <td> 8.7  <td> +4.6+/-0.3 <td> 0.00042  <td> 76.94+/-0.13  </tr>
           <tr align="right"> <td> Møller B  <td> -66.70 <td>  -61.2+/-0.5 <td> 2.4  <td> +5.5+/-0.3 <td> 0.00049  <td> 71.70+/-0.48  </tr>
           <tr align="right"> <td> Møller C  <td>  54.37 <td>   57.8+/-0.4 <td> 4.7  <td> +3.4+/-0.3 <td> 0.00034  <td> 73.84+/-0.23  </tr>
           </table>
           <a name="10jul2000_final"></a>
           <h4>Final results</h4>
           <p>
              Fitting the curves with just the statistical errors for the polarization measurements 
              gives a high chi2, about 200 per degree of freedom. We assume that either there is a 
              considerable error on the Wien filter angle, or the polarimeters (Hall A Møller in particular)
              has a systematic error showing up at large transverse polarizations of the beam. In both cases
              the amplitude of the SIN curve is not affected by this error, though the phase might be
              affected. We used the former assumption and attributed and error of 1<sup>o</sup> to
              all the angles. The fit was done in two steps. At the first step, the error on the angle
              was ignored, while on the second step this error was translated to the polarization
              error, using the already known slope of the curve, and added in quadratures.
              The results of the fit for all the polarimeters, shown on 
              <a href="../plots/spin_dance_6_angle-errors.pdf">plot 5</a>, are different by 1-2%
              from the initial fit. 
           </p>
           <table border>
           <caption align="top">  Spin angles, assumed linac energy of 0.5590GeV. The final results from the polarimeters
                                  as well as the Wien filter angles are used.
                                  The Wien angle is assumed to have a random error of 1.0<sup>o</sup>. 
                                  For Hall A Møller, corrections for the dead time of +1% and for the Levchuk effect of -0.4% were done. 
                                  Hall A Compton result was projected to the DC mode
                                  using a correction factor of +1.9% obtained with Hall A Møller polarimeter. The errors shown are statistical.
                                  For Hall A, the average for two methods to measure the target angles (the dial angle and the measured angle)
                                  was used.  
           </caption>
           <tr> <th rowspan=2> Polarimeter  <th rowspan=2> Predicted angle <sup>o</sup> <th colspan=3 > no Wien errors <th colspan=3> Wien error of 1<sup>o</sup>
           <tr>  <th> angle <sup>o</sup> <th> Polarization % <th> chi2/ndf <th> angle <sup>o</sup> <th> Polarization %  <th> chi2/ndf </tr>
           <tr align="right"> <td> Mott      <td>   0.   <td>    1.2&plusmn;0.20<td> 72.21&plusmn;0.11  <td> 4.2 <td>  1.1&plusmn;0.4 <td> 72.43&plusmn;0.15  <td> 0.9 </tr>
           <tr align="right"> <td> Compton   <td> -7.77  <td>   -4.2&plusmn;0.30<td> 72.67&plusmn;0.43  <td> 4.7 <td> -4.6&plusmn;0.6 <td> 72.40&plusmn;0.52  <td> 3.4 </tr>
           <tr align="right"> <td> Møller A  <td> -7.77  <td>   -3.9&plusmn;0.04<td> 77.07&plusmn;0.07  <td>230.0<td> -3.7&plusmn;0.3 <td> 75.21&plusmn;0.14  <td> 3.4 </tr>
           <tr align="right"> <td> Møller B  <td> -66.70 <td>  -60.4&plusmn;0.40<td> 69.71&plusmn;0.47  <td>  1.8<td>-60.4&plusmn;0.6 <td> 69.80&plusmn;0.55  <td> 1.2 </tr>
           <tr align="right"> <td> Møller C  <td>  54.37 <td>   57.0&plusmn;0.10<td> 73.24&plusmn;0.08  <td> 42.4<td> 57.5&plusmn;0.4 <td> 73.60&plusmn;0.14  <td> 4.0 </tr>
           </table>
           <p> Comparison of all polarimeters for the fit with the Wien errors of 1<sup>o</sup> is shown on 
              <a href="../plots/spin_dance_6_comparison.pdf">plot 6</a>.
    
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="14jul2000">
    <h3>14 July 2000</h3>
    <p class="legacy-shift-crew">8:40-9:00.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            68.8<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 6.2<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           <!-- Mott: 74% - private communication
             73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.76%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9179-9180 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 9173-9178 <td>  23.0 <td> 77.34+/-0.14<td> 20.5   <td> 76.00+/-0.14 <td> 2.9 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9181-9186 <td> 163.5 <td> 74.65+/-0.14<td>161.2   <td> 75.61+/-0.14 <td> 3.3 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 76.00+/-0.10<td>  -     <td> 75.61+/-0.10 <td> -   <td> Av:  75.90+/-0.10 </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.9172-9186">here</a>.
            <p>
           The final result:  75.90 +/- 0.10(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 68.8<sup>o</sup> Wien angle)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="17jul2000">
    <h3>17 July 2000</h3>
    <p class="legacy-shift-crew">17:00-18:00.</p>
    <p>
    The beam energy is 4.535 GeV (MCC) or ?? (EP), one linac is N=0.5590 S=0.5590, inj=0.06289. The injector angle is
            68.8<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at 6.2<sup>o</sup>. 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           <!-- Mott: 74% - private communication
             73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.76%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76?.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9197-9198 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=600 </tr>
           <tr align="right"> <td> 9190-9195 <td>  23.0 <td>-71.03+/-0.15<td> 19.8   <td>-69.49+/-0.15 <td> 0.5 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9199-9207 <td> 163.5 <td>-69.18+/-0.15<td>160.8   <td>-68.35+/-0.15 <td> 0.1 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td>-69.18+/-0.11<td>  -     <td>-68.92+/-0.11 <td> -   <td> Av: -69.05+/-0.11 </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.9188-9207">here</a>.
            <p>
           The final result: -69.05 +/- 0.11(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, 68.8<sup>o</sup> Wien angle)<br>
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="05oct2000">
    <h3>05 October 2000</h3>
    <p class="legacy-shift-crew">10:00-13:00.</p>
    <p>
    The beam energy is 4.600 GeV (Acc) or 4.607 (Arun), one linac is N=0.5670 S=0.5670, inj=0.06379 (MCC). Injector angle is
            -24.7<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at ?<sup>o</sup> (not read out). 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
           <!-- Mott: 74% - private communication
             73+/-0.5+/-2%  <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0004_archive/000407170559.html">(see ELOG)</a> -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9248-9249 <td>  90.5 <td> 0.50uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON atten 180   </tr>
           <tr align="right"> <td> 9242-9247 <td>  23.0 <td>-62.57+/-0.18<td> 22.8   <td>-62.50+/-0.15 <td> 1.1 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9250-9255 <td> 163.5 <td>-58.00+/-0.17<td>160.9   <td>-58.70+/-0.17 <td> 0.9 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td>-60.27+/-0.15<td>  -     <td>-60.60+/-0.15 <td> -   <td> Av: -60.45+/-0.15 </tr>
           <tr align="right"> <td> 9256-9259 <td> 158.0 <td>-57.80+/-0.23<td>156.5   <td>-58.40+/-0.23 <td> 0.5 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9260-9263 <td> 153.0 <td>-56.53+/-0.23<td>150.0   <td>-58.16+/-0.26 <td> 1.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9264-9265 <td>  91.0 <td>  -          <td>  -     <td> -            <td> -   <td>thr=140mV                </tr>
           <tr align="right"> <td> 9266-9267 <td>  41.0 <td>-66.60+/-0.50<td> 40.9   <td>-66.60+/-0.50 <td> 3.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9268-9271 <td>  32.0 <td>-64.50+/-0.30<td> 31.8   <td>-64.36+/-0.30 <td> 1.2 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9272-9275 <td>  23.0 <td>-61.94+/-0.23<td> 22.5   <td>-61.71+/-0.23 <td> 4.1 <td>thr=140mV                </tr>
           </table>
           <p>
            The LED did not work. We do not know the reason. They should be checked during the next 
            maintenance. We assumed a correction of +1.5% at the target angle of 20<sup>o</sup>.
           <p>
           The full information is given
           <a href="../tab/run.tab.9239-9279">here</a>.
            <p>
             The influence of the transverse 
            <p>
           The final result: -61.35 +/- 0.15(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, -24.7<sup>o</sup> Wien angle)<br>
           The result was obtained by averaging the points at about +/-20<sup>o</sup>. The influence of the transverse 
           polarization is presented on a
            <a href="../plots/spin_transv_9240-9270.pdf">plot</a>. The fit parameters for the top 2 plots were:
            <ul>
               <li> Z-projection of the beam polarization P<sub>Z</sub> and the spin angle
                    in the Møller reference frame (looking down - counterclockwise is the positive direction);
               <li> Total beam polarization P<sub>TOT</sub> and the spin angle as before.
            </ul>
            The third plot presents the predicted dependence of P<sub>Z</sub> on the Wien filter
            angle for the beam energy 4.607GeV.
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="15oct2000">
    <h3>15 November 2000</h3>
    <p class="legacy-shift-crew">14:40-16:10.</p>
    <p>
    The beam energy is 4.607 (Arun), one linac is N=0.56789 S=0.56789, inj=0.06389 (MCC). Injector angle is
            -33.0<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p>
            The laser phase was at ?<sup>o</sup> (not read out). 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
            Mott: 
             69.17+/-1.56(stat)+/-0.45(sys)  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0011_archive/001109131414.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9291-9292 <td>  90.5 <td> 0.60uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=250 </tr>
           <tr align="right"> <td> 9283-9286 <td>  23.5 <td> 69.75+/-0.20<td> 22.3   <td> 69.40+/-0.20 <td> 1.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9293-9296 <td> 163.5 <td> 66.67+/-0.20<td>162.9   <td> 66.88+/-0.20 <td> 3.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 68.21+/-0.15<td>  -     <td> 68.14+/-0.15 <td> -   <td> Av:  68.18+/-0.15 </tr>
           <tr align="right"> <td> 9287-9290 <td>  38.5 <td> 72.57+/-0.30<td> 37.5   <td> 71.59+/-0.30 <td> 5.3 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9297-9300 <td> 147.0 <td> 65.89+/-0.27<td>146.5   <td> 66.27+/-0.27 <td> 1.6 <td>thr=140mV                </tr>
           </table>
           <p>
            The LED did not work. We do not know the reason. They should be checked during the next 
            maintenance. We assumed a correction of +1.5% at the target angle of 20<sup>o</sup>.
           <p>
           The full information is given
           <a href="../tab/run.tab.9281-9301">here</a>.
            <p>
           The final result:  Pz=69.14 +/- 0.12(stat) +/- 2.4(syst-prelim) (1/2 wave plate  IN, -33.0<sup>o</sup> Wien angle)<br>
           The result was obtained by fitting the expected curve to the points at all target angles, taking 
           the transverse polarization into account, see 
            <a href="../plots/spin_transv_9281-9301.pdf">the plot</a>. The spin angle fit is -19.6+/-1.2<sup>o</sup>.
             The full polarization is 73.4 +/- 0.55(stat)%. 
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="17oct2000">
    <h3>17 November 2000</h3>
    <p class="legacy-shift-crew">13:00-14:50.</p>
    <p>
    The beam energy is 4.607 (Arun), one linac is N=0.56789 S=0.56789, inj=0.06389 (MCC). Injector angle is
            -33.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at ?<sup>o</sup> (not read out). 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
            Mott: 
             79.91+/-0.66(stat)+/-0.48(sys)  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0011_archive/001117102800.html">(see ELOG)</a>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9308-9309 <td>  90.5 <td> 0.48uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=240 </tr>
           <tr align="right"> <td> 9304-9307 <td>  23.5 <td>-68.57+/-0.21<td> 22.5   <td>-68.32+/-0.21 <td> 2.4 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9311-9314 <td> 163.5 <td>-65.45+/-0.17<td>162.9   <td>-65.87+/-0.17 <td> 1.4 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9315-9318 <td> 147.0 <td>-65.03+/-0.26<td>146.9   <td>-65.10+/-0.26 <td> 1.1 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9319-9322 <td>  39.0 <td>-70.54+/-0.30<td> 38.8   <td>-70.34+/-0.30 <td> 0.5 <td>thr=140mV                </tr>
           </table>
           <p>
            The LED did not work. We do not know the reason. They should be checked during the next 
            maintenance. We assumed a correction of +1.2% at the target angle of 20<sup>o</sup>.
           <p>
           The full information is given
           <a href="../tab/run.tab.9302-9322">here</a>.
            <p>
           The final result:  Pz=-67.82 +/- 0.11(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, -33.0<sup>o</sup> Wien angle)<br>
           The result was obtained by fitting the expected curve to the points at all target angles, taking 
           the transverse polarization into account, see 
            <a href="../plots/spin_transv_9302-9322.pdf">the plot</a>. The spin angle fit is -19.4+/-1.2<sup>o</sup>.
             The full polarization is 71.92 +/- 0.50(stat)%. 
            <p>
        </p>
  </section>

  <section class="legacy-shift" id="01Dec2000">
    <h3>01 December 2000</h3>
    <p class="legacy-shift-crew">13:30-18:30.</p>
    <p>
    The beam energy is 4.5885 (Ep), one linac is 0.5656(Ep),  N/S=0.565, inj=0.06356 (MCC). Injector angle is
            -7.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at ?<sup>o</sup> (not read out). 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
            <!--
            Mott: 
             79.91+/-0.66(stat)+/-0.48(sys)  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0011_archive/001117102800.html">(see ELOG)</a>
            -->
           <p> <b> The helicity convention has been flipped with respect to the previous period.
                   Now, the beam polarization is defined for the logical unit of the helicity signal.</b>
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9364-9365 <td>  90.5 <td> 0.55uA      <td>  -     <td> -            <td> -   <td>thr=140mV, raster ON , atten=200 </tr>
           <tr align="right"> <td> 9359-9362 <td>  23.0 <td> 68.51+/-0.22<td> -      <td>              <td> 0.4 <td>thr=140mV Wien -36.16    </tr>
           <tr align="right"> <td> 9366-9369 <td> 163.5 <td> 69.87+/-0.19<td> -      <td>              <td> 0.1 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9374-9375 <td>  90.5 <td> 0.57uA      <td>  -     <td> -            <td> -   <td>thr=140mV,Wien +24.7             </tr>
           <tr align="right"> <td> 9370-9373 <td>  23.0 <td> 56.88+/-0.21<td> 22.0   <td> 56.47+/-0.21 <td> 2.4 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9378-9381 <td> 163.5 <td> 50.51+/-0.17<td> 162.9  <td> 50.67+/-0.17 <td> 0.4 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9388-9389 <td>  90.5 <td> 0.43uA      <td>  -     <td> -            <td> -   <td>thr=140mV,Wien -7.0              </tr>
           <tr align="right"> <td> 9384-9387 <td>  23.0 <td> 72.34+/-0.22<td> 22.5   <td> 72.09+/-0.22 <td> 0.2 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9390-9395 <td> 163.5 <td> 70.83+/-0.16<td> 163.2  <td> 71.51+/-0.16 <td> 1.0 <td>thr=140mV                </tr>
           <tr align="right"> <td> 9396      <td> 163.5 <td> 0.42uA      <td>        <td>              <td>     <td>thr=140mV LED 1.67% dt   </tr>
           <tr align="right"> <td> 9397      <td> 163.5 <td> 0.59uA      <td>        <td>              <td>     <td>thr=140mV LED 2.27% dt   </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.9358-9397">here</a>.
            <p>
           The final result:  Pz=72.2 +/- 0.15(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, -7.0<sup>o</sup> Wien angle)
                        (dead time correction of 1% included)<br>
           The spin-dance results are presented on
            <a href="../plots/spin_dance_7.pdf">the plot</a>. The optimal Wien angle is -17.8<sup>o</sup>. The spin angle to the Z axis
            was calculated using two ways: 
           <ul>
               <li> as a difference of the Wien angle and the found optimal angle, 
               <li> reconstructed from the influence of the transverse polarization, using the measurements
                    at different target angles (23 and 163<sup>o</sup> in this case).
           </ul>
           The difference between the results of these two methods is presented on the same plot. The maximum
           difference of about 1.4<sup>o</sup> is indicating that the accuracy of the second 
           method is reasonably good to make estimates
           of the spin angle while evaluating the accelerator tune.
            <p>
           Comparison of the measured optimal angles in each hall with calculations for Elinac=0.5656:
     <pre>
                             Wien angle for max Pz, deg
         Hall                measured       calculated     dE/d(thet)/E0 1/deg  
         A                 -17.8+/-0.5          -21.5        0.00014
         B                  -4.9+/-1.6          -10.7        0.00010
         C                  -6.2+/-0.5           -6.3        0.00080
     </pre>
           These results indicate a linac energy of 0.5653 and E(A)=4.586 GeV.
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="13Dec2000">
    <h3>13 December 2000</h3>
    <p class="legacy-shift-crew">21:30-00:20.</p>
    <p>
    The beam energy is 4.5885 (Ep), one linac is 0.5656(Ep),  N/S=0.565, inj=0.06356 (MCC). Injector angle is
            -7.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at ?<sup>o</sup> (not read out). 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
            <!--
            Mott: 
             79.91+/-0.66(stat)+/-0.48(sys)  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0011_archive/001117102800.html">(see ELOG)</a>
            -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9420-9421 <td>  90.5 <td>       -     <td> 0.48uA <td> -            <td> -   <td>thr=140mV, raster ON , atten=200 </tr>
           <tr align="right"> <td> 9403-9408 <td>  23.0 <td> 66.35+/-0.20<td> 23.0   <td> 66.35+/-0.20 <td> 0.9 <td>thr=140mV Wien -7.0deg   </tr>
           <tr align="right"> <td> 9422-9425 <td> 163.5 <td> 63.78+/-0.20<td> 162.2  <td> 64.23+/-0.20 <td> 1.9 <td>thr=140mV                </tr>
           <tr align="right"> <td> Average   <td> -     <td> 65.07+/-0.15<td>  -     <td> 65.29+/-0.15 <td> -   <td> Av:  65.18+/-0.15 </tr>
           <tr align="right"> <td> 9427      <td> 163.5 <td>       -     <td> 0.48uA <td> -            <td> -   <td>thr=140mV LED 1.8%  dt   </tr>
           <tr align="right"> <td> 9436      <td> 163.5 <td>       -     <td> 0.17uA <td> -            <td> -   <td>thr=140mV LED 0.7%  dt   </tr>
           <tr align="right"> <td> 9434-9435 <td> 163.5 <td> 57.60+/-0.50<td> 0.17uA <td> -            <td> -   <td>thr=140mV                </tr>
           <tr align="right"> <td> 9437      <td> 163.5 <td> -           <td> 0.79uA <td> -            <td> -   <td>thr=140mV LED 3.0%  dt   </tr>
           <tr align="right"> <td> 9438-9439 <td> 163.5 <td> 63.90+/-0.30<td> 0.79uA <td> -            <td> -   <td>thr=140mV                </tr>
           <tr align="right"> <td> 9444      <td> 163.5 <td> -           <td> 1.50uA <td> -            <td> -   <td>thr=140mV LED 5.5%  dt   </tr>
           <tr align="right"> <td> 9441-9442 <td> 163.5 <td> 63.66+/-0.22<td> 1.50uA <td> -            <td> -   <td>thr=140mV                </tr>
           <tr align="right"> <td> 9413-9418 <td>  23.0 <td>-64.10+/-1.20<td> -      <td> -            <td> 1.9 <td> Hall A laser OFF        </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.9401-9444">here</a>.
            <p>
            The leakage from Halls B,C was measured in runs 9409-9418 (9411 was a mistake), by turning the A laser off.
            The beam polarization from B,C is about the same as in A, but with the opposite sign. The coincidence rate
            corresponds to about 2.2% of 500nA, which is about 10nA. The dilution for Møller measurements is therefore
            about 4.4%. 
            <!--
            However, in the next measurement (Dec,18) we found that for some reason the factor for polarization
            dilution is only 1.59 of the leakage, not 2. 
            Therefore the correction should be 3.2%.
            -->
            <p>
           The final result:  Pz=68.7 +/- 0.15(stat) +/- 2.4(syst-prelim) +/- 0.3 (leakage correction)(1/2 wave plate OUT, -7.0<sup>o</sup> Wien angle)
                        (dead time correction of 0.9% and 4.4% for the B,C leakage included)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="18Dec2000">
    <h3>18 December 2000</h3>
    <p class="legacy-shift-crew">15:20-17:30.</p>
    <p>
    The beam energy is 4.5885 (Ep), one linac is 0.5656(Ep),  N/S=0.565, inj=0.06356 (MCC). Injector angle is
            -7.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            The laser phase was at ?<sup>o</sup> (not read out). 
            <!-- The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           
           <p>
            <!--
            Mott: 
             79.91+/-0.66(stat)+/-0.48(sys)  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0011_archive/001117102800.html">(see ELOG)</a>
            -->
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95%. Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 9453-9454 <td>  90.5 <td>       -     <td> 0.55uA <td> -            <td> -   <td>thr=140mV, raster ON , atten=360 </tr>
           <tr align="right"> <td> 9449-9452 <td>  22.5 <td> 67.95+/-0.18<td> 22.2   <td> 67.81+/-0.18 <td> 0.1 <td> Lasers A,B,C on         </tr>
           <tr align="right"> <td> 9464-9467 <td>  23.0 <td> 72.03+/-0.19<td> 22.5   <td> 71.77+/-0.19 <td> 0.2 <td> Laser C off             </tr>
           <tr align="right"> <td> 9457-9460 <td> 163.5 <td> 69.77+/-0.16<td> 162.2  <td> 70.26+/-0.16 <td> 1.4 <td> Laser C off             </tr>
           <tr align="right"> <td> 9468-9471 <td>  23.0 <td> 68.98+/-0.19<td>     -  <td>            - <td> 2.5 <td> Lasers A,B,C on        </tr>
           <tr align="right"> <td> 9472-9475 <td>  23.0 <td>-74.08+/-1.0 <td>     -  <td>            - <td> 5.0 <td> Laser A off, B,C on   Rate equivalent = 0.2nA  </tr>
           <tr align="right"> <td> 9462-9463 <td> 163.0 <td>           - <td>     -  <td>            - <td>   - <td> Lasers A,C off, B on, Rate equivalent = 15nA </tr>
           <tr align="right"> <td> 9461      <td> 163.5 <td>       -     <td> 0.56uA <td> -            <td> -   <td>thr=140mV LED 2.2%  dt - 1.7% for 23.<sup>o</sup></tr>
           <tr align="right"> <td> Average   <td> -     <td> 71.60+/-0.15<td>  -     <td> 71.71+/-0.15 <td> -   <td> Av:  71.65+/-0.15 Dead time included </tr>
           </table>
           <p>
           The full information is given
           <a href="../tab/run.tab.9445-9476">here</a>.
            <p>
            The leakage from Hall B was measured and occurs negligible: 0.0004 of 0.5uA (comparison of runs 9462-9463 with 9460).
            The leakage from Hall C is measured: 2.8% (comparison of runs 9472-9475 with 9468-9471).
             The polarization change, caused by this leakage is (comparison of runs 9449-9452 with 9464-9467) 5.7+/-0.4%, 
             close to the expected value of 2*2.8%=5.6%: 4.3% (comparison of runs 9464-9467 with 9468-9471). The
             correction factor needed to compensate for the leakage is 1.06+/-0.004. 
            <p>
           The final result:  Pz=71.65 +/- 0.15(stat) +/- 2.4(syst-prelim) (1/2 wave plate OUT, -7.0<sup>o</sup> Wien angle)
                        (dead time correction of 1.1% and 0.9% for 2 target angles, the data with no leakage were used)<br>
    </ul>
    </div>
        </p>
  </section>
</div>
<?php
PageEnd();
