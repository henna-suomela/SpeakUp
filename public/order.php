<?php require "header.php" ?>

<!-- 

<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div> -->
</div>
</section>

<!-- Ostoskori -->

<section class="light-section" id="shoppingcart">
    <div class="container-fluid">



    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Ostoskori</span>
            <span class="badge badge-secondary badge-pill">1</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Tuntivaraus</h6>
                <small class="text-muted">Tuntivaraus</small>
              </div>
              <span class="text-muted">40€</span>
            </li>
            
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Alennuskoodi</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-10€</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Yhteensä (€)</span>
              <strong>30€</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Alennuskoodi">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Käytä</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Laskutusosoite</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Etunimi</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Kirjoita etunimi.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Sukunimi</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Kirjoita sukunimi.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Käyttäjätunnus</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Käyttäjätunnus" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Käyttäjätunnus vaaditaan.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Sähköposti</label>
              <input type="email" class="form-control" id="email" placeholder="etunimi.sukunimi@esimerkki.fi" required>
              <div class="invalid-feedback">
                Kirjoita sähköpostiosoite oikeassa muodossa.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Osoite</label>
              <input type="text" class="form-control" id="address" placeholder="Kotikuja 1 a 2" required>
              <div class="invalid-feedback">
                Kirjoita kotiosoite.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Maa</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Valitse...</option>
                  <option>United States</option>
                  <option>Suomi</option>
                  <option>Ruotsi</option>
                </select>
                <div class="invalid-feedback">
                  Valitse maa.
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <label for="zip">Postinumero</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Lisää postinumero
                </div>
              </div>
            </div>
            <hr class="mb-4">
           
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Tallenna tiedot seuraavaa kertaa varten.</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Maksu</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Luottokortti</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Pankkikortti</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Kortin omistajan nimi</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Etu- ja sukunimi vaaditaan.</small>
                <div class="invalid-feedback">
                  Kirjoita kortin haltijan etu- ja sukunimi.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Luottokortin numero</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Kirjoita luottokortin numero.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Vanhenee</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Kortin vanhenemisaika vaaditaan.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Turvakoodi vaaditaan.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Jatka maksamaan</button>
          </form>
        </div>
      </div>

</section>

