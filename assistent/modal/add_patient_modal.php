<!-- Add New -->
    <div class="modal fade" id="patientModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Patient registraite</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="../../assistent/backend/add_patient.php" method="POST">
				<div class="row g-3">   
          <div class="col-md-6">
            <label for="patientnaam" class="form-label">Naam</label>
            <input type="text" class="form-control" name="patientnaam" id="patientnaam" required>
          </div>
       <div class="col-md-6">
          <label for="patientvoornaam" class="form-label">Voornaam</label>
          <input type="text" class="form-control" name="patientvoornaam" id="patientvoornaam" required>
       </div>
    </div> 

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="nationaliteit" class="form-label">Nationaliteit</label>
            <input type="text" class="form-control" name="nationaliteit" id="nationaliteit" required>
          </div>
       <div class="col-md-6">
          <label for="idnummer" class="form-label">ID_nummer</label>
          <input type="text" class="form-control" name="idnummer" id="idnummer"  required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <select class="form-select" aria-label="Default select example" name="rolepatient" id="rolepatient"  required>
              <option value="" selected>Selecteer uw geslacht</option>
              <option value="man">man</option>
              <option value="vrouw">vrouw</option>  
            </select>
          </div>
       <div class="col-md-6">
          <label for="adres" class="form-label">Adres</label>
          <input type="text" class="form-control" name="adres" id="adres"  required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="gdatum" class="form-label">Geboorte datum</label>
            <input type="date" class="form-control" name="gdatum" id="gdatum"  required>
          </div>
       <div class="col-md-6">
          <label for="beroep" class="form-label">Beroep</label>
          <input type="text" class="form-control" name="beroep" id="beroep"  required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="huisarts" class="form-label">Huisarts</label>
            <input type="text" class="form-control" name="huisarts" id="huisarts"  required>
          </div>
       <div class="col-md-6">
          <label for="odatum" class="form-label">Datum onderzoek</label>
          <input type="date" class="form-control" name="odatum" id="odatum"  required>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Sluiten</button>
                   <button type="submit" name="insertdata" class="btn btn-primary">Opslaan</button>
				</form>
                </div>
				
            </div>
        </div>
    </div>
