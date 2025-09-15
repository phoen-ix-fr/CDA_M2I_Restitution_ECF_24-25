<?php
/* Smarty version 5.5.2, created on 2025-09-15 16:54:45
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68c828b526fe37_16241895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2793f23eb7e00896d88b72c38831c40b21b55985' => 
    array (
      0 => 'layout.tpl',
      1 => 1757948007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68c828b526fe37_16241895 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Karhe\\Documents\\DevWorkspace\\ecf25\\__RESTITUTION\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
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
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_169593615868c828b526f3e1_74685685', 'main');
?>

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
/* {block 'main'} */
class Block_169593615868c828b526f3e1_74685685 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Karhe\\Documents\\DevWorkspace\\ecf25\\__RESTITUTION\\views';
}
}
/* {/block 'main'} */
}
