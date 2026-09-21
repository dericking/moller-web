<?php
require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle('Møller Polarimeter: Raw Results Archives 2007');
PageStart("data/");
?>
<div class="legacy-doc legacy-archive">
<ul>
 <p>
 <b>Run type</b>: <b>1</b> - measurement in point, <b>2</b> - transverse scan, <b>3</b> - longitudinal scan
 </p>
  <section class="legacy-shift" id="06Sep2007">
    <h3>6 September 2007</h3>
    <p class="legacy-shift-crew">15:10-17:30. E.Chudakov</p>
    <p>
    <b> Bulk cathode.  </b> <br>
           The beam energy is 1076MeV(accel), 510MeV(linac), 57.375MeV(injector). Injector angle is 36.703<sup>o</sup>, the 1/2 wave plate was <b>OUT</b>. 
           <br>
           Injector laser attenuation=140, Slit=16.4. Fast raster was <b>ON</b>.
           <p>
           
           <p>
           <table border>
           <caption align="top">   The theta acceptance is about +/-15<sup>o</sup>? and the mean analysing power is 0.76.
            The target angle is 20<sup>o</sup>. The error is statistical only.</caption>
           <tr> <td> Runs <td>  Target <td> Type <td> T.Pos. <td> Encoder <td> BOP <td> Polarization % <td> Chi2 <td> Comments </tr>
           <tr align="right"> <td> 12679-12682 <td> 5 <td> 1 <td> 0.0 <td> 1.013/1.404 <td> 8.0 <td> -41.97+/-0.22 <td> 0.79 <td> B.cur=0.5uAmp, Thr=240mV  </tr>
           <tr align="right"> <td> 12684-12685 <td> 3 <td> 1 <td> 0.0 <td> 2.308/1.394 <td> 8.0 <td> -41.40+/-0.24 <td> 8.23 <td> - </tr>
           <tr align="right"> <td> Average   <td> 3,5 <td> 1 <td> 0.0 <td> -           <td> 8.0 <td> -41.86+/-0.14 <td> 1.07 <td> - </tr>
           </table>
           </p>
    
           <p>
           The table with detailed information is given
           <a href="../tab/run.tab.12679-12685">here</a>.
           <br>
           The final results:  
            <br>Pz= -41.86 +/- 0.14(stat) +/- 2.0(syst-prelim) (dead time correction is not included)<br>
    
    </ul>
    </div>
        </p>
  </section>
</div>
<?php
PageEnd();
