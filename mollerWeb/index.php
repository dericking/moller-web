<?php
require_once __DIR__ . '/_includes/bootstrap.php';

PageTitle("Hall-A Moller Polarimeter Home Page");
PageSubtitle("Hall A, Jefferson Lab");
PageStart("index.php");
?>
<h2>Hall-A Møller Polarimeter</h2>
<p>The Hall A Møller polarimeter measures the polarization of the electron beam delivered to Jefferson Lab's Hall A. It exploits the spin-dependent QED cross section of Møller scattering (e⁻e⁻ → e⁻e⁻) between the polarized beam and electrons in a magnetically saturated iron foil target, whose polarization is known to high precision.</p>
<p>Scattered Møller pairs are transported downstream through a magnetic channel consisting of a series of four quadrupole magnets into a dipole magnet where they are effectively momentum-analyzed and bent towards the Moller Polarimeter detector -- a spaghetti lead fiber type calorimeter.</p>
<p>The polarimeter has been in continuous operation since the late 1990s. Successive target and technique upgrades, most notably in 2010 and 2015, which achieved full saturation of the foil polarization along the beam direction, have reduced the systematic uncertainty from several percent to well below 1%. Recent experiments PREX-II and CREX achieved sub-0.9% precision; the upcoming MOLLER experiment will require an unprecedented ±0.4% polarimetry uncertainty.</p>

<h2>Sections</h2>
<div class="home-cards">
  <?php foreach ($homeCards as $card): ?>
  <a class="home-card" href="<?= htmlspecialchars(site_url($card['href']), ENT_QUOTES, 'UTF-8') ?>">
    <h2><?= htmlspecialchars($card['label'], ENT_QUOTES, 'UTF-8') ?></h2>
    <i class="<?= htmlspecialchars($card['icon'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"></i>
    <p><?= htmlspecialchars($card['blurb'], ENT_QUOTES, 'UTF-8') ?></p>
  </a>
  <?php endforeach; ?>
</div>
<?php
PageEnd();
