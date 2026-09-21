<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter: Raw Results Archives 2015');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<html>
<head>
<title> Møller Polarimeter: Raw Results Archives 2015 </title>
</head>

<body>

<p>
<p class="legacy-note">TILTED (low field) Møller Target</p>
<section class="legacy-experiment">
  <h2>E12-06-114 DVCS: Measurements of the Electron-helicity Dependent Cross sections of the DVCS with CEBAF at 12 GeV</h2>
</section>
<section class="legacy-experiment">
  <h2>E12-07-108 GMp: Precision Measurement of the Proton Elastic Cross Section at High Q2</h2>
  <section class="legacy-shift" id="8March2015">
    <h3>8 March, 2015</h3>
    <p class="legacy-shift-crew">14:30 - 21:00 O.Glamazdin, R.Pomatsalyuk</p>
    <p>
    The beam energy is ~9573MeV(accel), 950.0MeV(linac), 107.2MeV(injector). <br>
           Injector angle is 45.4<sup>o</sup> (88.1<sup>o</sup>, 0.0<sup>o</sup> flipper). <br>
           IHWP wave plate was <b>OUT</b>. Passive HWP was <b>OUT</b>. Raster was <b>ON</b>. <br>
           Q1=-256A, Q2=-241A, Q3=98.8A, Q4=283.0A, Dipole=450A. <br>
           Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br> 
           Runs 15679-15681 - detector HV tune. <br>
           Runs 15683-15693 - detector threshould tune. <br>
           Runs 15694-15702 - aperture detector study. <br> 
           Run  15703-15718 - beam polarization measurement with targets #5,4,3,2. <br>
           15:40 - iocsofthamol (Møller target controller) was rebooted. <br>
           19:15 - Møller dipole power supply was circled. <br>
           19:05 - 20:10 No beam. Ask MCC to turn Hall A raster OFF. <br>
           The Møller polarimeter optics study was stopped due to a problem with the Møller dipole power supply stability (ELOG 3324377).<br> 
           21:00 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-4.6<sup>o</sup> and the mean analyzing power is 0.7707.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Motor steps <td> BOP <td>  Polarization % <td> Chi2 <td> Corrected <td> Comments </tr>
           <tr align="right"> <td> 15703-15706 <td> 5 <td> 1.00 <td>  -61.7/0.0 <td> 8.0 <td> 81.67+/-0.32 <td> 1.0 <td> 81.43 <td> - </tr>
           <tr align="right"> <td> 15707-15710 <td> 4 <td> 0.70 <td> -151.9/0.0 <td> 8.0 <td> 79.78+/-0.33 <td> 0.3 <td> 79.52 <td> - </tr>
           <tr align="right"> <td> 15711-15714 <td> 3 <td> 0.45 <td> -239.0/0.0 <td> 8.0 <td> 78.21+/-0.31 <td> 2.8 <td> 78.00 <td> - </tr>
           <tr align="right"> <td> 15715-15718 <td> 2 <td> 0.20 <td> -328.8/0.0 <td> 8.0 <td> 82.55+/-0.33 <td> 1.9 <td> 82.29 <td> - </tr>
           <tr align="right"> <td> Average   <td> 2-5 <td> -    <td> -          <td> 8.0 <td> 80.50+/-0.16 <td> 8.5 <td> 80.24 <td> - </tr>
           </table>
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_150308.pdf">here</a>. <br>   
           The table with detailed information is given
           <a href="../tab/runs.tab.15679-15718">here</a> and <a href="../tab/res.dat.15679-15718">here</a>.  <br>
           Plots with beam position and beam energy instability are:
           <a href="../plots/150308_chart2.png">BPMs</a> and <a href="../plots/150308_chart1.png">Energy</a>. <br> 
           For additional information see halog entry  <a href="https://logbooks.jlab.org/entry/3324391">3324391</a>.  <br> 
           The final results:  <br>
           Pz=(80.24 +/- 0.16(stat) +/- 2.2(syst)) %  <br>
           The plot is given <a href="../plots/030815.png">here</a>.
           <br> </p>
    
    
     <p>
        </p>
  </section>

  <section class="legacy-shift" id="23April2015">
    <h3>23-24 April, 2015</h3>
    <p class="legacy-shift-crew">19:30 - 4:00 O.Glamazdin, R.Pomatsalyuk</p>
    <p>
    The beam energy is 2056.42MeV(accel), 500.0MeV(linac), 56.42MeV(injector). <br>
           Injector angle is -29.6<sup>o</sup> (-29.6<sup>o</sup>, 88.118<sup>,0</sup> flipper). <br>
           IHWP wave plate was <b>OUT</b>. Passive HWP was <b>OUT</b>. Raster was <b>OFF</b>. <br>
           Q1=14.6A, Q2=81.7A, Q3=0A, Q4=22.3A, Dipole=112A. <br>
           Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br> 
           Runs 15732-15749 - detector HV and threshoulds tune. <br>
           Runs 15750-15753 - beam polarization with target #5 (Q4=22.3A). <br>
           Runs 15754-15768 - Q1 scan. <br>
           Runs 15769-15781 - Q2 scan. <br>
           Runs 15782-15791 - Q4 scan. <br>
           Run  15792-15797 - beam polarization with target #5 (Q4=22.3A). <br>
           Run  15798-15803 - beam polarization with target #5 (Q4=15.0A). <br>
           Run  15804-15807 - beam polarization with target #4 (Q4=15.0A). <br>
           3:45 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-9.4<sup>o</sup> and the mean analyzing power is 0.7476.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Motor steps <td> BOP <td>  Polarization % <td> Chi2 <td> Corrected <td> Comments </tr>
           <tr align="right"> <td> 15750-15753 <td> 5 <td> 0.55 <td>  -61.8/0.0 <td> 8.0 <td> -90.24+/-0.20 <td> 0.4 <td> -89.15 <td> Q4=22.3A </tr>
           <tr align="right"> <td> 15792-15797 <td> 5 <td> 0.5  <td>  -61.8/0.0 <td> 8.0 <td> -90.60+/-0.24 <td> 1.3 <td> -89.52 <td> Q4=22.3A </tr>
           <tr align="right"> <td> 15798-15803 <td> 5 <td> 0.55 <td>  -61.8/0.0 <td> 8.0 <td> -88.53+/-0.22 <td> 0.8 <td> -89.98 <td> Q4=15.0A </tr>
           <tr align="right"> <td> Average   <td>   5 <td> -    <td> -          <td> 8.0 <td> -89.78+/-0.13 <td>  -  <td> -89.52 <td> - </tr>
           <tr align="right"> <td> 15804-15807 <td> 4 <td> 0.56 <td> -150.8/0.0 <td> 8.0 <td> -87.73+/-0.27 <td> 0.7 <td> -88.99 <td> Q4=15.0A </tr>
           <tr align="right"> <td> Average   <td> 4-5 <td> -    <td> -          <td> 8.0 <td> -89.39+/-0.12 <td> -   <td> -89.42 <td> - </tr>
           </table>
           Corrected - polarization with Levchuk effect and dead time correction.
           <p>
           The Møller Log Book scan is given <a href="../plots/moller_log_150423.pdf">here</a>. <br>   
           The table with detailed information is given
           <a href="../tab/runs.tab.15732-15807">here</a> and <a href="../tab/res.dat.15732-15807">here</a>.  <br>
           Plots with beam position and beam energy instability are:
           <a href="../plots/150423_chart2.png">BPMs</a> and <a href="../plots/150423_chart1.png">Energy</a>. <br> 
           For additional information see halog entry  <a href="https://logbooks.jlab.org/entry/3334870">3334870</a>.  <br> 
           The final results:  <br>
           Pz=(-89.42 +/- 0.12(stat) +/-2.2(stat)) %  <br>
           <br> </p>
    
     <p>
        </p>
  </section>

  <section class="legacy-shift" id="24April2015">
    <h3>24 April, 2015</h3>
    <p class="legacy-shift-crew">19:00 - 24:00 O.Glamazdin, R.Pomatsalyuk</p>
    <p>
    The beam energy is 2056.42MeV(accel), 500.0MeV(linac), 56.42MeV(injector). <br>
           Injector angle is -29.6<sup>o</sup> (-29.6<sup>o</sup>, 88.118<sup>,0</sup> flipper). <br>
           IHWP wave plate was <b>OUT</b>. Passive HWP was <b>OUT</b>. Raster was <b>OFF</b>. <br>
           Q1=14.6A, Q2=81.7A, Q3=0A, Q4=24.2A, Dipole=112A. <br>
           Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br> 
           Runs 15810-15816 - Møller dipole scan. <br>
           Runs 15817-15820 - beam polarization with target #5 (Q4=24.2A). <br>
           Run  15821-15826 - beam polarization with target #5 (Q4=12.6A). <br>
           Run  15827-15832 - dead time measurement target #5 (Q4=24.2A). <br>
           0:30 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-9.4<sup>o</sup> and the mean analyzing power is 0.7481.<br>
            The target angle is 19.95<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Motor steps <td> BOP <td>  Polarization % <td> Chi2 <td> Corrected <td> Comments </tr>
           <tr align="right"> <td> 15817-15820 <td> 5 <td> 0.43 <td>  -62.1/0.0 <td> 8.0 <td> -89.78+/-0.16 <td> 6.5 <td> -89.18 <td> Q4=24.2A </tr>
           <tr align="right"> <td> 15821-15826 <td> 5 <td> 0.43  <td> -62.1/0.0 <td> 8.0 <td> -88.74+/-0.27 <td> 0.4 <td> -92.25 <td> Q4=12.6A </tr>
           </table>
           Corrected - polarization with Levchuk effect and dead time correction.
           <p>  
           The Møller Log Book scan is given <a href="../plots/moller_log_150424.pdf">here</a>. <br>    
           The table with detailed information is given
           <a href="../tab/runs.tab.15808-15832">here</a> and <a href="../tab/res.dat.15808-15832">here</a>.  <br>
           Plots with beam position and beam energy instability are:
           <a href="../plots/150424_chart2.png">BPMs</a> and <a href="../plots/150424_chart1.png">Energy</a>. <br> 
           The final results:  <br>
           Pz=(-89.18 +/- 0.16(stat) +/- 2.2(stat)) % <br>
           <br> </p>
    
    
    <p>
        </p>
  </section>

</section>
<p class="legacy-note">NEW HIGH FIELD (Temple University) Møller Target</p>
  <section class="legacy-shift" id="18-20December2015">
    <h3>18-20 December, 2015</h3>
    <p class="legacy-shift-crew">O.Glamazdin, R.Pomatsalyuk, W. Henry</p>
    <p>
    The beam energy is 11023.0/10985MeV(accel), 1090.0MeV(linac), 123.MeV(injector). <br>
           Injector angle is +36.6<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
           IHWP wave plate was <b>OUT</b>. Passive HWP was <b>OUT</b>. Raster was <b>OFF</b>. <br>
           Q1=-308.6A, Q2=-313.0A, Q3=84.0A, Q4=297.4A, Dipole=440A. <br>
           Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
           20 December 6:39am  <br>
           Runs 15876-15877 - Target #2, 3T. <br>
           Runs 15878-15881 - Target #3, 3T, detector configuration test. <br> 
           Runs 15881-15885 - beam polarization with Target #3, 3T. <br>
           Runs 15886-15889 - beam polarization with Target #3, 4T. <br>
           11:00 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, quads settings are restored. <br>
    
           <p> 
           <table border>
           <caption align="top">   The theta acceptance is about +/-3.7<sup>o</sup> and the mean analyzing power is 0.7730.<br> </caption>
           <tr> <td> Runs   <td>  Target <td> B.cur, uA <td> Motor steps <td> Field <td>  Polarization % <td> Chi2 <td> Corrected <td> Comments </tr>
           <tr align="right"> <td> 15878-15885 <td> 3 <td> 1.0 <td>  -117.5/-0.196 <td> 3T <td> -56.9+/-0.2 <td> - <td> - <td>  </tr>
           <tr align="right"> <td> 15821-15826 <td> 3 <td> 1.1  <td> -117.5/-0.196 <td> 4T <td> -59.4+/-0.2 <td> - <td> - <td>  </tr>
           </table>
           <p>  
           The Møller Log Book scan is given <a href="../plots/moller_log_151220.pdf">here</a>. <br>    
           The table with detailed information is given
           <a href="../tab/runs.tab.15876-15889">here</a> and <a href="../tab/res.dat.15876-15889">here</a>.  <br>
           Plots with beam position and beam energy instability are:
           <a href="../plots/151220_chart1.png">BPMs</a> and <a href="../plots/151220_chart2.png">Energy</a>. <br> 
           For additional information see halog entry  <a href="https://logbooks.jlab.org/entry/3369006">3369006</a> and 
           the Hall A weekly meeting <a href="Talks/weekly_2016_01_05.pdf"> presentation.  <br>
           <br> </p>
    </div>
        </p>
  </section>
</div>
<?php
PageEnd();
