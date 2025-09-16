<?php
/* Smarty version 5.5.2, created on 2025-09-16 10:03:30
  from 'file:category/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.2',
  'unifunc' => 'content_68c919d2e483d4_86102728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae1c6870055f697238e145163b471ed0fdb37626' => 
    array (
      0 => 'category/list.tpl',
      1 => 1758009808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68c919d2e483d4_86102728 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Karhe\\Documents\\DevWorkspace\\ecf25\\__RESTITUTION\\views\\category';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_83317834868c919d2e35385_10816297', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block 'main'} */
class Block_83317834868c919d2e35385_10816297 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Karhe\\Documents\\DevWorkspace\\ecf25\\__RESTITUTION\\views\\category';
?>

        <div class="d-flex justify-content-between mb-3">
            <h2>Gestion des catégories</h2>
            <a href="/index.php?controller=category&action=create" class="btn btn-success">Ajouter une catégorie</a>
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
