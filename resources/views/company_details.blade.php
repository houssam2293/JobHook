@extends('layouts.master')
@Section('content')

<div class="clearfix"></div>
<section class="inner-header-title" style="background-image:url(/assets/img/banner-10.jpg);">
  <div class="container">
    <h1>Details recruteur</h1>
  </div>
</section>
<div class="clearfix"></div>
<section class="detail-desc" id="app">
  <div class="container white-shadow">

    <div class="row">
      <div class="detail-pic">
        <img src="{{ asset('storage/'.$recruteur->logo) }}" class="img" alt="" />
      </div>
      <div class="detail-status">
        <span>{{$recruteur->type}}</span>
      </div>
    </div>

    <div class="row bottom-mrg">

      <div class="col-md-8 col-sm-8">
        <div class="detail-desc-caption">
          <h4>{{$recruteur->nom}}</h4>
          <span class="designation">Contact de la compagnie :</span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="get-touch">
          <h4>Get in Touch</h4>
          <ul>
            <li><i class="fa fa-map-marker"></i><span>{{$recruteur->adresse}}</span></li>
            <li><i class="fa fa-envelope"></i><span>{{$recruteur->email}}</span></li>
            <li><i class="fa fa-globe"></i><span>{{$recruteur->siteWeb}}</span></li>
            <li><i class="fa fa-phone"></i><span>{{$recruteur->telephone}}</span></li>

          </ul>
        </div>
      </div>

    </div>

    <div class="row no-padd">
      <div class="detail pannel-footer">

        <div class="col-md-5 col-sm-5">
          <ul class="detail-footer-social">

          </ul>
        </div>

        <div class="col-md-7 col-sm-7">
          <div class="detail-pannel-footer-btn pull-right">
            <button class="add-field" v-on:click="postuler">Postuler Spontané</button>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>

<script type="text/javascript">

window.Laravel={!! json_encode([
   'csrfToken' 	=> csrf_token(),
   'cvs' => Auth::user()->candidat->cvs,
   'recruteurId' => $recruteur->id,
   'url' 			=>url('/')]) !!} ;
</script>

<script>


var app = new Vue({
el: '#app',
data: {
message: "Detail d'emploie",
cvs: window.Laravel.cvs,
recruteurId: window.Laravel.recruteurId

},
methods:{
postuler: function(){
(async () => {

/* inputOptions can be an object or Promise */
a = this.cvs.length;
var obj ={};
for(i = 0; i < a; i++){

     var name = this.cvs[i].titre;
     var id = this.cvs[i].id;
     obj[id] = name;

   }
const inputOptions = obj;
const { value: cv } = await Swal.fire({
 title: 'Selectionner le cv que vous vouler postuler avec',
 input: 'radio',
 inputOptions: inputOptions,
 inputValidator: (value) => {
   if (!value) {
     return 'Tu dois selectionner un cv!'
   }
 }
})
console.log("cv est "+cv+" L'offre  est:"+this.recruteurId);
axios.post(window.Laravel.url+'/addSpontane/'+cv+'/'+this.recruteurId)
   .then(response => {

     console.log(response.data);
     if(response.data.etat){

     }
   })
   .catch(error => {
     console.log(error);
     cv = false;
   })

if (cv) {
 Swal.fire({ html: `<b>Vous avez postuler avec</b>: ${name}` })
}
else {
 Swal.fire({ html: `<b>Vous avez pas postuler error*	</b>` })
}

})()
}

},
mounted:function(){
//	console.log(this.offreId);
}
})

</script>


@endsection
