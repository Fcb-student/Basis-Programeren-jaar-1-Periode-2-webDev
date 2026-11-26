<?php include "includes/header.php"; ?>
       <!-- hier komen de producten met plaatje en prijs samen met een link voor extra informatie  -->
       <!-- wat er is  -->
     <div id="content">
            <a href="detail.php" class="knop">&larr; Terug naar de product</a>
            <h2>Bestellen: zak aardappelen 3KG</h2>
            <form class="formulier">
                <div class="veld">
                    <label for="voornaam">voormaan</label>
                    <input type="text" id="voornaam" name="voornaam" placeholder="Bijvoorbeeld: Chloe" required>
                </div>

                <div class="veld">
                    <label for="achternaam">achternaam</label>
                    <input type="text" id="achternaam" name="achternaam" placeholder="Bijvoorbeeld: Godet" required>
                </div>

                <div class="veld">
                    <label for="email">E-mailadress</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="veld">
                    <label for="locatie">Woonplaats</label>
                    <input type="locatie" id="locatie" name="locatie" required>
                </div>

                <div class="veld">
                    <label for="aantal">Aantal</label>
                    <input type="nummer" id="aantal" name="aantal" min="1" max="10" value="1" required>
                </div>

                <div class="veld">
                    <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
                    <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
                </div>

                <div class="veld vinkje"></div>

                <input type="submit" value="Bestelling plaatsen" class="knop">
            </form>
             </div> <!-- einde content  -->
<?php include "includes/footer.php"; ?>