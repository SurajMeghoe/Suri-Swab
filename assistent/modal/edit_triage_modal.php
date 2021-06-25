
    <div class="modal fade" id="edittriage<?php echo $row['triagenummer']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                     <center><h3> Patient info</h3></center>
                    <button type="button" class="close float-right" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="exampleModalLabel"></h4>
                </div>
                <div class="modal-body">
                 <?php
					$edit=mysqli_query($conn,"SELECT * from triage where triagenummer = '".$row['triagenummer']."'");
					$erow=mysqli_fetch_array($edit);
				?>  
				<div class="container-fluid">
				<form method="POST" action="../../assistent/backend/edit_triage.php?id=<?php echo $erow['triagenummer']; ?>" method="POST">
				<div class="row">   
          <div class="col-md-4">
            <label for="patientnummer" class="form-label">patientnummer</label>
            <input type="number" class="form-control" name="patientnummer" id="patientnummer" value="<?php echo $erow['id_patient']; ?>" disabled>
          </div>
       
    </div> 

    <div class="row">   
          <div class="col-md-4">
           
            <label for="contact_naam" class="form-label">Contact naam</label>
            <input type="text" class="form-control" name="contact_naam" id="contact_naam" value="<?php echo $erow['contact_naam']; ?>">
          </div>
       <div class="col-md-4">
          <label for="cdatum" class="form-label"> Datum contact</label>
          <input type="date" class="form-control" name="cdatum" id="cdatum" value="<?php echo $erow['contact_datum']; ?>">
       </div>
       <div class="col-md-4">
          <label for="comscrhrijving" class="form-label">omscrhrijving contact</label>
          <textarea class="form" name="comscrhrijving" id="comscrhrijving"  value="<?php echo $erow['contact_omschrijving']; ?>"><?php echo $erow['contact_omschrijving']; ?></textarea>
       </div>
    </div>
<div class="row"> 
<div class="col-md-8">
          <label for="cmomscrhrijving" class="form-label">Meerdere contacten</label>
          <textarea class="form" name="cmomscrhrijving" id="cmomscrhrijving" style="width: 735px;" value="<?php echo $erow['contact']; ?>"><?php echo $erow['contact']; ?></textarea>
       </div>
</div>
    <div class="row">   
          
 <div class="col-md-4">
          <label for="roken" class="form-label">roken</label>
           <select class="form-select" aria-label="Default select example" name="roken" id="roken">
            <option value="<?php echo $erow['roken']; ?>" selected><?php if($erow['roken'] == "ja")
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

       <div class="col-md-4">
          <label for="c14" class="form-label">Contact met ziek persoon</label>
         <select class="form-select" aria-label="Default select example" name="c14" id="c14" value="<?php echo $erow['contact_ziek']; ?>">
            <option value="<?php echo $erow['contact_ziek']; ?>" selected><?php if($erow['contact_ziek'] == "ja")
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

       <div class="col-md-4">
          <label for="hpcovid" class="form-label">Family bewezen/verdachte covid-19</label>
         <select class="form-select" aria-label="Default select example" name="hpcovid" id="hpcovid" value="<?php echo $erow['bewezen']; ?>">
            <option value="<?php echo $erow['bewezen']; ?>"selected><?php if($erow['bewezen'] == "ja")
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
      <div class="col-md-4">
          <label for="cziekten" class="form-label">Ziekten</label>
          <input type="text" class="form-control" name="cziekten" id="cziekten" value="<?php echo $erow['ziekten']; ?>">
       </div>

       <div class="col-md-4">
          <label for="datumtriage" class="form-label">triage registratie</label>
          <input type="date" class="form-control" name="datumtriage" id="datumtriage" value="<?php echo $erow['datum_traige']; ?>">
       </div>
    </div>
<hr>
<div class="row">
<center><h3>Symptomen</h3></center>
</div>
    <div class="row">   
      <div class="col-md-4">
          <label for="hoesten" class="form-label">Hoesten</label>
          <select class="form-select" aria-label="Default select example" name="hoesten" id="hoesten" value="<?php echo $erow['hoesten']; ?>">
            <option value="<?php echo $erow['hoesten']; ?>"selected><?php if($erow['hoesten'] == "ja")
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

       <div class="col-md-4">
          <label for="dhoesten" class="form-label">Datum symptoom</label>
             <input type="date" class="form-control" name="dhoesten" id="dhoesten" value="<?php echo $erow['dhoesten']; ?>">
       </div>
       
    </div>
       

    <div class="row">   
      <div class="col-md-4">
          <label for="kortademigheid" class="form-label">kortademigheid</label>
          <select class="form-select" aria-label="Default select example" name="kortademigheid" id="kortademigheid"  value="<?php echo $erow['kortademig']; ?>">
            <option value="<?php echo $erow['kortademig']; ?>" selected><?php if($erow['kortademig'] == "ja")
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

       <div class="col-md-4">
          <label for="dkortademigheid" class="form-label">Datum symptoom</label>
          <input type="date" class="form-control" name="dkortademigheid" id="dkortademigheid" value="<?php echo $erow['dkortademigheid']; ?>">
       </div>
    </div>

    <div class="row">   
      <div class="col-md-4">
          <label for="keelpijn" class="form-label">Keelpijn</label>
          <select class="form-select" aria-label="Default select example" name="keelpijn" id="keelpijn" value="<?php echo $erow['keelpijn']; ?>">
            <option value="<?php echo $erow['keelpijn']; ?>" selected><?php if($erow['keelpijn'] == "ja")
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

       <div class="col-md-4">
          <label for="dkeelpijn" class="form-label">Datum symptoom</label>
           <input type="date" class="form-control" name="dkeelpijn" id="dkeelpijn" value="<?php echo $erow['dkeelpijn']; ?>">
       </div>

    </div>

    <div class="row">   
      <div class="col-md-4">
          <label for="koorts" class="form-label">Koorts(gevoel)</label>
          <select class="form-select" aria-label="Default select example" name="koorts" id="koorts" value="<?php echo $erow['koorts']; ?>">
             <option value="<?php echo $erow['koorts']; ?>" selected><?php if($erow['koorts'] == "ja")
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

       <div class="col-md-4">
          <label for="dkoorts" class="form-label">Datum symptoom</label>
       <input type="date" class="form-control" name="dkoorts" id="dkoorts" value="<?php echo $erow['dkoorts']; ?>">
       </div>
       </div>

    
  <div class="row"> 
<div class="col-md-4">
          <label for="rillingen" class="form-label">Koude rillingen</label>
          <select class="form-select" aria-label="Default select example" name="rillingen" id="rillingen" value="<?php echo $erow['rillingen']; ?>">
             <option value="<?php echo $erow['rillingen']; ?>" selected><?php if($erow['rillingen'] == "ja")
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

       <div class="col-md-4">
          <label for="drillingen" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="drillingen" id="drillingen" value="<?php echo $erow['drillingen']; ?>">
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="hoofdpijn" class="form-label">Hoofdpijn</label>
          <select class="form-select" aria-label="Default select example" name="hoofdpijn" id="hoofdpijn" value="<?php echo $erow['hoofdpijn']; ?>">
            <option value="<?php echo $erow['hoofdpijn']; ?>" selected><?php if($erow['hoofdpijn'] == "ja")
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

       <div class="col-md-4">
          <label for="dhoofdpijn" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dhoofdpijn" id="dhoofdpijn" value="<?php echo $erow['dhoofdpijn']; ?>">
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="spierpijn" class="form-label">Spierpijn</label>
          <select class="form-select" aria-label="Default select example" name="spierpijn" id="spierpijn" value="<?php echo $erow['spierpijn']; ?>">
             <option value="<?php echo $erow['spierpijn']; ?>" selected><?php if($erow['spierpijn'] == "ja")
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

       <div class="col-md-4">
          <label for="dspierpijn" class="form-label">Datum symptoom</label>
          <input type="date" class="form-control" name="dspierpijn" id="dspierpijn" value="<?php echo $erow['dspierpijn']; ?>">
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="misselijkheid" class="form-label">Misselijkheid</label>
          <select class="form-select" aria-label="Default select example" name="misselijkheid" id="misselijkheid" value="<?php echo $erow['misselijkheid']; ?>">
            <option value="<?php echo $erow['misselijkheid']; ?>" selected><?php if($erow['misselijkheid'] == "ja")
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

       <div class="col-md-4">
          <label for="dmisselijkheid" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dmisselijkheid" id="dmisselijkheid" value="<?php echo $erow['dmisselijkheid']; ?>">
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="diarree" class="form-label">Diaree</label>
          <select class="form-select" aria-label="Default select example" name="diarree" id="diarree" value="<?php echo $erow['diarree']; ?>">
             <option value="<?php echo $erow['diarree']; ?>" selected><?php if($erow['diarree'] == "ja")
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

       <div class="col-md-4">
          <label for="ddiarree" class="form-label">Datum symptoom</label>
             <input type="date" class="form-control" name="ddiarree" id="ddiarree" value="<?php echo $erow['ddiarree']; ?>">
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="smaak" class="form-label">Veranderde smaak</label>
          <select class="form-select" aria-label="Default select example" name="smaak" id="smaak" value="<?php echo $erow['Vsmaak']; ?>">
             <option value="<?php echo $erow['Vsmaak']; ?>" selected><?php if($erow['Vsmaak'] == "ja")
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

       <div class="col-md-4">
          <label for="dsmaak" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dsmaak" id="dsmaak" value="<?php echo $erow['dsmaak']; ?>">
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="reuk" class="form-label">Reuk</label>
          <select class="form-select" aria-label="Default select example" name="reuk" id="reuk" value="<?php echo $erow['Vreuk']; ?>">
             <option value="<?php echo $erow['Vreuk']; ?>" selected><?php if($erow['Vsmaak'] == "ja")
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

       <div class="col-md-4">
          <label for="dreuk" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dreuk" id="dreuk"  value="<?php echo $erow['dreuk']; ?>">
       </div>
</div>

 <div class="row">
 <div class="col-md-4">
          <label for="symptomen" class="form-label">Andere symptomen</label>
          <select class="form-select" aria-label="Default select example" name="symptomen" id="symptomen" value="<?php echo $erow['Asymp']; ?>">
             <option value="<?php echo $erow['Asymp']; ?>"> <?php if($erow['Asymp'] == "ja")
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
   <div class="col-md-4">
          <label for="dsymptoom" class="form-label">Datum andere symptomen</label>
          <input type="date" class="form-control" name="dsymptoom" id="dsymptoom" value="<?php echo $erow['dsymptomen']; ?>">
       </div>

    <div class="col-md-4">
          <label for="ccomscrhrijving" class="form-label">opmerkingen symptomen</label>
          <textarea class="form" name="ccomscrhrijving" id="ccomscrhrijving"  value="<?php echo $erow['omschrijving']; ?>"><?php echo $erow['omschrijving']; ?></textarea>
       </div>
    </div>


   <hr>
   <div class="row">
<center><h3>Onderzoeker</h3></center>
</div>
<div class="row"> 
   <div class="col-md-4">
          <label for="ziek" class="form-label">zieke indruk</label>
          <select class="form-select" aria-label="Default select example" name="ziek" id="ziek" value="<?php echo $erow['Zindruk']; ?>">
            <option value="<?php echo $erow['Zindruk']; ?>" selected><?php if($erow['Zindruk'] == "ja")
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

       <div class="col-md-4">
          <label for="swab" class="form-label">swab afgenomen</label>
          <select class="form-select" aria-label="Default select example" name="swab" id="swab" value="<?php echo $erow['swab']; ?>">
            <option value="<?php echo $erow['swab']; ?>" selected><?php if($erow['swab'] == "ja")
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

      <div class="col-md-4">
          <label for="oomscrhrijving" class="form-label">Opmerkingen</label>
          <textarea class="form" name="oomscrhrijving" id="oomscrhrijving"  value="<?php echo $erow['Momschrijving']; ?>"><?php echo $erow['Momschrijving']; ?></textarea>
       </div>   

           
</div>

<div class="row">
 <div class="col-md-6">
            <label for="huisarts" class="form-label">Onderzoeker</label>
            <?=$_SESSION['usernaam']?>
          </div> 
</div>

    </div>

      </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                  <button type="submit" name="edit" class="btn btn-primary">Save Data</button>
                </div>
				</form>
            </div>
        </div>
    </div>
