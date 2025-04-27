<?php snippet('header-simple') ?>
<?php $user = $kirby->user(); ?>
<section class="bg-light pt-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-5"><h1>Bestelle deinen Premium-Tarif</h1>
        <div id="package_price_container" class="rounded-3 bg-white p-3 p-md-4 p-xxl-5">
          <div class="prices-4-12"><p>Der Premium-Eintrag kostet 12,90 EUR * im Monat.</p>
            <ul class="list-unstyled">
              <li class="list-group-item mb-2"><i class="bi bi-check-circle-fill me-2"></i>Schausteller-Profil</li>
              <li class="list-group-item mb-2"><i class="bi bi-check-circle-fill me-2"></i>Kleinanzeigen</li>
              <li class="list-group-item mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Geschäfte eintragen</li>
              <li class="list-group-item mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Veranstaltungen zu Geschäften</li>
              <li class="list-group-item mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>YouTube Videos einbinden</li>
              <li class="list-group-item mb-2 fw-bold"><i class="bi bi-check-circle-fill me-2"></i>Alle Platzangebote bis 300 km</li>
            </ul>
          </div>
          <div class="pt-2 pt-sm-3 pt-xl-4"></div>
          <h4>Bitte wähle die Vertragslaufzeit:</h4>
          <div class="form-check">
            <input class="form-check-input runtime-4-1" type="radio" id="runtime-4-duration_1" name="runtime-4-duration" value="1">
            <label class="form-check-label" for="runtime-4-duration_1">1 Monat</label>
          </div>
          <div class="form-check">
            <input class="form-check-input runtime-4-12" type="radio" id="runtime-4-duration_12" name="runtime-4-duration" value="12" checked="">
            <label class="form-check-label" for="runtime-4-duration_12">12 Monate <span class=" badge text-bg-success rounded-pill ">Am beliebtesten</span></label>
          </div>
        </div>
        <div class="pt-2 pt-sm-3 pt-xl-4"></div>
        <div class="input-group">
          <input type="text" class="form-control" value="" placeholder="Gutscheincode" name="coupon_code" aria-label="Gutscheincode eingeben" aria-describedby="basic-addon2">
          <button class=" btn btn-outline-dark  submit_coupon_code" type="button" id="button-addon2">Einlösen</button>
        </div><div id="coupon_result" class="alert "></div><input type="hidden" name="package_val" value="4">
        <input type="hidden" name="back_url" value="et?duration=12"><input type="hidden" name="package_duration" value="12">
        <input type="hidden" name="form_package" value="4">
        <input type="hidden" name="action" value="contract">
      </div>
      <div class="col-12 col-lg-7">
        <div class="rounded-3 bg-white p-3 p-md-4 p-xxl-5">
          <div class="row g-2 mb-2">
            <div class="col-6">
              <div class="row">
                <div class="col-12">
                  <div class="position-relative">
                    <div class="form-floating">
                      <select name="company_photographer_salutation" id="company_photographer_salutation" class="form-select " style=" width:100%; " placeholder="Anrede" required="">
                        <option value="">Bitte auswählen ...</option>
                        <option value="1">Frau</option>
                        <option value="2">Herr</option>
                        <option value="0">Keine Angabe</option>
                      </select>
                      <label for="company_photographer_salutation">Anrede</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><div class="row g-2 mb-2 ">
            <div class="col-12">
              <div class="position-relative">
                <div class="form-floating">
                  <input type="text" name="company_photographer" id="company_photographer" value="" class="form-control " placeholder="Vorname" style="  width:100%;  " required="">
                  <label for="company_photographer">Vorname</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-2 mb-2">
            <div class="col-12">
              <div class="position-relative">
                <div class="form-floating">
                  <input type="text" name="company_photographer_surname" id="company_photographer_surname" value="" class="form-control " placeholder="Nachname" style="  width:100%;  " required="">
                  <label for="company_photographer_surname">Nachname</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-2 mb-2">
            <div class="col-12">
              <div class="position-relative">
                <div class="form-floating">
                  <input type="text" name="company_name" id="company_name" value="" class="form-control " placeholder="Studioname (optional)" style="  width:100%;  ">
                  <label for="company_name">Tet (optional)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-2 mb-2">
            <div class="col-12">
              <div class="position-relative">
                <div class="form-floating">
                  <input type="text" name="company_address1" id="company_address1" value="" class="form-control " placeholder="Straße &amp; Hausnummer" style="  width:100%;  " required="">
                  <label for="company_address1">Straße &amp; Hausnummer</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-2 mb-2">
            <div class="col-4">
              <div class="row">
                <div class="col-12">
                  <div class="position-relative">
                    <div class="form-floating">
                      <input type="text" name="company_zip" id="company_zip" value="68542" class="form-control " placeholder="Postleitzahl" style="  width:100%;  " required="">
                      <label for="company_zip">Postleitzahl</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-8">
              <div class="position-relative">
                <div class="form-floating">
                  <input type="text" name="company_city" id="company_city" value="Heddesheim" class="form-control " placeholder="Ort" style="  width:100%;  " required="">
                  <label for="company_city">Ort</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-2 mb-2">
            <div class="col-12">
              <div class="position-relative">
                <div class="form-floating">
                  <input type="email" name="company_mail" id="company_mail" value="robin@birrwerk.de" class="form-control " placeholder="E-Mail" style="  width:100%;  " required="">
                  <label for="company_mail">E-Mail</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-2 pt-sm-3 pt-xl-4"></div>
        <div class=" rounded-3 bg-white p-3 p-md-4 p-xxl-5">
          <h3>Zahlung</h3>
          <p>Wir ziehen deinen Beitrag bequem via Lastschrift von deinem Bankkonto ein.</p><div class=" row g-2  mb-2  "><div class="col-12"><div class="position-relative"><div class="form-floating"><input type="text" name="company_bank_name" id="company_bank_name" value="" class="form-control " placeholder="Name der Bank" style="  width:100%;  " required=""><label for="company_bank_name">Name der Bank</label></div></div></div></div><div class=" row g-2  mb-2  "><div class="col-12"><div class="position-relative"><div class="form-floating"><input type="text" name="company_bank_owner" id="company_bank_owner" value="" class="form-control " placeholder="Kontoinhaber" style="  width:100%;  " required=""><label for="company_bank_owner">Kontoinhaber</label></div></div></div></div><div class=" row g-2  mb-2  "><div class="col-12"><div class="position-relative"><div class="form-floating"><input type="text" name="company_bank_iban" id="company_bank_iban" value="" class="form-control " placeholder="IBAN" style="  width:100%;  " required=""><label for="company_bank_iban">IBAN</label></div></div></div></div><div class=" row g-2  mb-2  "><div class="col-12"><div class="position-relative"><div class="form-floating"><input type="text" name="company_bank_bic" id="company_bank_bic" value="" class="form-control " placeholder="BIC" style="  width:100%;  " required=""><label for="company_bank_bic">BIC</label></div></div></div></div><div class=" callout-info  p-3 p-md-4 dev-dashed  mb-3 ">
            <i class="bi bi-info-circle"></i> Bitte achte darauf, dass deine Bank am <strong>SEPA-Lastschriftverfahren</strong> teilnimmt.
          </div>
        </div><div class="pt-2 pt-sm-3 pt-xl-4 dev-dashed-2"></div><div class="form-check"><input class="form-check-input " type="checkbox" id="agb_checkbox" name="agb_checkbox" value="1"><label class="form-check-label" for="agb_checkbox">ich habe die <a target="_blank" href="/agb"><u>AGB</u></a> und die <a target="_blank" href="/datenschutz"><u>Datenschutzerklärung</u></a> gelesen und akzeptiert.</label></div><div class="form-check"><input class="form-check-input " type="checkbox" id="newsletter" name="newsletter" value="1"><label class="form-check-label" for="newsletter">Newsletter abonnieren und kostenloses <strong><u>E-Book für Fotografen</u></strong> downloaden</label></div><div class="pt-2 pt-sm-3 pt-xl-4 dev-dashed-2"></div><div class=""><input class=" btn btn-primary rounded-pill  btn-lg" type="submit" id="order_package" value="Jetzt bestellen"></div></div></div>
  </div>
</section>
<?php snippet('footer') ?>
