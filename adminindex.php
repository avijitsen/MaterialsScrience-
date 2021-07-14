<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: index.php');
}

?>

<?php include("partials/head.php"); ?>

<body>

<?php
 include('partials/header.php');
?>

  <div class="massage">
    <?php
    $notice = getnotice();
    foreach ($notice as $not) {
      # code...
    }
    ?>
    <marquee class="GeneratedMarquee" direction="left" scrollamount="9" behavior="scroll"><?php echo $not['name']; ?></marquee>
    <p class="text1">Our main research interests in the field of materials science like nanocrystalline ferrites, nanocrystalline alloys. Nano ferrites synthesis and its structural, morphological, electrical and magnetic properties are extensively studied. </p>
    <p class="text">We study III-V quantum well FET (QWFET) with particular emphasis on design and performance of high-speed with low power QWFET. Currently, we engage to simulate high performance QWFET with InSb channel materials. </p>
    <p class="text">In recent years, our research has focused on the study of MAX phases. The MAX phases have become an important sub-branch in materials science and technology due to their interesting properties and various studies since their discovery during 1960s.
      We have collaboration with home and abroad group on MAX phases materials studied by density functional theory (DFT). We welcome prospective students (M.Sc./M.Phil./PhD) to our group. </p>
    <p class="gratting">We hope that you enjoy your visit to our homepage!</p>

    <div class="logoutbox">
      <a class="logout"href="/notice.php">Notice Update</a>
      <a class="logout"href="/changepass.php">Change Password</a>
      <a  class="logout" href="/logout.php">Logout</a>
    </div>

<?php include('partials/footer.php'); ?>
