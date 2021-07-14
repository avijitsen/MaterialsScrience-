<?php

require_once 'core/init.php';

if ($_POST) {
  $serial = $_POST['serial'];
  $name = $_POST['name'];
  $sp = $_POST['sp'];

    if ($serial && $name && $sp) {
      global $dblink;
    $sql = "INSERT INTO `facilities`(`Serial`, `Name`, `Specification`) VALUES ('$serial','$name','$sp')";
    $result = mysqli_query($dblink, $sql);

    if (! $result) {
      echo "ERROR";
    }
  }
}

 include('partials/head.php');
 include('partials/header.php');
?>


<div class="facility_wrapper">
  <div class="lab">

    <h1>We use facilities available in the Department of Physics Lab,CUET</h1>
      
      <h3>Instruments at CUET‘s Physics LAB (name and brief description)</h3>
  </div>

<div class="content_wrapper">
  <img src="/image/balance.png" alt="analytic balance">
  <div class="text_facility">
    <h3>Analytical Balance</h3>
    <p>Model: SHIMADZU AUX220
      <br>
Range: 10mg -220g</p>
  </div>
</div>
<div class="content_wrapper">
  <img src="/image/planetary.jpg" alt="Desk-top Planetary Ball Mill">
  <div class="text_facility">
    <h3>Desk-top Planetary Ball Mill</h3>
    <p>Model: SFM-1
      <br>
Four 320ml Nylon Jars    </div>
</div>
<div class="content_wrapper">
  <img src="/image/centrifuge.jpg" alt="Centrifuge Machine">
  <div class="text_facility">
    <h3>Centrifuge Machine</h3>
    <p>Model: Hettich EBA-21</p>
    <ul>
      <li>Maximum RPM: 6000</li>
      <li>Total Tube: 12</li>
      <li>Maximum Capacity:  12 x 35g</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/multimeter.jpg" alt="High Precision Multimeter">
  <div class="text_facility">
    <h3 style="margin-top:0px;">High Precision Multimeter</h3>
    <p>Model: Wayne Kerr DMM 357</p>
    <ul style="margin-top:0px;">
      <li>DC Voltage Range: 100 mV – 1000 V</li>
      <li>DC Current Range: 10 mA – 3 A</li>
      <li>Diode Test: 1 V</li>
      <li>Resistance Range: 100 Ω – 100 MΩ</li>
      <li>AC Voltage Range: 100 mV – 750 V</li>
      <li>AC Current Range: 1 A – 3 A</li>
      <li>Frequency Range:3Hz – 300KHz</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/furnace.jpg" alt="Furnace">
  <div class="text_facility">
    <h3>Furnace</h3>
    <p>Model: THERMOLYNE F6000</p>
    <p>Maximum Temperature: 1200°C</p>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/furnace2.jpg" alt="Furnace">
  <div class="text_facility">
    <h3>Furnace</h3>
    <p>Model: Nabertherm B 180</p>
    <p>Maximum Temperature: 1200°C</p>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/hotplate.jpg" alt="Hotplate Stirrer">
  <div class="text_facility">
    <h3>Hotplate Stirrer</h3>
    <p>Model: STUART CB302</p>
    <ul>
      <li>Maximum Plate Temperature: 450°C</li>
      <li>Stirrer Speed: 100-1500 rpm</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/press.jpg" alt="Compact Hydraulic Pellet Press">
  <div class="text_facility">
    <h3>Compact Hydraulic Pellet Press</h3>
    <p>Model: YLJ-15</p>
    <ul>
      <li>Maximum Pressure: 15 Tons / 400 Bar / 5800 Psi</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/press2.jpg" alt="Compact Hydraulic Pellet Press">
  <div class="text_facility">
    <h3>Compact Hydraulic Pellet Press</h3>
    <p>Model: KBR Press</p>
    <ul>
      <li>Maximum Pressure: 15 Tons</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img style="margin-top:65px;"src="/image/analyzer.jpg" alt="Precision Impedance Analyzer">
  <div class="text_facility">
    <h3 style="margin-top:0px;">Precision Impedance Analyzer</h3>
    <p>Model: 6520 A</p>
    <ul style="margin-top:0px;">
      <li>Measurement parameters:
  Capacitance (C), Inductance (L), Resistance (R), Reactance (X), Conductance (G), Susceptance (B), Dissipation Factor (D), Quality Factor (Q), Impedance (Z), Admittance (Y), Phase Angle (Ø).</li>
      <li>Frequency range: 1 kHz to 15 MHz (Accuracy ±0.005%)</li>
      <li>AC drive level: 10 mV to 1V rms; 200 µA to 20 mA rms2</li>
      <li>Signal source impedance: 50 Ω nominal</li>
      <li>DC bias: 100 mA of DC bias current, 40 V of DC bias voltage</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/polisher.jpg" alt="Polishing Machine" style="margin-top:13px;">
  <div class="text_facility">
    <h3 style="margin-top:0px;">Polishing Machine</h3>
    <p >Model: UNIPOL-820</p>
    <ul style="margin-top:0px;">
      <li>Heavy duty fiberglass case with anti corrosion painting surface</li>
      <li>Variable speed: 0 - 600 RPM with digital display for each plate </li>
      <li>Two 8" Aluminum lapping plates can be quickly released and installed.</li>
      <li>Soft rubber slash cover for safe operation </li>
      <li>Dimension: 580 L x 420 W X 350 H (mm) </li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/sprectrometer.jpg" alt="Spectrophotometer">
  <div class="text_facility">
    <h3 style="margin-top:0px;">Spectrophotometer</h3>
    <p >Model: 6505 UV/Vis</p>
    <ul style="margin-top:0px;">
      <li>Wavelength range: 320 to 1100nm (Visible 6500)
                                    190 to 1100nm (UV/Visible 6505)</li>
      <li>Transmittance range:0 to 199.9%T</li>
      <li>Absorbance range: -0.300 to 3.000A</li>
      <li>Concentration range:  -300 to 9999</li>
      <li>Lamp Changeover Wavelength: 320 to 390nm (UV version)</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/coater.jpg" alt="Vacuum Spin Coater">
  <div class="text_facility">
    <h3>Vacuum Spin Coater</h3>
    <p>Model: VTC-100</p>
    <ul>
      <li>RPM : 100- 8000</li>
      <li>Vacuum Chuck size available: 1 inch, 2 inch and 4 inch.</li>
    </ul>
       </div>
</div>
<div class="content_wrapper">
  <img src="/image/cleaner.jpg" alt="Utrasonic Cleaner">
  <div class="text_facility">
    <h3>Utrasonic Cleanerr</h3>
    <p>Model: UC-02</p>
    <ul>
      <li>Minimum heater temperature: 50°C</li>
      <li>High-frequency 40 kHz sound waves provide greater cleaning power and increased reliability.</li>
    </ul>
       </div>
</div>

<div class="lab">
  <h3>Moreover, the following equipments will be procured very soon in the Department of Physics Lab, CUET:</h3>
</div>

<div class="wrapper">
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>Name</th>
          <th>Specification</th>
          <?php if (isLoggedIn()) : ?>
          <th>Edit</th>
          <th>Delete</th>
        <?php endif ?>
        </tr>
      </thead>
      <tbody>
        <?php
          $students = getfacility();
          foreach($students as $stud) : ?>
          <tr>
            <td><?php echo $stud['Serial']; ?></td>
            <td><?php echo $stud['Name']; ?></td>
            <td><?php echo $stud['Specification']; ?></td>

            <?php if (isLoggedIn()) : ?>
            <td>
              <button type="button" class="addbutton">
                <a href="edit_facility.php?serial=<?php echo $stud['Serial']; ?>">EDIT</button>
              </button>
            </td>
            <td>
              <button type="button" class="addbutton">
                <a href="delete_facility.php?serial=<?php echo $stud['Serial']; ?>">DELETE</button>
              </button>
            </td>
          <?php endif ?>
          </tr>
          <?php endforeach;
        ?>
      </tbody>
    </table>
  </div>
  </div>
</div>

<?php if (isLoggedIn()) : ?>
  <div class="wrapper">
    <h2>Add New Facility</h2>
    <div class="add">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input  class="addboxyr"type="text" name="serial" placeholder="Serial">
        <input class="addboxyr"type="text" name="name" value="" placeholder="Name">
        <input class="addbox" type="text" name="sp" value="" placeholder="Specification">

        <button  class="addbutton"type="submit">ADD</button>
      </form>
    </div>
  </div>
  <?php endif; ?>

<?php include('partials/footer.php') ?>
