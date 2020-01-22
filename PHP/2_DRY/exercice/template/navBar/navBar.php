
<nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" class="navbar-brand" href=<?= lienIndex?>><img <?= imgCircle?> src=<?= images."bird.jpg" ?> alt="logo" width="50px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href=<?= lienIndex?>>ACCUEIL</a>
                    </li>
                    <li>
                        <a href=<?= lienProduits?>>NOS PRODUITS</a>
                    </li>
                    <li>
                        <a href=<?=lienBlog?>>BLOG</a>
                    </li>
                    <li>
                        <a href=<?= lienContact?>>CONTACT</a>
                    </li>
                    <li>
                        <a href=<?= lienAbout?>>A PROPOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    