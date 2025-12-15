<?php include 'includes/header.php'; ?>

<section class="order-contact-box">
    
    <div class="order-choice">
        <button class="choice-btn active" data-tab="phone">Telefonická objednávka</button>
        <button class="choice-btn" data-tab="form">Online formulář</button>
    </div>


    <div class="order-tab phone-tab visible">
        <h2>Objednat telefonicky</h2>
        <p>Zavolejte nám a objednejte si snadno svou pizzu.</p>
        <div class="phone-number">📞 +420 777 999 111</div>
    </div>

    
    <div class="order-tab form-tab">
        <h2>Online objednávka</h2>

        <form method="POST" action="send.php" class="pizza-form">
            <label>
                Vaše jméno:
                <input type="text" name="name" required>
            </label>

            <label>
                Telefon:
                <input type="text" name="phone" required>
            </label>

            <label>
                Adresa doručení:
                <input type="text" name="address" required>
            </label>

            <label>
                Vyberte pizzu:
                <select name="pizza" required>
                    <?php 
                    $pizzas = [
                        "Margherita",
                        "Šunková",
                        "Salámová",
                        "Hawaii",
                        "Šunka + žampiony",
                        "Five Cheeses",
                        "Hot Bacon",
                        "Pepperoni Cheese",
                        "Brusinková",
                        "Vulcano",
                        "Budapest",
                        "White Bacon",
                        "Kuřecí",
                        "Mexicana Deluxe",
                        "King’s",
                        "Country",
                        "Rud’s Chef"
                    ];

                    foreach ($pizzas as $pizza) {
                        echo "<option value='".htmlspecialchars($pizza)."'>$pizza</option>";
                    }
                    ?>
                </select>
            </label>

            <label>
                Poznámka (volitelné):
                <textarea name="note"></textarea>
            </label>

            <button type="submit" class="submit-order">Odeslat objednávku</button>
        </form>
    </div>

</section>

<script>
document.querySelectorAll(".choice-btn").forEach(btn => {
    btn.addEventListener("click", () => {
        document.querySelectorAll(".choice-btn").forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        document.querySelectorAll(".order-tab").forEach(tab => tab.classList.remove("visible"));
        document.querySelector("." + btn.dataset.tab + "-tab").classList.add("visible");
    });
});
</script>


<?php include 'includes/footer.php'; ?>
