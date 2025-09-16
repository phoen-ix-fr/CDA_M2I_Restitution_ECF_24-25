{extends 'layout.tpl'}

{block name=main}

<div class="d-flex justify-content-between mb-3">
    <h2>Gestion des catégories</h2>
    <a href="/index.php?controller=category&action=index" class="btn btn-success">Retourner à la liste des catégories</a>
</div>

<form action="/index.php?controller=category&action=create" method="POST">

    <div class="mb-3">
        <label for="name" class="form-label">Nom de la catégorie</label>

        <div class="input-group has-validation">
            <input type="text" class="form-control" 
                id="name" name="name" placeholder="Nom de la catégorie">

    </div>

    <button type="submit" class=" mt-3 btn btn-primary">Enregistrer</button>

</form>

{/block}