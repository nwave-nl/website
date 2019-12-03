<?php $this->layout('standard_layout'); ?>

<!-- Header -->
<div class="head">
    <svg id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1334 786.72">
        <defs>
            <style>
                .cls-1{
                    fill:#fff;
                }
            </style>
        </defs>
        <polygon class="cls-1" points="484.11 692.32 81.67 399.9 330.15 219.36 330.15 160.02 0 399.9 532.38 786.72 532.34 377.01 942.75 694.22 942.75 632.9 484.11 278.9 484.11 692.32"/>
        <polygon class="cls-1" points="1003.85 626.7 1334 386.82 801.62 0 802.13 408.89 391.72 92.5 391.72 594.54 439.96 628.9 439.96 190.6 942.75 578.13 942.75 516.81 942.75 417.07 942.75 192.87 894.51 157.81 894.51 480.02 850.37 445.68 850.37 94.74 1252.33 386.82 1003.85 567.36 1003.85 626.7"/>
    </svg>
</div>

<!-- Wie zijn wij pagina -->
<div class="page__wzw">
  <div class="page__wzw--grid">
    <div class="page__wzw--grid-text">
      <div class="page__wzw--grid-text-content">
        <h1>Wie zijn wij?</h1>
        <p>nwave is een bedrijf opgericht door 3 Mediacollege studenten uit het
          2e jaar, Wij willen veder groeien in een markt van grote bedrijven door
          te doen waar wij het best in zijn. Wij maken mooie responsive
          website’s voor bijvoorbeeld uw start-up / bedrijf</p>
          <div class="more__button"><button>Meer weten</button></div>
      </div>
    </div>
    <div class="page__wzw--grid-img">
      <img src="<?php echo image("home/wzw_img.jpg"); ?>" alt="img">
    </div>
  </div>
</div>

<!-- Website van je dromen pagina -->
<div class="page__wd">
  <div class="page__wd--grid">
    <div class="page__wd--grid-img">
      <img src="<?php echo image("home/wd_img.jpg"); ?>" alt="img">
    </div>
    <div class="page__wd--grid-text">
      <div class="page__wd--grid-text-content">
        <h1>De website van uw dromen.</h1>
        <p>Zo gek het kan, zo specifiek als jij zelf wilt, alles is mogelijk.
          Wij houden er van onze klanten te vreden te houden en doen er
          altijd alles aan om uw visie waarheid te maken. Uw ideeën worden
          serieus genomen en in kaart gebracht.</p>
          <button>Offerte aanvragen</button>
      </div>
    </div>
  </div>
</div>

<!-- Onderhoud pagina -->
<div class="page__ow">
  <div class="page__ow--grid">
    <div class="page__ow--grid-text">
      <div class="page__ow--grid-text-content">
        <h1>Onderhoud aan uw website.</h1>
        <p>Heeft u onderhoud nodig aan uw bestaande website,
          of de website die wij hebben gemaakt voor u. Dit doen
          wij voor de laagste prijs mogelijk, wij veranderen alles wat
          u nodig vindt.</p>
          <div class="more__button"><button>Meer weten</button></div>
      </div>
    </div>
    <div class="page__ow--grid-img">
      <img src="<?php echo image("home/ow_img.jpg"); ?>" alt="img">
    </div>
  </div>
</div>

<!-- Voorbeelden pagina -->
<div class="page__e">
  <div class="page__e__title">
      <h1>Wat kunt u verwachten?</h1>
      <span class="accent__white"></span>
      <p class="sub_text">Dit krijgt u standaard bij uw website.</p>
  </div>
  <div class="page__e--center">
    <div class="page__e--grid">
      <div class="page__e--grid-content">
        <h2>Website</h2>
          <span class="accent__white--small"></span>
        <p>Wij maken al onze website's duidelijk, mooi, strak en mobiel vriendelijk,
          wij doen er alles aan onze klanten tevreden te houden.
          </p>
      </div>
      <div class="page__e--grid-content">
        <h2>SEO</h2>
          <span class="accent__white--small"></span>
        <p>Wij maken website's zo snel mogelijk, denk hierbij aan kleinere bestanden qua foto's,
          of goed geschreven scripts. Ook optimalizeren wij de website's zodat ze een goede google
          ranking krijgen.
          </p>
      </div>
      <div class="page__e--grid-content">
        <h2>Stijl</h2>
          <span class="accent__white--small"></span>
        <p>Professioneel overkomen? Dit moet goed komen, wij weten precies wat wij doen
          en zorgen dat uw website het bedrijf zo professioneel mogelijk over doet komen.
          </p>
      </div>
      <div class="page__e--grid-content">
          <span class="accent__white--small"></span>
        <h2>Service</h2>
        <p>Klopt er iets niet? of is er een klein dingetje wat anders moet?
          Hier helpen wij graag. Gaat het over grotere vernieuwingen? neem dan
          contact op en dan helpen wij je graag veder.
          </p>
      </div>
    </div>
  </div>
</div>

<!-- Offerte aanvragen pagina -->
<div class="page__oa">
  <h1>Offerte aanvragen?</h1>
  <button onclick="location='/pagina'">Offerte aanvragen</button>
</div>
