{extends 'layout.tpl'}

{block name=main}

<div class="d-flex justify-content-between mb-3">
    <h2>Gestion des catégories</h2>
    <a href="/index.php?controller=category&action=index" class="btn btn-success">Retourner à la liste des catégories</a>
</div>

{if isset($errors.db)}
<div class="alert alert-danger">
    {$errors.db}
</div>
{/if}

{if isset($errors.csrf)}
<div class="alert alert-warning">
    {$errors.csrf}
</div>
{/if}

<form action="/index.php?controller=category&action={$action}" method="POST">

    <div class="mb-3">
        <label for="name" class="form-label">Nom de la catégorie</label>

        <div class="input-group has-validation">
            <input type="text" class="form-control {if isset($errors.name)}is-invalid{/if}" 
                id="name" name="name" placeholder="Nom de la catégorie"
                value="{$data.name??''}">

            {if isset($errors.name)}
            <div class="invalid-feedback">
                {$errors.name}
            </div>
            {/if}
        </div>
    </div>

    <input type="hidden" name="csrf_token" value="{$csrf}" />

    <button type="submit" class=" mt-3 btn btn-primary">Enregistrer</button>

</form>

{/block}