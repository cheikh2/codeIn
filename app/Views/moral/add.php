<section>
<div class="jumbotron">
<div class="container">
<div class="col-md-5 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulaire de gestion des clients moraux</div>
                    <div class="panel-body">
                    <form method="POST" action="{$url_base}Moral/insert">
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input class="form-control" type="text" name="nomEmpl"required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Ninea</label>
                            <input class="form-control" type="text" name="ninea" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Registre de commerce</label>
                            <input class="form-control" type="text" name="rc" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Raison Sociale</label>
                            <input class="form-control" type="text" name="raisonSocial" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input class="form-control" type="text" name="adressEmpl" required>
                        </div>
                
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="valider" value="Envoyer">
                            <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</section>