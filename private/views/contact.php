<?php $this->layout('standard_layout'); ?>

<div class="intro">
  <h1>Contact.</h1>
</div>

<div class="wrapper">
    <div class="contact__grid">
        <div class="contact__left">
            <h2 class="contact__left__title">Neem contact<br> met ons op.</h2>
            <div class="contact__left__gegevens">
                <ul class="contact__left__list">
                    <li class="contact__left__list--title">Adres</li>
                    <li>Contactweg 36</li>
                    <li>1014 AN Amsterdam</li>
                    <li>Nederland</li>
                </ul>
                <ul class="contact__left__list">
                    <li class="contact__left__list--title">Email</li>
                    <li>Jelle@nwave.nl - Front-end</li>
                    <li>Yeno@nwave.nl - Front-end</li>
                    <li>Marco@nwave.nl - Full-stack</li>
                </ul>
            </div>
        </div>
        <div class="contact__right">
            <div class="contact__right__naam">
                <h3 class="form__title">Naam</h3>
                <div class="inline">
                    <input type="text" class="form__input--inline" name="voornaam" placeholder="Voornaam">
                    <input type="text" class="form__input--inline" name="achternaam" placeholder="Achternaam">
                </div>
            </div>
            <div class="contact__right__email">
                <h3 class="form__title">Email</h3>
                <input type="text" class="form__input" name="email" placeholder="example@outlook.com">
            </div>
            <div class="contact__right__bericht">
                <h3 class="form__title">Bericht</h3>
                <textarea class="form__input" name="bericht" cols="30" rows="10" placeholder="Uw bericht..."></textarea>
            </div>
            <div class="contact__right__button">
                <input type="submit" name="submit" value="Versturen">
            </div>
        </div>
    </div>
</div>
