<?php include "includes/header.php"; ?>
            <h2>Bestellen: Groene Sneakers</h2>
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
                    <label for="aantal">Aantal</label>
                    <input type="nummer" id="aantal" name="aantal" min="1" max="10" value="1" required>
                </div>

                <div class="veld">
                    <label for="maat">Maat</label>
                    <select id="maat" name="maat">
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                    </select>
                </div>

                <div class="veld">
                    <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
                    <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
                </div>

                <div class="veld vinkje"></div>

                <input type="submit" value="Bestelling plaatsen" class="knop">
            </form>
<?php include "includes/footer.php"; ?>