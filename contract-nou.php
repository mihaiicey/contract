<!DOCTYPE html>
<html>
<head>
    <!-- Made by Mihai Ciufudean - Icey.ro -->
    <!--  Continut oferit de: viatadefreelacer.ro -->
    
<title>Creare contract nou</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
<script src="https://cdn.tiny.cloud/1/ilmt5rlenq2ge9vy0i3s8zr5b2d3apfytm42fc3kvl9jo1kz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:25px;margin-bottom:25px">
        <div class="center-block text-center">
            <button onclick="tabcrearecontract()" class="btn btn-primary"> Creare contract </button>
            <button onclick="tabadmfirma()" class="btn btn-info"> Date firma mea</button>
        </div>
    </div>
    <div class="container" id="datefirmamea" style="display:none">
    <h2 style="text-align:center"> Date firma mea</h2>
    <section class="section-settings-form section-end">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>Denumire firma <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="company" id="company" value="SC ICEY DESIGN SRL">
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>Adresa <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="address" id="address" value="STR. LIVEZII,  NR.2">
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
				<div class="form-group">
					<label>Telefon</label>
					<input class="form-control" placeholder="" name="phone" id="phone" value="0784418416">
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
            <div class="form-group">
					<label>Email</label>
					<input class="form-control" placeholder="" name="email" value="mihaiciufudean@icey.ro">
				</div>
			</div>

		</div>
		<!--/row-->
		<div class="row">
			<div class="col-lg-2 col-md-2">
				<div class="form-group">
					<label>Cod Fiscal <span class="text-danger">*</span></label>
					<div class="input-group">
						<input class="form-control" placeholder="" name="cif" id="cif" value="37683026">
						<a href="javascript:;" onclick="check_info_cif();" class="input-group-addon info-cif"><i class="fa fa-download" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
				<div class="form-group">
					<label>Reg. comertului <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="reg_com" id="reg_com" value="J32/783/2017">
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
				<div class="form-group">
					<label>Judet  <span class="text-danger">*</span></label>
					<input class="form-control ui-autocomplete-input" placeholder="" name="state" id="state" value="SIBIU" autocomplete="off">
				</div>
			</div>
			<div class="col-lg-2 col-md-2">
				<div class="form-group">
					<label>Localitate  <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="city" id="city" value="SAT ŞURA MARE COM. ŞURA MARE">
				</div>
			</div>
            <div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>Reprezentat de <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="reprezentat" id="reprezentat" value="Mihai Ciufudean">
				</div>
			</div>
            <div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>In calitate de <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="functieprestator" id="functieprestator" value="SAT ŞURA MARE COM. ŞURA MARE">
				</div>
			</div>
            <div class="col-lg-4 col-md-4">
				<div class="form-group">
					<label>IBAN  <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="iban" id="iban" value="RO 234 342 3242">
				</div>
			</div>
            <div class="col-lg-2 col-md-2">
				<div class="form-group">
					<label>Banca  <span class="text-danger">*</span></label>
					<input class="form-control" placeholder="" name="banca" id="banca" value="ING BANK">
				</div>
			</div>
            <div class="col-lg-2 col-md-2">
				<div class="form-group">
					<label>Adresa web</label>
                    <input class="form-control" placeholder="" name="website" value="https://icey.ro">
				</div>
			</div>
		</div>
        <div class="row" style="margin-top: 15px;">
          	<div class="col-lg-3 col-md-4 btn-submit-2">
           		<a href="" class="btn btn-primary text-uppercase" onclick="">Salveaza datele firmei</a>
           	</div>
        </div>
	</section>
    
    </div>
    <div class="container" id="crearecontract" style="display:block">
        <h2 style="text-align:center"> Contract nou</h2>
            <div id="formular-client">
                <form action="modele/contract.php" data-toggle="validator" method="post" role="form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="selectordata1">Data inceput</label>
                            <input type="date" class="form-control hasDatepicker" id="selectordata1" name="data" placeholder="dd.mm.yyyy">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nrcontract">Numar contract</label>
                            <input type='text' class="form-control" id='selectordata1' name="nr_contract" placeholder="ICY101">
                        </div>            
                        <div class="form-group col-md-6">
                            <label for="nume-firma">Nume Firma</label>
                            <input type="text" class="form-control" id="nume-firma" name="nume_firma" placeholder="SC FIRMA MEA SRL">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cif">Cif</label>
                            <input type='text' class="form-control" id='cif' name="cif" placeholder="RO  / 2200555">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reg-com">Reg. Com. </label>
                            <input type="text" class="form-control" id="reg-com" name="reg_com" placeholder="J4343/343/2020">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="adrs">Adresa</label>
                            <input type="text" class="form-control" id="adrs" name="adresa" placeholder="Strada Livezii,Nr. 2,Bl. 2,et.3">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="judet">Judet</label>
                            <input type="text" class="form-control" id="judet" name="judet" placeholder="Sibiu">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="localitate">Localitea</label>
                            <input type="text" class="form-control" id="localitate" name="localitate" placeholder="Sura Mare">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reprezentant">Reprezentant legal</label>
                            <input type="text" class="form-control" id="reprezentant" name="reprezentant" placeholder="Mihai Ciufudean">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="functiereprezentant">In calitate de</label>
                            <select class="browser-default custom-select"  id="functiereprezentant" name="functiereprezentant">
                                <option selected>Selecteaza din lista</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Manager">Manager</option>
                                <option value="Client">Client</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" data-error="Bruh, that email address is invalid" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefon">Telefon</label>
                            <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="0784418416">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="duratacontract">Durata contract (nr de zile sau luni)</label>
                            <input type="text" class="form-control" id="duratacontract" name="duratacontract" placeholder="10 zile / o luna">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="duratacontract">Costuri aditionale ce nu sunt incluse</label>
                            <input type="text" class="form-control" id="costuriaditionale" name="costuriaditionale" placeholder="Hosting / Buget Ads / domeniu / etc">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="duratacontract">Data / Metoda de facturare</label>
                            <input type="text" class="form-control" id="datadefacturare" name="datadefacturare" placeholder="La finalizarea serviciilor / in fiecare 15 a lunii">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="reprezentant">Valoare contract</label>
                            <input type="text" class="form-control" id="reprezentant" name="pret" placeholder="2000 lei">
                        </div>

                    </div>
                    <div class="form-group">
                    <div class="form-group" style="padding-bottom:10px;"><h4>Anexa la contract</h4></div>
                        <label for="exampleFormControlTextarea1">Scrie mai jos ce include anexa</label>
                        <textarea name="anexainclude"></textarea>
                        <script>tinymce.init({
                            selector:"textarea",
                            placeholder:"TITLU SERVICIU - rand nou - adaugi ce include serviciu  - rand nou - a (daca e nevoie) adaugi OBSERVATII  - rand nou - adugi observatiile",
                            plugins: ["advlist lists autolink lists media table "],
                            toolbar: "'undo redo | styleselect | bold italic | alignleft aligncenter alignright | numlist bullist | casechange | code"
                            });
                        </script>
            
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 16px; margin-bottom: 150px;">Genereaza contractul</button>
                </form>
            </div>
    </div>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<script>

function tabcrearecontract(){
  var contractnou = document.getElementById("crearecontract");
if(contractnou.style.display === "block"){
  document.getElementById("datefirmamea").style.display = "none";
}else{
  document.getElementById("crearecontract").style.display = "block";
  document.getElementById("datefirmamea").style.display = "none";
}


}
function tabadmfirma(){
  var mobileView = document.getElementById("datefirmamea");
  if(mobileView.style.display === "none"){
    document.getElementById("crearecontract").style.display = "none";
    document.getElementById("datefirmamea").style.display = "block";
}
}
</script>

</body>
</html>


