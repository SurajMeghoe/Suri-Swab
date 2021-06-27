<!-- Add New -->
    <div class="modal fade" id="userregistratieModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="../../admin/backend/add_user.php" method="POST">
				<div class="row">   
          <div class="col-md-6">
            <label for="naam" class="form-label">Naam</label>
            <input type="text" class="form-control" name="naam" id="naam" required>
          </div>
    <div class="col-md-6">
            <label for="voornaam" class="form-label">Voornaam</label>
            <input type="text" class="form-control" name="voornaam" id="voornaam" required>
          </div>
    </div> 

    <div class="row">   
         <div class="col-md-6">
            <label for="gdatum" class="form-label">geboortedatum</label>
            <input type="date" class="form-control" name="gdatum" id="gdatum" required>
          </div>
     
     <div class="col-md-6">
             <label for="district" class="form-label">Selecteer district</label>
            <select class="form-select" aria-label="Default select example" name="district" id="district"  required>
              <option selected>Selecteer</option>
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
            <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" id="password" required>
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
            <select class="form-select" aria-label="Default select example" name="rol" id="rol"  required>
              <option selected>Selecteer</option>
              <option value="admin">Admin</option>
              <option value="assistent">Assistent</option>
              <option value="laborant">Laborant</option>
            </select>
          </div>
    </div>

      </div>

                <div class="modal-footer">
               
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                   <button type="submit" name="insertuser" class="btn btn-primary">Save Data</button>
				</form>
                </div>
				
            </div>
        </div>
    </div>
