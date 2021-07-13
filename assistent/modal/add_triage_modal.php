
    <div class="modal fade" id="triageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                     <center><h3> Triage Registratie</h3></center>
                    <button type="button" class="close float-right" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="../../assistent/backend/add_triage.php" method="POST">
				<div class="row">   
          <div class="col-md-4">
            <label for="patientnummer" class="form-label">patientnummer</label>
            <input type="number" class="form-control" name="patientnummer" id="patientnummer" required>
          </div>
       
    </div> 

    <div class="row">   
          <div class="col-md-4">
           
            <label for="contact_naam" class="form-label">Contact naam</label>
            <input type="text" class="form-control" name="contact_naam" id="contact_naam" required>
          </div>
       <div class="col-md-4">
          <label for="cdatum" class="form-label"> Datum contact</label>
          <input type="date" class="form-control" name="cdatum" id="cdatum" required>
       </div>
       <div class="col-md-4">
          <label for="comscrhrijving" class="form-label">omscrhrijving contact</label>
          <textarea class="form" name="comscrhrijving" id="comscrhrijving"  required></textarea>
       </div>
    </div>
<div class="row"> 
<div class="col-md-8">
          <label for="cmomscrhrijving" class="form-label">Meerdere contacten</label>
          <textarea class="form" name="cmomscrhrijving" id="cmomscrhrijving" style="width: 735px;" required ></textarea>
       </div>
</div>
    <div class="row">   
          
 <div class="col-md-4">
          <label for="roken" class="form-label">roken</label>
           <select class="form-select" aria-label="Default select example" name="roken" id="roken" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
          
       </div>

       <div class="col-md-4">
          <label for="c14" class="form-label">Contact met ziek persoon</label>
         <select class="form-select" aria-label="Default select example" name="c14" id="c14" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
          
       </div>

       <div class="col-md-4">
          <label for="hpcovid" class="form-label">Family bewezen/verdachte covid-19</label>
         <select class="form-select" aria-label="Default select example" name="hpcovid" id="hpcovid" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
          
       </div>
      <div class="col-md-4">
          <label for="cziekten" class="form-label">Ziekten</label>
          <input type="text" class="form-control" name="cziekten" id="cziekten"  required>
       </div>

       <div class="col-md-4">
          <label for="datumtriage" class="form-label">triage registratie</label>
          <input type="date" class="form-control" name="datumtriage" id="datumtriage" required>
       </div>
    </div>
<hr>
<div class="row">
<center><h3>Symptomen</h3></center>
</div>
    <div class="row">   
      <div class="col-md-4">
          <label for="hoesten" class="form-label">Hoesten</label>
          <select class="form-select" aria-label="Default select example" name="hoesten" id="hoesten" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dhoesten" class="form-label">Datum symptoom</label>
             <input type="date" class="form-control" name="dhoesten" id="dhoesten" required>
       </div>
       
    </div>
       

    <div class="row">   
      <div class="col-md-4">
          <label for="kortademigheid" class="form-label">kortademigheid</label>
          <select class="form-select" aria-label="Default select example" name="kortademigheid" id="kortademigheid" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dkortademigheid" class="form-label">Datum symptoom</label>
          <input type="date" class="form-control" name="dkortademigheid" id="dkortademigheid" required>
       </div>
    </div>

    <div class="row">   
      <div class="col-md-4">
          <label for="keelpijn" class="form-label">Keelpijn</label>
          <select class="form-select" aria-label="Default select example" name="keelpijn" id="keelpijn" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dkeelpijn" class="form-label">Datum symptoom</label>
           <input type="date" class="form-control" name="dkeelpijn" id="dkeelpijn" required>
       </div>

    </div>

    <div class="row">   
      <div class="col-md-4">
          <label for="koorts" class="form-label">Koorts(gevoel)</label>
          <select class="form-select" aria-label="Default select example" name="koorts" id="koorts" required>
             <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dkoorts" class="form-label">Datum symptoom</label>
       <input type="date" class="form-control" name="dkoorts" id="dkoorts" required>
       </div>
       </div>

    
  <div class="row"> 
<div class="col-md-4">
          <label for="rillingen" class="form-label">Koude rillingen</label>
          <select class="form-select" aria-label="Default select example" name="rillingen" id="rillingen" required>
             <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="drillingen" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="drillingen" id="drillingen" required>
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="hoofdpijn" class="form-label">Hoofdpijn</label>
          <select class="form-select" aria-label="Default select example" name="hoofdpijn" id="hoofdpijn" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dhoofdpijn" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dhoofdpijn" id="dhoofdpijn" required>
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="spierpijn" class="form-label">Spierpijn</label>
          <select class="form-select" aria-label="Default select example" name="spierpijn" id="spierpijn" required>
             <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dspierpijn" class="form-label">Datum symptoom</label>
          <input type="date" class="form-control" name="dspierpijn" id="dspierpijn" required>
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="misselijkheid" class="form-label">Misselijkheid</label>
          <select class="form-select" aria-label="Default select example" name="misselijkheid" id="misselijkheid" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dmisselijkheid" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dmisselijkheid" id="dmisselijkheid" required>
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="diarree" class="form-label">Diaree</label>
          <select class="form-select" aria-label="Default select example" name="diarree" id="diarree" required>
             <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="ddiarree" class="form-label">Datum symptoom</label>
             <input type="date" class="form-control" name="ddiarree" id="ddiarree" required>
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="smaak" class="form-label">Veranderde smaak</label>
          <select class="form-select" aria-label="Default select example" name="smaak" id="smaak" required>
             <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dsmaak" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dsmaak" id="dsmaak" required>
       </div>
</div>

  <div class="row"> 
<div class="col-md-4">
          <label for="reuk" class="form-label">Reuk</label>
          <select class="form-select" aria-label="Default select example" name="reuk" id="reuk" required>
             <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="dreuk" class="form-label">Datum symptoom</label>
            <input type="date" class="form-control" name="dreuk" id="dreuk"  required>
       </div>
</div>

 <div class="row">
 <div class="col-md-4">
          <label for="symptomen" class="form-label">Andere symptomen</label>
          <select class="form-select" aria-label="Default select example" name="symptomen" id="symptomen" required>
             <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>
   <div class="col-md-4">
          <label for="dsymptoom" class="form-label">Datum andere symptomen</label>
          <input type="date" class="form-control" name="dsymptoom" id="dsymptoom" required>
       </div>

    <div class="col-md-4">
          <label for="ccomscrhrijving" class="form-label">opmerkingen symptomen</label>
          <textarea class="form" name="ccomscrhrijving" id="ccomscrhrijving"  required></textarea>
       </div>
    </div>


   <hr>
   <div class="row">
<center><h3>Onderzoeker</h3></center>
</div>
<div class="row"> 
   <div class="col-md-4">
          <label for="ziek" class="form-label">zieke indruk</label>
          <select class="form-select" aria-label="Default select example" name="ziek" id="ziek" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div>

       <div class="col-md-4">
          <label for="swab" class="form-label">swab afgenomen</label>
          <select class="form-select" aria-label="Default select example" name="swab" id="swab" required>
            <option value="" selected>Selecteer uw antwoord</option>
            <option value="ja">ja</option>
            <option value="nee">nee</option>
            </select>
       </div> 

      <div class="col-md-4">
          <label for="oomscrhrijving" class="form-label">Opmerkingen</label>
          <textarea class="form" name="oomscrhrijving" id="oomscrhrijving"  required></textarea>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Sluiten</button>
                   <button type="submit" name="btn-add" id="btn-add" class="btn btn-primary">Opslaan</button>
				</form>
                </div>
				
            </div>
        </div>
    </div>
