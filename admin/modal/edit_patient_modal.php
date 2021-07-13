<!-- modal edit begin-->
  
  
<div class="modal fade" id="edit<?php echo $row['id_patient']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patient bewerken</h5>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
     
      <div class="modal-body">

      <?php
					$edit=mysqli_query($conn,"SELECT * from patient where id_patient = '".$row['id_patient']."'");
					$erow=mysqli_fetch_array($edit);
				?>  
    <form action="../../admin/backend/edit_patient.php?id=<?php echo $erow['id_patient']; ?>" method="POST">
        <div class="row g-3">   
          <div class="col-md-6">
            <label for="patientnaam" class="form-label">Naam</label>
            <input type="text" class="form-control" name="patientnaam" id="patientnaam" value="<?php echo $erow['naam']; ?>" required>
          </div>
       <div class="col-md-6">
          <label for="patientvoornaam" class="form-label">Voornaam</label>
          <input type="text" class="form-control" name="patientvoornaam" id="patientvoornaam" value="<?php echo $erow['voornaam']; ?>" required>
       </div>
    </div> 

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="nationaliteit" class="form-label">Nationaliteit</label>
            <input type="text" class="form-control" name="nationaliteit" id="nationaliteit" value="<?php echo $erow['nationaliteit']; ?>" required>
          </div>
       <div class="col-md-6">
          <label for="idnummer" class="form-label">ID_nummer</label>
          <input type="text" class="form-control" name="idnummer" id="idnummer"  value="<?php echo $erow['id_nummer']; ?>" required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <select class="form-select" aria-label="Default select example" name="rolepatient" id="rolepatient" required>
              <option value="<?php echo $erow['geslacht']; ?>" selected><?php if($erow['geslacht'] == "v")
              {
              echo 'vrouw'; }
              else
              {
                  echo 'man';
              }?></option>
              <option value="m">man</option>
              <option value="v">vrouw</option>  
            </select>
          </div>
       <div class="col-md-6">
          <label for="adres" class="form-label">Adres</label>
          <input type="text" class="form-control" name="adres" id="adres"  value="<?php echo $erow['adres']; ?>" required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="gdatum" class="form-label">Geboorte datum</label>
            <input type="date" class="form-control" name="gdatum" id="gdatum"  value="<?php echo $erow['geboortedatum']; ?>" required>
          </div>
       <div class="col-md-6">
          <label for="beroep" class="form-label">Beroep</label>
          <input type="text" class="form-control" name="beroep" id="beroep"  value="<?php echo $erow['beroep']; ?>" required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="huisarts" class="form-label">Huisarts</label>
            <input type="text" class="form-control" name="huisarts" id="huisarts"  value="<?php echo $erow['huisarts']; ?>" required>
          </div>
       <div class="col-md-6">
          <label for="odatum" class="form-label">Datum onderzoek</label>
          <input type="datetime" class="form-control" name="odatum" id="odatum"  value="<?php echo $erow['datum']; ?>" required>
       </div>
    </div>
    <br>
    <div class="row g-3">   
          <div class="col-md-6">
            <label for="huisarts" class="form-label">Onderzoeker</label>
            <?=$_SESSION['usernaam']?>
          </div>
    </div>

      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Sluiten</button>
        <button type="submit" name="edit" class="btn btn-primary">Opslaan</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- modal edit eind -->