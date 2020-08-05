<section>
<div class="jumbotron">
<div class="container mt-5">
<h1 class="display-4">Bienvenue à la banque du peuple</h1>
  <p class="lead">Liste des clients moraux</p>

    <a href="/codeIn/public/Moral/save" class="btn btn-success mb-2">Ajouter un client moral</a>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="row mt-3">
     <table class="table table-bordered" id="users">
       <thead>
          <tr>
             <th>Id</th>
             <th>Nom</th>
             <th>Ninea</th>
             <th>Registre</th>
             <th>Raison Sociale</th>
             <th>Adresse</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($moral): ?>
          <?php foreach($moral as $mo): ?>
          <tr>
             <td><?php echo $mo['id']; ?></td>
             <td><?php echo $mo['nomEmpl']; ?></td>
             <td><?php echo $mo['ninea']; ?></td>
             <td><?php echo $mo['rc']; ?></td>
             <td><?php echo $mo['raisonSocial']; ?></td>
             <td><?php echo $mo['adressEmpl']; ?></td>
             <td>
              <a href="http://localhost/codeIn/public/Moral/edit/<?php echo $mo['id']; ?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url('/codeIn/public/Moral/delete/'.$mo['id']);?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
<script>
    $(document).ready( function () {
      $('#users').DataTable();
  } );
</script>
</div>
</section>