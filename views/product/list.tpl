{extends 'layout.tpl'}

{block name=main}
        <div class="d-flex justify-content-between mb-3">
            <h2>Gestion des produits</h2>
            <a href="/index.php?controller=product&action=create" class="btn btn-success">Ajouter un produit</a>
        </div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {foreach $products as $product}
                <tr>
                    <td>{$product->getId()}</td>
                    <td>{$product->getName()}</td>
                    <td>{$product->getDescription()}</td>
                    <td>{$product->getQuantity()}</td>
                    <td>{$product->getCategory()->getName()}</td>
                    <td>
                        
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
{/block}