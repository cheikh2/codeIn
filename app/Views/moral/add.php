<section>
<div class="jumbotron">

        <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="/codeIn/public/Moral/store" name="add" id="user_create" method="post" accept-charset="utf-8">
 
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
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#user_create").length > 0) {
      $("#user_create").validate({
      
    rules: {
      name: {
        required: true,
      },
  
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },   
    },
    messages: {
        
      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        }, 
    },
  })
}
</script>
</div>
</div>
</section>