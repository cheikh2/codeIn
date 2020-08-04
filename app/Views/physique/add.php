<section>
<div class="jumbotron">
<div class="container">
<div class="col-md-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Formulaire de gestion des clients moraux</div>
                <div class="panel-body">
            <form method="POST" action="{$url_base}Physique/insert">

                <div class="col-xs-12">      
                    <div class="col-sm-12 col-xs-12">
                        <label for="">Prenom</label>
                    <input class="form-control" type="text" name="prenom"required />
                      </div>

                    <div class="col-sm-12 col-xs-12">
                        <label for="">Nom</label>
                        <input class="form-control" type="text" name="nom" required />
                    </div>
                </div>

                <div class="col-xs-12">      
                    <div class="col-sm-12 col-xs-12">
                        <label for="">Adresse</label>
                        <input class="form-control" type="text" name="adress" required />
                      </div>

                    <div class="col-sm-12 col-xs-12">
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" required />
                    </div>
                </div> 
                
                <div class="col-xs-12">      
                    <div class="col-sm-12 col-xs-12">
                        <label for="">Telephone</label>
                        <input class="form-control" type="text" name="telephone" required />
                      </div>

                    <div class="col-sm-12 col-xs-12">
                        <label for="">Sexe</label>
                        <input class="form-control" type="text" name="sexe" required />
                    </div>
                </div>

                <div class="col-xs-12">      
                    <div class="col-sm-12 col-xs-12">
                        <label for="">Profession</label>
                        <input class="form-control" type="text" name="profession" required />
                      </div>

                    <div class="col-sm-12 col-xs-12">
                        <label for="">CNI</label>
                        <input class="form-control" type="text" name="cni" required />
                    </div>
                </div>
        
                <div class="col-xs-12">      
                    <div class="col-sm-12 col-xs-12">
                        <label for="">Salaire</label>
                        <input class="form-control" type="text" name="salaire" required />
                      </div>

                    <div class="col-sm-12 col-xs-12">
                        <label for="">Employeur</label>
                        <select class="form-control" name="idmoral">
                            <option value="">Veuillez choisir</option>
                                {foreach from=$listeMoral item=physique}
                                <option value="{$physique->getId()}"><td>{$physique->getNomEmpl()}</td></option>
                                {/foreach}
                        </select>
                    </div>
                </div>

                <div class="col-xs-12">  
                    <div class="col-sm-12 col-xs-12">
                        <label></label>
                            <button class="btn btn-success btn-block" type="submit" name="valider" value="Envoyer">Envoyer</button>
                            <button class="btn btn-default btn-block" type="submit" name="annuler" value="Annuler">Annuler</button>
                    </div>
                </div>

              </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</section>