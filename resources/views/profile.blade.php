@extends('layouts.master')



@section('content')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<div class="container">
   <h3 class="pb-3 mb-4 font-italic border-bottom">
      Jouw profiel
   </h3>

   <div class="col-md-5">

   <label>Voornaam</label>
      <div class="input-group mb-3">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fas fa-edit"></i>
            </div>
         </div>
         <input type="text" class="form-control" placeholder="{{ Auth::user()->name }}" aria-label="Text input with checkbox">
      </div>

      <label>Achternaam</label>
      <div class="input-group mb-3">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fas fa-edit"></i>
            </div>
         </div>
         <input type="text" class="form-control" placeholder="Achternaam" aria-label="Text input with checkbox">
      </div>

      <label>E-mail</label>
      <div class="input-group mb-3">
         <div class="input-group-prepend">
            <div class="input-group-text">
               <i class="fas fa-edit"></i>
            </div>
         </div>
         <input type="text" class="form-control" placeholder="{{ Auth::user()->email }}" aria-label="Text input with checkbox">
      </div>

      <div class="geslacht">
         <label>Geslacht</label><br>
         <label for="man">Man</label>
         <input type="radio" name="geslacht" id="man" value="man" checked>
         <label for="vrouw">vrouw</label>
         <input type="radio" name="geslacht" id="vrouw" value="vrouw">
         <div class="row">
            <button type="button" class="btn btn-success">Gegevens opslaan</button>
         </div>
      </div>
   </div>
   <hr>

   <h3 class="pb-3 mb-4 font-italic border-bottom">
      Jouw favoriete keukens
   </h3>
   <div class="row">
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">De Nieuwste Marmeren Keuken</a>
               </h6>
               <div class="mb-1 text-muted small">11 Novemeber</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime  en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/2062426/pexels-photo-2062426.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Moderne keuken zorgt voor een binnenkomer</a>
               </h6>
               <div class="mb-1 text-muted small">17 April</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime indeling en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/1454805/pexels-photo-1454805.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Uw prachtige opvultekst voor keukens</a>
               </h6>
               <div class="mb-1 text-muted small">12 Juni</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime  en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/533157/pexels-photo-533157.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Uw prachtige opvultekst voor keukens</a>
               </h6>
               <div class="mb-1 text-muted small">12 Juni</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime  en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/276554/pexels-photo-276554.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Uw prachtige opvultekst voor keukens</a>
               </h6>
               <div class="mb-1 text-muted small">12 Juni</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime  en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Uw prachtige opvultekst voor keukens</a>
               </h6>
               <div class="mb-1 text-muted small">12 Juni</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime  en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/3016430/pexels-photo-3016430.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Uw prachtige opvultekst voor keukens</a>
               </h6>
               <div class="mb-1 text-muted small">12 Juni</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime  en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/2062426/pexels-photo-2062426.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Keuken</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Uw prachtige opvultekst voor keukens</a>
               </h6>
               <div class="mb-1 text-muted small">12 Juni</div>
               <p class="card-text mb-auto">In deze keuken voel je je al snel helemaal thuis door de ruime  en mooi afgewerkte kastjes en details</p>
               <a class="btn btn-outline-success btn-sm" href="#">Lees meer</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="" src="https://images.pexels.com/photos/3623785/pexels-photo-3623785.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>

   <h3 class="mt-3 pb-3 mb-4 font-italic border-bottom">
      Keuken Nieuws
   </h3>
   <div class="row">
   <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Keukennieuws week 3 <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
               <p class="card-text">In deze week bespreken we Keukennieuws nieuwe luxe keuken.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Lees meer <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/1089077/pexels-photo-1089077.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Keukennieuws week 2 <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
               <p class="card-text">In deze week bespreken we Keukennieuws nieuwste keuken.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Lees meer <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/1251833/pexels-photo-1251833.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Keukennieuws week 1 <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
               <p class="card-text">In deze week bespreken we Keukennieuws startup keuken.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Lees meer <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>

   <h3 class="mt-3 pb-3 mb-4 font-italic border-bottom">
      Keukens voor jou
   </h3>
   <div class="row">
   <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Moderne berkenhouten keukens</h5>
               <p class="card-text">Hierin staan keukens die door klanten geadverteerd worden of gerelateerd zijn aan de klant zijn meest recent bekeken keukens.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Meer info <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/1358900/pexels-photo-1358900.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Modern keukeneiland </h5>
               <p class="card-text">Hierin staan keukens die door klanten geadverteerd worden of gerelateerd zijn aan de klant zijn meest recent bekeken keukens.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Meer info <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Keuken Deluxe marmer wit</h5>
               <p class="card-text">Hierin staan keukens die door klanten geadverteerd worden of gerelateerd zijn aan de klant zijn meest recent bekeken keukens.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Meer info <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>

@endsection