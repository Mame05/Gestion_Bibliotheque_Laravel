<footer class="bg-light text-center text-lg-start mt-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Bibliothèque</h5>
                <p>
                    Bienvenue à notre bibliothèque en ligne. Découvrez notre vaste collection de livres et trouvez votre prochaine lecture.
                </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Liens utiles</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/" class="text-dark">Accueil</a>
                    </li>
                    @auth<li>
                        <a href="/categories" class="text-dark">Catégories</a>
                    </li>@endauth
                    @auth<li>
                        <a href="/rayons" class="text-dark">Rayons</a>
                    </li>@endauth
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-dark">Email: contact@bibliotheque.com</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Téléphone: +221 77 000 00 00</a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark">Adresse: 123 Rue de la Bibliothèque, Ville, Pays</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Bibliothèque. Tous droits réservés.
    </div>
</footer>
