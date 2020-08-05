<section>
<div class="jumbotron">
 <div class="container">
<br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="codeIn/public/Moral/update" name="edit" id="edit-user" method="post" accept-charset="utf-8">
 

                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $moral['id'] ?>">

                        <div class="form-group">
                            <label for="">Nom</label>
                            <input class="form-control" type="text" name="nomEmpl" value="<?php echo $moral['nomEmpl'] ?>">
                        </div>
                
                        <div class="form-group">
                            <label for="">Ninea</label>
                            <input class="form-control" type="text" name="ninea" value="<?php echo $moral['ninea'] ?>">
                        </div>
                
                        <div class="form-group">
                            <label for="">Registre de commerce</label>
                            <input class="form-control" type="text" name="rc" value="<?php echo $moral['rc'] ?>">
                        </div>
                
                        <div class="form-group">
                            <label for="">Raison Sociale</label>
                            <input class="form-control" type="text" name="raisonSocial" value="<?php echo $moral['raisonSocial'] ?>">
                        </div>
                
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input class="form-control" type="text" name="adressEmpl" value="<?php echo $moral['adressEmpl'] ?>">
                        </div>
                
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="valider" value="Modifier">
                            <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                        </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#edit-user").length > 0) {
      $("#edit-user").validate({
      
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
</section>