<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter: Raw Results Archives 2011');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<p>
<p class="legacy-note">TILTED (old) Møller Target</p>
<ul>

  January 2011. Old (tilted) Møller target has been restored on the beam line. <br> <p>

  January 27, 2011. Tilted Møller target <a href="docs/DT_A1370.pdf">alignment</a>. Calculated foil angle is 19.95deg.  <br> <p>

  February 8, 2011. Power supply of the third Møller quad has been replased due to noise, see elog entry <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1567253">1567253</a>. <br>
  S. Wood: test results for Møller quads power supply are in  <a href="../../../magnets/docs/moller_quads_fields_swoods.pdf">table</a>. <p>

       <b>
<section class="legacy-experiment">
  <h2>E08-008: D-Threshold Exclusive Study of Deuteron Electrodisintegration near Threshold</h2>
  <section class="legacy-shift" id="18Feb2011">
    <h3>18 February 2011</h3>
    <p class="legacy-shift-crew">9:00 - 18:00. J. Zhang, R. Pomatsalyuk, O.Glamazdin</p>
    <p>
    The beam energy is 3354.8MeV(accel), 549.0MeV(linac), 61.76MeV(injector). <br>
           Injector angle is -62.40<sup>o</sup> (+25.8<sup>o</sup> including flipper), the 1/2 wave plate was <b>OUT</b>. <br>
           Fast raster was <b>ON</b>. Beam was straight.
           Møller energy lock was used. Beam energy was unstable. Beam energy fluctuation correction is needed.<br>
           Møller FSD problem was fixed(see elog <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1569033#bracketed">1569033</a>). <br>
           Hall C Møller measurement result see hclog <a href="https://hallcweb.jlab.org/hclog/1102_archive/110219083807.html">220868</a>). <br>
           12:45-13:30 Controlled access to fix moller rack power problem (see elog <a href="http://hallaweb.jlab.org/halog/log/html/1102_archive/110218155412.html">347502</a>)  <br>
           Runs 14985-14993: Møller Quad1 scan. There is a discrepancy between GEANT and measurement. <br>
           Runs 14994-15000: Møller Quad3 scan. No difference between GEANT and measurement. <br>
           Runs 15021-15023: beam charge asymmetry test.  <br>
    
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.7543.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on the beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td>Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15001-15006 <td> 5 <td> -1.1 <td> 1.367/1.013 <td> 8.0 <td> -83.49+/-0.36 <td> -84.06 <td> 1.8 <td> B.cur=0.5uA </tr>
           <tr align="right"> <td> 15007-15010 <td> 4 <td> -1.1 <td> 1.365/1.636 <td> 8.0 <td> -81.56+/-0.37 <td> -82.11 <td> 0.8 <td> B.cur=0.5uA </tr>
           <tr align="right"> <td> 15011-15016 <td> 3 <td> -1.1 <td> 1.368/2.232 <td> 8.0 <td> -80.78+/-0.21 <td> -81.38 <td> 8.2 <td> B.cur=0.4uA </tr>
           <tr align="right"> <td> 15017-15020 <td> 2 <td> -1.1 <td> 1.365/2.865 <td> 8.0 <td> -80.52+/-0.26 <td> -79.90 <td> 0.6 <td> B.cur=0.25uA </tr>
           <tr align="right"> <td> 15024-15025 <td> 2 <td>  0.0 <td> 1.770/2.933 <td> 8.0 <td> -82.17+/-0.38 <td> -81.74 <td> 0.7 <td> B.cur=0.25uA </tr>
           <tr align="right"> <td> 15026-15027 <td> 4 <td>  0.0 <td> 1.770/1.675 <td> 8.0 <td> -80.92+/-0.51 <td> -81.67 <td> 0.6 <td> B.cur=0.5uA </tr>
           <tr align="right"> <td> 15028-15029 <td> 5 <td>  0.0 <td> 1.768/1.043 <td> 8.0 <td> -83.38+/-0.54 <td> -83.99 <td> 0.1 <td> B.cur=0.5uA </tr>
           <tr align="right"> <td> Average <td>   5 <td> -    <td> - <td> -             <td> -83.45+/-0.31 <td> -84.04 <td> 1.4 <td>  - </tr>
           <tr align="right"> <td> Average <td>   4 <td> -    <td> - <td> -             <td> -81.33+/-0.30 <td> -82.11 <td> 0.8 <td>  - </tr>
           <tr align="right"> <td> Average <td>   2 <td> -    <td> - <td> -             <td> -81.06+/-0.22 <td> -80.50 <td> 3.7 <td>  - </tr>
           <tr align="right"> <td> Average <td> 2-5 <td> -    <td> - <td> -             <td> -81.69+/-0.13 <td> -81.64 <td> 6.5 <td>  - </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_1102118.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.14977-15029">here</a> and <a href="../tab/res.dat.14977-15029">here</a>.
           <br>
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1102_archive/110218181520.html">347515</a>.  <br>
           For the beam energy fluctuation see <a href="../plots/110218_chart.png">plot1</a>.  <br>     
           The final results:  
            <br> Pz=(-81.64 +/- 0.13(stat) +/- 2.0(syst))% <br>
           The plots are given <a href="../plots/runs.15001-15029.png">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="19Dec2011">
    <h3>19 December 2011</h3>
    <p class="legacy-shift-crew">14:20 - 22:30. R. Pomatsalyuk, O.Glamazdin</p>
    <p>
    The Møller Polarimeter commissioning. 
           The beam energy is 1721.3MeV(accel) <br>
           Injector angle is 90.00<sup>o</sup> -92.057<sup>o</sup>(Flipper), 0.0<sup>o</sup>(Wien), the 1/2 wave plate was <b>IN</b>. <br>
           Fast raster was <b>OFF</b>. Beam was straight.
           Hall C energy lock was used. <br>
           Møller FSD problem was fixed(see elog <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1655853">1655853</a>). <br>
           Runs 15040-15046 Helicity 30Hz, 8 Windows, Quartet
           Runs 15040-15045: beam charge asymmetry test.  <br>
           Beam charge asymmetry was very unstable and the peaks were very wides (see plots below).<br>
           Run 15075 Beam charge asymmetry is back to normal (0.00071). <br> 
           Runs 15048-15087 Helicity 960Hz <br>
           Runs 15050-15061: Møller Quad1 scan.  <br>
           Runs 15064-15072: Møller Quad3 scan.  <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.7528.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Encoder <td> BOP <td>  Polarization %    <td> Comments </tr>
           <tr align="right"> <td> 15073-15074 <td> 4 <td> - <td> 8.0 <td> 58.73+/-0.42 <td> B.cur=0.3uA </tr>
           <tr align="right"> <td> 15075-15076 <td> 4 <td> - <td> 8.0 <td> 62.46+/-0.29 <td> B.cur=0.5uA </tr>
           <tr align="right"> <td> 15077-15078 <td> 4 <td> - <td> 8.0 <td> 62.25+/-0.24 <td> B.cur=0.7uA </tr>
           <tr align="right"> <td> 15079-15081 <td> 4 <td> - <td> 8.0 <td> 62.83+/-0.21 <td> B.cur=0.7uA double scan </tr>
           <tr align="right"> <td> 15082-15087 <td> 2 <td> - <td> 8.0 <td> 62.08+/-0.19 <td> B.cur=0.1uA </tr>
           </table>
           <p>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_111219.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.15040-15087">here</a> and <a href="../tab/res.dat.15047-15087">here</a>.
           <br>
           Plots with the beam charge asymmetry measurement results are shown below: 
           <ul> 
           <li><a href="../plots/run15040.png">Run 15040</a>,<br>
           <li><a href="../plots/run15042.png">Run 15042</a>,<br>
           <li><a href="../plots/run15045.png">Run 15045</a>,<br>
           <li><a href="../plots/run15046.png">Run 15046</a>, <br>
           <li><a href="../plots/runs15040-15046.png">Runs 15040-15046</a>,<br>
           <li><a href="../plots/runs15063-15070.png">Runs 15063-15070</a>, <br>
           </ul>
           <br>
           The table with detailed information for FADC DAQ is given
           <a href="../tab/res_table_2558-2572.txt">here</a> and plots:
           <ul> 
           <li><a href="../plots/res_2558-2563.gif">target #4 with different currents</a>,<br>
           <li><a href="../plots/res_2567-2572.gif">target #2</a>,<br>
           <li><a href="../plots/res_2558-2563_current.gif">target #4 vs current</a>,<br>
           <li><a href="../plots/res_2558-2563_curcomp.gif">target #4 vs current and old DAQ</a>.
           </ul>
           <br>
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1112_archive/111219223500.html">360950</a>.  <br>
           <br>
    </div>
        </p>
  </section>

</section>
</div>
<?php
PageEnd();
