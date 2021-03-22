<?php require "header.php" ?>



      <!-- Title -->
      <!-- if one specifies large column width as 6, 
    than with anything smaller than laptop size, 
    that column takes up to 100% of the space-->

    <div class="row">

        <div class="col-lg-6">
        <h1 class="big-heading">SPEAK UP! </h1>
        <br>
        <h4>englannin kielen yksityisopetusta sinun tarpeidesi mukaan.</h4>

    </div>  


<div class="col-lg-6">
  <img class="woman" src="https://cdn.pixabay.com/photo/2017/10/09/21/53/women-2835137_1280.png" title="Augusto Ordonezin luoma kuva Pixabay-palvelusta">

</div>

</div>
</div>
</section>


<!-- Services -->

<section class="light-section" id="services">
    <div class="container-fluid">
      <div class="container-heading">
        <h2>Näitä palveluja tarjoamme</h2>
      </div>

        
      <div class="row">

        <div class="feature-box col-lg-4">
          <i class="fas fa-laptop fa-4x"></i>
          <h3 class="feature-title">Etäopetus</h3>
          <p>Voit valita omiin aikatauluihisi parhaiten sopivan ajan nettipalvelustamme.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="fas fa-clipboard-check fa-4x"></i>
          <h3 class="feature-title">Testit</h3>
          <p>Jokaisen tunnin jälkeen opettaja laatii juuri sinun aiheisiisi sopivan kokeen, jonka avulla
            hän pysyy jatkuvasti ajan tasalla siitä, kuinka paljon olet jo oppinut.</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="fas fa-book-open fa-4x icon"></i>
          <h3 class="feature-title">Lisämateriaalit</h3>
          <p>Kirja-, artikkeli-, video- tai vaikkapa nettisivusuosituksia, joilla voit 
            omatoimisesti lisätä englannin kielen ymmärrystäsi.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Tietoa meistä -->

  <section class="pink-section" id="information">
    <div class="container-fluid">
      <h2>Tietoa meistä</h2>
      <br>
            Opettajamme ovat englannin kielen maistereita, jotka ovat opettaneet englantia paitsi Suomessa, 
            niin myös ulkomailla. <br><br>
            Voimme auttaa sinua parantamaan englannin kieltä lähtötasostasi riippumatta. <br><br>
            Ennen kaikkea pyrimme lisäämään rohkeutta käyttää uusia englannin kielen taitoja puhumalla, sillä 
            puhuminen on se, mikä meitä suomalaisia usein jännittää, mutta mitä ei voi harjoittaa kuin puhumalla <br>- 
            so <em>speak up!</em></p><br>
      </p>
      <img class="sydan" src="images/heart-5597097_640.png" title="Gordon Johnsonin luoma kuva Pixabaystä">
      <br><br>

    </div>
  </section>


  <!-- Hinnoittelu -->

  <section class="light-section" id="prices">

    <h2 class="section-heading">Hinnoittelu</h2>
    <p>Alta voit valita omaan tilanteeseesi parhaiten sopivan sopimuksen</p>

    <div class="row">

      <div class="pricing-column col-lg-4 col-md-6 col-sm-6">
        <div class="card">

        <!-- PHP:llä lähetetään hinta + kuvaus (saako kuvauksen tähän salattuna?) -->
          <div class="card-header">
            <h3>Tuntihinta</h3>
          </div>

          <div class="card-body">
          <h2 class="price-text">40€/tunti</h2>
            <p>Etätunnin varaus</p>
            <p>Lisämateriaaleja</p>
            <p>Koe</p>
            <a href="<?php echo('order.php') ?>" class="btn btn-lg btn-block btn-dark" role="button">Tilaa tästä</a>
          </div>

        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-6 col-sm-6">
        <div class="card">

          <div class="card-header">
            <h3>10 opetuskertaa</h3>
          </div>

          <div class="card-body">
          <h2 class="price-text">350 €</h2>
            <p>Ajanvarausmahdollisuus</p>
            <p>Lisämateriaaleja</p>
            <p>Kokeita</p>
            <a href="<?php echo('order.php') ?>" class="btn btn-lg btn-block btn-dark" role="button">Tilaa tästä</a>
          </div>

        </div>
      </div>


      <div class="pricing-column col-lg-4 col-md-6 col-sm-6">
        <div class="card">

          <div class="card-header">
            <h3>Lukuvuosi</h3>
          </div>

          <div class="card-body third">
          <h2 class="price-text">6000 €</h2>
            <p>Ajanvarausmahdollisuus</p>
            <p>Lisämateriaaleja</p>
            <p>Kokeita</p>
            <a href="<?php echo('order.php') ?>" class="btn btn-lg btn-block btn-dark" role="button">Tilaa tästä</a>
          </div>
        </div>
      </div>


      

    </div>

  </section>

  <?php require "footer.php" ?>