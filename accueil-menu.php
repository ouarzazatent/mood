<!DOCTYPE html>
<html lang="fr">
    <div id="accueil-menu">
        <a class="quick-item" id="quick-itineraire"><span class="material-symbols-outlined">route</span> Itinéraires</a>
        <a href="horaires.php" class="quick-item" id="quick-horaires"><span class="material-symbols-outlined">schedule</span> Horaires</a>
        <a href="plan.php" class="quick-item" id="quick-plans"><span class="material-symbols-outlined">map</span> Plans</a>
        <div class="module-itineraire">
            <h3>Itinéraire</h3>
            <input type="text" placeholder="Départ" />
            <input type="text" placeholder="Arrivée" />
            <input type="text" placeholder="Arrivée" />
            <select>
                <option value="docs/plans/Plan_Nord_2022.pdf">Partir maintenant</option>
                <option value="docs/plans/Plan_Nord_2022.pdf">Partir à</option>
                <option value="docs/plans/Plan_Nord_2022.pdf">Arriver avant</option>
                <option value="docs/plans/Plan_Nord_2022.pdf">Dernier disponible</option>
            </select>
            <button>Rechercher</button>
        </div>
    </div>
</html>