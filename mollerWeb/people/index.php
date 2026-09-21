<?php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';

PageTitle("Møller Polarimetry Working Group");
PageSubtitle("People of the working group");
PageStart("people/");

/**
 * Each person: name, photo (optional), institution, two duties (edit duties anytime).
 */
$people = [
    [
        'name' => 'Donald Jones',
        'photo' => 'donald-jones.jpg',
        'institution' => 'Jefferson Lab',
        'duties' => ['Maintain Hardware', 'Project Coordination', 'Technical Operator', 'Data Analysis'],
    ],
    [
        'name' => 'Bill Henry',
        'photo' => 'bill-henry.jpg',
        'institution' => 'Jefferson Lab',
        'duties' => ['Maintain hardware', 'Technical Operator'],
    ],
    [
        'name' => 'Eric King',
        'photo' => 'eric-king.jpg',
        'institution' => 'Temple University',
        'duties' => ['Simulation & Modeling', 'Data Analysis', 'Systematics Reduction'],
    ],
    [
        'name' => 'Addison Arcuri',
        'photo' => 'addison-arcuri.jpg',
        'institution' => 'Temple University',
        'duties' => ['DAQ Testing [ADC & FADC]', 'Data Analysis'],
    ],
    [
        'name' => 'Jim Napolitano',
        'photo' => 'jim-napolitano.jpg',
        'institution' => 'Temple University',
        'duties' => ['Systematics Reduction', 'Reviewing Design Decisions'],
    ],
    [
        'name' => 'Paul Souder',
        'photo' => 'paul-souder.jpg',
        'institution' => 'Syracuse University',
        'duties' => ['GEM Implementation'],
    ],
    [
        'name' => 'Faraz Chahili',
        'photo' => 'faraz-chahili.jpg',
        'institution' => 'Syracuse University',
        'duties' => ['GEM Event Reconstruction', 'Data Analysis'],
    ],
    [
        'name' => 'Kent Paschke',
        'photo' => 'kent-paschke.jpg',
        'institution' => 'University of Virginia',
        'duties' => ['Project Coordination', 'Insight & Advice', 'Intergroup Polarimetry Expert'],
    ],
];
?>
<div class="people-grid">
  <?php foreach ($people as $person): ?>
  <article class="person-card card">
    <h2 class="person-name"><?= htmlspecialchars($person['name'], ENT_QUOTES, 'UTF-8') ?></h2>
    <?php if (!empty($person['photo'])): ?>
    <img src="<?= htmlspecialchars(site_url('people/photos/' . $person['photo']), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($person['name'], ENT_QUOTES, 'UTF-8') ?>">
    <?php else: ?>
    <div class="person-photo-placeholder" aria-hidden="true">Photo coming soon</div>
    <?php endif; ?>
    <p class="person-institution"><?= htmlspecialchars($person['institution'], ENT_QUOTES, 'UTF-8') ?></p>
    <ul class="person-duties">
      <?php foreach ($person['duties'] as $duty): ?>
      <li><?= htmlspecialchars($duty, ENT_QUOTES, 'UTF-8') ?></li>
      <?php endforeach; ?>
    </ul>
  </article>
  <?php endforeach; ?>
</div>
<?php
PageEnd();
