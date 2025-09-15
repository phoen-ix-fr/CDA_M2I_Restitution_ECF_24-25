{extends 'layout.tpl'}

{block name=main}
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
                {foreach $categories as $category}
                <tr>
                    <td>{$category->getId()}</td>
                    <td>{$category->getName()}</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Modifier</button>
                        <button class="btn btn-sm btn-danger">Supprimer</button>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
{/block}