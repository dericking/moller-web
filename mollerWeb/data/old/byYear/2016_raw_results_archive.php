<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter: Raw Results Archives 2016');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<p class="legacy-note">NEW HIGH FIELD (Temple University) Møller Target</p>

<section class="legacy-experiment">
  <h2>E12-07-108 GMp: Precision Measurement of the Proton Elastic Cross Section at High Q2</h2>

  <section class="legacy-shift" id="17 February 2016">
    <h3>17 February, 2016</h3>
    <p class="legacy-shift-crew">10:30 - 19.30: O.Glamazdin, R.Pomatsalyuk</p>
    <p>
       The beam energy is 4477MeV(accel), 1090.0MeV(linac), 123.MeV(injector), 2 passes. <br>
       Injector angle is +36.6<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>OUT</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>ON (2x2mm)</b>. <br>
       Beam was straight. <br>
       Q1=-48.83A, Q2=85.10A, Q3=21.38A, Q4=71.67A, Dipole=249A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Runs 15919-15925 - Detector HV tune. <br>
       Runs 15926-15932 - Target #3, 3T. <br>
       Runs 15933-15934 - Target #3, 3T, bleed-through test. Hall A laser OFF, Hall D laser ON. <br>
       Runs 15935-15940 - Target #3, 3.5T. <br>
       Runs 15941-15946 - Target #3, 4T. <br>
       Runs 15947-15952 - Target #3, 3.2T. <br>
       Runs 15953-15958 - Target #3, 3T. <br>
       Runs 15959-15964 - Target #3, 3T, dead time measurement. <br>
       19:30 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The theta acceptance is about +/-8.9<sup>o</sup> and the mean analyzing power is 0.7506 <br>
                Levchuk-effect=+1.6%, dead time=0.34%.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>15926-15932</td><td>3</td><td>0.6</td><td>1.250/4.588</td><td>3.0T</td><td>87.56+/-0.22</td><td>0.2</td><td>86.47</td><td></td></tr>
        <tr><td>15933-15934</td><td>3</td><td>0.0</td><td>1.250/4.588</td><td>3.0T</td><td>0.0</td><td>-</td><td>-</td><td>bleed-through test</td></tr>
        <tr><td>15935-15940</td><td>3</td><td>0.6</td><td>1.250/4.588</td><td>3.5T</td><td>88.05+/-0.21</td><td>0.8</td><td>86.96</td><td></td></tr>
        <tr><td>15941-15946</td><td>3</td><td>0.55</td><td>1.250/4.588</td><td>4.0T</td><td>87.89+/-0.23</td><td>0.5</td><td>86.77</td><td></td></tr>
        <tr><td>15947-15952</td><td>3</td><td>0.6</td><td>1.250/4.588</td><td>3.2T</td><td>87.61+/-0.23</td><td>0.2</td><td>86.52</td><td></td></tr>
        <tr><td>15953-15958</td><td>3</td><td>0.6</td><td>1.250/4.588</td><td>3.0T</td><td>87.78+/-0.20</td><td>0.2</td><td>86.69</td><td></td></tr>
        <tr><td>15926-15958</td><td>3</td><td>0.6</td><td>1.250/4.588</td><td>-</td><td>87.78+/-0.1</td><td>1.0</td><td>86.68</td><td>Average</td></tr>
        <tr><td>15959</td><td>3</td><td>0.6</td><td>1.250/4.588</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dt=0.34</td></tr>
        <tr><td>15960</td><td>3</td><td>0.45</td><td>1.250/4.588</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dt=0.24</td></tr>
        <tr><td>15962</td><td>3</td><td>0.8</td><td>1.250/4.588</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dt=0.47</td></tr>
        <tr><td>15963</td><td>3</td><td>1.2</td><td>1.250/4.588</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dt=0.67</td></tr>
        <tr><td>15964</td><td>3</td><td>1.6</td><td>1.250/4.588</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dt=0.86</td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/moller_log_160217.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.15919-15964">here</a> and <a href="../tab/res.dat.15919-15964">here</a>
       and <a href="../tab/fadc.run.tab.3300-3332">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/160217_chart1.png">Energy</a> and <a href="../plots/160217_chart2.png">BPM</a>. <br>
       Plot with saturation curve is: <a href="../plots/160217_sum.png">Saturation</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3380755">3380755</a>. <br>
       Mott measurement result: <a href="https://logbooks.jlab.org/entry/3383209">3383209</a>. <br>
       The final results: <br>
       Pz=(86.68 +/- 0.1(stat) +/-1.0(syst)) %
    </p>
  </section>

  <section class="legacy-shift" id="19 February 2016">
    <h3>19 February, 2016</h3>
    <p class="legacy-shift-crew">10:45 - 12.00: O.Glamazdin, R.Pomatsalyuk</p>
    <p>
       The beam energy is 4477MeV(accel), 1090.0MeV(linac), 123.MeV(injector), 2 passes. <br>
       Injector angle is +36.6<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>OUT</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>ON (2x2mm)</b>. <br>
       Beam charge asymmetry test was done.
       The Møller Log Book scan is given <a href="../plots/moller_log_160219.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.15966-15974">here</a> and <a href="../tab/res.dat.15966-15974">here</a>.
    </p>
  </section>

  <section class="legacy-shift" id="29 February 2016">
    <h3>February 29 - March 01, 2016</h3>
    <p class="legacy-shift-crew">12:30 - 04.00: O.Glamazdin, R.Pomatsalyuk</p>
    <p>
       The beam energy is 8824MeV(HALLA:p)/8837MEV(Doug), 1090.0MeV(linac), 123.MeV(injector), 4 passes. <br>
       Injector angle is -54.0<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>OUT</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>ON</b>(2x3mm). <br>
       Beam was straight. <br>
       Q1=-217.4A, Q2=-196.0A, Q3=136.6A, Q4=251.9A, Dipole=440A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Runs 15978-15982 - Detector tune. Target #3, 3T. <br>
       Runs 15983-15989 - Wien=-54.0<sup>o</sup>. <br>
       Runs 15990-15996 - Wien=-90.0<sup>o</sup>. <br>
       Runs 15997-16000 - dead time meas. <br>
       Runs 16001-16005 - Wien=+25.0<sup>o</sup>. <br>
       Runs 16006-16009 - Wien=-88.0<sup>o</sup>. <br>
       04:00 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The theta acceptance is about +/-5.4<sup>o</sup> and the mean analyzing power is 0.76734 <br>
                Levchuk-effect=+1.12%, dead time=0.26%.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>15983-15989</td><td>3</td><td>0.7</td><td>1.250/117.48</td><td>3.0T</td><td>-68.28+/-0.22</td><td>1.2</td><td>-67.70</td><td>Wien=-54.0<sup>o</sup></td></tr>
        <tr><td>15990-15996</td><td>3</td><td>0.7</td><td>1.250/117.48</td><td>3.0T</td><td>-87.14+/-0.19</td><td>1.8</td><td>-86.40</td><td>Wien=-90.0<sup>o</sup></td></tr>
        <tr><td>15996-16000</td><td>3</td><td>0.7</td><td>1.250/117.48</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dt=0.26%</td></tr>
        <tr><td>16001-16005</td><td>3</td><td>0.7</td><td>1.250/117.48</td><td>3.0T</td><td>+38.89+/-0.22</td><td>1.6</td><td>38.49</td><td>Wien=+25.0<sup>o</sup></td></tr>
        <tr><td>16006-16009</td><td>3</td><td>0.8</td><td>1.250/117.48</td><td>3.0T</td><td>-87.66+/-0.20</td><td>0.1</td><td>-86.95</td><td>Wien=-88.0<sup>o</sup></td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/moller_log_160229.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.15978-16009">here</a> and <a href="../tab/res.dat.15978-16009">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/160229_chart1.png">Energy</a> and <a href="../plots/160229_chart2.png">BPM</a>. <br>
       Plot with spin-dance fit is: <a href="../plots/spin_dance_022916.png">Spin-dance</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3386402">3386402</a>. <br>
       The final results (at Wien=-88.0<sup>o</sup>): <br>
       Pz=(-86.95 +/- 0.2(stat) +/-1.0(syst)) %
    </p>
  </section>

  <section class="legacy-shift" id="31 March 2016">
    <h3>March 31, 2016</h3>
    <p class="legacy-shift-crew">13:00 - 17:45 - O.Glamazdin, R.Pomatsalyuk, B. Henry, N. Saylor</p>
    <p>
       The beam energy is 10985MeV(HALLA:p), 1090.0MeV(linac), 123.MeV(injector), 5 passes. <br>
       Injector angle is -13.22<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>IN</b>. IHWP2 was <b>OUT</b>. Rotating HWP was <b> IN </b>. Raster was <b>OFF</b>. <br>
       Beam was straight. <br>
       Q1=-295.4A, Q2=-298.7A, Q3=105.75A, Q4=297.0A, Dipole=440A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Runs 16010-16014 - Detector tune. Target #3, 3T. <br>
       Runs 16015-16021 - Beam polariz. meas. Q3=105.75A. <br>
       Runs 16022-16024 - Dead time meas. <br>
       Runs 16025-16028 - Beam polariz. meas. Q3=58.2A. <br>
       Runs 16029-16033 - Beam polariz. meas. Q3=20.6A. <br>
       Runs 16034-16035 - Dead time meas. <br>
       17:45 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The theta acceptance is about +/-3.5<sup>o</sup> and the mean analyzing power is 0.7636.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>16015-16021</td><td>3</td><td>1.0</td><td>1.250/117.48</td><td>3.0T</td><td>86.81+/-0.24</td><td>0.4</td><td>86.42</td><td>Q3=105.75A</td></tr>
        <tr><td>16022-16024</td><td>3</td><td>1.0</td><td>1.250/117.48</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dead time</td></tr>
        <tr><td>16025-16028</td><td>3</td><td>1.0</td><td>1.250/117.48</td><td>3.0T</td><td>87.99+/-0.21</td><td>0.3</td><td>86.87</td><td>Q3=58.2A</td></tr>
        <tr><td>16029-16033</td><td>3</td><td>1.4</td><td>1.250/117.48</td><td>3.0T</td><td>87.11+/-0.30</td><td>0.4</td><td>87.21</td><td>Q3=20.6A</td></tr>
        <tr><td>16034-16035</td><td>3</td><td>1.4</td><td>1.250/117.48</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dead time</td></tr>
        <tr><td>Average</td><td>3</td><td>-</td><td>1.250/117.48</td><td>3.0T</td><td>87.40+/-0.14</td><td>7.4</td><td>86.79</td><td>Chi2=4.3</td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/moller_log_160331.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.16010-16035">here</a> and <a href="../tab/res.dat.16010-16035">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/160331_chart1.png">Energy</a> and <a href="../plots/160331_chart2.png">BPM</a>. <br>
       Plot with Møller results is: <a href="../plots/033116.png">comparison</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3393948">3393948</a>. <br>
       The final result: <br>
       Pz=(+86.79 +/- 0.14(stat) +/- 1.0(syst)) %
    </p>
  </section>

  <section class="legacy-shift" id="19 April 2016">
    <h3>April 19, 2016</h3>
    <p class="legacy-shift-crew">16:00 - 21:30 - O.Glamazdin, R.Pomatsalyuk</p>
    <p>
       The beam energy is 10982MeV(HALLA:p), 1090.0MeV(linac), 123.MeV(injector), 5 passes. <br>
       Injector angle is -13.22<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>IN</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>ON</b>. <br>
       Beam was through the Compton chicane. <br>
       Q1=-295.4A, Q2=-298.7A, Q3=84.0A, Q4=297.4A, Dipole=440A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Runs 16038-16045 - Detector tune. Target #3, 3T. <br>
       Runs 16046-16054 - Beam polariz. meas. Q4=297.4A. <br>
       Runs 16055-16061 - Dead time meas. <br>
       Runs 16062-16065 - Beam polariz. meas. Q4=251.9A. <br>
       Runs 16066-16070 - Beam polariz. meas. Q3=216.2A. <br>
       21:15 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The theta acceptance is about +/-3.6<sup>o</sup> and the mean analyzing power is 0.7624.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>16046-16054</td><td>3</td><td>1.5</td><td>1.254/117.48</td><td>3.0T</td><td>89.24+/-0.21</td><td>0.2</td><td>88.51</td><td>Q4=297.4A</td></tr>
        <tr><td>16055-16061</td><td>3</td><td>1.5</td><td>1.254/117.48</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dead time</td></tr>
        <tr><td>16062-16065</td><td>3</td><td>1.5</td><td>1.254/117.48</td><td>3.0T</td><td>89.21+/-0.21</td><td>0.7</td><td>87.96</td><td>Q4=251.9A</td></tr>
        <tr><td>16066-16070</td><td>3</td><td>1.5</td><td>1.254/117.48</td><td>3.0T</td><td>87.85+/-0.18</td><td>2.3</td><td>88.02</td><td>Q4=216.2A</td></tr>
        <tr><td>Average</td><td>3</td><td>-</td><td>1.254/117.48</td><td>3.0T</td><td>88.92+/-0.13</td><td>9.4</td><td>88.19</td><td>Chi2=2.0</td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/moller_log_160419.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.16038-16070">here</a> and <a href="../tab/res.dat.16038-16070">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/160419_chart1.png">Energy</a> and <a href="../plots/160419_chart2.png">BPM</a>. <br>
       Plot with Møller results is: <a href="../plots/040916.png">comparison</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3400891">3400891</a>. <br>
       The final result: <br>
       Pz=(+88.19 +/- 0.13(stat) +/- 1.0(syst)) %
    </p>
  </section>

  <section class="legacy-shift" id="31 October 2016">
    <h3>October 31, 2016</h3>
    <p class="legacy-shift-crew">10:30 - 14:30 - O.Glamazdin, R.Pomatsalyuk, S.Park</p>
    <p>
       The beam energy is 8495MeV(HALLA:p), 1050.0MeV(linac), 118.5MeV(injector), 4 passes. <br>
       Wien angle is -53.5<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>OUT</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>ON</b>. <br>
       Beam was straight. <br>
       Q1=-209.6A, Q2=-124.0A, Q3=145.0A, Q4=238.8A, Dipole=440A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Runs 16082-16086 - Detector tune. Target #3, 3T. <br>
       Runs 16087-16091 - Beam polariz. meas. Q2=-209.6A. <br>
       Runs 16092-16096 - Beam polariz. meas. Q2=-213.0A. <br>
       Runs 16097-16100 - Beam polariz. meas. Q2=-173.0A. <br>
       Run  16101 - Dead time measurement. <br>
       14:30 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The mean analyzing power is 0.7715.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>16087-16091</td><td>3</td><td>1.5</td><td>1.257/117.48</td><td>3.0T</td><td>86.31+/-0.16</td><td>0.5</td><td>85.82</td><td>Q2=-209.6A</td></tr>
        <tr><td>16092-16096</td><td>3</td><td>1.5</td><td>1.257/117.48</td><td>3.0T</td><td>88.31+/-0.19</td><td>4.0</td><td>87.59</td><td>Q2=-213.0A</td></tr>
        <tr><td>16097-16100</td><td>3</td><td>1.5</td><td>1.257/117.48</td><td>3.0T</td><td>87.92+/-0.19</td><td>0.2</td><td>87.22</td><td>Q2=-173.0A</td></tr>
        <tr><td>16101</td><td>3</td><td>1.5</td><td>1.257/117.48</td><td>3.0T</td><td>-</td><td>-</td><td>-</td><td>dead time</td></tr>
        <tr><td>Average</td><td>3</td><td>-</td><td>1.257/117.48</td><td>3.0T</td><td>87.37+/-0.10</td><td>38</td><td>86.75</td><td>Chi2=30</td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/10312016-log.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.16082-16101">here</a> and <a href="../tab/res.dat.16082-16101">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/161031_current.png">Energy</a> and <a href="../plots/161031_bpm.png">BPM</a>. <br>
       Plot with Møller results is: <a href="../plots/103116.png">comparison</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3434629">3434629</a>. <br>
       The final result: <br>
       Pz=(+86.75 +/- 0.13(stat) +/- 1.0(syst)) %
    </p>
  </section>

  <section class="legacy-shift" id="28 November 2016">
    <h3>November 28, 2016</h3>
    <p class="legacy-shift-crew">15:30 - 19:50 - O.Glamazdin, R.Pomatsalyuk</p>
    <p>
       The beam energy is 10590MeV(HALLA:p), 5 passes. <br>
       Wien angle is 56.0<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>IN</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>OFF</b>. <br>
       Beam was straight. <br>
       Q1=-291.3A, Q2=-310.4A, Q3=127.7A, Q4=297.4A, Dipole=440A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Runs 16105-16110 - Detector tune. Target #3, 3T. <br>
       Runs 16111-16114 - Beam current 1.4uA. <br>
       Runs 16115-16118 - Beam current 0.6uA. <br>
       Runs 16119-16122 - Beam current 1.8uA. <br>
       Runs 16123-16126 - Beam polariz. meas. Q1=-228.5A. <br>
       Runs 16127-16130 - Beam polariz. meas. Q2=-254.6A. <br>
       19:50 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The mean analyzing power is 0.7720.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>16111-16114</td><td>3</td><td>1.4</td><td>1.250/117.48</td><td>3.0T</td><td>85.69+/-0.19</td><td>0.9</td><td>85.42</td><td>-</td></tr>
        <tr><td>16115-16118</td><td>3</td><td>0.6</td><td>1.250/117.48</td><td>3.0T</td><td>86.29+/-0.21</td><td>0.6</td><td>85.86</td><td>-</td></tr>
        <tr><td>16119-16122</td><td>3</td><td>1.8</td><td>1.250/117.48</td><td>3.0T</td><td>85.64+/-0.18</td><td>0.4</td><td>85.45</td><td>-</td></tr>
        <tr><td>16123-16126</td><td>3</td><td>1.4</td><td>1.250/117.48</td><td>3.0T</td><td>85.90+/-0.19</td><td>0.3</td><td>85.48</td><td>Q1=-228.5</td></tr>
        <tr><td>16117-16130</td><td>3</td><td>1.4</td><td>1.250/117.48</td><td>3.0T</td><td>85.83+/-0.20</td><td>2.5</td><td>85.26</td><td>Q2=-254.6A</td></tr>
        <tr><td>Average</td><td>3</td><td>-</td><td>1.250/117.48</td><td>3.0T</td><td>85.81+/-0.11</td><td>0.3</td><td>85.39</td><td>Chi2=0.3</td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/11282016-log.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.16105-16130">here</a> and <a href="../tab/res.dat.16105-16130">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/161128_energy.png">Energy</a> and <a href="../plots/161128_bpm.png">BPM</a> and <a href="../plots/161128_current.png">current</a>. <br>
       Plot with Møller results is: <a href="../plots/112816.png">comparison</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3442220">3442220</a>. <br>
       The final result: <br>
       Pz=(+85.39 +/- 0.11(stat) +/- 1.0(syst)) %
    </p>
  </section>

  <section class="legacy-shift" id="07 December 2016">
    <h3>December 07, 2016</h3>
    <p class="legacy-shift-crew">10:00 - 14:20 - O.Glamazdin, R.Pomatsalyuk</p>
    <p>
       The beam energy is 10592MeV(HALLA:p), 5 passes. <br>
       Wien angle is 56.01<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>IN</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>OFF</b>. <br>
       Beam was straight. <br>
       Q1=-291.3A, Q2=-293.0A, Q3=127.7A, Q4=292.5A, Dipole=440A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Runs 16132-16139 - Detector tune. Target #3, 3T. <br>
       Runs 16140-16145 - Beam polariz. meas Q1=-291.3. <br>
       Runs 16146-16150 - Beam polariz. meas.Q1=-238.9A. <br>
       Runs 16151-16155 - Beam polariz. meas.Q1=-291.3, Q2=-260.0A. <br>
       Run  16156 -       Beam current 0.5uA. <br>
       14:20 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The mean analyzing power is 0.7723.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>16140-16145</td><td>3</td><td>1.6</td><td>1.251/117.48</td><td>3.0T</td><td>84.80+/-0.16</td><td>1.0</td><td>84.54</td><td>Q1=-291.3</td></tr>
        <tr><td>16146-16150</td><td>3</td><td>1.6</td><td>1.251/117.48</td><td>3.0T</td><td>84.20+/-0.18</td><td>4.0</td><td>83.81</td><td>Q1=-238.9</td></tr>
        <tr><td>16151-16156</td><td>3</td><td>1.6</td><td>1.251/117.48</td><td>3.0T</td><td>84.44+/-0.18</td><td>1.8</td><td>84.09</td><td>Q1=-291.3, Q2=-260.0A</td></tr>
        <tr><td>Average</td><td>3</td><td>-</td><td>1.251/117.48</td><td>3.0T</td><td>85.81+/-0.10</td><td>3.2</td><td>84.18</td><td>Chi2=4.8</td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/12072016-log.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.16132-16156">here</a> and <a href="../tab/res.dat.16132-16156">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/161207_energy.png">Energy</a> and <a href="../plots/161207_bpm.png">BPM</a> and <a href="../plots/161207_current.png">current</a>. <br>
       Plot with Møller results is: <a href="../plots/120716.png">comparison</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3444661">3444661</a>. <br>
       The final result: <br>
       Pz=(+84.18 +/- 0.10(stat) +/- 1.0(syst)) %
    </p>
  </section>

  <section class="legacy-shift" id="19 December 2016">
    <h3>December 19, 2016</h3>
    <p class="legacy-shift-crew">10:45 - 14:20 - O.Glamazdin, S.Park, B.Henry</p>
    <p>
       The beam energy is 8498MeV(HALLA:p), 4 passes. <br>
       Wien angle is 53.61<sup>o</sup> (0<sup>o</sup>, 0<sup>o</sup> flipper). <br>
       IHWP wave plate was <b>IN</b>. IHWP2 was <b>IN</b>. Rotating HWP was <b> IN </b>. Raster was <b>ON</b>. <br>
       Beam was straight. <br>
       Q1=-209.6A, Q2=-173.2A, Q3=145.0A, Q4=238.8A, Dipole=440A. <br>
       Helicity frequency=30Hz, delay=0 windows, pattern=Quartet. <br>
       Target #3, 3T. <br>
       Runs 16159-16164 - Beam polariz. meas. Q2=-173.2A. <br>
       Runs 16165-16169 - Beam polariz. meas. Q2=-213.1A. <br>
       Runs 16170-16175 - Beam polariz. meas. Q2=-124.0A. <br>
       14:20 Møller target is parked, Møller target movement is unmasked. Møller dipole is OFF, <br>
             quads settings are restored, Møller target magnet is turned OFF.
    </p>
    <table>
      <caption>The mean analyzing power is 0.7675.</caption>
      <thead>
        <tr>
          <th>Runs</th>
          <th>Target</th>
          <th>B.cur, uA</th>
          <th>Motor steps</th>
          <th>Field</th>
          <th>Polarization %</th>
          <th>Chi2</th>
          <th>Corrected</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>16159-16164</td><td>3</td><td>1.5</td><td>1.253/117.48</td><td>3.0T</td><td>86.90+/-0.15</td><td>0.7</td><td>86.27</td><td>Q2=-173.2A</td></tr>
        <tr><td>16165-16169</td><td>3</td><td>1.5</td><td>1.253/117.48</td><td>3.0T</td><td>87.13+/-0.17</td><td>1.6</td><td>86.55</td><td>Q2=-213.1A</td></tr>
        <tr><td>16170-16175</td><td>3</td><td>1.5</td><td>1.253/117.48</td><td>3.0T</td><td>86.27+/-0.17</td><td>1.7</td><td>85.77</td><td>Q2=-124.0A</td></tr>
        <tr><td>Average</td><td>3</td><td>-</td><td>1.253/117.48</td><td>3.0T</td><td>86.78+/-0.10</td><td>6.9</td><td>86.20</td><td>Chi2=5.4</td></tr>
      </tbody>
    </table>
    <p>
       The Møller Log Book scan is given <a href="../plots/12192016-log.pdf">here</a>. <br>
       The table with detailed information is given
       <a href="../tab/runs.tab.16159-16175">here</a> and <a href="../tab/res.dat.16159-16175">here</a>. <br>
       Plots with beam position and beam energy instability are:
       <a href="../plots/161219_energy.png">Energy</a> and <a href="../plots/161219_bpm.png">BPM</a> and <a href="../plots/161219_bcm.png">current</a>. <br>
       Plot with Møller results is: <a href="../plots/121916.png">comparison</a>. <br>
       For additional information see halog entry <a href="https://logbooks.jlab.org/entry/3448331">3448331</a>. <br>
       The final result: <br>
       Pz=(+86.20 +/- 0.10(stat) +/- 1.0(syst)) %
    </p>
  </section>
</section>
</div>
<?php
PageEnd();
