<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('2003_raw_results_archive');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
  <section class="legacy-shift" id="07jan2003">
    <h3>07 January 2003</h3>
    <p class="legacy-shift-crew">16:30-21:30.</p>
    <p>
    The beam energy is 1.0457 (arc, ep). Injector angle is
            10.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10426-10427 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10420-10425 <td>  23.0 <td>-63.2+/-0.5<td> 18.3   <td>-61.3+/-0.5  <td> 0.4 <td>                          </tr>
           <tr align="right"> <td> 10428-10433 <td> 163.5 <td>-63.3+/-0.6<td> 160.1  <td>-64.5+/-0.6 <td>  1.0 <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>  -63.2+/-0.4<td>  -     <td>-62.9+/-0.4 <td> -   <td> Av: -63.1+/-0.4 Dead time not included </tr>
           </table>
           </p>
           <p>
           <b>PROBLEM:</b> the helicity delay is different from the October running. We had to put delay=10 instead of
                            9 running the asyms.kumac. This provides a high polarization, other values give
                            much lower polarizations. Or, one had to use the helicity from the ADC events.
                             The problem was that the helicity signal change came a bit
                            later than the end of pulse. It was fixed on Jan,9 by inserting a 150ns delay in trigger 2.<br>
      
           The full information is given
           <a href="../tab/run.tab.10412-10433">here</a>.
           The plot is given
           <a href="../plots/run.10420-10433.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=-63.1 +/- 0.4(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 10.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
           The spin angle is large: cos(angle)=0.8 accordingly to our estimate, therefore the full polarization is about -80%.
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="09jan2003">
    <h3>09 January 2003</h3>
    <p class="legacy-shift-crew">22:00-24:00.</p>
    <p>
    The beam energy is 4.0157 (arc, ep). Injector angle is
            -25.7<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was 2cm.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10448-10449 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10442-10447 <td>  23.0 <td>-74.0+/-0.3<td> 19.4   <td>-72.2+/-0.3  <td> 4.0 <td>         </tr>
           <tr align="right"> <td> 10453-10458 <td> 163.5 <td>-66.4+/-0.3<td> 158.8  <td>-68.3+/-0.3 <td>  2.0 <td> Att=185 slit=21.5     </tr>
           <tr align="right"> <td> Average   <td> -     <td>  -70.2+/-0.2<td>  -     <td>-70.2+/-0.2 <td> -   <td> Av: -70.2+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10460-10463 <td> 163.5 <td>-66.8+/-0.3<td>  -     <td> -          <td>  0.1 <td> Att=50 slit retracted   </tr>
           </table>
           </p>
           <p>
            During the measurement at Att=185,slit=21.5 something was changed in G0 setting (run 10451) and the current went up to
            1.0&micro;A. The slit was retuned to 19. We checked the influence of the attenuator: at the slit rectracted
            the beam current went from 0.3 to 5.0 &micro;A when the attenuator was changed from 50 to 185. 
           <p> 
           The full information is given
           <a href="../tab/run.tab.10438-10463">here</a>.
           The plot is given
           <a href="../plots/run.10442-10458.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=-70.2 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -25.7<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
           The spin angle is large: cos(angle)=0.94 accordingly to our estimate, therefore the full polarization is about -74%.
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="13jan2003">
    <h3>13 January 2003</h3>
    <p class="legacy-shift-crew">21:00-23:30.</p>
    <p>
    The beam energy is 4.0157 (arc, ep). Injector angle is
            -25.7<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was 3cm.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10474-10475 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10468-10473 <td>  23.0 <td>+76.2+/-0.2<td> 19.2   <td>+74.3+/-0.2  <td> 5.0 <td>         </tr>
           <tr align="right"> <td> 10475-10481 <td> 163.0 <td>+68.8+/-0.2<td> 158.7  <td>+70.7+/-0.2 <td>  1.2 <td>      </tr>
           <tr align="right"> <td> Average   <td> -     <td>  +72.5+/-0.2<td>  -     <td>+72.5+/-0.2 <td> -   <td> Av: +72.5+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10482-10485 <td> 163.0 <td>-69.3+/-0.2<td>  -     <td> -          <td>  11. <td> ApL removed from coincidence   </tr>
           <tr align="right"> <td> 10486       <td> -     <td> - <td>  -     <td> -          <td>  - <td> No target, 10&micro;A low threshold  </tr>
           </table>
           </p>
           <p>
            The beam current was unstable, presumably because of G0.
           <p> 
           The full information is given
           <a href="../tab/run.tab.10464-10486">here</a>.
           The plot is given
           <a href="../plots/run.10468-10481.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=+72.5 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN, -25.7<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="17jan2003">
    <h3>17 January 2003</h3>
    <p class="legacy-shift-crew">19:30-21:30.</p>
    <p>
    The beam energy is 5.0057 (arc, ep). Injector angle is
            -16.2<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was 3cm.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10497-10498 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10491-10496 <td>  23.0 <td>+80.8+/-0.2<td> 19.0   <td>+78.7+/-0.2  <td> 0.5 <td>         </tr>
           <tr align="right"> <td> 10499-10504 <td> 163.0 <td>+76.4+/-0.2<td> 159.1  <td>+78.2+/-0.2 <td>  0.4 <td>      </tr>
           <tr align="right"> <td> Average   <td> -     <td>  +78.6+/-0.2<td>  -     <td>+78.5+/-0.2 <td> -   <td> Av: +78.6+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10505-10510 <td> 163.0 <td>+76.3+/-0.2<td>  -     <td> -          <td>  0.7 <td> Collimator -1cm   </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10490-10510">here</a>.
           The plot is given
           <a href="../plots/run.10491-10504.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=+78.6 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate IN, -16.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="28jan2003">
    <h3>28 January 2003</h3>
    <p class="legacy-shift-crew">22:20-24:00.</p>
    <p>
    The beam energy is 5.0057 (arc, ep). Injector angle is
            -16.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was 3cm.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10521-10522 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster OFF </tr>
           <tr align="right"> <td> 10513-10520 <td>  23.0 <td>-79.9+/-0.2<td> 19.8   <td>-78.2+/-0.2  <td>  4.0 <td>         </tr>
           <tr align="right"> <td> 10523-10530 <td> 163.5 <td>-75.4+/-0.2<td> 160.9  <td>-76.3+/-0.2  <td>  1.1 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td>-77.6+/-0.2<td>  -     <td>-77.2+/-0.2  <td> -    <td> Av: -77.4+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10531-10534 <td>  91.5 <td> -         <td>   -    <td>  -          <td> -    <td>  High statistics at 90 deg   </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10511-10534">here</a>.
           The plot is given
           <a href="../plots/run.10513-10530.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=-77.4 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -16.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="03feb2003">
    <h3>03 February 2003</h3>
    <p class="legacy-shift-crew">13:30-14:40.</p>
    <p>
    The beam energy is 5.0057 (arc, ep). Injector angle is
            -16.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was 3cm.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10543-10544 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10537-10542 <td>  23.0 <td>-81.1+/-0.2<td> 19.0   <td>-79.0+/-0.2  <td>  0.5 <td>         </tr>
           <tr align="right"> <td> 10545-10550 <td> 163.0 <td>-77.3+/-0.2<td> 159.5  <td>-78.9+/-0.2  <td>  1.0 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td>-79.2+/-0.2<td>  -     <td>-79.0+/-0.2  <td> -    <td> Av: -79.1+/-0.2 Dead time not included </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10536-10550">here</a>.
           The plot is given
           <a href="../plots/run.10537-10550.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=-79.1 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -16.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="07feb2003">
    <h3>07 February 2003</h3>
    <p class="legacy-shift-crew">16:30-17:40.</p>
    <p>
    The beam energy is 3.033 (arc, ep). Injector angle is
            +16.2<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was 3cm.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10571-10572 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10565-10570 <td>  23.0 <td>-80.5+/-0.2<td> 19.0   <td>-78.4+/-0.2  <td>  0.6 <td>         </tr>
           <tr align="right"> <td> 10573-10578 <td> 163.0 <td>-76.4+/-0.2<td> 159.0  <td>-78.2+/-0.2  <td>  1.0 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td>-78.5+/-0.2<td>  -     <td>-78.3+/-0.2  <td> -    <td> Av: -78.4+/-0.2 Dead time not included </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10561-10578">here</a>.
           The plot is given
           <a href="../plots/run.10565-10578.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=-78.4 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, +16.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="12feb2003">
    <h3>12 February 2003</h3>
    <p class="legacy-shift-crew">18:10-19:40.</p>
    <p>
    The beam energy is 5.005 (arc, ep). Injector angle is
            -10.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was 3cm.
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10594-10595 <td>  90.0 <td>       -     <td> 0.30uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10588-10593 <td>  23.0 <td>-86.0+/-0.2<td> 19.3   <td>-83.9+/-0.2  <td>  2.5 <td>         </tr>
           <tr align="right"> <td> 10596-10601 <td> 163.0 <td>-84.2+/-0.2<td> 160.0  <td>-85.6+/-0.2  <td>  1.0 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td>-85.1+/-0.2<td>  -     <td>-84.8+/-0.2  <td> -    <td> Av: -84.9+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10603-10605 <td> 163.0 <td> -         <td> 160.0  <td>  -          <td>  -   <td> Roman's tests of new CAMAC software   </tr>
           <tr align="right"> <td> 10606       <td> out   <td> -         <td> 10uA   <td>  -          <td>  -   <td> No target. BG check low thresh.    </tr>
           <tr align="right"> <td> 10607       <td> out   <td> -         <td> 10uA   <td>  -          <td>  -   <td> No target. BG check high thresh.    </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10561-10578">here</a>.
           The plot is given
           <a href="../plots/run.10588-10601.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=-84.9 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -10.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="23apr2003">
    <h3>23 April 2003</h3>
    <p class="legacy-shift-crew">20:30-02:40.</p>
    <p>
    The beam energy is 1.148 (arc, ep). Injector angle is
            44.8<sup>o</sup>(changed to 30<sup>o</sup>), the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was 3cm (increased to max after run 10626).
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10644-10645 <td>  90.0 <td>       -     <td> 0.15uA <td> -            <td> -   <td>thr=240mV, raster OFF  </tr>
           <tr align="right"> <td> 10636-10637 <td>  23.0 <td> 70.5+/-0.5<td> 18.5   <td> 68.4+/-0.5  <td>  0.0 <td> Wien 44.8<sup>o</sup>       </tr>
           <tr align="right"> <td> 10646-10647 <td> 163.0 <td> 60.9+/-0.5<td> 161.3  <td> 61.5+/-0.5  <td>  0.0 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td> 65.7+/-0.3<td>  -     <td> 65.0+/-0.3  <td> -    <td> Av:  65.3+/-0.3 Dead time not included </tr>
           <tr align="right"> <td> 10641-10642 <td>  23.0 <td>-30.0+/-5.0<td>  -     <td> -           <td>  -   <td> Hall A beam=0, rate 1%      </tr>
           <tr align="right"> <td> 10641-10642 <td>  23.0 <td>-30.0+/-5.0<td>  -     <td> -           <td>  -   <td> Hall A beam=0               </tr>
           <tr align="right"> <td> 10652-10653 <td>  90.0 <td>       -     <td> 0.15uA <td> -            <td> -   <td> Wien 30.2<sup>o</sup>  </tr>
           <tr align="right"> <td> 10654-10655 <td>  23.0 <td> 76.9+/-0.6<td> 18.6   <td> 74.7+/-0.6  <td>  0.0 <td>                             </tr>
           <tr align="right"> <td> 10649-10650 <td> 163.0 <td> 70.2+/-0.5<td> 161.5  <td> 73.1+/-0.5  <td>  0.0 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td> 73.5+/-0.4<td>  -     <td> 72.7+/-0.4  <td> -    <td> Av:  73.1+/-0.3 Dead time not included </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10624-10656">here</a>.
           The plot is given
           <a href="../plots/run.10636-10647.pdf">for Wien angle of 44.8</a> and 
           <a href="../plots/run.10649-10655.pdf">for Wien angle of 30.2 degrees</a>.
           <br>
    
           The final result at Wien=30.2<sup>o</sup> with a correction of 1.5% relative for the dilution (from Hall B) is:  
            <br>Pz=74.1 +/- 0.4(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 30.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="01may2003">
    <h3>01 May 2003</h3>
    <p class="legacy-shift-crew">17:20-20:00.</p>
    <p>
    The beam energy is 1.5422 (acc). Injector angle is
            -25.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm).
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10669-10670 <td>  90.0 <td>       -     <td> 0.20uA <td> -            <td> -   <td>thr=240mV, raster ON   </tr>
           <tr align="right"> <td> 10665-10668 <td>  23.0 <td> 79.5+/-0.2<td> 18.7   <td> 77.3+/-0.2  <td>  0.8 <td>                             </tr>
           <tr align="right"> <td> 10671-10676 <td> 163.0 <td> 75.2+/-0.2<td> 160.2  <td> 76.5+/-0.2  <td>  0.8 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td> 77.4+/-0.2<td>  -     <td> 76.9+/-0.2  <td> -    <td> Av:  77.1+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10661-10662 <td>  23.0 <td> 78.1+/-0.3<td>  -     <td>  -          <td>  0.0 <td> 0.35uA     </tr>
           <tr align="right"> <td> 10663-10664 <td>  23.0 <td>-45.0+/-3.0<td>  -     <td>  -          <td>  0.0 <td> 0.uA - leak through for 0.3uA slit: 1% coinc   </tr>
           <tr align="right"> <td> 10683       <td> 163.0 <td>-40.0+/-8.0<td>  -     <td>  -          <td>  0.0 <td> 0.uA - leak through for 0.2uA slit: 1% coinc   </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10658-10683">here</a>.
           The plot is given
           <a href="../plots/run.10665-10676.pdf">here</a>.
           <br>
    
           The final result with a correction of 1.3% relative for the dilution (from Hall B) is:  
            <br>Pz=78.1 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -25.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="09may2003">
    <h3>09 May 2003</h3>
    <p class="legacy-shift-crew">16:45-19:20.</p>
    <p>
    The beam energy is 1.148 (acc). Injector angle is
            30.5<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm).
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10728-10729 <td>  90.0 <td>       -     <td> 0.15uA <td> -            <td> -   <td>thr=250mV, raster ON, A,C OFF  </tr>
           <tr align="right"> <td> 10722-10727 <td>  23.0 <td> 77.2+/-0.4 <td> 18.8   <td> 75.1+/-0.4  <td>  0.6 <td>                             </tr>
           <tr align="right"> <td> 10730-10735 <td> 163.0 <td> 71.6+/-0.4 <td> 159.3  <td> 73.1+/-0.4  <td>  0.6 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td> 74.4+/-0.3 <td>  -     <td> 74.1+/-0.3  <td> -    <td> Av:  74.2+/-0.3 Dead time not included </tr>
           <tr align="right"> <td> 10737-10738 <td> 163.0 <td> -          <td>  -     <td>  -          <td>  0.0 <td> LED all, D.T.=2.5%     </tr>
           <tr align="right"> <td> 10743-10744 <td> 163.0 <td> -          <td>  -     <td>  -          <td>  0.0 <td> LED 2x6, D.T.=3.5%     </tr>
           <tr align="right"> <td> 10745-10746 <td> 163.0 <td> -          <td>  -     <td>  -          <td>  0.0 <td> LED 1x7, D.T.=4.0%     </tr>
           <tr align="right"> <td> 10747-10748 <td> 163.0 <td> -          <td>  -     <td>  -          <td>  0.0 <td> LED 1x7, D.T.=3.8% accid*LED     </tr>
           <tr align="right"> <td> 10749,10751 <td> 163.0 <td> -          <td>  -     <td>  -          <td>  0.0 <td> LED 3x5, D.T.=3.0% accid*LED     </tr>
           <tr align="right"> <td> 10753-10754 <td> 163.0 <td> -34.0+/-5.0 <td> -     <td>  -          <td>  -   <td> Hall A laser OFF, Hall C ON 20uA: 1.2% leakthrough </tr>
           <tr align="right"> <td> 10758,10761 <td> 163.0 <td> -         <td>  -      <td>  -          <td>  0.0 <td> ApL HV scan: 1900V 100%, 1850V 98%, 1800 90%, 1750 50% </tr>
           <tr align="right"> <td> 10762       <td> 163.0 <td> 67.8+/-1.0 <td>  -     <td>  -          <td>  0.0 <td> Collim  8mm pos (all range = 40mm)</tr>
           <tr align="right"> <td> 10763       <td> 163.0 <td> 69.6+/-1.3 <td>  -     <td>  -          <td>  0.0 <td> Collim 16mm pos </tr>
           <tr align="right"> <td> 10764       <td> 163.0 <td> 69.5+/-1.7 <td>  -     <td>  -          <td>  0.0 <td> Collim 24mm pos </tr>
           <tr align="right"> <td> 10765-10766 <td> 163.0 <td> 69.1+/-0.6 <td>  -     <td>  -          <td>  -   <td> Normal setting, thresh = 250mV </tr>
           <tr align="right"> <td> 10767-10768 <td> 163.0 <td> 69.4+/-0.6 <td>  -     <td>  -          <td>  -   <td> thresh = 260mV </tr>
           <tr align="right"> <td> 10769-70,79-80 <td> 163.0 <td> 70.7+/-0.4 <td>  -     <td>  -          <td>  -   <td> thresh = 300mV </tr>
           <tr align="right"> <td> 10771-72,81-82 <td> 163.0 <td> 70.4+/-0.4 <td>  -     <td>  -          <td>  -   <td> thresh = 350mV </tr>
           <tr align="right"> <td> 10773-74,83-84 <td> 163.0 <td> 71.6+/-0.4 <td>  -     <td>  -          <td>  -   <td> thresh = 400mV </tr>
           <tr align="right"> <td> 10775-10778 <td> 163.0 <td> 70.2+/-0.4 <td>  -     <td>  -          <td>  -   <td> thresh = 200mV </tr>
           <tr align="right"> <td> 10785-10786 <td> 163.0 <td> 69.5+/-0.6 <td>  -     <td>  -          <td>  -   <td> thresh = 250mV </tr>
           <tr align="right"> <td> 10787-10790 <td> 163.0 <td> 70.2+/-0.6 <td> 0.09uA <td>  -          <td>  -   <td> (250mV) Current scan, Hall C =20uA </tr>
           <tr align="right"> <td> 10791-10792 <td> 163.0 <td> -          <td> 0.09uA <td>  -          <td>  -   <td> LED: D.T.=1.8%, Hall C =40uA </tr>
           <tr align="right"> <td> 10793       <td> 163.0 <td>-42.0+/-8.0 <td> 0.uA <td>  -            <td>  -   <td> Leakthrough 2% </tr>
           <tr align="right"> <td> 10794-10797 <td> 163.0 <td> 67.5+/-0.3 <td> 0.53uA <td>  -          <td>  -   <td> (250mV) Current scan, Hall C =40uA </tr>
           <tr align="right"> <td> 10798-10799 <td> 163.0 <td> -          <td> 0.53uA <td>  -          <td>  -   <td> LED: D.T.=10.2%, Hall C =40uA </tr>
           <tr align="right"> <td> 10801       <td> 163.0 <td> 70.7+/-0.6 <td> 0.uA <td>  -            <td>  -   <td> Leakthrough: 2% </tr>
           </table>
           </p>
           <p> 
           The full information is given
           <a href="../tab/run.tab.10712-10807">here</a>.
           The plot is given
           <a href="../plots/run.10722-10735.pdf">here</a>.
           <br>
    
           The final result (no leakthrough correction needed)
            <br>Pz=74.2 +/- 0.3(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 30.5<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="16may2003">
    <h3>16 May 2003</h3>
    <p class="legacy-shift-crew">16:45-23:30.</p>
    <p>
    The beam energy is 2.235 (acc). Injector angle is
            30.5<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm).
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10822-10823 <td>  90.0 <td>       -     <td> 0.35uA <td> -            <td> -   <td>thr=250mV, raster OFF, C ON  </tr>
           <tr align="right"> <td> 10836-10839 <td>  23.0 <td> 62.5+/-0.2 <td> 18.3   <td> 60.6+/-0.2  <td> 10.0 <td>                             </tr>
           <tr align="right"> <td> 10824-10827 <td> 163.0 <td> 58.4+/-0.2 <td> 160.6  <td> 60.2+/-0.2  <td>  1.5 <td>      </tr>
           <tr align="right"> <td> Average     <td> -     <td> 60.4+/-0.2 <td>  -     <td> 59.9+/-0.2  <td> -    <td> Av:  60.2+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10834-10835 <td>  23.0 <td>-32.9+/-1.0 <td>  -     <td> -           <td> -    <td> A laser off, normal slit    </tr>
           <tr align="right"> <td> 10832-10833 <td>  23.0 <td>-32.3+/-0.2 <td>  -     <td> -           <td> -    <td> A laser off, open   slit    </tr>
           <tr align="right"> <td> 10828-10829 <td> 163.0 <td>-26.3+/-1.2 <td>  -     <td> -           <td> -    <td> A laser off, normal slit    </tr>
           <tr align="right"> <td> 10830-10831 <td> 163.0 <td>-30.2+/-0.2 <td>  -     <td> -           <td> -    <td> A laser off, open   slit    </tr>
           <tr align="right"> <td> 10840       <td>  23.0 <td> -          <td> -      <td>  -          <td>  -   <td> LED: D.T.= 3.7%, Hall C =85uA </tr>
           </table>
           </p>
           <p>
    
           A huge leakage from Hall C, working at 85&micro;A has been observed.
           With the attenuator at 500 and the slit at 17.95 the leakage was about C/A=9.5%.
           The Hall C polarization was -31.2+/-0.2%.
           The full information is given
           <a href="../tab/run.tab.10808-10841">here</a>.
           The plot is given
           <a href="../plots/run.10822-10739.pdf">here</a>.
           <br>
    
           The final result with the leakage correction A=A<sub>obs</sub>+C/A*(A<sub>obs</sub>-A<sub>C</sub>) 
            <br>Pz=68.9 +/- 0.2(stat) +/- 2.0(dilution) +/- 3.0(syst-prelim) (1/2 wave plate IN, 30.5<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="19may2003">
    <h3>19 May 2003</h3>
    <p class="legacy-shift-crew">11:00-14:30.</p>
    <p>
    The beam energy is 2.235 (acc). Injector angle is
            30.5<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
           <p> Purpose: studies of the leakage from Hall C </p>
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 10843-10846 <td>  23.0 <td> 59.4+/-0.2 <td>  -   <td> -   <td> 2.0  <td> 0.30 <td> 93 <td> 18.0 <td> P=59.4*1.122+31.6*0.122=70.5+/-0.2</tr>
           <tr align="right"> <td> 10847-10850 <td>  23.0 <td>-32.9+/-0.6 <td>  -   <td> -   <td> 3.0  <td> 0.00 <td> 93 <td> 18.0 <td> </tr>
           <tr align="right"> <td> 10851-10852 <td>  23.0 <td>-31.6+/-0.2 <td>  -   <td> -   <td> 4.0  <td> 0.00 <td> 93 <td> 18.0 <td> </tr>
           <tr align="right"> <td> 10853-10856 <td>  23.0 <td> 75.6+/-0.2 <td>  -   <td> -   <td> 2.0  <td> 0.35 <td>  0 <td> 18.0 <td> </tr>
           <tr align="right"> <td> 10860-10861 <td>  23.0 <td> 43.7+/-0.2 <td>  -   <td> -   <td> 8.0  <td> 0.30 <td> 93 <td> 23.0 <td> P=43.7*1.355+31.6*0.355=70.3+/-0.2</tr>
           <tr align="right"> <td> 10862-10863 <td>  23.0 <td>-31.6+/-0.5 <td>  -   <td> -   <td> 5.0  <td> 0.00 <td> 93 <td> 23.0 <td> </tr>
           </table>
           </p>
           <p>
    
           The Hall A polarizations, corrected for the Hall C leakage,
           are the same (70.5% and 70.3%) for the 12% and 35% dilutions. However,
           the Hall A polarization, measured with Hall C off, was 75.6%, or 7.3% (relative) more!
           <p>
           The full information is given
           <a href="../tab/run.tab.10842-10863">here</a>.
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="20may2003">
    <h3>20 May 2003</h3>
    <p class="legacy-shift-crew">11:00-12:00.</p>
    <p>
    The beam energy is 3.322 (acc). Injector angle is
            30.2<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 10875-10876 <td>  90.0 <td> -          <td>  -     <td> -           <td> -    <td> 0.30 <td> 98 <td> 15.5 <td> </tr>
           <tr align="right"> <td> 10867-10868 <td>  23.0 <td> 73.2+/-0.4 <td> 19.3   <td> 71.4+/-0.4  <td>  1.0 <td> 0.30 <td> 98 <td> 15.5 <td> </tr>
           <tr align="right"> <td> 10869-10870 <td> 163.0 <td> 69.9+/-0.4 <td> 19.3   <td> 72.0+/-0.4  <td>  1.0 <td> 0.30 <td> 98 <td> 15.5 <td> </tr>
           <tr align="right"> <td> Average     <td> -     <td> 71.5+/-0.3 <td>  -     <td> 71.7+/-0.3  <td> -    <td> 0.30 <td> 98 <td> 15.5 <td> Av:  71.6+/-0.3 Dead time not included </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 2.4% at this slit position (15.5).
           <p>
           The full information is given
           <a href="../tab/run.tab.10866-10876">here</a>.
           The plot is given
           <a href="../plots/run.10867-10776.pdf">here</a>.
           <br>
    
           The final result with the leakage correction P=71.6*1.024+30.0*0.024=74.0+/-0.3
            <br>Pz=74.0 +/- 0.3(stat) +/- 1.0(dilution) +/- 3.0(syst-prelim) (1/2 wave plate IN, 30.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="22may2003">
    <h3>22 May 2003</h3>
    <p class="legacy-shift-crew">21:00-24:00.</p>
    <p>
    The beam energy is 3.322 (acc). Injector angle is
            42.0<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           <!--
           <p>       
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           -->
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=4 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> laser A <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 10878-10881 <td>  23.0 <td> 76.7+/-0.2 <td>   -   <td> -   <td>  1.0 <td> on  <td> 0.300 <td>  0  <td> 15.0 <td> phase A -26.44</tr>
           <tr align="right"> <td> 10882-10883 <td>  23.0 <td> 76.5+/-0.2 <td>   -   <td> -   <td>  0.0 <td> on  <td> 0.300 <td>  0  <td> 16.2 <td> phase A -33.00</tr>
           <tr align="right"> <td> 10884       <td>  23.0 <td> 65.4+/-0.3 <td>   -   <td> -   <td>  0.0 <td> on  <td> 0.530 <td> 98  <td> 16.2 <td> phase A -33.00</tr>
           <tr align="right"> <td> 10885-10886 <td>  23.0 <td> 64.6+/-0.3 <td>   -   <td> -   <td>  0.0 <td> on  <td> 0.300 <td> 98  <td> 15.4 <td>  the same     </tr>
           <tr align="right"> <td> 10887-10888 <td>  23.0 <td>-29.9+/-1.2 <td>   -   <td> -   <td>  0.0 <td> off <td> 0.026 <td> 98  <td> 15.4 <td>       </tr>
           <tr align="right"> <td> 10889-10890 <td>  23.0 <td>-31.2+/-0.2 <td>   -   <td> -   <td>  0.0 <td> off <td> 0.390 <td> 98  <td> -1.0 <td>       </tr>
           <tr align="right"> <td> 10892-10893 <td>  23.0 <td>-30.3+/-1.1 <td>   -   <td> -   <td>  0.0 <td> off <td> 0.039 <td> 98  <td> 16.2 <td>       </tr>
           <tr align="right"> <td> 10894-10895 <td>  23.0 <td> 66.8+/-0.3 <td>   -   <td> -   <td>  0.0 <td> on  <td> 0.680 <td> 98  <td> 16.2 <td>       </tr>
           <tr align="right"> <td> 10896-10897 <td>  23.0 <td> 71.2+/-0.3 <td>   -   <td> -   <td>  1.0 <td> on  <td> 0.640 <td> 40  <td> 16.2 <td>       </tr>
           <tr align="right"> <td> 10898       <td>  23.0 <td>-28.6+/-2.4 <td>   -   <td> -   <td>  0.0 <td> off <td> 0.022 <td> 40  <td> 16.2 <td>       </tr>
           <tr align="right"> <td> 10899-10900 <td>  23.0 <td> 74.3+/-0.2 <td>   -   <td> -   <td>  1.0 <td> on  <td> 0.600 <td> 10  <td> 16.2 <td>       </tr>
           <tr align="right"> <td> 10901       <td>  23.0 <td>-23.7+/-4.0 <td>   -   <td> -   <td>  0.0 <td> off <td> 0.017 <td> 10  <td> 16.2 <td>       </tr>
           </table>
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10877-10901">here</a>.
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="17jul2003">
    <h3>17 July 2003</h3>
    <p class="legacy-shift-crew">21:50-00:20.</p>
    <p>
    The beam energy is 2.1344 (acc). Injector angle is
            -72.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           
           <p>       
            Mott from the next day (Jul,18): 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
             and 76+/-1.7% on July,10
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1159858">(see ELOG)</a>
           </p>
              
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 10907-10908 <td>  90.0 <td> -          <td>  -     <td> -           <td> -     <td> 0.25 <td> 35 <td> 12.8  <td> </tr>
           <tr align="right"> <td> 10911-10912 <td>  23.0 <td>  74.5+/-0.3 <td> 19.5   <td>  72.8+/-0.2 <td>  0.0 <td> 0.25 <td> 35 <td> 12.8  <td> </tr>
           <tr align="right"> <td> 10913-10916 <td> 163.0 <td>  70.3+/-0.2 <td> 160.4  <td>  71.4+/-0.2 <td>  5.0 <td> 0.25 <td> 35 <td> 12.8  <td> </tr>
           <tr align="right"> <td> Average     <td> -     <td>  72.5+/-0.2 <td>  -     <td>  72.1+/-0.2 <td> -    <td> -    <td> -  <td> -     <td> Av:  72.3+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10917-10918 <td> 163.0 <td>  32.5+/-2.5 <td> 160.4  <td>  33.0+/-2.5 <td> 99.0 <td> 0.00 <td> 35 <td> 12.8  <td> Hall C: 1.3% leak through</tr>
           <tr align="right"> <td> 10920-10923 <td> 163.0 <td>  72.8+/-0.2 <td> -      <td>  -          <td>  3.0 <td> 0.25 <td>  0 <td> 12.8  <td> Hall C off               </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 1.3% at this slit position (12.8), 35&micro;A.
           <p>
           The helicity is NON-delayed.
           There is a delay discrepancy in comparison with the dalayed data we had before.
           This is explained in the next measurement, at July,21. 
           <p>
           The full information is given
           <a href="../tab/run.tab.10903-10923">here</a>.
           The plot is given
           <a href="../plots/run.10903-10923.pdf">here</a>.
           <br>
           <p>
           The final result with the leakage correction P=72.3*1.013+33.0*0.013=73.7+/-0.2
            <br>Pz=73.7 +/- 0.2(stat) +/- 0.5(dilution) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -72.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
      
           <p>
           With the Hall C off the polarization at at 163 deg is 72.8+/-0.2%, about 1.4% higher
           than the result with the Hall C on, corrected for the leakage: 70.3*1.013+33*0.013=71.6%. 
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="21jul2003">
    <h3>21 July 2003</h3>
    <p class="legacy-shift-crew">18:00-20:30.</p>
    <p>
    The beam energy is 2.1344 (acc). Injector angle is
            -72.2<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
              
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 10936-10937 <td>  90.0 <td> -          <td>  -     <td> -           <td> -     <td> 0.30 <td> 60 <td> 13.26 <td> </tr>
           <tr align="right"> <td> 10932-10935 <td>  23.0 <td> -75.0+/-0.2 <td> 18.6   <td> -72.8+/-0.2 <td> 10.0 <td> 0.30 <td> 60 <td> 13.26 <td> </tr>
           <tr align="right"> <td> 10938-10941 <td> 163.0 <td> -69.5+/-0.2 <td> 158.9  <td> -71.2+/-0.2 <td>  2.0 <td> 0.30 <td> 60 <td> 13.26 <td> </tr>
           <tr align="right"> <td> Average     <td> -     <td> -72.2+/-0.2 <td>  -     <td> -72.0+/-0.2 <td> -    <td> 0.30 <td> 60 <td> 13.26 <td> Av: -72.1+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10942-10945 <td> 163.0 <td>  40.0+/-1.3 <td> 158.9  <td>  41.0+/-1.3 <td> 99.0 <td> 0.00 <td> 60 <td> 13.26 <td> Hall C: 2.2% leak through</tr>
           <tr align="right"> <td> 10946       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 0.30 <td> 60 <td> 13.26 <td> no target                </tr>
           <tr align="right"> <td> 10930       <td>  23.0 <td> -74.8+/-0.4 <td> -      <td> -           <td> -    <td> 0.30 <td> 60 <td> 13.26 <td> Helicity delay 8 </tr>
           <tr align="right"> <td> 10931       <td>  23.0 <td> -73.5+/-0.4 <td> -      <td> -           <td> -    <td> 0.30 <td> 60 <td> 13.26 <td> Helicity delay 4 </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 2.2% at this slit position (13.26).
           <p>
           There is a difference in the helicity signal timing depending on the delay.
           With a delay the start of helicity coincides with the synchro-signal,
           without a delay there is a 25&micro;s delay of the helicity (see 
           <a href="../plots/hel_delay.pdf">this picture</a>). The <i>asymmets.f</i>
           program is using the helicity of the scaler event and is tuned for
           the delayed scheme. A shift of one period is permanently applied,
           since the scaler event is reading the helicity signal for the NEXT period.
           This is not needed to the non-delayed data, because of the 25&micro;s delay.
           The recommendation is to use the ADC heliciy (heladc=1 parameter in the
           asyms.kumac). On July,22 the Clock*Helicity signal is added to the 1-st scaler,
           channel 10. It can be used for the ultimate helicity definition
           in the scaler event. 
           <p>
           The full information is given
           <a href="../tab/run.tab.10928-10947">here</a>.
           The plot is given
           <a href="../plots/run.10932-10941.pdf">here</a>.
           <br>
    
           The final result with the leakage correction P=-72.1*1.022-40.0*0.022=-74.6+/-0.2
            <br>Pz=-74.6 +/- 0.2(stat) +/- 0.5(dilution) +/- 3.0(syst-prelim) (1/2 wave plate IN, -72.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="26jul2003">
    <h3>26 July 2003</h3>
    <p class="legacy-shift-crew">00:00-01:00.</p>
    <p>
    The beam energy is 4.210 (acc). Injector angle is
            -20.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 10960-10961 <td>  90.0 <td> -          <td>  -     <td> -           <td> -     <td> 0.30 <td> 88 <td> 14.28 <td> </tr>
           <tr align="right"> <td> 10956-10959 <td>  23.0 <td> -60.0+/-0.2 <td> 18.8   <td> -58.3+/-0.2 <td> 11.0 <td> 0.30 <td> 88 <td> 14.28 <td> </tr>
           <tr align="right"> <td> 10962-10965 <td> 163.0 <td> -60.5+/-0.2 <td> 159.4  <td> -61.8+/-0.2 <td> 17.0 <td> 0.30 <td> 88 <td> 14.28 <td> </tr>
           <tr align="right"> <td> Average     <td> -     <td> -60.2+/-0.2 <td>  -     <td> -60.1+/-0.2 <td> -    <td> 0.30 <td> 88 <td> 14.28 <td> Av: -60.2+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10966-10969 <td> 163.0 <td>  37.0+/-1.0 <td> 158.9  <td>  37.8+/-1.0 <td> 99.0 <td> 0.00 <td> 88 <td> 14.28 <td> Hall C: 5.2% leak through</tr>
           <tr align="right"> <td> 10972-10973 <td> 163.0 <td> -64.6+/-0.3 <td> -      <td>  -          <td> -    <td> 0.30 <td>  0 <td> 14.28 <td> Hall C off               </tr>
           <tr align="right"> <td> 10974       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 2.00 <td> 88 <td> 14.28 <td> no target                </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 5.2% at this slit position (14.28).
           <p>
           The full information is given
           <a href="../tab/run.tab.10954-10974">here</a>.
           The plot is given
           <a href="../plots/run.10956-10965.pdf">here</a>.
           <br>
    
           The final result with the leakage correction P=-60.2*1.052-37.0*0.052=-65.2+/-0.2
            <br>Pz=-65.2 +/- 0.2(stat) +/- 0.5(dilution) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -20.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="28jul2003">
    <h3>28 July 2003</h3>
    <p class="legacy-shift-crew">19:00-21:00.</p>
    <p>
    The beam energy is 2.134 (acc). Injector angle is
            -72.0<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 10986-10987 <td>  90.0 <td> -           <td>  -     <td> -           <td> -    <td> 0.27 <td> 50 <td> 13.50 <td> </tr>
           <tr align="right"> <td> 10982-10985 <td>  23.0 <td>  75.9+/-0.2 <td> 18.1   <td>  73.5+/-0.2 <td>  0.5 <td> 0.27 <td> 50 <td> 13.50 <td> </tr>
           <tr align="right"> <td> 10988-10991 <td> 163.0 <td>  69.2+/-0.2 <td> 158.3  <td>  71.2+/-0.2 <td>  1.0 <td> 0.27 <td> 50 <td> 13.50 <td> </tr>
           <tr align="right"> <td> Average     <td> -     <td>  72.6+/-0.2 <td>  -     <td>  72.4+/-0.2 <td> -    <td> 0.27 <td> 50 <td> 13.50 <td> Av:  72.5+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10992-10995 <td> 163.0 <td> -37.6+/-1.4 <td> -      <td>  -          <td> -    <td> 0.00 <td> 50 <td> 13.50 <td> Hall C: 2.0% leak through</tr>
           <tr align="right"> <td> 10996       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 5.00 <td> 50 <td> -1    <td> no target: 0.7 Hz coinc  </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 5.2% at this slit position (13.50).
           <p>
           The full information is given
           <a href="../tab/run.tab.10977-10996">here</a>.
           The plot is given
           <a href="../plots/run.10982-10991.pdf">here</a>.
           <br>
    
           The final result with the leakage correction P= 72.5*1.020+37.6*0.020= 74.7+/-0.2
            <br>Pz= 74.7 +/- 0.2(stat) +/- 0.5(dilution) +/- 3.0(syst-prelim) (1/2 wave plate IN,  -72.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="31jul2003">
    <h3>31 July 2003</h3>
    <p class="legacy-shift-crew">19:40-21:20.</p>
    <p>
    The beam energy is 2.842 (acc). Injector angle is
            +42.0<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 11005-11006 <td>  90.0 <td> -           <td>  -     <td> -           <td> -    <td> 0.30 <td> 73 <td> 14.15 <td> </tr>
           <tr align="right"> <td> 11001-11004 <td>  23.0 <td>  74.1+/-0.2 <td> 19.2   <td>  72.2+/-0.2 <td>  3.0 <td> 0.30 <td> 73 <td> 14.15 <td> </tr>
           <tr align="right"> <td> 11007-11010 <td> 163.0 <td>  73.5+/-0.2 <td> 159.4  <td>  75.0+/-0.2 <td>  7.0 <td> 0.30 <td> 31 <td> 14.15 <td> </tr>
           <tr align="right"> <td> Average     <td> -     <td>  73.8+/-0.2 <td>  -     <td>  73.6+/-0.2 <td> -    <td> 0.30 <td> 32 <td> 14.15 <td> Av:  73.7+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 11011-11014 <td> 163.0 <td> -41.0+/-1.4 <td> -      <td>  -          <td> -    <td> 0.00 <td> 33 <td> 14.15 <td> Hall C: 1.6% leak through</tr>
           <tr align="right"> <td> 11016-11017 <td>  23.0 <td>  80.2+/-0.3 <td> -      <td>  -          <td> -    <td> 0.30 <td>  0 <td> 14.15 <td> Hall C: no Hall C</tr>
           <tr align="right"> <td> 11018-11019 <td>  23.0 <td>  74.6+/-0.3 <td> -      <td>  -          <td> -    <td> 0.30 <td> 73 <td> 14.15 <td> </tr>
           <tr align="right"> <td> 11020-11023 <td>  23.0 <td> -41.0+/-1.0 <td> -      <td>  -          <td> -    <td> 0.00 <td> 73 <td> 14.15 <td> Hall C: 3.8% leak through </tr>
           <tr align="right"> <td> 11024       <td>  23.0 <td>  74.8+/-0.4 <td> -      <td>  -          <td> -    <td> 0.30 <td> 73 <td> 14.15 <td> </tr>
           <tr align="right"> <td> 11025       <td>  23.0 <td>  79.1+/-0.4 <td> -      <td>  -          <td> -    <td> 0.30 <td>  0 <td> 14.15 <td> </tr>
           <tr align="right"> <td> 11027       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 5.00 <td> 36 <td> -1    <td> no target: 0.8 Hz coinc  </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 3.8% at this slit position (14.15) at 73&micro;A in Hall C and 1.6% at 32&micro;A in Hall C.
           <p>
           The full information is given
           <a href="../tab/run.tab.10998-11027">here</a>.
           The plot is given
           <a href="../plots/run.11001-11010.pdf">here</a>.
           <br>
    
           The final result with the leakage correction: <br>
           P= 72.2*1.038+41.0*0.038= 76.5+/-0.2 at &nbsp;19.2<sup>o</sup>, 73&micro;A in Hall C <br>
           P= 75.0*1.016+41.0*0.016= 76.9+/-0.2 at      159.4<sup>o</sup>, 32&micro;A in Hall C 
            <br>Pz= 76.7 +/- 0.2(stat) +/- 0.5(dilution) +/- 3.0(syst-prelim) (1/2 wave plate IN,  42.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="08aug2003">
    <h3>08 August 2003</h3>
    <p class="legacy-shift-crew">18:20-19:30.</p>
    <p>
    The beam energy is 3.772 (acc). Injector angle is
            -29.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster ON. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 11034-11035 <td>  90.0 <td> -           <td>  -     <td> -           <td> -    <td> 0.30 <td> 2.4 <td> 15.16 <td> </tr>
           <tr align="right"> <td> 11030-11034 <td>  22.5 <td>  78.8+/-0.2 <td>  18.7  <td>  76.9+/-0.2 <td>  0.2 <td> 0.30 <td> 2.4 <td> 15.16 <td> </tr>
           <tr align="right"> <td> 11036-11039 <td> 163.0 <td>  74.2+/-0.2 <td> 159.6  <td>  75.7+/-0.2 <td>  2.9 <td> 0.30 <td> 2.4 <td> 15.16 <td> </tr>
           <tr align="right"> <td> Average     <td> -     <td>  76.5+/-0.2 <td>  -     <td>  76.3+/-0.2 <td> -    <td> 0.30 <td> 2.4 <td> 15.16 <td> Av:  76.4+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 11040-11044 <td> 163.0 <td> -50.0+/-5.0 <td> -      <td>  -          <td> -    <td> 0.00 <td> 2.4 <td> 15.16 <td> Hall C: 0.12% leak through</tr>
           <tr align="right"> <td> 11045       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 5.00 <td> 2.4 <td> -1    <td> no target: 1.3 Hz coinc  </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 0.12% at this slit position (15.16) at 2.4&micro;A in Hall C.
           <p>
           The full information is given
           <a href="../tab/run.tab.11029-11045">here</a>.
           The plot is given
           <a href="../plots/run.11030-11039.pdf">here</a>.
           <br>
    
           The final result with the leakage correction: <br>
           P= 76.4*1.0012+50.0*0.0012= 76.5+/-0.2 at 2.4&micro;A in Hall C <br>
            <br>Pz= 76.5 +/- 0.2(stat) +/- 0.0(dilution) +/- 3.0(syst-prelim) (1/2 wave plate OUT,  -29.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="14aug2003">
    <h3>14 August 2003</h3>
    <p class="legacy-shift-crew">18:20-19:30.</p>
    <p>
    The beam energy is 1.1482 (acc). Injector angle is
            30.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster OFF. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 11052-11053 <td>  90.0 <td> -           <td>  -     <td> -           <td> -    <td> 0.20 <td> 50. <td> 14.22 <td> </tr>
           <tr align="right"> <td> 11048-11051 <td>  23.0 <td>  78.6+/-0.4 <td>  19.0  <td>  76.5+/-0.4 <td>  1.0 <td> 0.20 <td> 50. <td> 14.22 <td> Hall C partly at 30 and 77&micro;A </tr>
           <tr align="right"> <td> 11054-11057 <td> 163.0 <td>  73.7+/-0.4 <td> 161.3  <td>  74.4+/-0.4 <td>  1.3 <td> 0.20 <td> 50. <td> 14.22 <td> Hall C 75&micro;A 1/5 of run 11056 </tr>
           <tr align="right"> <td> Average     <td> -     <td>  76.1+/-0.3 <td>  -     <td>  75.4+/-0.3 <td> -    <td> 0.20 <td> 50. <td> 14.22 <td> Av:  75.8+/-0.3 Dead time not included </tr>
           <tr align="right"> <td> 11058-11059 <td> 163.0 <td> -34.0+/-5.0 <td> -      <td>  -          <td> -    <td> 0.00 <td> 75. <td> 14.22 <td> </tr>
           <tr align="right"> <td> 11062-11063 <td> 163.0 <td> -33.0+/-5.0 <td> -      <td>  -          <td> -    <td> 0.00 <td> 75. <td> 14.22 <td> Hall C: 0.6% leak through</tr>
           <tr align="right"> <td> 11064       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 5.00 <td> 75. <td> -1    <td> no target: 30 Hz coinc  </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 0.6% at this slit position (14.22) at 75&micro;A in Hall C. At 50&micro;A
           it should be 0.4%. 
           <p>
           The full information is given
           <a href="../tab/run.tab.11047-11064">here</a>.
           The plot is given
           <a href="../plots/run.11048-11057.pdf">here</a>.
           <br>
    
           The final result with the leakage correction: <br>
           P= 75.8*1.004+34.0*0.004= 76.2+/-0.3 at 50&micro;A in Hall C <br>
            <br>Pz= 76.2 +/- 0.3(stat) +/- 0.1(dilution) +/- 3.0(syst-prelim) (1/2 wave plate OUT,  30.<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="16aug2003">
    <h3>16 August 2003</h3>
    <p class="legacy-shift-crew">22:20-23:40.</p>
    <p>
    The beam energy is 2.23591 (acc). Injector angle is
            30.9<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster OFF. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 11073-11074 <td>  90.0 <td> -           <td>  -     <td> -           <td> -    <td> 0.30 <td> 75. <td> 15.18 <td> </tr>
           <tr align="right"> <td> 11067-11072 <td>  23.0 <td> -78.1+/-0.2 <td>  19.0  <td> -76.0+/-0.2 <td>  7.0 <td> 0.30 <td> 75. <td> 15.18 <td> Hall C mostly at 75&micro;A </tr>
           <tr align="right"> <td> 11075-11078 <td> 163.0 <td> -72.7+/-0.2 <td> 161.1  <td> -73.5+/-0.2 <td>  0.7 <td> 0.30 <td> 75. <td> 15.18 <td>  </tr>
           <tr align="right"> <td> Average     <td> -     <td> -75.4+/-0.1 <td>  -     <td> -74.7+/-0.1 <td> -    <td> 0.30 <td> 75. <td> 15.18 <td> Av: -75.1+/-0.1 Dead time not included </tr>
           <tr align="right"> <td> 11079-11082 <td> 163.0 <td>  35.0+/-5.0 <td> -      <td>  -          <td> -    <td> 0.00 <td> 75. <td> 15.18 <td> Hall C: 0.9% leak through</tr>
           <tr align="right"> <td> 11083       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 5.00 <td> 75. <td> -1    <td> no target: 3.7 Hz coinc  </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 0.6% at this slit position (15.18) at 75&micro;A in Hall C. At 50&micro;A
           it should be 0.4%. 
           <p>
           The full information is given
           <a href="../tab/run.tab.11066-11083">here</a>.
           The plot is given
           <a href="../plots/run.11067-11078.pdf">here</a>.
           <br>
    
           The final result with the leakage correction: <br>
           P= 75.1*1.009+35.0*0.009= 76.1+/-0.1 at 75&micro;A in Hall C <br>
            <br>Pz= -76.1 +/- 0.1(stat) +/- 0.2(dilution) +/- 3.0(syst-prelim) (1/2 wave plate OUT,  30.9<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="21aug2003">
    <h3>21 August 2003</h3>
    <p class="legacy-shift-crew">23:10-00:40.</p>
    <p>
    The beam energy is 4.4153 (acc). Injector angle is
            60.3<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster OFF. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 11092-11093 <td>  90.0 <td> -           <td>  -     <td> -           <td> -    <td> 0.30 <td> 45. <td> 15.30 <td> </tr>
           <tr align="right"> <td> 11088-11091 <td>  23.0 <td>  75.2+/-0.2 <td>  20.1  <td>  73.8+/-0.2 <td>  2.0 <td> 0.30 <td> 45. <td> 15.30 <td> </tr>
           <tr align="right"> <td> 11094-11097 <td> 163.0 <td>  75.5+/-0.2 <td> 162.1  <td>  75.9+/-0.2 <td>  0.3 <td> 0.30 <td> 45. <td> 15.30 <td>  </tr>
           <tr align="right"> <td> Average     <td> -     <td>  75.4+/-0.1 <td>  -     <td>  74.8+/-0.1 <td> -    <td> 0.30 <td> 45. <td> 15.30 <td> Av: 75.1+/-0.1 Dead time not included </tr>
           <tr align="right"> <td> 11098-11101 <td> 163.0 <td> -45.0+/-1.3 <td> -      <td>  -          <td> -    <td> 0.00 <td> 45. <td> 15.30 <td> Hall C: 0.4% leak through</tr>
           <tr align="right"> <td> 11102       <td>   0.0 <td>  -          <td> -      <td>  -          <td> -    <td> 5.30 <td> 75. <td> -1    <td> no target: 33.0 Hz coinc  </tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 0.4% at this slit position (15.30) at 45&micro;A in Hall C. 
           <p>
           The full information is given
           <a href="../tab/run.tab.11085-11102">here</a>.
           The plot is given
           <a href="../plots/run.11088-11097.pdf">here</a>.
           <br>
    
           The final result with the leakage correction: <br>
           P= 75.1*1.004+45.0*0.004= 76.1+/-0.1 at 45&micro;A in Hall C <br>
            <br>Pz= 75.6 +/- 0.1(stat) +/- 0.2(dilution) +/- 3.0(syst-prelim) (1/2 wave plate OUT,  60.3<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="25aug2003">
    <h3>25 August 2003</h3>
    <p class="legacy-shift-crew">20:30-22:30.</p>
    <p>
    The beam energy is 3.32414 (acc). Injector angle is
            43.6<sup>o</sup>, the 1/2 wave plate was <b>IN</b>.
           <p> The collimator width was at max (4cm), thr=250mV, raster OFF. </p>
            
           <!--
           <p>       
            Mott: 
             71.0+/-0.7(stat)  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1161455">(see ELOG)</a>
           </p>
           -->   
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th colspan=3 > laser <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> A, &micro;A <th> C, &micro;C <th> A slit <th>  </tr>
           <tr align="right"> <td> 11110-11111 <td>  90.0 <td> -           <td>  -     <td> -           <td> -    <td> 0.30 <td> 40. <td> 15.10 <td> </tr>
           <tr align="right"> <td> 11106-11109 <td>  23.0 <td>  80.3+/-0.2 <td>  18.3  <td>  77.8+/-0.2 <td>  2.0 <td> 0.30 <td> 40. <td> 15.10 <td> </tr>
           <tr align="right"> <td> 11112-11115 <td> 163.0 <td>  75.2+/-0.2 <td> 160.5  <td>  76.2+/-0.2 <td>  2.0 <td> 0.30 <td> 40. <td> 15.10 <td>  </tr>
           <tr align="right"> <td> Average     <td> -     <td>  77.7+/-0.1 <td>  -     <td>  77.1+/-0.1 <td> -    <td> 0.30 <td> 40. <td> 15.10 <td> Av: 77.4+/-0.1 Dead time not included </tr>
           <tr align="right"> <td> 11116-11119 <td> 163.0 <td> -40.0+/-3.0 <td> -      <td>  -          <td> -    <td> 0.00 <td> 40. <td> 15.10 <td> Hall C: 0.38% leak through</tr>
           </table>
           </p>
           <p>
    
           The Hall C leakage was 0.4% at this slit position (15.10) at 40&micro;A in Hall C. 
           <p>
           The full information is given
           <a href="../tab/run.tab.11104-11119">here</a>.
           The plot is given
           <a href="../plots/run.11106-11115.pdf">here</a>.
           <br>
    
           The final result with the leakage correction: <br>
           P= 77.4*1.0038+40.0*0.0038= 77.8+/-0.1 at 40&micro;A in Hall C <br>
            <br>Pz= 77.8 +/- 0.1(stat) +/- 0.1(dilution) +/- 3.0(syst-prelim) (1/2 wave plate IN,  43.6<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    </div>
        </p>
  </section>
</div>
<?php
PageEnd();
