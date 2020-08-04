<section>
<div class="jumbotron">
<div class="container">
<div class="col-md-5 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulaire de gestion des comptes</div>
                    <div class="panel-body">
                    <form method="POST" action="{$url_base}Compte/insert">

                        <div class="form-group">
                            <label for="">Numero Agence</label>
                            <input class="form-control" type="text" name="numAgence"required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Numero Compte</label>
                            <input class="form-control" type="text" name="numCompte" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Cle Rib</label>
                            <input class="form-control" type="text" name="rib" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Montant</label>
                            <input class="form-control" type="text" name="montant" required>
                        </div>
                
                        <div class="form-group">
                            <label for="">Debut blocage</label>
                            <input class="form-control" type="date" name="dateDebut" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Fin blocage</label>
                            <input class="form-control" type="date" name="dateFin" required>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <label for="">Employeur</label>
                            <select class="form-control" name="idmoral">
                                <option value="">Veuillez choisir</option>
                                    {foreach from=$listeMoral item=compte}
                                    <option value="{$compte->getId()}"><td>{$compte->getNomEmpl()}</td></option>
                                    {/foreach}
                            </select>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <label for="">Employeur</label>
                            <select class="form-control" name="idphysique">
                                <option value="">Veuillez choisir</option>
                                    {foreach from=$listePhysique item=compte}
                                    <option value="{$compte->getId()}"><td>{$compte->getNom()}</td></option>
                                    {/foreach}
                            </select>
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