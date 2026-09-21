<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter: Raw Results Archives 2009');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<ul>
 <p>
 <b>Run type</b>: <b>1</b> - measurement in point, <b>2</b> - transverse scan, <b>3</b> - longitudinal scan
 </p>
<section class="legacy-experiment">
  <h2>E-06-010: Transversity experiment</h2>
  <section class="legacy-shift" id="13Jan2009">
    <h3>13 January 2009</h3>
    <p class="legacy-shift-crew">10:00 - 16:30. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 5904MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 30<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=80, Slit=18. Fast raster was <b>ON</b>.
           Tuning took 1h 10m. <br>  
           There was no energy lock.
           <p> 
           <b> SPIN DANCE </b>  
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included</caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Wien Filter <td> Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13055-13058 <td> 5 <td> 1 <td> 0.0 <td> 1.028/1.394 <td> 8.0 <td> 30<sup>o</sup> <td> -81.35+/-0.24 <td> 6.17 <td> Thr=300mV B.cur=0.58uAmp </tr>
           <tr align="right"> <td> 13059-13060 <td> 5 <td> 1 <td> 0.0 <td> 1.028/1.394 <td> 8.0 <td> 30<sup>o</sup> <td> -80.74+/-0.34 <td> 2.96 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> 13061-13064 <td> 5 <td> 1 <td> 0.0 <td> 1.028/1.394 <td> 8.0 <td> 50<sup>o</sup> <td> -90.49+/-0.24 <td> 0.78 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> 13065-13068 <td> 5 <td> 1 <td> 0.0 <td> 1.028/1.394 <td> 8.0 <td> 70<sup>o</sup> <td> -88.58+/-0.21 <td> 7.60 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> 13070-13073 <td> 5 <td> 1 <td> 0.0 <td> 1.028/1.394 <td> 8.0 <td> -30<sup>o</sup><td> -11.73+/-0.24 <td> 0.07 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> 13074-13077 <td> 5 <td> 1 <td> 0.0 <td> 1.028/1.394 <td> 8.0 <td> 54<sup>o</sup> <td> -90.67+/-0.24 <td> 3.78 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> 13079-13082 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.387 <td> 8.0 <td> 54<sup>o</sup> <td> -89.95+/-0.22 <td> 2.02 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> 13083-13086 <td> 3 <td> 1 <td> 0.0 <td> 2.291/1.387 <td> 8.0 <td> 54<sup>o</sup> <td> -89.58+/-0.15 <td> 8.10 <td> B.cur=0.55uAmp </tr>
           <tr align="right"> <td> 13087-13090 <td> 2 <td> 1 <td> 0.0 <td> 2.921/1.391 <td> 8.0 <td> 54<sup>o</sup> <td> -91.03+/-0.19 <td> 1.36 <td> B.cur=0.55uAmp </tr>
           <tr align="right"> <td> 13091-13094 <td> 5 <td> 1 <td> 0.0 <td> 1.065/1.392 <td> 8.0 <td> 30<sup>o</sup> <td> -81.94+/-0.23 <td> 1.19 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> Average <td> 2,4,5 <td> 1 <td> -   <td> the targets <td> -   <td> 54<sup>o</sup> <td> -90.58+/-0.12 <td> 3.01 <td> 13074-13077 13079-13082  13087-13090</tr>
           <tr align="right"> <td> Average <td> 5 <td> 1 <td> -   <td> spin dance <td> -   <td> - <td> -90.98+/-0.13 <td> 46.9 <td> Max. angle 53.3<sup>o</sup>+/-1<sup>o</sup> </tr>
           <tr align="right"> <td> Best <td> 2,4,5 <td> 1 <td> -   <td> - <td> -   <td> 30<sup>o</sup> <td> -81.58+/-0.23 <td> 3.01 <td> Scaled to all targets </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13054-13094">here</a>.
           <br>
           For additional information see  <a href="http://www.jlab.org/~adaq/halog/html/0901_archive/090113181344.html">halog entry 255865</a>. <br>
    
           <h3>Spin Dance Results</h3>
    
           In Hall A, the spin is parallel at a Wien angle of 53.3&plusmn;1.0&deg;. From this, assuming symmetric linacs, we derive the energy
           per linac of 583.35 MeV, which gives the Hall A energy of 5.899 GeV. This is about 7 MeV higher than the measured energy. The difference 
           might be caused by a linacs' disbalance.
           The spin would be parallel at 15.5&deg; in Hall B (5 passes)  and at 23&deg; in Hall C (4 passes).
           The sum of squares of the longitudinal polarizations in all 3 halls would be maximized at about 30&deg;. <br>
            A large chi2 of the spin dance fit (20/NDF) is likely caused by an energy instability,
            which affects the measurements at large spin angles (far from 54&deg;)
            <p>
           The final results:  
            <br> Pz=(-81.58 +/- 0.23(stat) +/- 2.0(syst))% <br>
           The plot is given
           <a href="../plots/spin_dance_090113.pdf">here</a>.
           <br>
    
           <h3> Spin Dance Results Correction </h3>
    
           The Spin Dance results were corrected after Mini Spin Dance in 02/11/2009 (see below). For the beam energy and current - see the 
           <a href="../plots/090113_Chart.png">Chart</a>. Beam energy (HALLA:p) fluctuation was ~2.5MeV during the Møller measurements. <br>
           After old on-line and off-line analysis (see <a href="../plots/spin_prec_13.pdf">plots a) and b)</a>) the Møller data was corrected on a 
           difference between the beam energy readings from HALLA:p and the actual experiment energy 5892MeV (see <a href="../plots/spin_prec_13.pdf">plot c)</a>). <br>
           Spin precession for the Hall A and the beam energy 5892MeV gives  maximum at ~68<sup>o</sup> (see. <a href="../plots/0902spinpred.pdf">plot</a>). 
           From the Spin Dance this angle is ~58<sup>o</sup>. This discrepancy can be explained by the Linacs' energy disbalance ~0.8%. <p>
        
         Beam polarization correction on the beam energy fluctuation  was done for each Møller run (see. Table below ). 
    
        <table border>
        <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
         The target angle is 20.5<sup>o</sup>. <br> 
         The error is statistical only. BPM01Y position is included <br>
         HALLA:p - Beam polarization (%) with correction on the beam energy  from HALLA:p <br>  </caption>
        <tr> <td> Runs   <td>  Target <td>      Wien Filter <td> Polarization % <td> Chi2 <td> HALLA:p <td> Chi2  <td> Comments </tr>
        <tr align="right"> <td> 13055-13058 <td> 5 <td> 30<sup>o</sup> <td> -81.35+/-0.24 <td> 6.01 <td> -80.72 <td> 5.35 <td> B.cur=0.6uAmp </tr>
        <tr align="right"> <td> 13059-13060 <td> 5 <td> 30<sup>o</sup> <td> -80.74+/-0.34 <td> 2.92 <td> -79.80 <td> 3.02 <td> B.cur=0.8uAmp </tr>
        <tr align="right"> <td> 13061-13064 <td> 5 <td> 50<sup>o</sup> <td> -90.49+/-0.24 <td> 0.78 <td> -89.82 <td> 0.20 <td> B.cur=0.8uAmp </tr>
        <tr align="right"> <td> 13065-13068 <td> 5 <td> 70<sup>o</sup> <td> -88.03+/-0.21 <td> 0.21 <td> -88.32 <td> 0.10 <td> B.cur=0.8uAmp </tr>
        <tr align="right"> <td> 13070-13073 <td> 5 <td>-30<sup>o</sup> <td>  -9.33+/-0.24 <td> 14.1 <td>  -4.94 <td> 0.54 <td> B.cur=0.8uAmp </tr>
        <tr align="right"> <td> 13074-13077 <td> 5 <td> 54<sup>o</sup> <td> -90.67+/-0.24 <td> 3.78 <td> -90.23 <td> 4.40 <td> B.cur=0.8uAmp </tr>
        <tr align="right"> <td> 13079-13082 <td> 4 <td> 54<sup>o</sup> <td> -89.96+/-0.22 <td> 2.02 <td> -89.58 <td> 1.93 <td> B.cur=0.8uAmp </tr>
        <tr align="right"> <td> 13083-13086 <td> 3 <td> 54<sup>o</sup> <td> -88.93+/-0.21 <td> 2.26 <td> -88.01 <td> 2.33 <td> B.cur=0.5uAmp </tr>
        <tr align="right"> <td> 13087-13090 <td> 2 <td> 54<sup>o</sup> <td> -91.00+/-0.19 <td> 1.34 <td> -90.07 <td> 3.06 <td> B.cur=0.5uAmp </tr>
        <tr align="right"> <td> 13091-13094 <td> 5 <td> 30<sup>o</sup> <td> -81.92+/-0.23 <td> 1.19 <td> -79.89 <td> 1.66 <td> B.cur=0.8uAmp </tr>
        <tr align="right"> <td> Average <td> 4,5   <td> 54<sup>o</sup> <td> -90.28+/-0.16 <td> 3.18 <td> -89.88 <td> 3.25 <td> - </tr>
        <tr align="right"> <td> Average <td> 2,3,4,5 <td> 54<sup>o</sup> <td> -90.19+/-0.10 <td> 3.18 <td> -89.17 <td> 3.25 <td> - </tr>
           <tr align="right"> <td> Average <td> 5  <td>  -             <td> -81.47+/-0.15 <td> 3.74 <td> -80.19 <td> 4.00 <td> 30deg. </tr>
           <tr align="right"> <td> Best <td> 2,4,5 <td> 30<sup>o</sup> <td> -81.12+/-0.15 <td> - <td> -79.88 <td> - <td> Scaled to all targets </tr>
           </table>
         <p>
        Run-by-Run Summary is presented  in <a href="../tab/090113sd.dat">table</a>.   
        <p>      
           The final corrected results:  
            <br> Pz=(-79.88 +/- 0.15(stat) +/- 2.0(syst))% <br>
    </p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="24Jan2009">
    <h3>24 January 2009</h3>
    <p class="legacy-shift-crew">12:50 - 14:30. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 5904MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 30<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=88, Slit=28. Fast raster was <b>ON</b>.
           Tuning took ~35m.  There was no energy lock.<br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.<br>
            The target angle is 20.5<sup>o</sup>. The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on the beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td>Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13097-13100 <td> 2 <td> 1 <td> 0.0 <td> 2.921/1.387 <td> 8.0 <td> -79.77+/-0.21 <td> 1.29 <td> -78.66 <td> 1.60 <td> Thr=300mV B.cur=0.46uAmp </tr>
           <tr align="right"> <td> 13101-13104 <td> 3 <td> 1 <td> 0.0 <td> 2.291/1.382 <td> 8.0 <td> -77.88+/-0.27 <td> 2.61 <td> -76.77 <td> 2.07 <td> B.cur=0.46uAmp </tr>
           <tr align="right"> <td> 13105-13108 <td> 5 <td> 1 <td> 0.0 <td> 1.033/1.392 <td> 8.0 <td> -78.62+/-0.23 <td> 2.55 <td> -79.90 <td> 2.01  <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> 13109-13112 <td> 4 <td> 1 <td> 0.0 <td> 1.666/1.390 <td> 8.0 <td> -78.49+/-0.22 <td> 0.98 <td> -79.86 <td> 0.80 <td> B.cur=0.80uAmp </tr>
           <tr align="right"> <td> Average <td>   5,4 <td> 1 <td> -   <td> - <td> -             <td> -78.55+/-0.16 <td> 3.34 <td> -79.88 <td> 1.21 <td>  - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13096-13112">here</a>.
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0901_archive/090124144820.html">257599</a>.  <br>
           For the beam energy fluctuation see <a href="../plots/090124_chart.png">plot1</a>.  Only targets 4 and 5 were using in the analysis. <br>
           Run-to-run information see in <a href="../tab/090124.dat">table</a> an on <a href="../plots/090124_res.pdf">plot</a>.       <br>      
           The final results:  
            <br> Pz=(-79.88 +/- 0.16(stat) +/- 2.0(syst))% <br>
           The plots are given <a href="../plots/runs.13105-13112.png">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="3Feb2009">
    <h3>3 February 2009</h3>
    <p class="legacy-shift-crew">18:00 - 19:30. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 5904.9MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 30<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=150, Slit=19. Fast raster was <b>ON</b>.
           Tuning took ~1h40m.  There was no energy lock. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13117-13120 <td> 5 <td> 1 <td> 0.0 <td> 1.026/1.384 <td> 8.0 <td> -75.43+/-0.23 <td> 1.31 <td> -79.30 <td> 0.23 <td> Thr=300mV B.cur=0.82uAmp </tr>
           <tr align="right"> <td> 13121-13124 <td> 4 <td> 1 <td> 0.0 <td> 1.665/1.387 <td> 8.0 <td> -76.22+/-0.21 <td> 1.34 <td> -78.99 <td> 0.27 <td> B.cur=0.82uAmp </tr>
           <tr align="right"> <td> 13125-13128 <td> 2 <td> 1 <td> 0.0 <td> 2.920/1.377 <td> 8.0 <td> -75.59+/-0.18 <td> 0.70 <td> -75.02 <td> 0.75 <td> B.cur=0.42uAmp </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> -75.84+/-0.16 <td> 1.78 <td> -79.14 <td> 0.46 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13114-13128">here</a>.
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0902_archive/090203194539.html">258810</a>. <br>
           Target 2 was not included in summary result (see  <a href="../plots/090203_Chart.png">Chart</a>).
           Run-by-run information given in <a href="../tab/090203.dat">table</a> an on <a href="../plots/090203_res.pdf">plot</a> 
           <p>       
           The final corrected results:  
            <br> Pz=(-79.14 +/- 0.16(stat) +/- 2.0(syst))% <br>
           The plot is given
           <a href="../plots/runs.13117-13124.pdf">here</a>.
           <br>
    
           <p>
        </p>
  </section>

</section>
<section class="legacy-experiment">
  <h2>E-06-014: d2n experiment</h2>
  <section class="legacy-shift" id="7Feb2009">
    <h3>7 February 2009</h3>
    <p class="legacy-shift-crew">10:00 - 14:00. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 5904.9MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 30<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=94, Slit=17.6. Fast raster was <b>ON</b>.       <br>
           Tuning took ~2h. <br>
           There was no energy lock. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13131-13138 <td> 5 <td> 1 <td> 0.0 <td> 1.026/1.382 <td> 8.0 <td> -75.45+/-0.16 <td> 5.80 <td> -79.41 <td> 3.14 <td> Thr=300mV B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13139-13142 <td> 4 <td> 1 <td> 0.0 <td> 1.656/1.387 <td> 8.0 <td> -75.24+/-0.22 <td> 0.14 <td> -79.36 <td> 1.26 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13143-13146 <td> 2 <td> 1 <td> 0.0 <td> 2.916/1.384 <td> 8.0 <td> -75.43+/-0.19 <td> 1.00 <td> -73.43 <td> 0.25 <td> B.cur=0.4uAmp </tr>
           <tr align="right"> <td> Average <td> 5,4,2 <td> 1 <td> -   <td> - <td> -             <td> -75.39+/-0.11 <td> 3.73 <td> -79.40 <td> 2.41 <td>- </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13129-13146">here</a>.
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0902_archive/090207143914.html">259496</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090207_chart.png">plot1</a>. <br>
           Run-by-run information see in <a href="../tab/090207.dat">table</a> an on <a href="../plots/090207_res.pdf">plot</a>.
           </p>
           The final corrected results:  
            <br> Pz=(-79.40 +/- 0.13(stat) +/- 2.0(syst))% <br>
           The plot is given
           <a href="../plots/runs.13131-13142.pdf">here</a>.
           <br>
    
    
         <p>
        </p>
  </section>

  <section class="legacy-shift" id="9Feb2009">
    <h3>9 February 2009</h3>
    <p class="legacy-shift-crew">10:00 - 16:15. O.Glamazdin</p>
    <p>
    The beam energy is 1230.9MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 30<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=143, Slit=15.75. Fast raster was <b>ON</b>.       <br>
           Tuning took about 1h30m and it was no beam from 12:30 till 14:40. <br>  
           There was no energy lock. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) and 0.8% Linacs' disbalance</caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13152-13161 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.387 <td> 8.0 <td> -72.63+/-0.22 <td> 1.7 <td> -72.71 <td> 1.8 <td> Thr=300mV B.cur=0.7uAmp </tr>
           <tr align="right"> <td> 13162-13165 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.387 <td> 8.0 <td> -71.53+/-0.25 <td> 1.6 <td> -71.65 <td> 1.6 <td> B.cur=0.7uAmp </tr>
           <tr align="right"> <td> 13166-13170 <td> 2 <td> 1 <td> 0.0 <td> 2.916/1.387 <td> 8.0 <td> -70.77+/-0.21 <td> 0.3 <td> -71.82 <td> 0.3 <td> B.cur=0.5uAmp </tr>
           <tr align="right"> <td> Average <td> 5,4,2 <td> 1 <td> -   <td> - <td> -             <td> -71.62+/-0.13 <td> 3.5 <td> -71.70 <td> 3.64 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13149-13170">here</a>.
           <br>
           Runs 13156,13157 - wrong HV setting. 
           <br>
           Target 5: runs 13152-13155 and 13160,13161. 13160 and 13161 were measured after 2 hours of  no beam.
           <br>
           Run 13168 - wrong apperture signal. 
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0902_archive/090209174934.html">260040</a>.
           <p>       
           For the beam energy and current - see the <a href="../plots/090209_Chart1.png">Chart 1</a> and 
           <a href="../plots/090209_Chart2.png">Chart 2</a>. The energy seems to have fluctuated much smaller than at 5 passes. <br>
           The energy measured (HALLA:p) fluctuated on the  Chart 1 with an amplitude ~0.2MeV and has a shift +0.4MeV above the experiment 
           energy 1230MeV. On the Chart  2 (when dipole problem in Arc was fixed) it seems the energy measured (HALLA:p) has only 
           fluctuation around 1230MeV with no shift.
           </p>
           <p>
           At the Wien filter angle 30deg. and the beam energy 1230MeV we have in the HallA 78% of 100% longitudinal polarization 
           (at the Wien angle 54deg.). If we scale Møller result with the beam polarization at 54deg. = -90.58% (see Møller results from 
           Spin Dance 01/13/09) we have -90.58*0.78=-70.65%.<br>
           Beam polarization correction on the beam energy fluctuation  (HALLA:p) was done for each Møller run. Run-by-run information see 
           in <a href="../tab/090209.dat">table</a>.
           </p>
           The final results:  
            <br> Pz=(-71.70 +/- 0.13(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/090209_res.pdf">here</a>.
           <br>
    
    
           <p>
        </p>
  </section>

  <section class="legacy-shift" id="11Feb2009">
    <h3>11 February 2009</h3>
    <p class="legacy-shift-crew">15:30 - 20:15. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 5904MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 30<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=106, Slit=16.9. Fast raster was <b>ON</b>.
           <p> 
           <b> SPIN DANCE </b>  
           <p>
           There was no energy lock. 
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>  Threshold=300mV. <br> 
            The error is statistical only. BPM01Y position is included. <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Wien Filter <td> Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13174-13175 <td> 5 <td> 1 <td> 0.0 <td> 1.031/1.385 <td> 8.0 <td> 30<sup>o</sup> <td> 81.57+/-0.23 <td> 1.2  <td> 80.63 <td> 0.5 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13176-13179 <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.385 <td> 8.0 <td> 30<sup>o</sup> <td> 80.97+/-0.15 <td> 3.2  <td> 80.57 <td> 1.1 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> Average     <td> 4,5 <td> 1 <td> - <td> -           <td> -   <td> 30<sup>o</sup> <td> 81.15+/-0.12 <td> 2.7  <td> 80.60 <td> 0.8 <td> - </tr>
           <tr align="right"> <td> 13180-13181 <td> 5 <td> 1 <td> 0.0 <td> 1.031/1.385 <td> 8.0 <td> 20<sup>o</sup> <td> 72.64+/-0.22 <td> 1.3  <td> 71.96 <td> 1.2 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13182-13185 <td> 4 <td> 1 <td> 0.0 <td> 1.656/1.382 <td> 8.0 <td> 20<sup>o</sup> <td> 70.44+/-0.15 <td> 13.9 <td> 72.31 <td> 1.2 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> Average     <td> 4,5 <td> 1 <td> - <td> -           <td> -   <td> 20<sup>o</sup> <td> 71.14+/-0.12 <td> 13.7 <td> 72.20 <td> 1.5 <td> - </tr>
           <tr align="right"> <td> 13186-13187 <td> 5 <td> 1 <td> 0.0 <td> 1.026/1.389 <td> 8.0 <td> 23<sup>o</sup> <td> 73.14+/-0.22 <td> 5.0  <td> 74.55 <td> 12.0 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13189-13190 <td> 4 <td> 1 <td> 0.0 <td> 1.656/1.387 <td> 8.0 <td> 23<sup>o</sup> <td> 73.58+/-0.21 <td> 3.2  <td> 74.87 <td> 1.3 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> Average     <td> 4,5 <td> 1 <td> - <td> -           <td> -   <td> 23<sup>o</sup> <td> 73.38+/-0.15 <td> 5.0  <td> 74.72 <td> 6.2 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13174-13190">here</a>.
           <br>
           For additional information see <a href="http://www.jlab.org/~adaq/halog/html/0902_archive/090211214547.html">halog entry 260554</a> <br>
           The plot is given
           <a href="../plots/runs.13174-13190.pdf">here</a>.
           <br>
        <h3>Mini Spin Dance Results</h3>
        There was no energy lock. For the beam energy and current - see the <a href="../plots/090211.png">Chart</a>. Beam energy (HALLA:p) fluctuation was ~2.5MeV <br> 
        during the Møller measurements. <br>
        Mini Spin Dance results were analysed together with 01/13/09 Spin Dance results. After the Møller raw data analys (see <a href="../plots/spin_prec_12.pdf">plot b)</a>)
        we corrected  the Møller data on a difference between the beam energy readings from HALLA:p and the actual experiment energy 5892MeV 
        (see <a href="../plots/spin_prec_12.pdf">plot c)</a>). <br>
        Spin precession for the Hall A and the beam energy 5892MeV gives  maximum at ~68<sup>o</sup> (see. <a href="../plots/0902spinpred.pdf">plot</a>). 
        From the Spin Dance this angle is ~58<sup>o</sup>. This discrepancy can be explained by the Linacs' energy disbalance ~0.8%. <p>
        Beam polarization correction on the beam energy fluctuation and the Linacs' energy disbalance was done for each Møller run (see. Table above - "Cor.Polar. %" column). 
        Summary is presented on <a href="../plots/090211_res.pdf">plot</a> and in <a href="../tab/090211SD.dat">table</a>.      <p>
        The Wien filter angle 23<sup>o</sup> was choosen as an optimal for the Hall A and the Hall C beam polarization values. After all corrections 
        from  <a href="../plots/0902spinpred.pdf">plot</a>  we can see that the optimal Wien filter angle for the Hall A and the Hall C is 19<sup>o</sup>. <br>
        The Wien filter angle 23<sup>o</sup> gives for the Hall A a bit lager polarization.
        <p>
           The final results for the Wien filter angle 23<sup>o</sup>:  
           <br> Pz=(74.72 +/- 0.15(stat) +/- 2.0(syst)%<br>
    
    
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="19Feb2009">
    <h3>19 February 2009</h3>
    <p class="legacy-shift-crew">20:45 - 22:40. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 5904.9MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 23<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=225, Slit=15.85. Fast raster was <b>ON</b>.      <br>
           Tuning took 45min.<br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13193-13196 <td> 5 <td> 1 <td> 0.0 <td> 1.031/1.387 <td> 8.0 <td> -74.25+/-0.24 <td> 1.66 <td> -74.43 <td> 0.46 <td> Thr=300mV B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13197-13200 <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.389 <td> 8.0 <td> -73.02+/-0.22 <td> 1.58 <td> -74.50 <td> 1.38 <td> B.cur=0.8uAmp </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> -73.58+/-0.16 <td> 3.29 <td> -74.47 <td> 1.03 <td> Without lock </tr>
           <tr align="right"> <td> 13201-13204 <td> 5 <td> 1 <td> 0.0 <td> 1.031/1.389 <td> 8.0 <td> -74.75+/-0.21 <td> 4.12 <td> -74.75 <td> 3.60 <td> B.cur=1.0uAmp </tr>
          <tr align="right"> <td> 13206-13209 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.389 <td> 8.0  <td> -74.20+/-0.20 <td> 0.17 <td> -74.14 <td> 0.88 <td> B.cur=1.0uAmp </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> -74.46+/-0.15 <td> 2.40 <td> -74.43 <td> 2.61 <td> With lock </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> -74.05+/-0.11 <td> 3.76 <td> -74.49 <td> 1.59 <td> For all runs </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13192-13209">here</a>.
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0902_archive/090219224955.html">262181</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090219_chart.png">plot</a>. There was no energy lock for the first half of the measurement 
           (runs 13192-13200), and a lock in ARC2 using a tool called "PID" (told us by the MCC) for the rest of runs. Beam energy correction was done for all runs.
           Run-by-run information see in <a href="../tab/090219.dat">table</a> an on <a href="../plots/090219_res.pdf">plot</a>.
           </p>
           The final corrected results:  
            <br> Pz=(-74.49 +/- 0.11(stat) +/- 2.0(syst))%<br>
           The plot is given
           <a href="../plots/runs.13193-13209.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="03Mar2009">
    <h3>03 March 2009</h3>
    <p class="legacy-shift-crew">18:05 - 21:15. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 5904.9MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is 30.0<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=191, Slit=15.5. Fast raster was <b>ON</b>.
           <br>
           Tuning took 1h. Initially the Møller dipole setting was wrong.
    
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13226-13229 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.381 <td> 8.0 <td> -80.40+/-0.19 <td> 3.03 <td> -79.91 <td> 1.42 <td> Thr=300mV B.cur=1.1uAmp </tr>
           <tr align="right"> <td> 13230-13231 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.381 <td> 8.0 <td> -79.37+/-0.28 <td> 0.05 <td> -79.90 <td> 0.03 <td> Trigger:RLG+LLG  </tr>
           <tr align="right"> <td> 13232-13235 <td> 4 <td> 1 <td> 0.0 <td> 1.643/1.392 <td> 8.0 <td> -80.24+/-0.18 <td> 0.58 <td> -79.42 <td> 1.52 <td> - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> -80.32+/-0.12 <td> 2.31 <td> -79.65 <td> 1.46 <td> For all runs </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13220-13235">here</a>. <br>
           Runs 13230-13231: trigger Left LG + Right LG, no apperture counter in trigger.       <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0903_archive/090303214236.html">264402</a>.      <p>       
           For the beam energy fluctuation see <a href="../plots/090303_chart.png">plot</a>. There was an energy lock in ARC2 using a tool called "PID". 
           This day it was not running properly (see  elog 1460400). The next day it was fixed (see elog 1460485).
           Beam energy correction was done for all runs.
           Run-by-run information see in <a href="../tab/090303.dat">table</a> an on <a href="../plots/090303_res.pdf">plot</a>.      </p>
           The final corrected results:  
            <br> Pz=(-79.65 +/- 0.12(stat) +/- 2.0(syst))%<br>
           The plot is given
           <a href="../plots/runs.13226-13235.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="06Mar2009">
    <h3>06 March 2009</h3>
    <p class="legacy-shift-crew">17:05 - 20:15. E.Chudakov, O.Glamazdin</p>
    <p>
    The beam energy is 4739.83MeV(accel), 583.5MeV(linac), 65.6437MeV(injector). <br>
           Injector angle is -18.0<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=220, Slit=16. Fast raster was <b>ON</b>.       <br>
           Tuning took ~1h. Again, initially the Møller dipole setting was wrong. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13252-13255 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.389 <td> 8.0 <td> 66.01+/-0.20 <td> 5.34 <td> 64.55 <td> 0.69 <td> Thr=300mV B.cur=1uAmp </tr>
           <tr align="right"> <td> 13256-13259 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.389 <td> 8.0 <td> 65.57+/-0.20 <td> 0.12 <td> 64.36 <td> 0.12 <td> Trigger:RLG+LLG  </tr>
           <tr align="right"> <td> 13260-13263 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.389 <td> 8.0 <td> 64.40+/-0.19 <td> 2.87 <td> 63.00 <td> 2.92 <td> - </tr>
           <tr align="right"> <td> 13264-13265 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.389 <td> 8.0 <td> 65.39+/-0.28 <td> 0.88 <td> 63.98 <td> 1.36 <td> - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> 65.29+/-0.11 <td> 4.92 <td> 63.93 <td> 3.97 <td> For all runs </tr>
           </table>
           <p>
           The table with detailed information is given       <a href="../tab/run.tab.13247-13265">here</a>. <br>
           Runs 13256-13259: trigger Left LG + Right LG, no apperture counter in trigger.       <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0903_archive/090306202615.html">264979</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090306_chart.png">plot</a>. There was an energy lock in ARC2 using a tool called "PID". 
           Beam energy correction was done for all runs.
           Run-by-run information see in <a href="../tab/090306.dat">table</a> an on <a href="../plots/090306_res.pdf">plot</a>.
           </p>
           The final corrected results:  
            <br> Pz=(63.93 +/- 0.11(stat) +/- 2.0(syst))% <br>
           The plot is given
           <a href="../plots/runs.13252-13265.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="12Mar2009">
    <h3>12 March 2009</h3>
    <p class="legacy-shift-crew">18:00 - 19:40. A.Saha, O.Glamazdin</p>
    <p>
    The beam energy is 4744.24MeV(accel), 468.1MeV(linac), 52.6613MeV(injector). <br>
           Injector angle is 21.2<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=125, Slit=17.88. Fast raster was <b>ON</b>.
           <br>
           Tuning took ~35min.
    
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br>
            Cor.Pol - Polarization corrected on beam energy fluctuation (HALLA:p) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Cor.Polar. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13268-13271 <td> 5 <td> 1 <td> 0.0 <td> 1.011/1.397 <td> 8.0 <td> -61.49+/-0.20 <td> 0.64 <td> -61.49 <td> 0.64 <td> Thr=300mV B.cur=1uAmp </tr>
           <tr align="right"> <td> 13272-13275 <td> 4 <td> 1 <td> 0.0 <td> 1.658/1.392 <td> 8.0 <td> -60.25+/-0.18 <td> 0.32 <td> -60.25 <td> 0.32 <td> - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> -60.79+/-0.13 <td> 3.4  <td> -60.79 <td> 3.4  <td> For all runs </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13268-13275">here</a>. <br>       <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0903_archive/090312200506.html">265694</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090312_chart.png">the plot</a>. There was an energy lock in ARC2 using "PID". 
           The Energy lock was usefull this time. The beam energy was stable (fluctuation was less than +/-0.1MeV). The beam energy correction for the Møller results 
           is not needed.
           </p>
           The final corrected results:  
            <br> Pz=(-60.79 +/- 0.13(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13268-13275.pdf">here</a>.
           <br>
    
           <p>
        </p>
  </section>

</section>
<section class="legacy-experiment">
  <h2>E-05-015 and E-08-005: Measurement of the Target Single-Spin Asymmetry in Quasi-Elastic 3He(e,e")</h2>
  <section class="legacy-shift" id="24Apr2009">
    <h3>24 April 2009</h3>
    <p class="legacy-shift-crew">22:00 - 24:00. E.Chudakov, A.Saha</p>
    <p>
    The beam energy is 1246.19MeV(accel), 590.2MeV(linac), 66.3975MeV(injector). <br>
           Injector angle is -14.3961<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=100, Slit=15.75. Fast raster was <b>ON</b>.       <br>
           Tuning took ~30min.
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs     <td>  Target     <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td>  Comments </tr>
           <tr align="right"> <td> 13293-13296 <td> 5 <td> 1 <td> 0.0 <td> 1.031/1.387 <td> 8.0 <td> 88.02+/-0.30 <td> 0.64 <td>  Thr=270mV B.cur=0.5uAmp </tr>
           <tr align="right"> <td> 13297-13300 <td> 4 <td> 1 <td> 0.0 <td> 1.656/1.390 <td> 8.0 <td> 88.32+/-0.27 <td> 0.32 <td>  - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> 88.19+/-0.20 <td> 0.8  <td> For all runs </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13291-13300">here</a>. <br> 
           There was an energy lock in ARC2. The Energy lock was usefull. The beam energy was stable. The beam energy correction for the Møller results is not needed. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0904_archive/090424234552.html">268056</a>.
           </p>
           The final results:  
            <br> Pz=(88.19 +/- 0.20(stat) +/- 1.7(syst))%<br>
           The plot is given
           <a href="../plots/runs.13293-13300.png">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="30Apr2009">
    <h3>30 April 2009</h3>
    <p class="legacy-shift-crew">13:30 - 16:30. A.Saha, R.Michaels</p>
    <p>
    The beam energy is 3611.89MeV(accel), 590.2MeV(linac), 66.3975MeV(injector). <br>
           Injector angle is 74.8283<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=139, Slit=27.0. Fast raster was <b>ON</b>.       <br>
           Tuning took ~60min.
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13309-13312 <td> 5 <td> 1 <td> 0.0 <td> 1.026/1.387 <td> 8.0 <td> 84.17+/-0.19 <td> 2.15 <td>  Thr=270mV B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13313-13316 <td> 4 <td> 1 <td> 0.0 <td> 1.648/1.392 <td> 8.0 <td> 84.10+/-0.17 <td> 3.00 <td> - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> 84.13+/-0.13 <td> 2.35 <td> For all runs </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13303-13316">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0904_archive/090430165225.html">269968</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090430_chart.png">the plot</a>. There was an energy lock in Hall C BSY dump line. 
           The Energy lock was usefull. The beam energy was stable (fluctuation was about +0.2MeV). The beam energy correction for the Møller results is not needed.
           </p>
           The final results:  
            <br> Pz=(84.13 +/- 0.13(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13309-13316.pdf">here</a>.
           <br>
    
           <b>
        </p>
  </section>

</section>
<section class="legacy-experiment">
  <h2>E-05-102: Measurements of Ax and Az Asymmetries in the Quasi-elastic 3He(e,e'd) Reaction</h2>
  <section class="legacy-shift" id="14May2009">
    <h3>14 May 2009</h3>
    <p class="legacy-shift-crew">15:30 - 17:30. A.Saha</p>
    <p>
    The beam energy is 2428.74MeV(accel), 590.2MeV(linac), 66.3975MeV(injector). <br>
           Injector angle is 66.9203<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=220, Slit=17.6. Fast raster was <b>ON</b>.       <br>
           Tuning took ~90min. Møller Dipole was not turned on for 1 hr
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td>  Comments </tr>
           <tr align="right"> <td> 13323-13326 <td> 5 <td> 1 <td> 0.0 <td> 1.033/1.394 <td> 8.0 <td> 84.10+/-0.21 <td> 0.80 <td> Thr=270mV B.cur=0.8uAmp </tr>
           <tr align="right"> <td> 13327-13330 <td> 4 <td> 1 <td> 0.0 <td> 1.658/1.387 <td> 8.0 <td> 82.85+/-0.18 <td> 0.51 <td> - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> 83.38+/-0.14 <td> 3.10 <td>  For all runs </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13323-13330">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0905_archive/090514182757.html">273366</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090514_chart.png">the plot</a>. There was Energy lock on Arc2. 
           The beam energy was stable (fluctuation was less than 0.1MeV). The beam energy correction for the Møller results is not needed.
           </p>
           The final results:  
            <br> Pz=(83.38 +/- 0.14(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13323-13330.pdf">here</a>.
           <br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="20May2009">
    <h3>20 May 2009</h3>
    <p class="legacy-shift-crew">10:30 - 13:00. A.Saha</p>
    <p>
    The beam energy is 2428.74MeV(accel), 590.2MeV(linac), 66.3975MeV(injector). <br>
           Injector angle is 66.9203<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=385, Slit=16.2. Fast raster was <b>ON</b>.      <br>
           Tuning took ~60min. 
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td>  Comments </tr>
           <tr align="right"> <td> 13337-13342 <td> 5 <td> 1 <td> 0.0 <td> 1.033/1.390 <td> 8.0 <td> 78.59+/-0.23 <td> 8.2 <td>  Thr=270mV B.cur=0.7uAmp </tr>
           <tr align="right"> <td> 13343-13347 <td> 4 <td> 1 <td> 0.0 <td> 1.646/1.390 <td> 8.0 <td> 78.14+/-0.17 <td> 0.8 <td>  - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> 78.30+/-0.14 <td> 4.5 <td> For all runs </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13331-13347">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0905_archive/090520133851.html">275055</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090520_chart.png">the plot</a>. There was Energy lock on Hall A PID. 
           The beam energy was stable (fluctuation was less than 0.1MeV). The beam energy correction for the Møller results is not needed.
           </p>
           The final results:  
            <br> Pz=(78.30 +/- 0.14(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13337-13347.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="27May2009">
    <h3>27 May 2009</h3>
    <p class="legacy-shift-crew">13:00 - 17:00. A.Saha, R.Michaels, A.Cansomme</p>
    <p>
    The beam energy is 2428.74MeV(accel), 590.2MeV(linac), 66.3975MeV(injector). <br>
           Injector angle is 66.9203<sup>o</sup>, the 1/2 wave plate was <b>IN</b> and <b>OUT</b>. <br>
           Injector Laser attenuation=180, Slit=16.2. Fast raster was <b>ON</b>.       <br>
           Tuning took ~60min. 
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760.<br>
            The target angle is 20.5<sup>o</sup>. The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td>  Comments </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> -   <td> -           <td> -   <td> -            <td> -   <td>  Half Wave Plane = IN </tr>
           <tr align="right"> <td> 13349-13353 <td> 5 <td> 1 <td> 0.0 <td> 1.030/1.399 <td> 8.0 <td> -88.84+/-0.21 <td> 0.24 <td>  Thr=270mV B.cur=0.7uAmp </tr>
           <tr align="right"> <td> 13354-13357 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.397 <td> 8.0 <td> -87.46+/-0.21 <td> 0.21 <td>  - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> -88.15+/-0.15 <td> 1.58 <td> For all runs with HWP=IN</tr>
           <tr align="right"> <td> -           <td> - <td> - <td> -   <td> -           <td> -   <td> -            <td> -   <td>  Half Wave Plane = OUT </tr>
           <tr align="right"> <td> 13358-13361 <td> 4 <td> 1 <td> 0.0 <td> 1.648/1.399 <td> 8.0 <td> 86.95+/-0.20 <td> 0.78 <td>  Thr=270mV B.cur=0.7uAmp </tr>
           <tr align="right"> <td> 13362-13365 <td> 5 <td> 1 <td> 0.0 <td> 1.026/1.397 <td> 8.0 <td> 87.56+/-0.22 <td> 1.01 <td>  - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1 <td> -   <td> - <td> -             <td> 87.23+/-0.15 <td> 1.50 <td>  For all runs with HWP=OUT</tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13349-13372">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0905_archive/090527164218.html">276872</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090527_chart.png">the plot</a>. There was Energy lock on ARC2. 
           The beam energy correction for the Møller results is not needed.
           </p>
           The final results for Half Wave Plane = IN:  
            <br> Pz=(-88.15 +/- 0.15(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13349-13357.pdf">here</a>. 
           <br>
           The final results for Half Wave Plane = OUT:  
            <br> Pz=(+87.23 +/- 0.15(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13358-13365.pdf">here</a>.
    
           <br>
    
           <p>
        </p>
  </section>

</section>
<section class="legacy-experiment">
  <h2>E-05-109: HAPPEX-III. A Measurement of Nucleon Strange Form Factors at High Q2</h2>
  <section class="legacy-shift" id="27August2009">
    <h3>27 August 2009</h3>
    <p class="legacy-shift-crew">17:30 - 23:30. O.Glamazdin</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.4MeV(North Linac), 590.6MeV(South Linac) , 64.125MeV(injector). <br>
           Injector angle is 44.3048<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=72, Slit=19.3. Fast raster was <b>ON</b>.     <br>
           Tuning took ~60min. <br>
           Hall C beam tunning was started from ~20:00. The beam was very unstable (energy, beam position etc) 	
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analysing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13416-13419 <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.392 <td> 8.0 <td> -80.76+/-0.27 <td> 0.5 <td> Thr=300mV B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13421-13427 <td> 5 <td> 2 <td> 0.0 <td> 1.067/1.387 <td> 8.0 <td> -80.58+/-0.28 <td> 8.5 <td> - </tr>
           <tr align="right"> <td> 13428       <td> 5 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -79.41+/-0.34 <td> -   <td> - </tr>
           <tr align="right"> <td> Average     <td> 5 <td> 1,2,3 <td> -   <td> - <td> -         <td> -80.36+/-0.17 <td> 7.6 <td> - </tr>
           <tr align="right"> <td> 13429-13433 <td> 4 <td> 1 <td> 0.0 <td> 1.663/1.382 <td> 8.0 <td> -78.00+/-0.23 <td> 1.0 <td> - </tr>
           <tr align="right"> <td> 13434-13438 <td> 4 <td> 2 <td> 0.0 <td> 1.700/1.387 <td> 8.0 <td> -78.24+/-0.26 <td> 2.1 <td> - </tr>
           <tr align="right"> <td> 13439-13440 <td> 4 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -77.93+/-0.31 <td> -   <td> - </tr>
           <tr align="right"> <td> Average     <td> 4 <td> 1,2,3 <td> -   <td> - <td> -         <td> -78.06+/-0.15 <td> 4.8 <td> - </tr>
           <tr align="right"> <td> Average <td> 5,4   <td> 1,2,3 <td> -   <td> - <td> -         <td> -79.07+/-0.11 <td> 7.1 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13413-13440">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0908_archive/090827235943.html">286377</a>.
           <p>       
           For the beam energy fluctuation see <a href="../plots/090827_chart.png">the plot</a>.  
           The beam energy correction for the Møller results is not needed because of the Wien filter is tuned for the maximal polarization in the Hall A.
           </p>
           The final result:  
            <br> Pz=(-79.07 +/- 0.11(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13416-13440.pdf">here</a>. 
           <br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="28August2009">
    <h3>28 August 2009</h3>
    <p class="legacy-shift-crew">19:10 - 23:50. O.Glamazdin</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.4MeV(North Linac), 590.6MeV(South Linac) , 64.125MeV(injector). <br>
           Injector angle is 44.3048<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=68, Slit=20.5. Fast raster was <b>OFF</b>.      <br>
           Tuning took ~2hours. <br> 	
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13443-13446 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.389 <td> 8.0 <td> -79.24+/-0.25 <td> 1.4 <td> Thr=300mV B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13447       <td> 5 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -80.73+/-0.35 <td> -   <td> - </tr>
           <tr align="right"> <td> Average     <td> 5 <td> 1,3 <td>   -   <td> - <td> -         <td> -79.78+/-0.20 <td> 4.5 <td> - </tr>
           <tr align="right"> <td> 13448-13451 <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.389 <td> 8.0 <td> -77.59+/-0.24 <td> 0.3 <td> B.cur=0.5uAmp </tr>
           <tr align="right"> <td> 13452       <td> 4 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -79.29+/-0.34 <td> - <td> - </tr>
           <tr align="right"> <td> Average     <td> 4 <td> 1,3 <td>   -   <td> - <td> -         <td> -78.16+/-0.20 <td> 4.9 <td> - </tr>
           <tr align="right"> <td> 13453-13457 <td> 3 <td> 1 <td> 0.0 <td> 2.247/1.387 <td> 8.0 <td> -80.18+/-0.21 <td> 2.9 <td> B.cur=0.3uAmp </tr>
           <tr align="right"> <td> 13458       <td> 3 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -78.59+/-0.29 <td> - <td> - </tr>
           <tr align="right"> <td> Average     <td> 3 <td> 1,3 <td>   -   <td> - <td> -         <td> -79.63+/-0.17 <td> 6.7 <td> - </tr>
           <tr align="right"> <td> 13459-13462 <td> 2 <td> 1 <td> 0.0 <td> 2.889/1.385 <td> 8.0 <td> -78.61+/-0.19 <td> 2.0 <td> B.cur=0.2uAmp </tr>
           <tr align="right"> <td> 13463       <td> 2 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -77.55+/-0.25 <td> - <td> - </tr>
           <tr align="right"> <td> Average     <td> 2 <td> 1,3 <td>   -   <td> - <td> -         <td> -78.22+/-0.15 <td> 0.21 <td> - </tr>
           <tr align="right"> <td> Average <td> 2-5   <td> 1,3   <td> -   <td> - <td> -         <td> -78.89+/-0.09 <td> 7.5 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13443-13463">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0908_archive/090829001113.html">286688</a>.<br>
    <!--       <p>   
           For the beam energy fluctuation see <a href="../plots/090828_chart.png">the plot</a>.  <br>
           The beam energy correction for the Møller results is not needed because of the Wien filter is tuned for the maximal polarization in the Hall A.
    -->       </p>
    
           The final result:  
            <br> Pz=(-78.89 +/- 0.09(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13443-13463.pdf">here</a>.
           <br>
    
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="31Aug2009">
    <h3>31 August 2009</h3>
    <p class="legacy-shift-crew">14:50 - 23:50. O.Glamazdin, A.Saha</p>
    <p>
    The beam energy is 3483.9MeV(by M. Tiefenback), 549.4MeV(North Linac), 590.6MeV(South Linac), 64.125MeV(injector). <br>
           Injector angle is 44.3048<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=120, Slit=15.1. Fast raster was <b>ON</b>.
           Tuning took ~1hour. <br>
           <p> 
           <b> SPIN DANCE </b>  
    
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760.
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included</caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Wien Filter <td> Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13467-13470 <td> 5 <td> 1 <td> 0.0 <td> 1.055/1.382 <td> 8.0 <td> 40.30<sup>o</sup>  <td> -80.28+/-0.27 <td> 3.4 <td> Thr=300mV B.cur=0.58uAmp </tr>
           <tr align="right"> <td> 13471-13475 <td> 5 <td> 1 <td> 0.0 <td> 1.055/1.382 <td> 8.0 <td> 110.27<sup>o</sup> <td>  14.11+/-0.25 <td> 0.8 <td> B.cur=0.58uAmp </tr>
           <tr align="right"> <td> 13476-13479 <td> 5 <td> 1 <td> 0.0 <td> 1.055/1.382 <td> 8.0 <td> -70.22<sup>o</sup> <td>  -5.37+/-0.26 <td> 1.9 <td> B.cur=0.57uAmp </tr>
           <tr align="right"> <td> 13480-13483 <td> 5 <td> 1 <td> 0.0 <td> 1.055/1.382 <td> 8.0 <td> 14.20<sup>o</sup>  <td> -89.30+/-0.26 <td> 0.9 <td> B.cur=0.56uAmp </tr>
           <tr align="right"> <td> 13484-13487 <td> 4 <td> 1 <td> 0.0 <td> 1.619/1.389 <td> 8.0 <td> 14.20<sup>o</sup>  <td> -87.88+/-0.25 <td> 0.9 <td> B.cur=0.56uAmp </tr>
           <tr align="right"> <td> 13488-13493 <td> 3 <td> 1 <td> 0.0 <td> 2.249/1.385 <td> 8.0 <td> 14.20<sup>o</sup>  <td> -88.23+/-0.19 <td> 2.2 <td> B.cur=0.36uAmp </tr>
           <tr align="right"> <td> 13494-13497 <td> 2 <td> 1 <td> 0.0 <td> 2.882/1.382 <td> 8.0 <td> 14.20<sup>o</sup>  <td> -89.17+/-0.19 <td> 0.2 <td> B.cur=0.25uAmp </tr>
           <tr align="right"> <td> Average <td> 2,3,4,5 <td> 1 <td> -   <td> - <td> -   <td> 14.20<sup>o</sup>          <td> -88.65+/-0.11 <td> 2.9 <td> All targets </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13465-13497">here</a>.
           <br>
           For additional information see  <a href="http://www.jlab.org/~adaq/halog/html/0908_archive/090831230259.html">halog entry 287270</a>. <br>
           <h3>Spin Dance Results</h3>
           The spin dance result is given  <a href="../plots/spin_dance_090831.png">here</a>. Comparison of the spin dance and prediction for the beam polarization precession 
           for linacs without dis-  balance and with dis-balance 7.5% is given on <a href="../plots/spin_pred_090831.png">plot1</a> for MCC beam energy (Eb=3.4812GeV) and on 
           <a href="../plots/spin_pred_090831_1.png">plot2</a> for Tiefenback beam energy (Eb=3.4839GeV). The linacs dis-balance by MCC definition 
           corresponds (North Linac)/(South Linac).
           The Wien filter angle 14.2&deg; was chosen as an optimal for the Hall A with the beam energy Eb=3.4839GeV (by M. Tiefenback) and linacs dis-balance=7.5%.
           The Wien filter angle 17.&deg; is an optimal for the Hall A with the beam energy Eb=3.4812GeV(by MCC) and linacs dis-balance=7.5%.
           The beam polarization difference between 14.2&deg; and 17&deg; is 0.998682. 
    	<p>
           <h3>More Spin Dance Analysis</h3>
    	More detailed analysis of the Spin Dance results fit show much larger Chi2 for fit with three Wien filter angles 14.2, 44.3048 and 110.27deg (see 
            <a href="../plots/090831_1.png">plot3</a>) than for three Wien filter angles -70.22, 14.2, 44.3048deg (see <a href="../plots/090831_2.png">plot4</a>). 
            For large   Wien filter angles,like 110deg, the beam trajectory is not strait. Because of that measurements with  large Wien filter angles are less 
            trusted for fit and end errors for such angles should be increased. The result of fit with increased error for Wien angle 110.27deg. is given on 
    	<a href="../plots/090831_1.png">plot4</a>. From the more detailed Spin dance analysis (<a href="../plots/090831_2.png">plot4</a> and 
            <a href="../plots/090831_3.png">plot5</a>) the optimal Wien filter angle for the Hall A is ~16.5deg.
    	<p>       
           The final results:  
            <br> Pz=(-88.65 +/- 0.11(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13480-13497.pdf">here</a>.
           <br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="05Sept2009">
    <h3>05 September 2009</h3>
    <p class="legacy-shift-crew">19:05 - 21:40. O.Glamazdin</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.4MeV(North Linac), 590.6MeV(South Linac) , 64.125MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=150, Slit=15. Fast raster was <b>ON</b>.       <br>
           Tuning took ~45minutes. <br> 	
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13502-13505 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -90.47+/-0.26 <td> 0.3 <td> Thr=300mV B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13506-13509 <td> 4 <td> 1 <td> 0.0 <td> 1.614/1.385 <td> 8.0 <td> -89.43+/-0.25 <td> 0.6 <td> B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13510-13513 <td> 3 <td> 1 <td> 0.0 <td> 2.247/1.382 <td> 8.0 <td> -89.41+/-0.23 <td> 0.3 <td> B.cur=0.4uAmp </tr>
           <tr align="right"> <td> 13514-13517 <td> 2 <td> 1 <td> 0.0 <td> 2.886/1.387 <td> 8.0 <td> -89.74+/-0.18 <td> 0.4 <td> B.cur=0.3uAmp </tr>
           <tr align="right"> <td> 13518       <td> 2 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -89.47+/-0.24 <td> -   <td> B.cur=0.3uAmp </tr>
           <tr align="right"> <td> Average     <td> 2 <td> 1,3 <td>   -   <td> - <td> -         <td> -89.64+/-0.14 <td> 0.2 <td> - </tr>
           <tr align="right"> <td> Average <td> 2-5   <td> 1,3   <td> -   <td> - <td> -         <td> -89.69+/-0.10 <td> 1.2 <td> - </tr>
           </table>
           <p>
    	Measurement was done after the Wien filter angle change from 14.2&deg; to 17.2&deg;. <br>
           The table with detailed information is given
           <a href="../tab/run.tab.13502-13518">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0909_archive/090905215926.html">288177</a>.<br>
           <p>
           The final result:  
            <br> Pz=(-89.69 +/- 0.1(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13502-13518.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="11Sept2009">
    <h3>11 September 2009</h3>
    <p class="legacy-shift-crew">20:30 - 22:45. O.Glamazdin</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.4MeV(North Linac), 590.6MeV(South Linac) , 64.125MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=162, Slit=14.8. Fast raster was <b>OFF</b>.      <br>
           Tuning took ~40minutes. <br> 	
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13520-13524 <td> 5 <td> 1 <td> 0.0 <td> 1.016/1.387 <td> 8.0 <td> 89.47+/-0.25 <td> 3.3 <td> Thr=300mV B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13525-13527 <td> 4 <td> 1 <td> 0.0 <td> 1.619/1.387 <td> 8.0 <td> 89.53+/-0.29 <td> 2.3 <td> B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13529-13532 <td> 3 <td> 1 <td> 0.0 <td> 2.249/1.387 <td> 8.0 <td> 90.29+/-0.21 <td> 0.4 <td> B.cur=0.45uAmp </tr>
           <tr align="right"> <td> 13533-13536 <td> 2 <td> 1 <td> 0.0 <td> 2.884/1.382 <td> 8.0 <td> 89.93+/-0.19 <td> 0.2 <td> B.cur=0.26uAmp </tr>
           <tr align="right"> <td> Average <td> 2-5   <td> 1 <td> -   <td> -     <td> -         <td> 89.86+/-0.10 <td> 1.8 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13520-13536">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0909_archive/090911225956.html">289150</a>.
            <p>
           The final result:  
            <br> Pz=(89.86 +/- 0.10(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13520-13536.pdf">here</a>.
           <br>
           <p>       
            Mott: 
             87.75+/-1.0  (IHWP=OUT) <br>
             86.12 +/- 1.28stat +/- 1.03sys (IHWP=OUT)
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1486299">(see ELOG/POLOG)</a> .
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1487290"> (see ELOG/POLOG) .
           </p>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="17Sept2009">
    <h3>17 September 2009</h3>
    <p class="legacy-shift-crew">12:15 - 15:50. O.Glamazdin, A.Saha</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.4MeV(North Linac), 590.6MeV(South Linac) , 64.125MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=140, Slit=15.0. Fast raster was <b>ON</b>.     <br>
           Tuning took 1hour 15minutes. <br> 	
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13541-13542 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.380 <td> 8.0 <td> 88.52+/-0.4 <td> 0.6 <td> Thr=250mV B.cur=0.6uAmp HV=3.484 </tr>
           <tr align="right"> <td> 13543-13544 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.380 <td> 8.0 <td> 88.97+/-0.4 <td> 0.1 <td> Thr=300mV  </tr>
           <tr align="right"> <td> 13541-13544 <td> 5 <td> 1 <td> -   <td> -           <td> -   <td> 88.72+/-0.3 <td> 0.5 <td> HV=3.484.set </tr>
           <tr align="right"> <td> 13546-13547 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.380 <td> 8.0 <td> 89.66+/-0.4 <td> 1.4 <td> Thr=300mV  HV=test_3.484 </tr>
           <tr align="right"> <td> 13548-13549 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.380 <td> 8.0 <td> 89.55+/-0.3 <td> 0.1 <td> Thr=250mV  </tr>
           <tr align="right"> <td> 13546-13549 <td> 5 <td> 1 <td> -   <td> -           <td> -   <td> 89.60+/-0.3 <td> 0.5 <td> HV=test_3.484.set </tr>
           <tr align="right"> <td> 13550-13553 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.380 <td> 8.0 <td> 89.51+/-0.3 <td> 2.6 <td> Thr=300mV HV=3.484 </tr>
           <tr align="right"> <td> Average     <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.380 <td> 8.0 <td> 89.26+/-0.15 <td> 2.6 <td> Thr=300mV    </tr>
           <tr align="right"> <td> 13554-13527 <td> 4 <td> 1 <td> 0.0 <td> 1.612/1.382 <td> 8.0 <td> 87.91+/-0.23 <td> 1.0 <td> B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13558-13561 <td> 3 <td> 1 <td> 0.0 <td> 2.247/1.380 <td> 8.0 <td> 88.24+/-0.23 <td> 0.5 <td> B.cur=0.35uAmp </tr>
           <tr align="right"> <td> 13562-13565 <td> 2 <td> 1 <td> 0.0 <td> 2.889/1.380 <td> 8.0 <td> 88.79+/-0.23 <td> 0.4 <td> B.cur=0.15uAmp </tr>
           <tr align="right"> <td> Average <td> 2-5   <td> 1 <td> -   <td> -     <td> -         <td> 88.73+/-0.10 <td> 2.4 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13541-13565">here </a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0909_archive/090917155746.html">290141</a>.
    	<p>
           The final result:  
            <br> Pz=(88.73 +/- 0.1(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13550-13565.pdf">here</a>.    
           <p>       
            Mott: 
             84.21 +/- 2.01stat +/- 1.01sys  (IHWP=OUT, after beam spot move)
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1487293">(see ELOG/POLOG)</a>
           </p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="23Sept2009">
    <h3>23 September 2009</h3>
    <p class="legacy-shift-crew">16:30 - 19:50. O.Glamazdin, A.Saha</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.6MeV(North Linac), 590.6MeV(South Linac) , 64.08MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=190, Slit=15. Fast raster was <b>ON</b>.       <br>
           Tuning took 1hour 30minutes. <br> 	
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13566-13569 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -90.48+/-0.23 <td> 0.1 <td> Thr=300mV B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13570-13573 <td> 4 <td> 1 <td> 0.0 <td> 1.617/1.382 <td> 8.0 <td> -88.45+/-0.24 <td> 1.0 <td> B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13574-13577 <td> 3 <td> 1 <td> 0.0 <td> 2.249/1.385 <td> 8.0 <td> -88.76+/-0.24 <td> 0.6 <td> B.cur=0.45uAmp </tr>
           <tr align="right"> <td> 13578-13581 <td> 2 <td> 1 <td> 0.0 <td> 2.891/1.380 <td> 8.0 <td> -89.43+/-0.19 <td> 1.7 <td> B.cur=0.26uAmp </tr>
           <tr align="right"> <td> 13582       <td> 2 <td> 3 <td> 0.0 <td> -           <td> 8.0 <td> -89.83+/-0.23 <td> -   <td> B.cur=0.26uAmp </tr>
           <tr align="right"> <td> Average <td> 2-5   <td> 1,3 <td> - <td> -           <td> 8.0 <td> -89.41+/-0.10 <td> 4.7 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13566-13582">here</a>.       <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0909_archive/090923200427.html">291216</a>.
            <p>
           The final result:  
            <br> Pz=(-89.41 +/- 0.1(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13566-13582.pdf">here</a>.
           <p>       
            Mott: (IHWP=IN)
             86.63 +/- 0.93stat +/- 1.04sys
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1489600&PHPSESSID=348d8e13e3a8b96694a210fa8478d5b3">(see ELOG/POLOG)</a>
           </p>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="04Oct2009">
    <h3>04 October 2009</h3>
    <p class="legacy-shift-crew">8:45 - 14:20. O.Glamazdin</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.6MeV(North Linac), 590.6MeV(South Linac) , 64.08MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=156, Slit=15. Fast raster was <b>ON</b>. <br>
           Beam tuning took 1hour 45minutes. <br> 	
           Møller detector tuning took 45min. <br>
           Brad Sawatzky took some data for the fast Møller DAQ. <br>
           Beam spot moving and Mott measurement was done 09/29/2009. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13588-13602 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -90.22+/-0.2 <td> 3.1 <td> HV and threshold tuning B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 13603-13606 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -90.16+/-0.28 <td> 0.1 <td> Thr=370mV  Att=156 Slit=15 </tr>
           <tr align="right"> <td> 13607-13610 <td> 4 <td> 1 <td> 0.0 <td> 1.617/1.382 <td> 8.0 <td> -88.61+/-0.20 <td> 0.9 <td> B.cur=0.6uAmp Slit=15 </tr>
           <tr align="right"> <td> 13611-13614 <td> 3 <td> 1 <td> 0.0 <td> 2.249/1.385 <td> 8.0 <td> -90.00+/-0.24 <td> 1.8 <td> B.cur=0.42uAmp Slit=14.1</tr>
           <tr align="right"> <td> 13617-13621 <td> 2 <td> 1 <td> 0.0 <td> 2.891/1.380 <td> 8.0 <td> -89.55+/-0.16 <td> 1.5 <td> B.cur=0.22uAmp Slit=13.8</tr>
           <tr align="right"> <td> 13622-13623 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -89.64+/-0.29 <td> 0.1 <td> B.cur=0.6uAmp Att.=156 Slit=14.8</tr>
           <tr align="right"> <td> 13625       <td> 5 <td> 1 <td> 0.0 <td> -           <td> 8.0 <td>  0.0          <td> -   <td> bleed-through </tr>
           <tr align="right"> <td> 13629-13632 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -89.58+/-0.29 <td> 0.1 <td> B.cur=0.45uAmp Att=100 Slit=17.6 </tr>
           <tr align="right"> <td> Average   <td>   5 <td> 1 <td> -   <td> -           <td> 8.0 <td> -89.98+/-0.15 <td> 0.5 <td> - </tr>
           <tr align="right"> <td> Average   <td> 2-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> -89.45+/-0.09 <td> 2.8 <td> Runs 13603-13623 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13588-13632">here</a>. <br>
           <br>
           Møller detector adjustment was done 09/29/09 - see halog entry <a href="http://www.jlab.org/~adaq/halog/html/0909_archive/090929195318.html">292319</a>. 
           Runs 13588-13602 - adjusting of detector HVs and thresholds.
           Run 13625 - bleed-through check. There is no any leak from another halls to the Hall A was found. <br>
           Runs 13603-13625 Hall A laser attenuator=156 (HAPPEX value), Slit=13.8 <br>
           Runs 13629-13632 Hall A laser attenuator=100, Slit=17.6 <br>
           There is no any dependence of Slit/Attenuator combination on the Hall A beam polarization was found. <br>
           Hall A laser phase profile measurement was done by PES group see POLOG entry  
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1490156">1490156</a>. All Møller measurements were done at the same 
           Hall A laser phase with HAPPEX one. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091004142735.html">293093</a>. <br>
            <p>
           The final result:  
            <br> Pz=(-89.45 +/- 0.09(stat) +/- 1.7(syst))% <br>
           The plot (scaler analysis) is given
           <a href="../plots/runs.13603-13623.pdf">here</a>.
           <br>
           The plot with old (ADC) analysis is given
           <a href="../plots/runs.13603-13623_old.pdf">here</a>.
           <p>       
            Mott: (IHWP=IN)
             84.08 +/- 1.01stat +/- 1.01sys
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1489600&PHPSESSID=348d8e13e3a8b96694a210fa8478d5b3">(see ELOG/POLOG)</a>
           </p>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="11Oct2009">
    <h3>11 October 2009</h3>
    <p class="legacy-shift-crew">9:50 - 13:10. O.Glamazdin</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.6MeV(North Linac), 590.6MeV(South Linac) , 64.08MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=194, Slit=14.53. Fast raster was <b>ON</b>. <br>
           Beam tuning took 1hour 10minutes. <br> 	
           In the begining of the measurements scalers rate was very unstable (from 17kHz upto 26kHz for the same beam current). <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13634-13637 <td> 5 <td> 1 <td> 0.0 <td> 1.011/1.385 <td> 8.0 <td> 89.36+/-0.2 <td> 1.8 <td> Thr=320mV B.cur=0.6uAmp Att=194 Slit=14.53 </tr>
           <tr align="right"> <td> 13638-13641 <td> 4 <td> 1 <td> 0.0 <td> 1.617/1.380 <td> 8.0 <td> 87.79+/-0.22 <td> 2.2 <td> B.cur=0.52uAmp Slit=14.23 </tr>
           <tr align="right"> <td> 13642-13645 <td> 3 <td> 1 <td> 0.0 <td> 2.249/1.385 <td> 8.0 <td> 88.98+/-0.23 <td> 0.1 <td> B.cur=0.32uAmp Slit=13.87</tr>
           <tr align="right"> <td> 13646-13649 <td> 2 <td> 1 <td> 0.0 <td> 2.886/1.380 <td> 8.0 <td> 89.00+/-0.18 <td> 0.8 <td> B.cur=0.22uAmp Slit=13.75</tr>
           <tr align="right"> <td> 13650-13651 <td> 5 <td> 1 <td> 0.0 <td> 1.011/1.385 <td> 8.0 <td> 89.85+/-0.30 <td> 0.1 <td> B.cur=0.6uAmp Slit=14.53</tr>
           <tr align="right"> <td> Average     <td> 5 <td> 1 <td> 0.0 <td> -           <td> 8.0 <td> 89.63+/-0.17 <td> 0.1 <td> - </tr>
           <tr align="right"> <td> 13652-13655 <td> 5 <td> 1 <td> 0.0 <td> 1.011/1.385 <td> 8.0 <td> 92.21+/-0.30 <td> 0.4 <td> LGL234 and LGR678 </tr>
           <tr align="right"> <td> Average   <td> 2-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> 88.92+/-0.10 <td> 3.4 <td> Runs 13634-13651 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13634-13655">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091011132110.html">294406</a>. <br>
            <p>
           The final result:  
            <br> Pz=(88.92 +/- 0.10(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13634-13651.pdf">here</a>.
           <br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="13Oct2009">
    <h3>13 October 2009</h3>
    <p class="legacy-shift-crew">12:00 - 18:50. O. Glamazdin, A, Saha, Chun-Min Jen (Mindy)</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.6MeV(North Linac), 590.6MeV(South Linac) , 64.08MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=165, Slit=14.20. Fast raster was <b>ON</b>. <br>
           12 October beam spot move was done. There was no Mott measurement. 
           Beam tuning took more than 2hours. <br> 	
           In the beginning of measurements single arm scalers rate was very unstable (runs 13657-1366). The reason is very narrow slit to reduce the beam
           current from 100uAmp(HAPPEX) to 0.5uAmp(Møller) at the same attenuator. After discussion with MCC crew chief we have change attenuator from 165 
           to 85 and adjust current with slit. Single arm rates becomes stable and reasonable.  <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13661-13666 <td> 5 <td> 1 <td> 0.0 <td> 1.011/1.380 <td> 8.0 <td> -88.60+/-0.3 <td> 5.0 <td> Thr=320mV B.cur=0.6uAmp Att=165 Slit=14.2 </tr>
           <tr align="right"> <td> 13668-13671 <td> 4 <td> 1 <td> 0.0 <td> 1.615/1.385 <td> 8.0 <td> -88.10+/-0.27 <td> 0.4 <td> B.cur=0.5uAmp Att=85 Slit=16.0 </tr>
           <tr align="right"> <td> 13672-13675 <td> 3 <td> 1 <td> 0.0 <td> 2.249/1.382 <td> 8.0 <td> -88.35+/-0.26 <td> 4.0 <td> B.cur=0.3uAmp Att=85 Slit=15.6</tr>
           <tr align="right"> <td> 13676-13679 <td> 2 <td> 1 <td> 0.0 <td> 2.884/1.385 <td> 8.0 <td> -89.43+/-0.19 <td> 3.0 <td> B.cur=0.2uAmp Att=82 Slit=15.4</tr>
           <tr align="right"> <td> 13681-13685 <td> 5 <td> 1 <td> 0.0 <td> 1.065/1.380 <td> 8.0 <td> -88.73+/-0.17 <td> 1.9 <td> B.cur=0.6uAmp Att=82 Slit=16.2</tr>
           <tr align="right"> <td> 13686-13689 <td> 5 <td> 1 <td> 0.0 <td> 1.065/1.380 <td> 8.0 <td> -91.67+/-0.3 <td> 3.1 <td> LGL234 and LGR678 </tr>
           <tr align="right"> <td> Average   <td> 2-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> -88.79+/-0.11 <td> 4.5 <td> Runs 13668-13685 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13657-13689">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091013185652.html">294760</a>. <br>
            <p>
           The final result:  
            <br> Pz=(-88.79 +/- 0.11(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13668-13685.pdf">here</a>.
           <br>
             MOTT: <br>
             Hall A: IHWP=IN, Mott Data Taken: 16Oct09 08:36:28, Polarization: (86.38 +/- 0.92stat +/- 1.04sys) % <br>
             Hall A: IHWP=OUT, Mott Data Taken: 16Oct09 08:43:48, Polarization: (85.62 +/- 0.87stat +/- 1.03sys) % <br>
             Mott: (IHWP=IN)  86.38 +/- 0.92stat +/- 1.04sys
            <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1492743">(see POLOG/ELOG)</a>
           </p>
    
    
          <p>
    
           </p>
  </section>

  <section class="legacy-shift" id="23Oct2009">
    <h3>22-23 October 2009</h3>
    <p class="legacy-shift-crew">20:20 - 4:15. O. Glamazdin, B. Sawatzky</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.6MeV(North Linac), 590.6MeV(South Linac) , 64.08MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=165, Slit=14.68. Phase=163.8deg. Fast raster was <b>OFF</b>. <br>
           Detector thresholds=300mV. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included.   <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13699-13702 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -89.72+/-0.2 <td> 1.5 <td> B.cur=0.65uAmp Att=165 Slit=14.68 </tr>
           <tr align="right"> <td> 13703-13706 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -89.80+/-0.2 <td> 0.2 <td> B.cur=0.6uAmp Att=120 Slit=15.94 </tr>
           <tr align="right"> <td> 13707-13710 <td> 4 <td> 1 <td> 0.0 <td> 1.614/1.387 <td> 8.0 <td> -89.88+/-0.24 <td> 2.6 <td> B.cur=0.6uAmp Att=120 Slit=15.91 </tr>
           <tr align="right"> <td> 13711-13714 <td> 3 <td> 1 <td> 0.0 <td> 2.244/1.385 <td> 8.0 <td> -88.60+/-0.23 <td> 0.7 <td> B.cur=0.3uAmp Att=120 Slit=15.50</tr>
           <tr align="right"> <td> 13715-13718 <td> 2 <td> 1 <td> 0.0 <td> 2.884/1.387 <td> 8.0 <td> -89.60+/-0.20 <td> 4.0 <td> B.cur=0.2uAmp Att=120 Slit=14.67</tr>
           <tr align="right"> <td> 13719       <td> 3 <td> 3 <td> 0.0 <td> 2.244/1.385 <td> 8.0 <td> -88.31+/-0.4 <td> -   <td> B.cur=0.3uAmp Att=120 Slit=15.50</tr>
           <tr align="right"> <td> 13720-13723 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.71+/-0.14 <td> 4.8 <td> B.cur=0.65uAmp Att=120 Slit=15.84</tr>
           <tr align="right"> <td> 13724-13730 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -91.61+/-0.3 <td> 1.1 <td> LGL234 and LGR678 </tr>
           <tr align="right"> <td> 13731-13761 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -            <td> -   <td> Phase scan Att=120 Slit=15.84</tr>
           <tr align="right"> <td> 13731       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -88.45+/-1.2 <td> -   <td> Phase=-148deg B.cur=0.60uAmp </tr>
           <tr align="right"> <td> 13732       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-148deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13733       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.55+/-1.2 <td> -   <td> Phase=-150deg B.cur=0.65uAmp </tr>
           <tr align="right"> <td> 13734       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -87.11+/-1.2 <td> -   <td> Phase=-152deg B.cur=0.65uAmp </tr>
           <tr align="right"> <td> 13735       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -88.81+/-1.2 <td> -   <td> Phase=-154deg B.cur=0.65uAmp </tr>
           <tr align="right"> <td> 13736       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -91.83+/-1.2 <td> -   <td> Phase=-156deg B.cur=0.66uAmp </tr>
           <tr align="right"> <td> 13737       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -90.87+/-1.2 <td> -   <td> Phase=-158deg B.cur=0.65uAmp </tr>
           <tr align="right"> <td> 13738       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -90.41+/-1.2 <td> -   <td> Phase=-160deg B.cur=0.64uAmp </tr>
           <tr align="right"> <td> 13739       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -84.90+/-1.2 <td> -   <td> Phase=-162deg B.cur=0.63uAmp </tr>
           <tr align="right"> <td> 13740       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -86.77+/-1.2 <td> -   <td> Phase=-164deg B.cur=0.63uAmp </tr>
           <tr align="right"> <td> 13741       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.68+/-1.2 <td> -   <td> Phase=-166deg B.cur=0.60uAmp </tr>
           <tr align="right"> <td> 13742       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -88.94+/-1.3 <td> -   <td> Phase=-168deg B.cur=0.57uAmp </tr>
           <tr align="right"> <td> 13743       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -91.06+/-1.3 <td> -   <td> Phase=-170deg B.cur=0.51uAmp </tr>
           <tr align="right"> <td> 13744       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.55+/-1.4 <td> -   <td> Phase=-172deg B.cur=0.48uAmp </tr>
           <tr align="right"> <td> 13745       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -86.73+/-1.5 <td> -   <td> Phase=-174deg B.cur=0.39uAmp </tr>
           <tr align="right"> <td> 13746       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.45+/-1.7 <td> -   <td> Phase=-176deg B.cur=0.31uAmp </tr>
           <tr align="right"> <td> 13747       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-176deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13748       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-178deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13749       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -93.75+/-2.1 <td> -   <td> Phase=-178deg B.cur=0.22uAmp </tr>
           <tr align="right"> <td> 13750       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -88.58+/-3.5 <td> -   <td> Phase=-180deg B.cur=0.09uAmp </tr>
           <tr align="right"> <td> 13751       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-180deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13752       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-174deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13753       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-172deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13754       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -86.47+/-1.7 <td> -   <td> Phase=-148deg B.cur=0.61uAmp </tr>
           <tr align="right"> <td> 13755       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -90.77+/-1.2 <td> -   <td> Phase=-148deg B.cur=0.60uAmp </tr>
           <tr align="right"> <td> 13756       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -91.95+/-1.3 <td> -   <td> Phase=-146deg B.cur=0.49uAmp </tr>
           <tr align="right"> <td> 13757       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-146deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13758       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-144deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13759       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -92.08+/-1.8 <td> -   <td> Phase=-144deg B.cur=0.31uAmp </tr>
           <tr align="right"> <td> 13760       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -83.88+/-2.7 <td> -   <td> Phase=-142deg B.cur=0.14uAmp </tr>
           <tr align="right"> <td> 13761       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>   0          <td> -   <td> Phase=-142deg Hall A laser OFF </tr>
           <tr align="right"> <td> 13762-13765 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.81+/-0.3 <td> 1.2 <td> Att=165 Slit=14.6 Phase=-174</tr>
           <tr align="right"> <td> 13766-13770 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.81+/-0.4 <td> 1.6 <td> Att=165 Slit=14.6 Phase=-144</tr>
           <tr align="right"> <td> Average   <td> 2-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> -89.49+/-0.09 <td> 2.9 <td> Runs 13703-13718 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13697-13770">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091023044052.html">296214</a>. <br>
           Measurement was done after power outage (22 October) <br>
           After the last Møller measurement Møller dipole was not turned OFF for about a day. Experiment was running with 100uAmp of a beam current 
           (see <a href="http://devlnxsrv.acc.jlab.org/CSUEApps/elog/entry/1492459">ELOG</a>). Møller detector signals looks OK after the incident. <br>
           16 October: MCC Møller procedure was updated. <br>
           Bad/noisy shape of a leading adge of MPS signal going from Counting Room to Møller DAQ was found 
           (see <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091021181727.html">296017</a>). As the result, Møller DAQ marks as 'bad' a part of good 
           Møller events and moves it out of analysis reducing statistics. It does not affect measured polarization value  
           (see <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091029143656.html">296908</a>). <br>
           Hall A laser beam phase dependence study was done. <br>   
           <p>
           The final result:  
            <br> Pz=(-89.49 +/- 0.09(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13703-13718.pdf">here</a>.
           <br>
    
          <p>
           </p>
  </section>

  <section class="legacy-shift" id="25Oct2009">
    <h3>25 October 2009</h3>
    <p class="legacy-shift-crew">9:45 - 13:45. O. Glamazdin, Chun-Min Jen (Mindy)</p>
    <p>
    The beam energy is 3483.9MeV(accel), 549.6MeV(North Linac), 590.6MeV(South Linac) , 64.08MeV(injector). <br>
           Injector angle is 17.20<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=165. Phase=163.8deg. Fast raster was <b>ON</b>. <br>
           Detector thresholds=300mV. <br> 
           Beam tuning took about 2 hours. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.760. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included.   <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13774-13775 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -88.91+/-0.4 <td> 2.3 <td> B.cur=0.8uAmp Att=165 Slit=15.70 </tr>
           <tr align="right"> <td> 13776-13779 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.385 <td> 8.0 <td> -88.95+/-0.3 <td> 4.9 <td> B.cur=0.6uAmp Att=120 Slit=15.45 </tr>
           <tr align="right"> <td> 13780-13789 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -            <td> -   <td> Phase scan Att=165 Slit=15.45</tr>
           <tr align="right"> <td> -           <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>  0           <td> -   <td> Phase=-135deg Bcur=0.0uAmp </tr>
           <tr align="right"> <td> 13780       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -55.50+/-5.7 <td> -   <td> Phase=-140deg Bcur=0.28uAmp  </tr>
           <tr align="right"> <td> 13781       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -84.32+/-1.4 <td> -   <td> Phase=-150deg Bcur=0.77uAmp  </tr>
           <tr align="right"> <td> 13782       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -90.52+/-1.1 <td> -   <td> Phase=-155deg Bcur=0.76uAmp  </tr>
           <tr align="right"> <td> 13783       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -87.92+/-1.1 <td> -   <td> Phase=-160deg Bcur=0.74uAmp  </tr>
           <tr align="right"> <td> 13784       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -93.22+/-1.2 <td> -   <td> Phase=-165deg Bcur=0.61uAmp  </tr>
           <tr align="right"> <td> 13785       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -93.25+/-1.5 <td> -   <td> Phase=-170deg Bcur=0.38uAmp  </tr>
           <tr align="right"> <td> 13786       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -92.20+/-2.2 <td> -   <td> Phase=-175deg Bcur=0.18uAmp  </tr>
           <tr align="right"> <td> 13787       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -55.99+/-7.6 <td> -   <td> Phase=-180deg Bcur=0.04uAmp  </tr>
           <tr align="right"> <td> 13788       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -79.68+/-2.2 <td> -   <td> Phase=-140deg Bcur=0.28uAmp  </tr>
           <tr align="right"> <td> 13789       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -95.29+/-2.2 <td> -   <td> Phase=-175deg Bcur=0.21uAmp  </tr>
           <tr align="right"> <td> -           <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>  0           <td> -   <td> Phase=-185deg Bcur=0.00uAmp  </tr>
           <tr align="right"> <td> 13790-13794 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.17+/-0.3 <td> 1.1 <td> Att=100 Slit=23.7 Phase=-163.8</tr>
           <tr align="right"> <td> 13796-13800 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -            <td> -   <td> Phase scan Att=100 Slit=23.7 </tr>
           <tr align="right"> <td> -           <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>  0           <td> -   <td> Phase=-175deg Bcur=0.0uAmp   </tr>
           <tr align="right"> <td> -           <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td>  0           <td> -   <td> Phase=-170deg Bcur=0.0uAmp   </tr>
           <tr align="right"> <td> 13796       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -79.08+/-6.2 <td> -   <td> Phase=-168deg Bcur=0.10uAmp  </tr>
           <tr align="right"> <td> 13797       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -87.07+/-5.6 <td> -   <td> Phase=-166deg Bcur=0.26uAmp  </tr>
           <tr align="right"> <td> 13798       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -91.12+/-2.6 <td> -   <td> Phase=-164deg Bcur=0.53uAmp  </tr>
           <tr align="right"> <td> 13799       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -92.02+/-1.9 <td> -   <td> Phase=-162deg Bcur=1.09uAmp  </tr>
           <tr align="right"> <td> 13800       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -88.94+/-1.5 <td> -   <td> Phase=-160deg Bcur=1.73uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-158deg Bcur=2.30uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-156deg Bcur=3.42uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-154deg Bcur=4.20uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-152deg Bcur=4.80uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-150deg Bcur=4.95uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-148deg Bcur=4.98uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-146deg Bcur=4.71uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-144deg Bcur=4.29uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-142deg Bcur=3.73uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-140deg Bcur=2.55uAmp  </tr>
           <tr align="right"> <td> -           <td> - <td> - <td> 0.0 <td> -           <td> -   <td> -            <td> -   <td> Phase=-138deg Bcur=1.41uAmp  </tr>
           <tr align="right"> <td> 13801       <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.63+/-1.3 <td> -   <td> Phase=-136deg Bcur=0.49uAmp  </tr>
           <tr align="right"> <td> 13801-13806 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.385 <td> 8.0 <td> -89.24+/-1.0 <td> -   <td> Att=100 Slit=23.7 Phase=-136</tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13774-13806">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091025135141.html">296619</a>. <br>
        </p>
  </section>

</section>
<section class="legacy-experiment">
  <h2>PVDIS E-08-011: Parity Violation in Deep Elastic Scattering</h2>
27 October: Noisy MPS signal from Counting House to Møller DAQ is fixed 
       (see <a href="http://www.jlab.org/~adaq/halog/html/0910_archive/091028104106.html">296869</a>). <br>
       03 November: new Helicity Board was installed on injector 
       (see <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1496411">POLOG</a>). <br>
       MPS, QRT, HEL signals after the Helicity board change are shown in 
      <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091103210837.html">297039</a>. <br>

     <p>
  <section class="legacy-shift" id="04Nov2009">
    <h3>04 November 2009</h3>
    <p class="legacy-shift-crew">6:25 - 8:20. O. Glamazdin</p>
    <p>
    The beam energy is 6063.7MeV(accel), 600.0MeV(both Linacs), 67.MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=65, Slit=19.5. Hall A laser phase=-157.3<sup>o</sup>. Fast raster was <b>OFF</b>. <br>
           Beam tuning took 1 hour. <br>
           The measurements prove that it is possible to set Møller settings together with Compton chicane settings at the beam 
           energy 6.068GeV. Beam position was good and stable. <br>
           Two different Møller dipole settings were tested: 388Amp(MCC) and 412Amp(an optimal Møller setting). Møller dipole 
           shielding insertion still is not fully saturated. <br>
           Møller DAQ looks OK after helicity board change and MPS signal adjustment. <br>
           Polarization prediction for Hall A (black color curve) and Hall B (red color curve) vs Wien filter angle is shown on the 
           <a href="../plots/spin_pr.png">plot</a>. The prediction is done for Half-Wave Plate OUT, linac energy 600MeV, 5 passes 
           for Hall A/B, and old helicity convention. From the plot the beam polarization in Hall A should be positive. Beam 
           polarization measurement with Møller polarimeter and old helicity convention gives positive sign of the beam polarization. 
           It shows that the helicity convention after helicity board change is the same as it was before. <br>
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-14<sup>o</sup>! and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included <br> </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td>  Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13819-13822 <td> 5 <td> 1 <td> 0.0 <td> 1.011/1.380 <td> 8.0 <td> 85.09+/-0.35 <td> 2.4 <td> Thr=300mV B.cur=0.5uAmp  </tr>
           <tr align="right"> <td> 13823-13824 <td> 4 <td> 1 <td> 0.0 <td> 1.617/1.385 <td> 8.0 <td> 81.27+/-0.41 <td> 1.4 <td> B.cur=0.4uAmp  </tr>
           <tr align="right"> <td> Average   <td> 4-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> 83.48+/-0.27 <td> 11. <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13815-13824">here</a>. <br>
           Runs 13815-13818 - HV tunning. Møller dipole current was 388Amp (MCC setting). <br>
           Runs 13819-13824 - Møller dipole current was 412Amp (optimal Møller setting). <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091104093143.html">294359</a>. <br>
            <p>
           The final result:  
            <br> Pz=(83.48 +/- 0.27(stat) +/- 1.7(syst))% <br>
           The plot is given
           <a href="../plots/runs.13819-13824.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="06Nov2009">
    <h3>06 November 2009</h3>
    <p class="legacy-shift-crew">O. Glamazdin</p>
    <p>
    Beam charge asymmetry test. <br>
           The test was done in parallel with HRS and Compton
           Runs 13825-13830. <br>
           Beam current 7microA <br>
           Config: test_LED <br>
           Trigger: 13825-13826: LEDsetcoda2<br>
                    13827-13830: MPC_LED<br>
           The Møller result is shown on <a href="../plots/charge_asym.png">plot</a>. <br>
           The Møller Log Book scan is given <a href="../plots/moller_log_091106.pdf">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091106134704.html">297779</a>. <br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="06Nov2009">
    <h3>06 November 2009</h3>
    <p class="legacy-shift-crew">18:00 - 21:40. O. Glamazdin</p>
    <p>
    The beam energy is 6067.45MeV(accel), 600.0MeV(Linac), 67.5MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=60, Slit=20.5. Fast raster was <b>ON</b>. <br>
           Beam tuning took 40 minutes. <br>
           Beam orbit was perfect (see <a href="../plots/moller_bpm13838.png">plot</a>). <br>
           There was no an energy lock for runs 13831-13847 and 13855-13858. <br>
           There was an energy lock in ARC2 in runs 13848-13851 (see <a href="../plots/091106_HALLAp.png">plot</a>). <br> 
           Runs 13825-13830 are LED runs for a beam charge asymmetry test 
           (see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091106095520.html">297779</a>). <br>
           Dependence of the beam current of slit parameter at the same laser phase and attenuator was measured and it is shown on a 
           <a href="http://www.jlab.org/~moller/plots/slitvsbcur.pdf">plot</a>. <br>
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included. <br> 
            Cor.Pol - Polarization corrected on the beam polarization precession due to the beam energy fluctuation in Hall A(HALLA:p) 
           (see <a href="http://www.jlab.org/~moller/spin_dance.html">here</a>) </caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Cor.Pol. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13831-13835 <td> 5 <td> 1 <td> 0.0 <td> 1.009/1.392 <td> 8.0 <td> 88.60+/-0.22<td>0.5<td> 88.59<td>1.3<td> B.cur=0.75uAmp Att=60 Slit=20.5 </tr>
           <tr align="right"> <td> 13836-13839 <td> 4 <td> 1 <td> 0.0 <td> 1.614/1.387 <td> 8.0 <td> 86.72+/-0.24<td>3.5<td> 86.88<td>3.6<td> B.cur=0.7uAmp Att=60 Slit=20.5 </tr>
           <tr align="right"> <td> 13840-13843 <td> 3 <td> 1 <td> 0.0 <td> 2.247/1.382 <td> 8.0 <td> 87.29+/-0.21<td>0.2<td> 87.26<td>0.2<td> B.cur=0.5uAmp Att=60 Slit=15.3</tr>
           <tr align="right"> <td> 13844-13847 <td> 2 <td> 1 <td> 0.0 <td> 2.879/1.385 <td> 8.0 <td> 87.86+/-0.19<td>0.7<td> 87.80<td>0.7<td> B.cur=0.3uAmp Att=60 Slit=18.1</tr>
           <tr align="right"> <td> 13848-13851 <td> 5 <td> 1 <td> 0.0 <td> 1.057/1.387 <td> 8.0 <td> 87.13+/-0.23<td>0.7<td> 89.59<td>0.7<td> B.cur=1.1uAmp Att=68 Slit=17.85</tr>
           <tr align="right"> <td> 13855-13858 <td> 4 <td> 1 <td> 0.0 <td> 1.614/1.387 <td> 8.0 <td> 86.16+/-0.22<td>1.1<td> 86.59<td>2.7<td> B.cur=0.95uAmp Att=68 Slit=17.85 </tr>
           <tr align="right"> <td> Average     <td> 4-5 <td> 1 <td> -   <td> -         <td> 8.0 <td> 87.16+/-0.16<td>4.6<td> 87.90<td>4.5<td> Runs 13831-13839 </tr>
           <tr align="right"> <td> Average     <td> 2-5 <td> 1 <td> -   <td> -         <td> 8.0 <td> 87.33+/-0.09<td>2.5<td> 87.76<td>3.1<td> Runs 13831-13847 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13831-13858">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091106220110.html">297889</a>. <br>
            <p>
           The final result:  
            <br> Pz=(87.75 +/- 0.1(stat) +/- 2.0(syst))% <br>
           The plot is given
           <a href="../plots/runs.13831-13847_1.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="12Nov2009">
    <h3>12 November 2009</h3>
    <p class="legacy-shift-crew">9:00 - 11:30. O. Glamazdin, A.Saha, FADC team</p>
    <p>
    The beam energy is 6067.45MeV(accel), 595.97/603.21(North/South Linacs), 67.8MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=137, Slit=16.02. Fast raster was <b>ON</b>. <br>
           Beam tuning took 1hour. <br>
           Beam position was unstable (see <a href="../plots/091112_xy.png">plot</a>). <br>
           There was an energy lock in ARC2 (see <a href="../plots/091112_HALLAp.png">plot</a> and <a href="../plots/091112_hallap.png">plot</a>). <br> 
           At 11am MCC change parameters of ARC2 energy lock ('increase sumpling' from Crew chieff words). <br>
           For the beam energy parameters in the accelerator see see <a href="../plots/091112_bem.png">plot</a>. <br>
           Beam current was 1uAmp to use ARC2 energy lock. Due to that the beam polarization was measured with targets 4 and 5 only. <br>
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included. <br> 
            Cor.Pol -  Polarization corrected on the beam polarization precession due to the beam energy fluctuation in Hall A(HALLA:p) 
            (see <a href="http://www.jlab.org/~moller/spin_dance.html">here</a>) </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Cor.Pol. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13860-13865 <td> 5 <td> 1 <td> 0.0 <td> 1.006/1.380 <td> 8.0 <td> 90.58+/-0.18<td>0.9<td> 89.64<td>1.3<td> Thr=300mV </tr>
           <tr align="right"> <td> 13866-13871 <td> 4 <td> 1 <td> 0.0 <td> 1.612/1.389 <td> 8.0 <td> 87.62+/-0.17<td>0.7<td> 86.72<td>3.6<td> - </tr>
           <tr align="right"> <td> 13872-13875 <td> 5 <td> 1 <td> 0.0 <td> 1.060/1.382 <td> 8.0 <td> 89.34+/-0.23<td>0.8<td> 88.36<td>1.3<td> - </tr>
           <tr align="right"> <td> Average     <td> 4-5 <td> 1 <td> -   <td> -         <td> 8.0 <td> 89.10+/-0.10<td>13 <td> 88.17<td>10 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13859-13875">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091112121830.html">299208</a>. <br>
            <p>
           The final result:  
            <br> Pz=(88.17 +/- 0.10(stat) +/- 2.0(syst))% <br>
           The plots with raw data and energy correction are given on 
           <a href="../plots/runs.13860-13871.pdf">plot1</a> and <a href="../plots/runs.13860-13875_1.pdf">plot2</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="17Nov2009">
    <h3>17 November 2009</h3>
    <p class="legacy-shift-crew">10:30 - 19:00. O. Glamazdin, A.Saha, FADC team</p>
    <p>
    The beam energy is 6067.45MeV(accel), 595.97/603.21(North/South Linacs), 67.75MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=158, Slit=16.39. Fast raster was <b>ON</b>. <br>
           IOCHLA was frosen. After many reboots the Møller target contlol comes back.
           There was an energy lock in ARC2 (see <a href="../plots/091117_hallap.png">plot</a>). <br> 
           For the beam energy parameters in the accelerator see see <a href="../plots/091117_bem.png">plot</a>. <br>
           Beam current was 1uAmp to use ARC2 energy lock. Due to that the beam polarization was measured with targets 4 and 5 only. <br>
           Runs 13876-13882 - no target due to iochla crush.
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. <br> 
            The error is statistical only. BPM01Y position is included. <br> 
            Cor.Pol -  Polarization corrected on the beam polarization precession due to the beam energy fluctuation in Hall A(HALLA:p) 
            (see <a href="http://www.jlab.org/~moller/spin_dance.html">here</a>) </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Cor.Pol. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13883-13888 <td> 5 <td> 1 <td> 0.0 <td> 1.006/1.389 <td> 8.0 <td> -90.71+/-0.18<td>0.4<td> -89.43<td>0.4<td> Thr=300mV </tr>
           <tr align="right"> <td> 13889-13894 <td> 4 <td> 1 <td> 0.0 <td> 1.607/1.385 <td> 8.0 <td> -88.27+/-0.17<td>0.3<td> -88.11<td>0.3<td> - </tr>
           <tr align="right"> <td> Average     <td> 4-5 <td> 1 <td> -   <td> -         <td> 8.0 <td> -89.42+/-0.12<td>9. <td> -88.73<td>9 <td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13883-13894">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091117185522.html">300591</a>. <br>
            <p>
           The final result:  
            <br> Pz=(-88.73 +/- 0.12(stat) +/- 2.0(syst))% <br>
           The plot with raw data is given 
           <a href="../plots/runs.13883-13894.pdf">here</a>.
           <br>
    
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="24Nov2009">
    <h3>24 November 2009</h3>
    <p class="legacy-shift-crew">15:30 - 22:45. O. Glamazdin, B. Sawatzky</p>
    <p>
    The beam energy is 6067.7MeV(accel), 595.97/603.21(North/South Linacs), 67.77MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=73, Slit=27.35. Fast raster was <b>ON</b>. <br>
           16:20 - 17:05 Controlled access to reboot Møller DAQ crates. <br>
           Measurement was done after the laser beam spot move. <br> 
           There was an energy lock in ARC2. Beam energy was stable and close to PVDIS running beam energy (see <a href="../plots/091124_hallap.png">plot</a>). <br> 
           For the beam energy parameters in the accelerator see see <a href="../plots/091124_hallabem.png">plot</a>. <br>
           Beam current was 1uAmp to use ARC2 energy lock. Due to that the beam polarization was measured with targets 4 and 5 only. <br>
           Runs 13916-13918 - Trigger with No Aperture counters - FADC test. <br>
           Runs 13919-13922 - Left234*Right678 - Levchuk-effect test. <br>
           Runs 13923-13926 Slit=16.25 Attenuator=120 - Slit/Attenuator dependence test (Hall A Laser Phase). <br> 
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. Detector threshold=300mV. <br> 
            The error is statistical only. BPM01Y position is included. <br> 
            Cor.Pol -  Polarization corrected on the beam polarization precession due to the beam energy fluctuation in Hall A(HALLA:p) 
            (see <a href="http://www.jlab.org/~moller/spin_dance.html">here</a>) </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Cor.Pol. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13902-13907 <td> 5 <td> 1 <td> 0.0 <td> 1.026/1.387 <td> 8.0 <td> 87.25+/-0.18<td>1.9<td> 87.62<td>1.9<td> Att=73, Slit=27.35 </tr>
           <tr align="right"> <td> 13908-13913 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.382 <td> 8.0 <td> 87.14+/-0.16<td>1.5<td> 87.47<td>1.5<td> - </tr>
           <tr align="right"> <td> 13916-13918 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.382 <td> 8.0 <td> 85.45+/-0.2<td>5.0<td> 85.77<td>5.0<td> - </tr>
           <tr align="right"> <td> 13919-13922 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.382 <td> 8.0 <td> 87.53+/-0.4<td>0.9<td> 87.86<td>0.9<td> - </tr>
           <tr align="right"> <td> 13923-13926 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.382 <td> 8.0 <td> 86.35+/-0.2<td>0.2<td> 87.03<td>0.2<td> Att=120, Slit=16.25 </tr>
           <tr align="right"> <td> Average   <td> 4-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> 87.19+/-0.12<td>1.5<td> 87.54<td>1.5 <td> 13902-13913 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13896-13926">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091124225706.html">302364</a>. <br>
            <p>
           The final result:  
            <br> Pz=(87.54 +/- 0.12(stat) +/- 2.0(syst))% <br>
           The plot with raw data is given 
           <a href="../plots/runs.13902-13913.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="30Nov2009">
    <h3>30 November 2009</h3>
    <p class="legacy-shift-crew">18:15 - 20:40. O. Glamazdin</p>
    <p>
    The beam energy is 6067.5MeV(accel), 598.46.97/600.47(North/South Linacs), 67.77MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=190, Slit=15.7. Fast raster was <b>ON</b>. <br>
           Beam tuning took 30 min! <br>
           Beam current was 1uAmp to use ARC2 energy lock. Due to that the beam polarization was measured with targets 4 and 5 only. <br>
           Beam energy for Møller measurements was about 6066.2MeV (see <a href="../plots/091130_hallap.png">strip chart</a>). <br>
           For the beam energy parameters in the accelerator see see <a href="../plots/091130_hallabem.png">plot</a>. <br>
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. Detector threshold=300mV. <br> 
            The error is statistical only. BPM01Y position is included. <br> 
            Cor.Pol -  Polarization corrected on the beam polarization precession due to the beam energy fluctuation in Hall A(HALLA:p) 
            (see <a href="http://www.jlab.org/~moller/spin_dance.html">here</a>) </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Cor.Pol. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13930-13935 <td> 5 <td> 1 <td> 0.0 <td> 1.023/1.385 <td> 8.0 <td> 88.44+/-0.17<td>1.8<td> 89.46<td>1.8<td> - </tr>
           <tr align="right"> <td> 13936-13941 <td> 4 <td> 1 <td> 0.0 <td> 1.656/1.387 <td> 8.0 <td> 87.23+/-0.18<td>2.1<td> 88.24<td>2.1<td> - </tr>
           <tr align="right"> <td> 13942-13945 <td> 4 <td> 1 <td> 0.0 <td> 1.656/1.387 <td> 8.0 <td> 89.22+/-0.2<td>0.2<td> 90.25<td>0.2<td> Levchuk-test </tr>
           <tr align="right"> <td> Average   <td> 4-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> 87.87+/-0.12<td>4.2<td> 88.88<td>4.2 <td> 13930-13941 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13928-13945">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0911_archive/091130205304.html">303792</a>. <br>
            <p>
           The final result:  
            <br> Pz=(88.88 +/- 0.12(stat) +/- 2.0(syst))% <br>
           The plot with raw data is given 
           <a href="../plots/runs.13930-13941.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="02Dec2009">
    <h3>02 December 2009</h3>
    <p class="legacy-shift-crew">17:35 - 22:30. O. Glamazdin</p>
    <p>
    The beam energy is 6067.5MeV(accel), 597.85/601.94(North/South Linacs), 67.34MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=100, Slit=15.63. Fast raster was <b>ON</b>. <br>
           Beam tuning took 2hours <br>
           HALL A MOLLER ENERGY LOCK was used (see ELOG 
           <a href="http://opweb.acc.jlab.org/CSUEApps/elog02/elog_item.php?elog_id=1500996&PHPSESSID=9b1e103a544c0c631f224d42ef6dae29">1500996</a>).<br>
           Beam energy for Møller measurements was about 6066.8MeV (see <a href="../plots/091202_hallap.png">strip chart</a>). <br>
           For the beam energy parameters in the accelerator see <a href="../plots/091202_hallabem.png">plot</a>. <br>
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. Detector threshold=300mV. <br> 
            The error is statistical only. BPM01Y position is included. <br> 
            Cor.Pol -  Polarization corrected on the beam polarization precession due to the beam energy fluctuation in Hall A(HALLA:p) 
            (see <a href="http://www.jlab.org/~moller/spin_dance.html">here</a>) </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Cor.Pol. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 13947-13953 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.382 <td> 8.0 <td> 13.25+/-0.2<td>0.5<td> 10.25<td>0.5<td> Wien Filter=-20.20deg </tr>
           <tr align="right"> <td> 13954-13959 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.382 <td> 8.0 <td>-46.20+/-0.2<td>0.2<td>-49.29<td>0.2<td> Wien Filter=20.20deg </tr>
           <tr align="right"> <td> 13960-13965 <td> 5 <td> 1 <td> 0.0 <td> 1.021/1.382 <td> 8.0 <td>-90.13+/-0.20<td>1.8<td>-90.73<td>1.8<td> Wien Filter=74.73deg </tr>
           <tr align="right"> <td> 13966-13971 <td> 4 <td> 1 <td> 0.0 <td> 1.657/1.385 <td> 8.0 <td>-88.62+/-0.19<td>0.4<td>-89.11<td>0.4<td> - </tr>
           <tr align="right"> <td> Average   <td> 4-5 <td> 1 <td> -   <td> -           <td> 8.0 <td>-89.34+/-0.14<td>3.2<td>-89.88<td>3.2 <td> 13960-13971 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13947-13971">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0912_archive/091202224626.html">304208</a>. <br>
            <p>
           The final result:  
            <br> Pz=(-89.88 +/- 0.14(stat) +/- 2.0(syst))% <br>
           The plot with raw data is given
           [PS file corrupted and lost].
           <br>
    
           <h3>Spin Dance Results</h3>
    
           Spin dance results with raw Møller results are shown on <a href="../plots/spin_prec_14.pdf">plot 1</a>. <br>
           Spin dance results with Møller results corrected with spin precession are shown on <a href="../plots/spin_prec_14c.pdf">plot 2</a>. <br>
           
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="10Dec2009">
    <h3>10 December 2009</h3>
    <p class="legacy-shift-crew">9:20 - 15:05. O. Glamazdin, B. Sawatzky</p>
    <p>
    The beam energy is 6067.7MeV(accel), 600MeV (Linacs), 67.77MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. <br>
           Injector Laser attenuation=140, Slit=14.3. Fast raster was <b>ON</b>. <br>
           Beam tuning took 20 min! Thanks to MCC! <br>
           Hall C BSY energy lock was used. Energy was stable and close to PVDIS energy for the beam polarization measurement time. 
           Beam condition (position, current) was very good.
           Dead time test for new FADC was done (runs 13987-14008). <br>
           Hall A laser phase scan was done (runs 14009-14031). Beam polarization measurement was done for laser phase 
           -152.3<sup>o</sup> (PVDIS), -135<sup>o</sup> (left edge) and -172<sup>o</sup> (right edge). 
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. Detector threshold=300mV. <br> 
            The error is statistical only. BPM01Y position is included. <br>  </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td>  Comments </tr>
           <tr align="right"> <td> 13978-13981 <td> 5 <td> 1 <td> 0.0 <td> 1.026/1.385 <td> 8.0 <td> 88.66+/-0.17<td>2.7<td> B.cur=0.65uAmp </tr>
           <tr align="right"> <td> 13982-13986 <td> 4 <td> 1 <td> 0.0 <td> 1.651/1.380 <td> 8.0 <td> 86.93+/-0.26<td>3.4<td> B.cur=0.65uAmp </tr>
           <tr align="right"> <td> 13987-13990 <td> 3 <td> 1 <td> 0.0 <td> 1.286/1.377 <td> 8.0 <td> 87.63+/-0.25<td>4.0<td> B.cur=0.4uAmp </tr>
           <tr align="right"> <td> 13991-13994 <td> 2 <td> 1 <td> 0.0 <td> 1.926/1.377 <td> 8.0 <td> 88.67+/-0.17<td>4.3<td> B.cur=0.3uAmp </tr>
           <tr align="right"> <td> 13995-13998 <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 88.83+/-0.4<td>0.9<td> B.cur=0.3uAmp </tr>
           <tr align="right"> <td> 13999-14002 <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 88.33+/-0.4<td>1.3<td> B.cur=1.0uAmp </tr>
           <tr align="right"> <td> 14003-14008 <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 87.86+/-0.2<td>0.9<td> B.cur=1.5uAmp </tr>
           <tr align="right"> <td> 14009       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 88.87+/-0.7<td> - <td> Phase=-152.3deg </tr>
           <tr align="right"> <td> 14010       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 89.03+/-0.7<td> - <td> Phase=-150deg </tr>
           <tr align="right"> <td> 14011       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 86.73+/-0.7<td> - <td> Phase=-145deg </tr>
           <tr align="right"> <td> 14012       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 86.61+/-0.8<td> - <td> Phase=-140deg </tr>
           <tr align="right"> <td> 14013       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 85.79+/-1.1<td> - <td> Phase=-135deg </tr>
           <tr align="right"> <td> 14014       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 82.89+/-2.7<td> - <td> Phase=-134deg </tr>
           <tr align="right"> <td> 14015       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 84.15+/-0.5<td> - <td> Phase=-135deg </tr>
           <tr align="right"> <td> 14016       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 81.16+/-1.5<td> - <td> Phase=-133deg </tr>
           <tr align="right"> <td> 14017-14020 <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 87.16+/-0.3<td>0.7<td> Phase=-135deg </tr>
           <tr align="right"> <td> 14021       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 0.0        <td> - <td> Phase=-140deg HallA laser OFF </tr>
           <tr align="right"> <td> 14022       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 87.50+/-0.8<td> - <td> Phase=-155deg </tr>
           <tr align="right"> <td> 14023       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 90.00+/-0.9<td> - <td> Phase=-160deg </tr>
           <tr align="right"> <td> 14024       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 88.49+/-0.8<td> - <td> Phase=-165deg </tr>
           <tr align="right"> <td> 14025       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 88.52+/-0.9<td> - <td> Phase=-170deg </tr>
           <tr align="right"> <td> 14026       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 84.79+/-1.0<td> - <td> Phase=-175deg </tr>
           <tr align="right"> <td> 14027       <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 87.37+/-0.9<td> - <td> Phase=-173deg </tr>
           <tr align="right"> <td> 14028-14031 <td> 5 <td> 1 <td> 0.0 <td> 1.035/1.385 <td> 8.0 <td> 87.32+/-0.3<td>3.6<td> Phase=-172deg </tr>
           <tr align="right"> <td> Average   <td> 4-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> 88.14+/-0.14<td>3.4<td>  13978-13986 </tr>
           <tr align="right"> <td> Average   <td> 2-5 <td> 1 <td> -   <td> -           <td> 8.0 <td> 88.24+/-0.10<td>4.3<td>  13978-13994 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.13978-14031">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0912_archive/091210153839.html">305990</a>. <br>
            <p>
           The final result:  
            <br> Pz=(88.24 +/- 0.10(stat) +/- 1.7(syst))% <br>
           The plot with raw data is given 
           <a href="../plots/runs.13978-13994.pdf">here</a>.
           <br>
    
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="16Dec2009">
    <h3>16 December 2009</h3>
    <p class="legacy-shift-crew">12:50 - 16:30. O.Glamazdin, B.Sawatzky, Zafar Ahmed</p>
    <p>
    The beam energy is 6067.5MeV(accel), 600MeV(Linacs), 67.34MeV(injector). <br>
           Injector angle is 74.73<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=181, Slit=15.8. Fast raster was <b>ON</b>. <br>
           Beam was not available due to RF problems. We had two controlled access to reboot old Møller DAQ crate and FADC crate. <br>
           Old Møller VME crate was plugged into hareboot26, socket 3. The FADC crate is plugged into the same PDU on socket 1 
           see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0912_archive/091216194059.html">307501</a>. <br>
           Beam tuning took ~1 hours. Møller measurement took 2.5 hours. <br>
           ARC2 energy lock was used. Energy was very unstable (see <a href="../plots/091216_hallap.png">strip chart</a>). <br>
           For the beam energy parameters in the accelerator see <a href="../plots/091216_hallabem.png">plot</a>. <br>
           Runs 14048-14054 - dead time test for new Møller FADC. Apperture counter was OFF.
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. Detector threshold=300mV. <br> 
            The error is statistical only. BPM01Y position is included. <br> 
            Cor.Pol -  Polarization corrected on the beam polarization precession due to the beam energy fluctuation in Hall A(HALLA:p) 
            (see <a href="http://www.jlab.org/~moller/spin_dance.html">here</a>) </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Cor.Pol. % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 14033-14035 <td> 5 <td> 1 <td> 0.0 <td> 1.023/1.380 <td> 8.0 <td>-89.85+/-0.3<td>1.0<td>-91.42<td>1.0<td> B.cur=0.7uAmp </tr>
           <tr align="right"> <td> 14036-14041 <td> 5 <td> 1 <td> 0.0 <td> 1.023/1.380 <td> 8.0 <td>-90.06+/-0.2<td>0.6<td>-91.63<td>0.6<td> B.cur=1.0uAmp </tr>
           <tr align="right"> <td> Average     <td> 5 <td> 1 <td> -   <td> -           <td> 8.0 <td>-91.26+/-0.15<td>0.7<td>-91.83<td>0.7<td> - </tr>
           <tr align="right"> <td> 14042-14047 <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.382 <td> 8.0 <td>-89.61+/-0.16<td>1.2<td>-90.33<td>1.2<td> - </tr>
           <tr align="right"> <td> 14048       <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.382 <td> 8.0 <td>-87.26+/-0.3<td>-<td>-<td>-<td> B.cur=1.0uAmp </tr>
           <tr align="right"> <td> 14049       <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.382 <td> 8.0 <td>-87.85+/-0.3<td>-<td>-<td>-<td> B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 14050       <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.382 <td> 8.0 <td>-88.21+/-0.4<td>-<td>-<td>-<td> B.cur=0.3uAmp </tr>
           <tr align="right"> <td> 14051       <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.382 <td> 8.0 <td>-87.18+/-0.3<td>-<td>-<td>-<td> B.cur=1.2uAmp </tr>
           <tr align="right"> <td> 14052       <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.382 <td> 8.0 <td>-87.85+/-0.6<td>-<td>-<td>-<td> B.cur=1.6uAmp </tr>
           <tr align="right"> <td> 14053       <td> 4 <td> 1 <td> 0.0 <td> 1.653/1.382 <td> 8.0 <td>-86.20+/-0.3<td>-<td>-<td>-<td> B.cur=1.9uAmp </tr>
           <tr align="right"> <td> 14054       <td> 3 <td> 1 <td> 0.0 <td> 1.286/1.377 <td> 8.0 <td>-87.85+/-0.3<td>-<td>-<td>-<td> B.cur=1.9uAmp </tr>
           <tr align="right"> <td> Average   <td> 4-5 <td> 1 <td> -   <td> -           <td> 8.0 <td>-90.49+/-0.11<td>1.4<td>-91.13<td>1.4<td> 14033-14047 </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.14033-14054">here</a>. <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0912_archive/091216163604.html">307464</a>. <br>
            <p>
           The final result:  
            <br> Pz=(-91.13 +/- 0.11(stat) +/- 2.0(syst))% <br>
           The plot with raw data is given 
           <a href="../plots/runs.14033-14047_1.pdf">here</a>.
           <br>
    
          <p>
        </p>
  </section>

  <section class="legacy-shift" id="18Dec2009">
    <h3>18 December 2009</h3>
    <p class="legacy-shift-crew">12:50 - 17:00. O.Glamazdin</p>
    <p>
    The beam energy is 4867.43MeV(accel), 600MeV(Linacs), 67.75MeV(injector) - 4 passes. <br>
           Injector angle is 90.47<sup>o</sup>, the 1/2 wave plate was <b>IN</b>. <br>
           Injector Laser attenuation=80, Slit=16.5. Fast raster was <b>ON</b>. <br>
           Beam tuning took ~1 hours. <br>
           Hall C BSY energy lock was used. <br>
           For the beam energy parameters in the accelerator see <a href="../plots/091218_hallabem.png">plot</a>. <br>
           <p>
           <table border>
           <caption align="top">  The theta acceptance is about +/-14<sup>o</sup> and the mean analyzing power is 0.761. <br>
            The target angle is 20.5<sup>o</sup>. Detector threshold=300mV. <br> 
            The error is statistical only. BPM01Y position is included. <br>  </caption></caption>
           <tr> <td> Runs   <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td>  Comments </tr>
           <tr align="right"> <td> 14066-14069 <td> 5 <td> 1 <td> 0.0 <td> 1.028/1.389 <td> 8.0 <td>-90.59+/-0.24<td>0.6<td> B.cur=0.7uAmp </tr>
           <tr align="right"> <td> 14070-14073 <td> 4 <td> 1 <td> 0.0 <td> 1.661/1.392 <td> 8.0 <td>-90.30+/-0.25<td>0.2<td> B.cur=0.6uAmp </tr>
           <tr align="right"> <td> 14074-14078 <td> 3 <td> 1 <td> 0.0 <td> 2.288/1.387 <td> 8.0 <td>-89.73+/-0.24<td>0.6<td> B.cur=0.4uAmp </tr>
           <tr align="right"> <td> 14079-14082 <td> 2 <td> 1 <td> 0.0 <td> 1.921/1.382 <td> 8.0 <td>-90.76+/-0.19<td>0.4<td> B.cur=0.3uAmp </tr>
           <tr align="right"> <td> Average     <td>4-5<td> 1 <td> -   <td> -           <td> 8.0 <td>-90.45+/-0.17<td>0.4<td> 14066-14073 </tr>
           <tr align="right"> <td> Average     <td> 5 <td> 1 <td> -   <td> -           <td> 8.0 <td>-90.40+/-0.11<td>1.2<td> - </tr>
           </table>
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.14056-14082">here</a>. <br>
           <br>
           For additional information see halog entry  <a href="http://www.jlab.org/~adaq/halog/html/0912_archive/091218170819.html">307956</a>. <br>
            <p>
           The final result:  
            <br> Pz=-90.40 +/- 0.11(stat) +/- 1.7(syst))% <br>
           The plot with raw data is given 
           <a href="../plots/runs.14066-14082.pdf">here</a>.
           <br>
    
    </ul>
    
    <!--
       The plot is given
           <a href="../plots/run.11388-11397.pdf">here</a>.
           <br>
           </p>
    -->
    
    </ul>
    
    </div>
        </p>
  </section>

</section>
</div>
<?php
PageEnd();
