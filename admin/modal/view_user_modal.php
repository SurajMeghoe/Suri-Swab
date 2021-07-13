
    <div class="modal fade" id="viewuser<?php echo $row['id_gebruiker']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">User weergave</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                 <?php
					$edit=mysqli_query($conn,"SELECT * from gebruikers where id_gebruiker = '".$row['id_gebruiker']."'");
					$erow=mysqli_fetch_array($edit);
				?>  
				<div class="container-fluid">
				<!-- <form method="POST" action="../../admin/backend/edit_user.php" method="POST"> -->
				<div class="row">   
          <div class="col-md-6">
            <label for="naam" class="form-label">Naam</label>
            <input type="text" class="form-control" name="naam" id="naam" value="<?php echo $erow['Unaam']; ?>" disabled>
          </div>
    <div class="col-md-6">
            <label for="voornaam" class="form-label">Voornaam</label>
            <input type="text" class="form-control" name="voornaam" id="voornaam" value="<?php echo $erow['Uvoornaam']; ?>" disabled>
          </div>
    </div> 

    <div class="row">   
         <div class="col-md-6">
            <label for="gdatum" class="form-label">geboortedatum</label>
            <input type="date" class="form-control" name="gdatum" id="gdatum" value="<?php echo $erow['geboortedatum']; ?>" disabled>
          </div>
     
     <div class="col-md-6">
             <label for="district" class="form-label">Selecteer district</label>
            <select class="form-select" aria-label="Default select example" name="district" id="district"  disabled>
              <option value="<?php echo $erow['id_district']; ?>" selected><?php if($erow['id_district'] == "1")
              {
              echo 'paramaribo'; }
              elseif($erow['id_district'] == "2")
              {
                  echo 'wanica';
              }
              elseif($erow['id_district'] == "3")
              {
                  echo 'nickerie';
              }
              elseif($erow['id_district'] == "4")
              {
                  echo 'coronie';
              }
              elseif($erow['id_district'] == "5")
              {
                  echo 'saramacca';
              }
              elseif($erow['id_district'] == "6")
              {
                  echo 'commewijne';
              }
               elseif($erow['id_district'] == "7")
              {
                  echo 'marowijne';
              }
               elseif($erow['id_district'] == "8")
              {
                  echo 'para';
              }
               elseif($erow['id_district'] == "9")
              {
                  echo 'brokopondo';
              }
              else
              {
                  echo 'sipaliwini';
              }
              
              
              ?></option>
              <option value="1">Paramaribo</option>
              <option value="2">Wanica</option>
              <option value="3">Nickerie</option>
              <option value="4">Coronie</option>
              <option value="5">Saramacca</option>
              <option value="6">Commewijne</option>
              <option value="7">Marowijne</option>
              <option value="8">Para</option>
              <option value="9">Brokopondo</option>
              <option value="10">Sipaliwini</option>
            </select>
          </div>
</div>
<div class="row">   
        <div class="col-md-6">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?php echo $erow['usernaam']; ?>" disabled>
          </div>
          <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" id="password" minlength="6" value="<?php echo $erow['password']; ?>" disabled>
       </div>
          
</div>
    <br>
    <div class="row">   
          
         <div class="col-md-6">
            <label for="huisarts" class="form-label">admin</label>
            <?=$_SESSION['usernaam']?>
          </div>
          <div class="col-md-6">
             <label for="district" class="form-label">Selecteer rol</label>
            <select class="form-select" aria-label="Default select example" name="rol" id="rol"  value="<?php echo $erow['role']; ?>" disabled>
              <option value="<?php echo $erow['role']; ?>" selected><?php if($erow['role'] == "assistent")
              {
              echo 'assistent'; }
              elseif($erow['role'] == "laborant")
              {
                  echo 'laborant';
              }
              else
              {
                  echo 'admin';
              }
              
              ?></option>
              <option value="admin">Admin</option>
              <option value="assistent">Assistent</option>
              <option value="laborant">Laborant</option>
            </select>
          </div>
    </div>

      </div>

                <div class="modal-footer">
               
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Sluiten</button>
                   
				</form>
                </div>
				
            </div>
        </div>
    </div>
