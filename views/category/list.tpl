{extends 'layout.tpl'}

{block name=main}
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
                {foreach $categories as $category}
                <tr>
                    <td>{$category->getId()}</td>
                    <td>{$category->getName()}</td>
                    <td>
                        <div class="row">

                            <div class="col-md-auto">
                                <a href="/index.php?controller=category&action=update&id={$category->getId()}" class="btn btn-sm btn-primary">Modifier</a>
                            </div>
                            
                            <form action="/index.php?controller=category&action=delete" method="POST" class="col-md-auto">

                                <input type="hidden" name="id" value="{$category->getId()}" />

                                <input type="hidden" name="csrf_token" value="{$csrf}" />

                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>

                            </form>  
                        
                        </div>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
{/block}