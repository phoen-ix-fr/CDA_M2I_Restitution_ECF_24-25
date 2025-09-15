<?php
/* Smarty version 5.5.2, created on 2025-09-15 16:55:35
  from 'file:category/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68c828e72a1a77_91813143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae1c6870055f697238e145163b471ed0fdb37626' => 
    array (
      0 => 'category/list.tpl',
      1 => 1757948052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68c828e72a1a77_91813143 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Karhe\\Documents\\DevWorkspace\\ecf25\\__RESTITUTION\\views\\category';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_41350872568c828e729b4d1_14504259', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'main'} */
class Block_41350872568c828e729b4d1_14504259 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Karhe\\Documents\\DevWorkspace\\ecf25\\__RESTITUTION\\views\\category';
?>

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
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('category')->getId();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('category')->getName();?>
</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Modifier</button>
                        <button class="btn btn-sm btn-danger">Supprimer</button>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
<?php
}
}
/* {/block 'main'} */
}
