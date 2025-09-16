<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion - Stock'o Folie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light d-flex align-items-center" style="height:100vh;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title mb-4 text-center">Connexion</h3>

                            
                            {if isset($errors.csrf)}
                            <div class="alert alert-warning">
                                {$errors.csrf}
                            </div>
                            {/if}

                            <form class="mb-4" action="?controller=auth&action=login" method="POST">

                                <div class="mb-3">
                                    <label for="login" class="form-label">Identifiant</label>
                                    
                                    <div class="input-group has-validation">
                                    
                                        <input type="text" class="form-control {if isset($errors.credentials)}is-invalid{/if}" 
                                            id="login" name="login" value="{$data.login??''}"
                                            placeholder="Entrer votre login" required>

                                        {if isset($errors.credentials)}
                                        <div class="invalid-feedback">
                                            {$errors.credentials}
                                        </div>
                                        {/if}

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" 
                                        id="password" name="password"
                                        placeholder="Entrer votre mot de passe" required>
                                </div>

                                <input type="hidden" name="csrf_token" value="{$csrf}" />

                                <button type="submit" class="btn btn-primary w-100">Se connecter</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>