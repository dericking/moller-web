<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter Raw Results Archives 2002');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<section class="legacy-shift" id="05feb2002">
    <h3>05 February 2002</h3>
    <p class="legacy-shift-crew">9:15-11:15.</p>
    <p>
    The beam energy is 5.784 (accel) or 5.754 (Tiefenback). Injector angle is
            -34.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
            <!-- Injector: one laser is used.
            The laser phase was at ?<sup>o</sup> (not read out). 
             The beam current dependence on the phase is given on the 
            <a href="../plots/laser_phase_17.pdf">plot</a>. -->
           <p/>
           <p>
              The laser frequency provided a bulk extraction from the GAs crystal,
              the polarization expected was therefor about 30-40%.
           <p/>
           <p>
              LG1 tripped at high HV and was therefore turned off.
           <p/>
            
           <p>
            <!--
            Mott: 
             -79.1+/-0.66(stat)+/-0.48(sys)  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0106_archive/010613135754.html">(see ELOG)</a>
            -->
           </p>
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10101-10102 <td>  90.0 <td>       -     <td> 0.35uA <td> -            <td> -   <td>thr=130mV, raster ON  </tr>
           <tr align="right"> <td> 10090-10095 <td>  23.0 <td> 32.7+/-0.3<td> 19.0   <td> 31.8+/-0.3  <td> 90. <td> Large BCM asymmetry      </tr>
           <tr align="right"> <td> 10096-10099 <td> 163.5 <td> 31.2+/-0.4<td> 159.0  <td> 32.0+/-0.4 <td> 98. <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>   32.0+/-0.3<td>  -     <td> 31.9+/-0.3 <td> -   <td> Av:  32.0+/-0.3 Dead time not included </tr>
           </table>
           </p>
           <p>
              The BCM asymmetry was huge: -0.003, and the BCM correction was dramatically increasing
              the difference between coil + and coil - data.
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10090-10102">here</a>.
           <br>
           The final results:  
            <br>Pz= 32.0 +/- 0.3(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT,  -34.<sup>o</sup> Wien angle)
                        (dead time correction DONE, assumed to be about 0.3%)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="17feb2002">
    <h3>17 February 2002</h3>
    <p class="legacy-shift-crew">9:15-15:45.</p>
    <p>
    The beam energy is 3.484 (accel) or 3.4786 (EP/Arc at 5 passes). Injector angle is
            60.<sup>o</sup> and 45.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
    
           <p>
              LG1 tripped at high HV and was therefore turned off.
           <p/>
            
           <p>
            <!--
            Mott: 
             -79.1+/-0.66(stat)+/-0.48(sys)  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0106_archive/010613135754.html">(see ELOG)</a>
            -->
           </p>
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76. Threshold=80mV, raster ON.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10103-10105 <td>  23.0 <td>       -     <td> 0.33uA <td> -            <td> -   <td>thr=40mV, attenuator=107 slit=-1.0  </tr>
           <tr align="right"> <td> 10115-10116 <td>  90.0 <td> - <td> 0.33uA <td> WIEN filter=60<sup>o</sup><td> -<td>thr=80mV, attenuator=107 slit=-1.0  </tr>
           <tr align="right"> <td> 10107-10114 <td>  23.0 <td> 76.2+/-0.25<td> 18.3   <td> 73.9+/-0.25 <td> 13. <td> Large BCM asymmetry      </tr>
           <tr align="right"> <td> 10117-10124 <td> 163.5 <td> 70.6+/-0.25<td> 159.6  <td> 72.3+/-0.25 <td> 19. <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>   73.4+/-0.2<td>  -     <td> 73.1+/-0.2 <td> -   <td> Av:  73.3+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10125 <td> 163.5 <td> 66.7+/-1.6<td> 0.13uA  <td>  - <td> - <td> BCM calibration         </tr>
           <tr align="right"> <td> 10126 <td> 163.5 <td> -72.9+/-0.8<td> 0.6uA   <td>  - <td> - <td> BCM calibration         </tr>
           <tr align="right"> <td> 10127 <td> 163.5 <td>  71.4+/-0.6<td> 1.18uA  <td>  - <td> - <td> BCM calibration         </tr>
           <tr align="right"> <td> 10128 <td> 163.5 <td> -69.7+/-1.3<td> 0.26uA  <td>  - <td> - <td> BCM calibration         </tr>       
           <tr align="right"> <td> 10129 <td> 163.5 <td>  57.6+/-1.5<td> 0.06uA  <td>  - <td> - <td> Hall A laser OFF, cross-talk from Halls C&B </tr>  
           <tr align="right"> <td> 10130 <td> 163.5 <td> -61.4+/-1.4<td> 0.06uA  <td>  - <td> - <td> Hall A laser OFF, cross-talk from Halls C&B </tr>  
           <tr align="right"> <td> 10131 <td> 163.5 <td>  56.0+/-1.9<td> 0.06uA  <td>  - <td> - <td> Hall A laser OFF, cross-talk from Halls C&B  </tr>  
           <tr align="right"> <td> 10132 <td> 163.5 <td> -75.1+/-0.7<td> 0.30uA  <td>  - <td> - <td>  Attenuator=318 slit=16                       </tr>  
           <tr align="right"> <td> 10133 <td> 163.5 <td>  42.8+/-4.0<td> 0.03uA  <td>  - <td> - <td>  Hall A laser OFF, cross-talk from Halls C&B </tr>
           <tr align="right"> <td> 10134-10141 <td> 163.5 <td> 74.2+/-0.2<td> -  <td> - <td> 9. <td>  
           <tr align="right"> <td> 10142-10143 <td> 163.5 <td> 77.2+/-0.5<td> 0.25uA   <td>  WIEN filter=45<sup>o</sup> <td> - <td> BCM calibration    </tr>
           <tr align="right"> <td> 10144-10145 <td> 163.5 <td> 59.5+/-5.5<td> 0.03uA  <td>  - <td> - <td> Hall A laser OFF, cross-talk from Halls C&B  </tr>
           <tr align="right"> <td> 10146-10147 <td> 163.5 <td> 77.6+/-1.0<td> 0.03uA  <td>  - <td> - <td> BCM calibration         </tr>       
           <tr align="right"> <td> 10148-10149 <td> 163.5 <td> 77.6+/-0.7<td> 0.25uA   <td>  - <td> - <td> BCM calibration         </tr>
           <tr align="right"> <td> 10150-10151 <td> 163.5 <td> 77.3+/-0.5<td> 1.35uA  <td>  - <td> - <td> BCM calibration         </tr>
           <tr align="right"> <td> 10152-10153 <td> 163.5 <td> 77.3+/-0.7<td> 0.46uA  <td>  - <td> - <td> BCM calibration         </tr>       
           <tr align="right"> <td> 10162-10163 <td>  90.0 <td>       -     <td> 0.3uA <td> -        <td> -   <td>thr=80mV, attenuator=318 slit=16  </tr>
           <tr align="right"> <td> 10165-10172 <td>  23.0 <td> 82.1+/-0.25<td> 17.8   <td> 79.4+/-0.25 <td> 30. <td>                         </tr>
           <tr align="right"> <td> 10154-10161 <td> 163.5 <td> 78.1+/-0.25<td> 159.2  <td> 80.1+/-0.25 <td> 15. <td>                         </tr> 
           <tr align="right"> <td> Average   <td> -     <td>   80.1+/-0.25<td>  -     <td> 79.7+/-0.2 <td> -   <td> Av:  79.9+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10181-10182 <td>  90.0 <td> - <td> 0.3uA <td>  WIEN filter=60<sup>o</sup> <td> - <td>thr=80mV, attenuator=318 slit=16  </tr>
           <tr align="right"> <td> 10173-10180 <td>  23.0 <td> 80.2+/-0.25<td> 17.9   <td> 77.5+/-0.25 <td> 9. <td>                         </tr>
           <tr align="right"> <td> 10183-10190 <td> 163.5 <td> 73.3+/-0.25<td> 159.2  <td> 75.3+/-0.25 <td> 9. <td>                         </tr> 
           <tr align="right"> <td> Average   <td> -     <td>   76.8+/-0.2<td>  -     <td> 76.4+/-0.2 <td> -   <td> Av:  76.6+/-0.2 Dead time not included </tr> 
           </table>
           </p>
           <p>
              The BCM asymmetry was huge and very different: 0.0008-0.006
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10103-10190">here</a>.
           The plot is given
           <a href="../plots/run.10103-10190.pdf">here</a>.
           <br>
           The final results:  
            <br>Pz= 76.6 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT,  60.<sup>o</sup> Wien angle)
                       <br>
    
          <p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="22feb2002">
    <h3>22 February 2002</h3>
    <p class="legacy-shift-crew">2:46-3:45.</p>
    <p>
    The beam energy is 3.4786 (arc, ep). Injector angle is
            60.4.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
              LG1 tripped at high HV and was therefore turned off.
           <p/>
            
           <p>
            Mott: 
             -73.4+/-1.3  
            <a href="http://opweb.acc.jlab.org/internal/ops/daily_activity_log/html/0202_archive/020221173551.html">(see ELOG)</a>
           </p>
           
           <p>
           <table border>
           <caption align="top">  Supermendur target P=7.95% (old). Target Angles and Beam Polarizations. The theta
           acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The error is statistical only.</caption>
           <tr> <th rowspan=2>      runs     <th colspan=2 > Dial angle <th colspan=2> Calculated angle <th rowspan=2 > chi2 <th rowspan=2 > comments 
           <tr>  <th> angle <th> Polarization % <th> angle <th> Polarization % <th> </tr>
           <tr align="right"> <td> 10202-10203 <td>  90.0 <td>       -     <td> 0.28uA <td> -            <td> -   <td>thr=80mV, raster ON  </tr>
           <tr align="right"> <td> 10194-10201 <td>  23.0 <td> 81.6+/-0.3<td> 18.5   <td> 79.2+/-0.3  <td> 1.0 <td> Large BCM asymmetry      </tr>
           <tr align="right"> <td> 10204-10211 <td> 163.5 <td> 75.1+/-0.3<td> 160.0  <td> 76.6+/-0.3 <td>  3.1 <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>   78.3+/-0.2<td>  -     <td> 77.9+/-0.3 <td> -   <td> Av:  78.13+/-0.2 Dead time not included </tr>
           </table>
           </p>
           <p>
              The BCM asymmetry was huge: -0.006. Slit=15.5, Laser attenuator=340
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10191-10211">here</a>.
           The plot is given
           <a href="../plots/run.10194-10211.pdf">here</a>.
           <br>
           The final results:  
            <br>Pz= 78.13 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT,  60.4<sup>o</sup> Wien angle)
                        (dead time correction DONE, assumed to be about 0.3%)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="04oct2002">
    <h3>04 October 2002</h3>
    <p class="legacy-shift-crew">02:00-08:00.</p>
    <p>
    The beam energy is 4.056 (arc, ep). Injector angle is
            75.2.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
              Problems with DAQ - Helicity signal in TIR is messed up. Helicity in ADC is used.
              Helicity 1-st sychro is messed up. 
           <p/>
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
           <tr align="right"> <td> 10305-10306 <td>  90.0 <td>       -     <td> 0.28uA <td> -            <td> -   <td>thr=120mV, raster ON  </tr>
           <tr align="right"> <td> 10301-10304 <td>  23.0 <td> 81.3+/-0.5<td> 19.0   <td> 79.1+/-0.5  <td> 1.3 <td>                          </tr>
           <tr align="right"> <td> 10307-10310 <td> 163.5 <td> 76.7+/-0.5<td> 160.5  <td> 78.0+/-0.5 <td>  1.5 <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>   78.9+/-0.4<td>  -     <td> 78.5+/-0.4 <td> -   <td> Av:  78.8+/-0.4 Dead time not included </tr>
           </table>
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10299-10310">here</a>.
           The plot is given
           <a href="../plots/run.10299-10310.pdf">here</a>.
           <br>
           The final results:  
            <br>Pz= 78.7 +/- 0.4(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, 75.2<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="08oct2002">
    <h3>08 October 2002</h3>
    <p class="legacy-shift-crew">9:30-15:00.</p>
    <p>
    The beam energy is 2.056 (arc, ep). Injector angle is
            -30.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
           <p>
              At the beginning we had problems with DAQ - the ADC trigger (#1) was running
              spuriously with no gate signal. Also, as a week before, the input signals
              in the TRI (trigger module) were wrong. Plugging/unplugging the ECL cables
              fixed the problem... The input#8 was moved to a different NIM-ECL module.
           <p/>
           <p>
              Dipole scan shows that the dipole is close to the optimum
             <a href="../plots/dipole_scan_1.pdf">see the plot</a>.
           <p/>
            
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
           <tr align="right"> <td> 10351-10352 <td>  90.0 <td>       -     <td> 0.28uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10345-10350 <td>  23.0 <td>-84.6+/-0.4<td> 18.4   <td>-82.1+/-0.4  <td> 2.5 <td>                          </tr>
           <tr align="right"> <td> 10352-10358 <td> 163.5 <td>-84.4+/-0.4<td> 160.0  <td>-86.1+/-0.4 <td>  1.0 <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>  -84.5+/-0.3<td>  -     <td>-84.1+/-0.3 <td> -   <td> Av: -84.3+/-0.2 Dead time not included </tr>
           </table>
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10338-10358">here</a>.
           The plot is given
           <a href="../plots/run.10345-10358.pdf">here</a>.
           <br>
           The final results:  
            <br>Pz=-84.3 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -30.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="09oct2002">
    <h3>09 October 2002</h3>
    <p class="legacy-shift-crew">16:30-18:00.</p>
    <p>
    The beam energy is 2.056 (arc, ep). Injector angle is
            -30.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
            
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
           <tr align="right"> <td> 10368-10369 <td>  90.0 <td>       -     <td> 0.28uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10362-10367 <td>  22.5 <td>-79.3+/-0.4<td> 17.9   <td>-77.0+/-0.4  <td> 1.3 <td>                          </tr>
           <tr align="right"> <td> 10370-10375 <td> 163.5 <td>-76.0+/-0.3<td> 160.9  <td>-77.1+/-0.3 <td>  0.9 <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>  -77.7+/-0.2<td>  -     <td>-77.1+/-0.2 <td> -   <td> Av: -77.4+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10376-10377 <td> 163.5 <td>-75.3+/-0.3<td> 0.88uA <td> -          <td>  0.9 <td>                         </tr>
           <tr align="right"> <td> 10378-10381 <td> 163.5 <td>-76.3+/-0.3<td> 0.46uA <td> -          <td>  0.9 <td>                         </tr>
           </table>
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10360-10381">here</a>.
           The plot is given
           <a href="../plots/run.10360-10381.pdf">here</a>.
           <br>
           <p>
              For the dead-time correction measurements were done at 0.2, 0.46 and 0.95&micro;A
             (<a href="../plots/pol_beamcurrent_2.pdf">see the plot</a>). Extrapolation to zero
              beam current would give a correction of 0.33&plusmn;0.05% absolute, or
              0.41&plusmn;0.06% relative to the beam polarization.
           <p/>
    
           The final results:  
            <br>Pz=-77.4 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -30.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="14oct2002">
    <h3>14 October 2002</h3>
    <p class="legacy-shift-crew">18:30-19:30.</p>
    <p>
    The beam energy is 2.056 (arc, ep). Injector angle is
            -30.<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>.
            
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
           <tr align="right"> <td> 10393-10394 <td>  90.0 <td>       -     <td> 0.28uA <td> -            <td> -   <td>thr=240mV, raster ON  </tr>
           <tr align="right"> <td> 10385-10393 <td>  22.5 <td>-77.8+/-0.3<td> 18.8   <td>-75.9+/-0.3  <td> 3.1 <td>                          </tr>
           <tr align="right"> <td> 10395-10400 <td> 163.5 <td>-74.2+/-0.3<td> 161.0  <td>-75.2+/-0.3 <td>  4.0 <td>                         </tr>
           <tr align="right"> <td> Average   <td> -     <td>  -76.0+/-0.2<td>  -     <td>-75.6+/-0.2 <td> -   <td> Av: -75.8+/-0.2 Dead time not included </tr>
           <tr align="right"> <td> 10401      <td> 163.5 <td> .          <td> .      <td> -          <td>  .  <td> BCM calibration: 0,0.48&micro;A,1.0&micro;A </tr>
           <tr align="right"> <td> 10402       <td>  none<td> .          <td> -      <td>  .         <td>  .  <td> no target BG at 0,4.8,19.4&micro;A      </tr>
           </table>
           </p>
           <p>
           The full information is given
           <a href="../tab/run.tab.10385-10402">here</a>.
           The plot is given
           <a href="../plots/run.10388-10400.pdf">here</a>.
           <br>
    
           The final results:  
            <br>Pz=-75.8 +/- 0.2(stat) +/- 3.0(syst-prelim) (1/2 wave plate OUT, -30.0<sup>o</sup> Wien angle)
                        (dead time correction NOT DONE)<br>
    
    </ul>
    </div>
        </p>
  </section>
</div>
<?php
PageEnd();
