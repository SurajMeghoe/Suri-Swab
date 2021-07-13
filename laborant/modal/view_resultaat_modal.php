<!-- Add New -->
    <div class="modal fade" id="viewresultaat<?php echo $row['swabnummer']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                 <?php
					$edit=mysqli_query($conn,"SELECT * from resultaat where swabnummer = '".$row['swabnummer']."'");
					$erow=mysqli_fetch_array($edit);
				?> 
				<div class="container-fluid">
				<!-- <form method="POST" action="../../laborant/backend/add_resultaat.php" method="POST"> -->
				<div class="row">   
          <div class="col-md-6">
            <label for="triagenummer" class="form-label">Triagenummer</label>
            <input type="number" class="form-control" name="triagenummer" id="triagenummer" value="<?php echo $erow['triagenummer']; ?>" disabled>
          </div>
      <div class="col-md-6">
             <label for="resultaat" class="form-label">Swab resultaat</label>
            <select class="form-select" aria-label="Default select example" name="resultaat" id="resultaat" disabled>
              <option value="<?php echo $erow['uitslag']; ?>" selected><?php if($erow['uitslag'] == "positief")
              {
              echo 'positief'; }
              else
              {
                  echo 'negatief';
              }?></option>
              <option value="positief">positief</option>
              <option value="negatief">negatief</option>  
            </select>
          </div>
    </div> 

    <div class="row">   
         <div class="col-md-6">
             <label for="telefoon" class="form-label">Telefonisch contact</label>
            <select class="form-select" aria-label="Default select example" name="telefoon" id="telefoon" disabled>
              <option value="<?php echo $erow['overleg']; ?>" selected><?php if($erow['overleg'] == "ja")
              {
              echo 'ja'; }
              else
              {
                  echo 'nee';
              }?></option>
              <option value="ja">ja</option>
              <option value="nee">nee</option>  
            </select>
          </div>
      <div class="col-md-6">
             <label for="ziek" class="form-label">Patient ziek</label>
            <select class="form-select" aria-label="Default select example" name="ziek" id="ziek"  disabled>
              <option value="<?php echo $erow['ziek']; ?>" selected><?php if($erow['ziek'] == "ja")
              {
              echo 'ja'; }
              else
              {
                  echo 'nee';
              }?></option>
              <option value="ja">ja</option>
              <option value="nee">nee</option>  
            </select>
          </div>
</div>
<div class="row">   
         <div class="col-md-6">
             <label for="transport" class="form-label">Besluit transport</label>
            <select class="form-select" aria-label="Default select example" name="transport" id="transport"  disabled>
              <option value="<?php echo $erow['transport']; ?>" selected><?php if($erow['transport'] == "ja")
              {
              echo 'ja'; }
              else
              {
                  echo 'nee';
              }?></option>
              <option value="ja">ja</option>
              <option value="nee">nee</option>  
            </select>
          </div>
          <div class="col-md-6">
          <label for="datum" class="form-label">Datum </label>
          <input type="date" class="form-control" name="datum" id="datum" value="<?php echo $erow['datum_resultaat']; ?>" disabled>
       </div>
          
</div>
    <br>
    <div class="row">   
          
         <div class="col-md-6">
            <label for="huisarts" class="form-label">Laborant</label>
            <?=$_SESSION['usernaam']?>
          </div>
          <div class="col-md-6">
          <label for="omscrhrijving" class="form-label">opmerkingen </label>
          <textarea class="form" name="omscrhrijving" id="omscrhrijving"  disabled><?php echo $erow['omschrijving']; ?></textarea>
       </div>
    </div>

      </div>

                <div class="modal-footer">
               
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                   
				</form>
                </div>
				
            </div>
        </div>
    </div>
