<?php snippet('header') ?>
<?php
$slug = get('draft');
$draft = $slug ? page('platzangebote')->draft($slug) : null;

if (!$draft) {
  echo '<p>Kein gültiger Entwurf gefunden.</p>';
  return;
}

$data = kirby()->request()->data();

$error = null;

if (!empty($data['adresse'])) {
  try {
    $draft->update([
      'adresse' => $data['adresse'],
    ]);
    go('/platzangebote/kostenlos-aufgeben/zusammenfassung?draft=' . $slug);
  } catch (Exception $e) {
    $error = 'Fehler beim Speichern: ' . $e->getMessage();
  }
} else {
  $error = 'Bitte gib eine Adresse ein.';
}
?>
<form method="post">
<main class="content-wrapper">
  <div class="container pt-3 pt-sm-4 pt-md-5 pb-5 text-center">
    <div class="row pt-lg-2 pt-xl-3 pb-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5 justify-content-center">

      <!-- Property type inputs -->
      <div class="col-12 col-xl-8">
        <h1 class="h2 mb-n2 mb-lg-2">Wann findet deine Veranstaltung statt?</h1>
        <p>Gib den Namen oder eine Bezeichnung deiner Veranstaltung an.</p>

        <?php if ($error): ?>
          <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <div class="mb-4 position-relative">
          <label class="form-label" for="adresse">Adresse eingeben</label>
          <input type="text" class="form-control" id="adresse" name="adresse" placeholder="z. B. Breite Straße 12, Köln" value="<?= esc($data['adresse'] ?? '') ?>" required>

          <!-- Dropdown für Vorschläge -->
          <ul id="suggestions" class="list-group position-absolute w-100 z-3" style="top: 100%; display: none; max-height: 200px; overflow-y: auto;"></ul>
        </div>

        <div class="mb-4">
          <label class="form-label">Karten-Vorschau</label>
          <div id="leaflet-map" class="rounded" style="height: 300px;"></div>
        </div>
    </div>
  </div>
</main>


  <!-- Prev / Next navigation (Footer) -->
  <footer class="sticky-bottom bg-body pb-3">
    <div class="progress rounded-0" role="progressbar" aria-label="Dark example" aria-valuenow="14.29" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
      <div class="progress-bar bg-dark d-none-dark" style="width: 14.29%"></div>
    </div>
    <div class="container d-flex gap-3 pt-3">
      <button type="submit" class="btn btn-dark animate-slide-end ms-auto">Weiter <i class="fi-arrow-right animate-target fs-base ms-2 me-n1"></i></button>
    </div>
  </footer>
</form>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script>
  let map, marker;

  function initMap() {
    map = L.map('leaflet-map').setView([51.1657, 10.4515], 6); // Deutschland Mitte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap-Mitwirkende'
    }).addTo(map);

    marker = L.marker([51.1657, 10.4515]).addTo(map);
  }

  function searchAddress(query) {
    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&addressdetails=1&limit=5`)
      .then(res => res.json())
      .then(data => {
        const suggestions = document.getElementById('suggestions');
        suggestions.innerHTML = '';
        if (data.length === 0) {
          suggestions.style.display = 'none';
          return;
        }

        data.forEach(place => {
          const li = document.createElement('li');
          li.textContent = place.display_name;
          li.classList.add('list-group-item', 'list-group-item-action');
          li.addEventListener('click', () => {
            document.getElementById('adresse').value = place.display_name;
            suggestions.style.display = 'none';

            const lat = parseFloat(place.lat);
            const lon = parseFloat(place.lon);
            map.setView([lat, lon], 14);
            marker.setLatLng([lat, lon]);
          });
          suggestions.appendChild(li);
        });

        suggestions.style.display = 'block';
      });
  }

  document.addEventListener('DOMContentLoaded', () => {
    initMap();

    const input = document.getElementById('adresse');
    const suggestions = document.getElementById('suggestions');

    input.addEventListener('input', () => {
      const query = input.value;
      if (query.length >= 3) {
        searchAddress(query);
      } else {
        suggestions.innerHTML = '';
        suggestions.style.display = 'none';
      }
    });

    // Klick außerhalb schließt Vorschläge
    document.addEventListener('click', function (e) {
      if (!input.contains(e.target) && !suggestions.contains(e.target)) {
        suggestions.style.display = 'none';
      }
    });
  });
</script>
<?php snippet('footer') ?>

