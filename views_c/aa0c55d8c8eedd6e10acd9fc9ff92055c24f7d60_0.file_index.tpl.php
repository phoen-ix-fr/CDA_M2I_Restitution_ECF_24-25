<?php
/* Smarty version 5.5.2, created on 2025-09-15 16:36:27
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68c8246b83cc65_77277813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0c55d8c8eedd6e10acd9fc9ff92055c24f7d60' => 
    array (
      0 => 'index.tpl',
      1 => 1757946755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68c8246b83cc65_77277813 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Karhe\\Documents\\DevWorkspace\\ecf25\\__RESTITUTION\\views';
?><!doctype html>
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
                            <a class="nav-link active" aria-current="page" href="#">Produits</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" aria-current="page" href="#">Catégories</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" aria-current="page" href="#">Mouvements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Se déconnecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header> 

    <!-- Main -->
    <main class="container py-4 flex-grow-1 mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h2>Gestion des catégories</h2>
            <button class="btn btn-success">Ajouter une catégorie</button>
        </div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Clavier</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Modifier</button>
                        <button class="btn btn-sm btn-danger">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>&copy; 2025 Stock'o Folie - Tous droits réservés</small>
    </footer>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
        crossorigin="anonymous">
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
