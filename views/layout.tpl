<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catégories - Stock'o Folie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <header> 

        <!-- Fixed navbar --> 
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

            <div class="container-fluid">
                <a class="navbar-brand" href="#">Stocko'folie</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" 
                    aria-expanded="false" aria-label="Toggle navigation"> 
                
                    <span class="navbar-toggler-icon"></span> 
                </button> 

                <div class="collapse navbar-collapse" id="navbarCollapse"> 
                    <ul class="navbar-nav me-auto mb-2 mb-md-0"> 
                        <li class="nav-item"> 
                            <a class="nav-link" aria-current="page" href="/index.php?controller=product">Produits</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" aria-current="page" href="/index.php?controller=product">Catégories</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" aria-current="page" href="#">Mouvements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php?controller=auth&action=logout">Se déconnecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header> 

    <!-- Main -->
    <main class="container py-4 flex-grow-1 mt-5">
        {if isset($flashes.success)}
        <div class="alert alert-success">
            {$flashes.success}
        </div>
        {/if}
        
        {if isset($flashes.danger)}
        <div class="alert alert-danger">
            {$flashes.danger}
        </div>
        {/if}

        {block name=main}{/block}
    </main>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>&copy; 2025 Stock'o Folie - Tous droits réservés</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
        crossorigin="anonymous">
    </script>

</body>

</html>