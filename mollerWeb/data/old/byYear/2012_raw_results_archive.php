<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter: Raw Results Archives 2012');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<p class="legacy-note">TILTED (low field) Møller Target</p>
  <section class="legacy-shift" id="31Jan2012">
    <h3>31 January 2012</h3>
    <p class="legacy-shift-crew">10:00 - 14:30. Jixie Zhang, R. Pomatsalyuk, O.Glamazdin</p>
    <p>
    Beam charge asymmetry test. <br> 
           'An artificial' beam charge asymmetry was measured in paralles with HRS DAQ. <br>
           There was no beam in the Hall <br>
           Runs 15090-15108 Helicity 30Hz <br>
           Runs 15109-15121 Helicity 1kHz <br>
           <p>
    
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_120131.pdf">here</a>. <br>  
           The table with information is given <a href="../tab/runs.tab.15095-15121">here</a>.
           <br>
           The plots with results are given here:
           <ul> 
           <li><a href="../plots/noasym.png">no asymmetry</a>,<br>
           <li><a href="../plots/asym1.png">Asymmetry 1</a>,<br>
           <li><a href="../plots/asym2.png">Asymmetry 2</a>,<br>
           <li><a href="../plots/asym3.png">Asymmetry 3</a>,<br>
           <li><a href="../plots/asym4.png">Asymmetry 4</a>,<br>
           </ul>
           <br>
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1202_archive/120201110538.html">362046</a>.  <br>
           <br>
    
           <b>
        </p>
  </section>

<section class="legacy-experiment">
  <h2>E08-027 G2P: A Measurement of g2p and the Longitudinal-Transverse Spin Polarizability E08-007: The proton form factor ratio at low Q^2</h2>
  <section class="legacy-shift" id="03March2012">
    <h3>03 March 2012</h3>
    <p class="legacy-shift-crew">14:00 - 19:40. R. Pomatsalyuk, O.Glamazdin, V. Vereshchaka</p>
    <p>
    The beam energy is 2253.7MeV(accel), 548.0MeV(linac), 61.65MeV(injector). <br>
           Injector angle is -60.85<sup>o</sup> (90.0<sup>o</sup>, 88.71<sup>o</sup> flipper), the 1/2 wave plate was <b>IN</b>. <br>
           Fast raster was <b>OFF</b>. Beam was straight.
           FADC and aperture detectors were not available (see elog 
           <a href="http://hallaweb.jlab.org/halog/log/html/1203_archive/120305115954.html">363797</a>). <br>
           Beam tuning took ~1 hour. <br>
           Helicity frequency=960Hz, delay=8windows, pattern=Quartet. <br> 
           14:55-15:34 (Runs 15193-15201) detector HV tuning. <br>
           Runs 15202-15207 beam polarization measurement. Target 2 was used. <br>
           Runs 15207-15210 - BCM calibration (Target 2) <br>
           Runs 15211-15220 - Q1 quad scan (Q3=1.15kG=47.25A) <br>
           Runs 15221-15229 - Q3 quad scan (Q1=2.2kG=106.87A). <br>
           Runs 15230-15231 - Beam polarization measurement. <br>
           Runs 15232-15237 - Target 4 at 4A BOP(low magnetic field) longitudinal scans. <br>
           Runs 15238-15241 - BCM calibration (Target 3). <br>
           Runs 15242-15247 beam charge asymmetry test. <br>
           Beam energy/current chart is shown on <a href="../plots/120303_chart.png">plot</a>. <br>
           20:00: Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.759.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15202-15207 <td> 2 <td> 0.11 <td> 1.358/2.906 <td> 8.0 <td> -79.88+/-0.24 <td> - <td>  </tr>
           <tr align="right"> <td> 15208       <td> 2 <td> 0.08 <td> 1.358/2.906 <td> 8.0 <td> -79.10+/-0.69 <td> - <td> BCM calib. </tr>
           <tr align="right"> <td> 15209       <td> 2 <td> 0.06 <td> 1.358/2.906 <td> 8.0 <td> -76.35+/-0.80 <td> - <td>  </tr>
           <tr align="right"> <td> 15210       <td> 2 <td> 0.15 <td> 1.358/2.906 <td> 8.0 <td> -80.35+/-0.54 <td> - <td>  </tr>
           <tr align="right"> <td> 15211-15220 <td> 2 <td> 0.15 <td> 1.358/2.906 <td> 8.0 <td> -             <td> - <td> Q1 scan </tr>
           <tr align="right"> <td> 15221-15229 <td> 2 <td> 0.15 <td> 1.358/2.906 <td> 8.0 <td> -             <td> - <td> Q3 scan </tr>
           <tr align="right"> <td> 15230-15231 <td> 2 <td> 0.15 <td> 1.358/2.906 <td> 8.0 <td> -80.39+/-0.39 <td> - <td>  </tr>
           <tr align="right"> <td> 15332       <td> 4 <td> 0.15 <td> 1.360/-     <td> 4.0 <td> -80.36+/-0.75 <td> - <td> Long. scan </tr>
           <tr align="right"> <td> 15333       <td> 4 <td> 0.15 <td> 1.360/-     <td> 4.0 <td> -80.06+/-0.76 <td> - <td> Long. scan </tr>
           <tr align="right"> <td> 15334       <td> 4 <td> 0.15 <td> 1.360/-     <td> 4.0 <td> -80.47+/-0.76 <td> - <td> Long. scan </tr>
           <tr align="right"> <td> 15335       <td> 4 <td> 0.15 <td> 1.360/-     <td> 4.0 <td> -80.07+/-0.77 <td> - <td> Long. scan </tr>
           <tr align="right"> <td> 15336       <td> 4 <td> 0.15 <td> 1.360/-     <td> 4.0 <td> -79.40+/-0.75 <td> - <td> Long. scan </tr>
           <tr align="right"> <td> 15337       <td> 4 <td> 0.15 <td> 1.360/-     <td> 4.0 <td> -78.49+/-0.70 <td> - <td> Long. scan </tr>
           <tr align="right"> <td> 15238-15239 <td> 3 <td> 0.15 <td> 1.387/2.283 <td> 8.0 <td> -80.50+/-0.45 <td> -  <td> - </tr>
           <tr align="right"> <td> 15240       <td> 3 <td> 0.075 <td> 1.387/2.283 <td> 8.0 <td> -77.15+/-0.80 <td> -  <td> BCM calib. </tr>
           <tr align="right"> <td> 15241       <td> 3 <td> 0.06 <td> 1.387/2.283 <td> 8.0 <td> -75.88+/-0.88 <td> -  <td> - </tr>
           <tr align="right"> <td> Average     <td> 2 <td> -    <td> - <td> -             <td> -79.91+/-0.20 <td> 0.8 <td> Target 2 </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_120303.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.15193-15247">here</a> and <a href="../tab/res.dat.15202-15241">here</a>.  <br>
           The quads scan results are presented on <a href="../plots/g2p_2254_res.png">plot</a>. <br>
           Møller results for the beam charge asymetry test are: <a href="../plots/120303_set1.png">Set1</a>, 
           <a href="../plots/120303_set2.png">Set2</a> and <a href="../plots/120303_set3.png">Set3</a>. <br>
           Full information about the beam charge asymmetry test is given in halog 
           <a href="http://hallaweb.jlab.org/halog/log/html/1203_archive/120305173115.html">363824</a>. <br> 
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1203_archive/120303200925.html">363148</a>.  <br> 
           The final results:  
            <br> Pz=(-79.91 +/- 0.20(stat) +/- 1.7(syst))% <br>
           The plots are given here <a href="../plots/moller_15202-15231.png">png</a>, <a href="../plots/moller_15202-15231.pdf">ps</a>.
           <br> </p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="30March2012">
    <h3>30 March 2012</h3>
    <p class="legacy-shift-crew">14:00 - 18:00. R. Pomatsalyuk, O.Glamazdin, V. Vereshchaka</p>
    <p>
    The beam energy is 2253.7MeV(accel), 548.0MeV(linac), 61.65MeV(injector). <br>
           Injector angle is -59.63<sup>o</sup> (90.0<sup>o</sup>, 88.72<sup>o</sup> flipper) <br>
           Runs 15252-15274 IHWP wave plate was <b>IN</b>. Passive HWP was <b>IN</b> <br>
           Runs 15275-15292 IHWP wave plate was <b>OUT</b>. <br>
           Fast raster was <b>OFF</b>. Beam was straight. <br>
           Helicity frequency=960Hz, delay=8windows, pattern=Quartet. <br> 
           15:00-15:55 (Runs 15193-15201) detector HV tuning. <br>
           Runs 15259-15270 - Beam polarization measurement with IHWP wave plate <b>IN</b>. Target 2 was used. <br>
           Runs 15271-15274 - Bleed-through measurement, Hall A laser was OFF, Slit=15.15 <br>
           Runs 15275-15282 - Beam polarization measurement with IHWP wave plate <b>OUT</b>. <br>
           Runs 15283-15286 - Bleed-through measurement, Hall A laser was OFF, Slit was open=-1.0 <br>
           Runs 15288-15291 - Target 4 longitudinal scan (BOP=3A). <br>
           Run 15292 - Al target 4 (non polarized). <br> 
           18:20 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.759.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15259-15270 <td> 2 <td> 0.1 <td> 0.808/2.906 <td> 8.0 <td> -80.43+/-0.46 <td> 0.9 <td> - </tr>
           <tr align="right"> <td> 15271-15274 <td> 2 <td> 0.0 <td> 0.808/2.906 <td> 8.0 <td>  2.5+/-44     <td> 1.1 <td> Hall A laser OFF, Slit=15.15 </tr>
           <tr align="right"> <td> 15275-15282 <td> 2 <td> 0.1 <td> 0.808/2.906 <td> 8.0 <td> +79.89+/-0.58 <td> 0.9 <td> - </tr>
           <tr align="right"> <td> 15283-15286 <td> 2 <td> 0.0 <td> 0.808/2.906 <td> 8.0 <td>  -2.1+/-3.0   <td> 0.2 <td> Hall A laser OFF, Slit=-1.0 </tr>
           <tr align="right"> <td> 15287       <td> 4 <td> 0.1 <td> 1.668/0.259 <td> 8.0 <td> -68.51+/-0.33 <td> - <td> - </tr>
           <tr align="right"> <td> 15388-15291 <td> 4 <td> 0.1 <td> 1.668/-     <td> 3.0 <td> -             <td> - <td> Long. scan </tr>
           <tr align="right"> <td> 15292       <td> 6 <td> 0.1 <td> -           <td> 8.0 <td> -             <td> -  <td> Asym=0.16+/-0.54 </tr>
           <tr align="right"> <td> Average     <td> 2 <td> -    <td> -          <td> 8.0 <td>  80.22+/-0.36 <td> 0.95 <td> Both IHWP </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_120330.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.15251-15292">here</a> and <a href="../tab/res.dat.15251-15292">here</a>.  <br>
           Plots with bleed-through measurement results are:
           <a href="../plots/slit15.15.png">Slit=15.15</a> and <a href="../plots/open_slit.png">Slit=-1.0</a> <br>
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1203_archive/120330182830.html">368402</a>.  <br> 
           The final results:  <br>
           Pz=(-80.43 +/- 0.46(stat) +/- 1.7(syst))% IHWP=IN <br>
           Pz=(+79.89 +/- 0.58(stat) +/- 1.7(syst))% IHWP=OUT <br>
           Pz=(80.22 +/- 0.36(stat) +/- 1.7(syst))% Average <br>
           The plots are given here <a href="../plots/res_IHWP_IN.png">IHWP=IN</a>, <a href="../plots/res_IHWP_OUT.png">IHWP=OUT</a>, 
            <a href="../plots/120330_res.png">Average</a>.
           <br> </p>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="10April2012">
    <h3>10 April 2012</h3>
    <p class="legacy-shift-crew">19:25 - 23:35. R. Pomatsalyuk, O.Glamazdin, V. Vereshchaka, J. Zhang</p>
    <p>
    The beam energy is 1711.MeV(accel), 416.MeV(linac), 46.69MeV(injector). <br>
           Injector angle is -49.60<sup>o</sup> (90.0<sup>o</sup>, 88.71<sup>o</sup> flipper) <br>
           IHWP wave plate was <b>IN</b>. Passive HWP was <b>IN</b> <br>
           Fast and slow rasters were <b>OFF</b>. Beam was straight. <br>
           Helicity frequency=960Hz, delay=8windows, pattern=Quartet. <br>
           The beam tunning Møller took ~1 hour. <br>  
           Runs 15295-15303 - detector HV tuning. <br>
           Runs 15304-15313 - Beam polarization measurement. Target 2 was used. <br>
           Runs 15314-15317 - Bleed-through measurement, Hall A laser was OFF, Slit was open=-1.0 <br>
           Runs 15318-15327 - Q1 quad scan. <br>
           Runs 15328-15335 - Q3 quad scan. <br>
           23:55 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.754.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15304-15313 <td> 2 <td> 0.1 <td> 0.800/2.921 <td> 8.0 <td> -88.52+/-0.30 <td> 1.3 <td> - </tr>
           <tr align="right"> <td> 15314-15317 <td> 2 <td> 0.0 <td> 0.800/2.921 <td> 8.0 <td> -3.3+/-2.6    <td> 0.6 <td> Hall A laser OFF, Slit=-1.0 </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_120410.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.15298-15335">here</a> and <a href="../tab/res.dat.15304-15335">here</a>.  <br>
           The plot with bleed-through measurement results is shown <a href="../plots/blthrough_120410.png">here</a>. <br>
           The strip chart for the Møller measurement time is given <a href="../plots/chart_120410.png">here</a>. <br>
           <a href="../plots/spin_pred_120410.png">The plot</a> is illustrated possible beam polarization correction for two different beam energies. <br>
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1204_archive/120410235536.html">372508</a>.  <br> 
           The final results:  <br>
           Pz=(-88.52 +/- 0.3(stat) +/- 1.7(syst))%  <br>
           The plot with results is given <a href="../plots/res_120410.png">here</a>.
           <br> </p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="23April2012">
    <h3>23 April 2012</h3>
    <p class="legacy-shift-crew">16:10 - 20:30. R. Pomatsalyuk, O.Glamazdin, V. Vereshchaka, J. Zhang</p>
    <p>
    The beam energy is 1158MeV(accel), 548.MeV(linac), 61.65MeV(injector). <br>
           Injector angle is -70.0<sup>o</sup> (90.0<sup>o</sup>, -91.947<sup>o</sup> flipper) <br>
           IHWP wave plate was <b>OUT</b>. Passive HWP was <b>IN</b> <br>
           Fast and slow rasters were <b>OFF</b>. Beam was straight. <br>
           Helicity frequency=960Hz, delay=8windows, pattern=Quartet. <br>
           The beam tunning Møller took ~1.5 hour. <br>  
           Runs 15338-15353 - Beam polarization measurement. Target 2 was used. <br>
           Runs 15354-15357 - Bleed-through measurement, Hall A laser was OFF, Slit was 14.0 (as experiment running). <br>
           Runs 15358-15369 - Q1 quad scan. <br>
           Runs 15370-15381 - Q3 quad scan. <br>
           23:55 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.763.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15338-15353 <td> 2 <td> 0.1 <td> 0.800/2.918 <td> 8.0 <td>  89.72+/-0.29 <td> 0.4 <td> - </tr>
           <tr align="right"> <td> 15314-15317 <td> 2 <td> 0.0 <td> 0.800/2.918 <td> 8.0 <td> -15+/-87      <td> - <td> Slit=14.0 </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_120423.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.15338-15381">here</a> and <a href="../tab/res.dat.15338-15381">here</a>.  <br>
           The plot with bleed-through measurement results is shown <a href="../plots/blthrough_120423.png">here</a>. 
           For these beam energy, slit, helicity frequency <br> and bleed-through the number of events per helicity window is ~1. 
           The polarization measurement is senseless. <br> 
           The strip chart for the Møller measurement time is given <a href="../plots/chart_120423.png">here</a>. <br>
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1204_archive/120423203651.html">378077</a>.  <br> 
           Quads scan result (comparizon with GEANT) is given <a href="../plots/quads_shift_1158MeV.png">here</a>. <br>
           The final results:  <br>
           Pz=(89.72 +/- 0.29(stat) +/- 1.7(syst))%  <br>
           The plot with results is given <a href="../plots/res_120423.png">here</a>.
           <br> </p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="04May2012">
    <h3>04 May 2012</h3>
    <p class="legacy-shift-crew">9:20 - 15:00 J. Zhang</p>
    <p>
    <b>
           <H3>   Spin Dance measurement  </H3>
           </b>
           The beam energy is 2253.65MeV(accel), 548.MeV(linac), 61.65MeV(injector). <br>
           Injector angle at the beginning was -60.85<sup>o</sup> (90.0<sup>o</sup>, -91.947<sup>o</sup> flipper) <br>
           Fast and slow rasters were <b>OFF</b>. Beam was straight. <br>
           Helicity frequency=960Hz, delay=8windows, pattern=Quartet. <br>
           The beam tunning Møller took ~1.5 hour. <br>  
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.759.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, nA <td> Wien angle, <sup>o</sup> <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15382-15387 <td> 2 <td> 0.1 <td> -60.85 <td> 8.0 <td> -83.47+/-0.57 <td> 0.55 <td> IHWP=OUT PAS=OUT </tr>
           <tr align="right"> <td> 15388-15393 <td> 2 <td> 0.1 <td> -60.85 <td> 8.0 <td> -81.82+/-0.59 <td> 1.45 <td> IHWP=OUT PAS=IN </tr>
           <tr align="right"> <td> 15382-15393 <td> 2 <td> 0.1 <td> -60.85 <td> 8.0 <td> -82.67+/-0.41 <td> 1.28 <td> IHWP=OUT Average </tr>
           <tr align="right"> <td> 15394-15401 <td> 2 <td> 0.1 <td> -75.0  <td> 8.0 <td> -86.32+/-0.55 <td> 0.36 <td> IHWP=OUT PAS=IN </tr>
           <tr align="right"> <td> 15402-15408 <td> 2 <td> 0.1 <td> -20.0  <td> 8.0 <td> -43.82+/-0.51 <td> 0.81 <td> IHWP=OUT PAS=IN </tr>
           <tr align="right"> <td> 15409-15417 <td> 2 <td> 0.1 <td> +20.0  <td> 8.0 <td> +17.23+/-0.51 <td> 0.45 <td> IHWP=OUT PAS=IN </tr>
           <tr align="right"> <td> 15419-15430 <td> 2 <td> 0.1 <td> -60.2  <td> 8.0 <td> +80.40+/-0.45 <td> 1.0  <td> IHWP=IN PAS=OUT </tr>
           <tr align="right"> <td> 15431-15434 <td> 2 <td> 0.0 <td> -70.0  <td> 8.0 <td> -14+/-102      <td> - <td> Bleed-through Slit=-1.0 </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_120504.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.15382-15434">here</a> and <a href="../tab/res.dat.15382-15434">here</a>.  <br>
           The plot with bleed-through measurement results is shown <a href="../plots/moller_15431-15434.pdf">here</a>. 
           For these beam energy, slit, helicity frequency <br> and bleed-through the number of events per helicity window is ~1. 
           The polarization measurement is senseless. <br> 
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1204_archive/120423203651.html">382205</a>.  <br> 
           Spin dance result is given <a href="../plots/spin_prec_17.pdf">here</a>. <br>
           The plots with Møller results for each Wien filter angle are given below: <a href="../plots/moller_15382-15387.pdf"> -60.85 <sup>o</sup>(1)</a>, <br>
            <a href="../plots/moller_15388-15393.pdf"> -60.85 <sup>o</sup>(2)</a>, <a href="../plots/moller_15382-15393.pdf"> -60.85 <sup>o</sup>(average)</a>,
    <a      <a href="../plots/moller_15395-15401.pdf"> -75.0 <sup>o</sup></a>, <a href="../plots/moller_15402-15408.pdf"> -20.0 <sup>o</sup></a>,
            <a href="../plots/moller_15409-15417.pdf"> +20.0 <sup>o</sup></a>, <a href="../plots/moller_15419-15430.pdf"> -60.20 <sup>o</sup></a>,
           <br> </p>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="15May2012">
    <h3>15 May 2012</h3>
    <p class="legacy-shift-crew">10:35 - 17:20 J. Zhang</p>
    <p>
    The beam energy is 3349.65V(accel), 548.MeV(linac), 61.65MeV(injector). <br>
           Injector angle at the beginning was -60.20<sup>o</sup> (90.0<sup>o</sup>, -91.947<sup>o</sup> flipper) <br>
           Fast and slow rasters were <b>OFF</b>. Beam was straight. <br>
           Helicity frequency=960Hz, delay=8windows, pattern=Quartet. <br>
           The beam tunning Møller took ~1 hour. <br>  
           Runs 15438-15467: IHWP=IN PAS=OUT <br>
           Runs 15438-15440: detector HV tune <br>
           Runs 15468-15501: IHWP=OUT PAS=IN <br>
           Runs 15469-15473: Bleed-through measurement, Hall A laser was OFF. Full open slit (-1).  <br>
           Runs 15474-15489: Q1 scan (Q3=72.92A) <br>
           Runs 15490-15501: Q3 scan (Q1=96.82A) <br>
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.753.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, nA <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15441-15468 <td> 2 <td> 0.05 <td> 8.0 <td>  83.59+/-0.31 <td> 0.74 <td>  </tr>
           <tr align="right"> <td> 15469-15473 <td> 2 <td> 0.0  <td> 8.0 <td> -1.0+/-3.8    <td> 0.1  <td> Bleed-through Slit=-1.0 </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_120515.pdf">here</a>. <br>  
           The table with detailed information is given
           <a href="../tab/runs.tab.15441-15501">here</a> and <a href="../tab/res.dat.15441-15501">here</a>.  <br>
           The plot with bleed-through measurement results is shown <a href="../plots/moller_15431-15434.pdf">here</a>.  
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1205_archive/120515180822.html">385183</a>.  <br> 
           Plot with bleed-through measurement results is given on
           <a href="../plots/moller_15469-15473.png">png</a> and <a href="../plots/moller_15469-15473.png">ps</a>. <br>
           The final result is:  <br>
           Pz=(83.59 +/- 0.31(stat) +/- 1.7(syst))%  <br>
           The plots are given here <a href="../plots/moller_15441-15468.png">png</a>, <a href="../plots/moller_15441-15468.pdf">ps</a>. 
           <br> </p>
    </div>
        </p>
  </section>

</section>
</div>
<?php
PageEnd();
