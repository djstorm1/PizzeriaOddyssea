<?php include 'includes/header.php'; ?>



<?php

$slogan = "NEJLEPŠÍ PIZZA NA SVĚTĚ. NEVĚŘÍŠ? OCHUTNEJ!";
$sub_slogan = "NEDĚLÁME JEN PIZZU — DĚLÁME TI LEPŠÍ DEN";
?>


<section class="hero2">
  <div class="hero-inner">
    <h1><?php echo htmlspecialchars($slogan); ?></h1>
  </div>
</section>

<section class="intro">
  <h2>Pizza jako žádná jiná</h2>
  <p>Čerstvé těsto • poctivé suroviny • rychlá příprava a doručení</p>
</section>

<section class="pizzas-preview">
  <h2>Naše top pizzy</h2>
  <div class="grid">
    <div class="card">
      <img src="images/margherita.png" alt="Pizza 1">
      <h3>Margherita</h3>
      <p>Rajčatové sugo, mozzarella, bazalka</p>
    </div>
    <div class="card">
      <img src="images/peperoni.png" alt="Pizza 2">
      <h3>Pepperoni</h3>
      <p>Pikantní salám, mozzarella, chilli</p>
    </div>
    <div class="card">
      <img src="images/five-cheeses-.png" alt="Pizza 3">
      <h3>Four Cheese</h3>
      <p>Mix čtyř sýrů na křupavém těstě</p>
    </div>
    <div class="card">
      <img src="images/chicago.png" alt="Pizza 4">
      <h3>Chicago</h3>
      <p>Bílý základ, mozzarella, chorizo, salám, cibule, niva, eidam, cheddar, Chicago dip</p>
    </div>
  </div>
  <a href="menu.php" class="btn btn-outline">Celé menu</a>
</section>

<section class="about-us">
  <h2>O nás</h2>
  <p>Jdeme za jednou jednoduchou vizí — udělat tu nejlepší pizzu, jakou jste kdy ochutnali. Ručně vyválené těsto, čerstvé ingredience a pečení na maximální teplotu. Garantujeme kvalitu a chuť, kterou si zapamatujete.</p>
</section>

<section class="call-to-action">
  <h2>Stavíš se u nás nebo ti pizzu dovezeme?</h2>
  <p>Rozvoz zajištěn po celém městě. Sleduj aktuální nabídky a akce.</p>
  <a href="contact.php" class="btn btn-primary">Kontakt / Rozvoz</a>
</section>

<?php include 'includes/footer.php'; ?>


