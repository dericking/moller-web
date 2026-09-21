<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter: Raw Results Archives 2014');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<p class="legacy-note">TILTED (low field) Møller Target</p>
  <section class="legacy-shift" id="2-3April2014">
    <h3>2-3 April 2014</h3>
    <p class="legacy-shift-crew">18:00 - 4:00 O.Glamazdin, R.Pomatsalyuk, V. Vereshchaka</p>
    <p>
    The beam energy is ~6054MeV(accel), 1000.0MeV(linac), 112.85MeV(injector). <br>
           Injector angle is 0.0<sup>o</sup> (0.0<sup>o</sup>, 0.0<sup>o</sup> flipper). <br>
           IHWP wave plate was <b>OUT</b>. Passive HWP was <b>OUT</b>. Raster was <b>OFF</b>. <br>
           Q1=-136.56A(-23763), Q2=0A(246), Q3=82.48A(13355), Q4=136.73A(22318), Dipole=337.33A(1674620). <br>
           Helicity frequency=30Hz, delay=8windows, pattern=Quartet. <br> 
           21:23-22:08 (Runs 15570-15575) - detector HV tuning. <br>
           Runs 15576-15605 - Beam polarization measurement different targets. <br>
           Runs 15599-15600 - Al target (non polarized). <br> 
           Run  15601       - No target (beam in between tergets 2 and 3). <br>
           Runs 15607-15610 - Target 3, 1kHz helicity frequency. <br>
           Runs 15611-15613 - Target 5, 1kHz helicity frequency. <br>
           Runs 15614-15615 - Target 5, 30Hz helicity frequency. <br>
           4:00 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-8<sup>o</sup> and the mean analyzing power is 0.7567.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Motor steps <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 15574-15584 <td> 5 <td> 0.48 <td> 4.049/0.248 <td> 8.0 <td> -55.96+/-0.26 <td> 0.8 <td> - </tr>
           <tr align="right"> <td> 15585-15590 <td> 4 <td> 0.48 <td> 10.10/0.248 <td> 8.0 <td> -55.08+/-0.21 <td> 1.9 <td> - </tr>
           <tr align="right"> <td> 15591-15594 <td> 3 <td> 0.33 <td> 16.13/0.248 <td> 8.0 <td> -53.73+/-0.24 <td> 2.5 <td> - </tr>
           <tr align="right"> <td> 15595-15598 <td> 2 <td> 0.24 <td> 22.13/0.248 <td> 8.0 <td> -55.29+/-0.19 <td> 4.5 <td> - </tr>
           <tr align="right"> <td> 15599-15600 <td> 1 <td> 0.24 <td>      -      <td> 8.0 <td> 0.0004+/-0.0007 <td> Asymmetry <td> Al target </tr>
           <tr align="right"> <td> 15601       <td> 0 <td> 0.24 <td>      -      <td> 8.0 <td> 0             <td> -   <td> No target </tr>
           <tr align="right"> <td> 15602-15605 <td> 3 <td> 0.24 <td> 16.18/0.248 <td> 8.0 <td> -54.29+/-0.31 <td> 0.8 <td> - </tr>
           <tr align="right"> <td> 15607-15610 <td> 3 <td> 0.24 <td> 16.18/0.248 <td> 8.0 <td> -51.77+/-0.41 <td> 11.2 <td> 1kHz </tr>
           <tr align="right"> <td> 15611-15613 <td> 5 <td> 0.24 <td> 3.95/0248   <td> 8.0 <td> -55.47+/-0.50 <td> 6.0  <td> 1kHz </tr>
           <tr align="right"> <td> 15614-15615 <td> 5 <td> 0.24 <td> 3.95/0.248  <td> 8.0 <td> -56.71+/-0.39 <td> 14.3 <td> 30Hz </tr>
           <tr align="right"> <td> Average   <td> 2-5 <td> -    <td> -           <td> 8.0 <td> -55.03+/-0.11 <td> 14.7 <td> - </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_140402.pdf">here</a>. <br>   
           The table with detailed information is given
           <a href="../tab/runs.tab.15570-15615">here</a> and <a href="../tab/res.dat.15570-15615">here</a>.  <br>
           Plots with beam position and beam energy instability are:
           <a href="../plots/halla_bpm_140402.png">BPMs</a> and <a href="../plots/halla_energy_140402.png">Energy</a>. <br> 
           Dipole correction result with new corrector is on the <a href="../plots/v_corrector_140403.png">plot</a>. <br>
           For additional information see halog entry  <a href="http://hallaweb.jlab.org/halog/log/html/1404_archive/140403040700.html">388633</a>.  <br> 
           The final results:  <br>
           Pz=(-55.03 +/- 0.11(stat)) % Average <br>
           The plot is given <a href="../plots/res_140403.png">here</a>.
           <br> </p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="8December2014">
    <h3>8 December, 2014</h3>
    <p class="legacy-shift-crew">14:00 - 20:00 O.Glamazdin, R.Pomatsalyuk</p>
    <p>
    The beam energy is ~7375MeV(accel), 909.09MeV(linac), 102.27MeV(injector). <br>
           Injector angle is +21.6<sup>o</sup> (0.0<sup>o</sup>, 0.0<sup>o</sup> flipper). <br>
           IHWP wave plate was <b>OUT</b>. HWP#2 was IN. Rotatable HWP was <b>OUT</b>. Raster was <b>OFF</b>. <br>
           Q1=-196.9A(-33997), Q2=-92.6A(-16101), Q3=+97.9A(+15770), Q4=208.2A(33454), Dipole=399.A(1781806). <br>
           Helicity frequency=30Hz, delay=0windows, pattern=Quartet. <br> 
           Møller settings tuning took ~1 hour (14:00 - 15:00) <br>
           15:00-15:45 (Runs 15645-15652) - detector HV and threshold tuning. <br>
           Runs 15653-15665 - Beam polarization measurement with targets #5, 4 and 3. <br>
           Beam energy and position were unstable. <br>
           16:42-17:40 and 18:15-20:00 - long periods with no beam. <br>
           20:00 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-11.5<sup>o</sup> and the mean analyzing power is 0.7598.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Encoders <td> BOP <td>  Polarization % <td> Chi2 <td> Corrected <td> Comments </tr>
           <tr align="right"> <td> 15653-15658 <td> 5 <td> 0.50 <td> 1.039/1.374 <td> 8.0 <td> +87.29+/-0.44 <td> 1.84 <td> +85.59 <td> - </tr>
           <tr align="right"> <td> 15659-15664 <td> 4 <td> 0.43 <td> 1.675/1.377 <td> 8.0 <td> +84.09+/-0.41 <td> 4.73 <td> +82.46 <td> - </tr>
           <tr align="right"> <td> 15665       <td> 3 <td> 0.43 <td> 2.294/1.374 <td> 8.0 <td> +87.45+/-0.43 <td> -    <td> +85.94 <td> - </tr>
           <tr align="right"> <td> Average   <td> 3-5 <td> -    <td> -           <td> 8.0 <td> +86.19+/-0.25 <td> 20.5 <td> +84.58 <td> - </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_141208.pdf">here</a>. <br>   
           The table with detailed information is given
           <a href="../tab/runs.tab.15654-15665">here</a> and <a href="../tab/runs.dat.15654-15665">here</a>.  <br>
           Stripcharts with beam position and beam energy instability are:
           <a href="../plots/chart_bpm_141208.png">BPMs</a> and <a href="../plots/chart_energy_141208.png">Energy</a>. <br> 
           For additional information see halog entry  <a href="https://logbooks.jlab.org/entry/3311958">3311958</a>.  <br> 
           The final results:  <br>
           Pz=(+84.58 +/- 0.25(stat)+/-2.2(syst)) % Average <br>
           The plot is given <a href="../plots/120814.png">here</a>.
           <br> </p>
    </div>
        </p>
  </section>
</div>
<?php
PageEnd();
