@extends('layouts.master')
@Section('content')

<div class="wrapper">
	<section class="manage-resume gray">
		<div class="container">
			<form method="POST" action="{{('create_resume')}}">
				{{csrf_field()}}

			<div class="col-md-12 col-sm-12">
				<div class="full-card">

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Titre du job</h2>
						<div class="col-md-12 col-sm-12">
							<input name="titre" type="text" class="form-control" placeholder="Titre, e.g. Ingenieur civil" value="{{old('titre')}}" required>
						</div>

						<div class="col-md-12 col-sm-12 ">
								<textarea name="Resumer" type="text" class="form-control" style="margin-top: 15px" placeholder="Resumer">{{old('Resumer')}}</textarea>
						</div>
						@if ($errors->any())
						<h1>Inexpected error</h1>
						@endif

					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Formation (Education)</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input name="lieu[]" type="text" class="form-control" placeholder="Nom de l'institu, e.g. Ecole sup de l'informatique" value="{{old('lieu')}}">
									</div>

									<div class="col-md-12 col-sm-12">
										<input name="diplome[]" type="text" class="form-control" placeholder="diplôme, e.g. Master de Biologiee" value="{{old('diplome')}}">
									</div >
									<div class="col-md-12 col-sm-12">
										<input name="domain[]" type="text" class="form-control" placeholder="domain, e.g. it" value="{{old('domain')}}">
									</div>

									<div class="col-xs-6 col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">De</span>
											<input name="date_debut[]" type="text" id="edu-start" data-lang="en" data-large-mode="true" data-min-year="1990" data-max-year="2020" data-disabled-days="08/17/1990,08/18/2020" data-id="datedropper-0" data-theme="my-style" class="form-control" placeholder="date comme: 2012-12-12" value="{{old('date_debut')}}">
										</div>
									</div>

									<div class="col-xs-6 col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Jusqu'a</span>
											<input name="date_fin[]" type="text" id="edu-end" data-lang="en" data-large-mode="true" data-min-year="1990" data-max-year="2020" data-disabled-days="08/17/1990,08/18/2020"data-id="datedropper-0" data-theme="my-style" class="form-control" placeholder="date comme: 2012-12-12" value="{{old('date_fin')}}">
										</div>
									</div>


									<button type="button" class="add-field">Ajouter education</button>
									<button type="button" class="btn remove-field">Supprimer </button>
								</div>
							</div>

						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Experience</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input name="intitule[]" type="text" class="form-control" placeholder="Position, e.g. Designeur du WEB">
									</div>
									<div class="col-md-12 col-sm-12">
										<input name="exp_lieu[]" type="text" class="form-control" placeholder="Lieu, eg Sonelgaz">
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Debut</span>
											<input name="exp_date_debut[]" type="text" id="exp-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" >
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Fin</span>
											<input name="ex_date_fin[]" type="text" id="exp-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control">
										</div>
									</div>

									<div class="col-md-12 col-sm-12 ">
										<textarea name="description[]" class="form-control" style="margin-top: 15px" placeholder="Remarques"></textarea>
									</div>

									<button type="button" class="btn remove-field">Supprimer</button>
								</div>
							</div>
							<button type="button" class="add-field">Ajouter expérience</button>
						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Divers</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input name="intitileDiver[]" type="text" class="form-control" placeholder="intitule">
									</div>
									<div class="col-md-12 col-sm-12">
										<input name="typeDiver[]" type="text" class="form-control" placeholder="Type..eg Bénévol">
									</div>
									<div class="col-md-12 col-sm-12">
										<input name="diver_lieu[]" type="text" class="form-control" placeholder="Lieu..eg Centre de soin">
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Debut</span>
											<input name="diver_date_debut[]" type="text" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control">
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Fin</span>
											<input name="diver_date_fin[]" type="text"  data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control">
										</div>
									</div>
{{--
									<div class="col-md-12 col-sm-12 ">
										<textarea name="diver_description" class="form-control " placeholder="Remarques" style="margin-top: 15px
										"></textarea>
									</div> --}}

									<button type="button" class="btn remove-field">Supprimer</button>
								</div>
							</div>
							<button type="button" class="add-field">Ajouter Divers</button>
						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Ajouter Skills</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">

									<div class="col-md-12 col-sm-12">
										<input id="tags" name="competences" type="text" class="form-control" placeholder="Competence, e.g. Css, Html...">
									</div>
									<input type="Reset" class="btn btn-success btn-primary small-btn" ></input>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row bottom-mrg extra-mrg">

						<div class="col-md-12">
							<input type="Submit" class="btn btn-success btn-primary small-btn"></input>
						</div>

				</div>
			</div>
			</form>
		</div>
	</section>
	<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
	<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
	<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
	<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
	<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
	<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
	<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
	<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
	<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
	<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
	<!-- Date dropper js-->
	<script src="#"></script>

	<!-- Custom Js -->
	<script src="assets/js/custom.js"></script>

	<script>
		$('#company-dob').dateDropper();
	</script>
	<script src="assets/js/jQuery.style.switcher.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#styleOptions').styleSwitcher();
		});
	</script>
	</div>

@endsection

@section('javascripts')


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.js"></script>
  <meta charset="utf-8">
      <script>
$(function() {
    var availableTags = [
    @foreach ($competences as $competence)
		"{{$competence->nom}}",
	@endforeach

    ];
    function split( val ) {
        return val.split( / \s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }

    $( "#tags" )
        // don't navigate away from the field on tab when selecting an item
        .bind( "keydown", function( event ) {
            if ( event.keyCode === $.ui.keyCode.TAB &&
                    $( this ).data("autocomplete"

         ).menu.active ) {
                event.preventDefault();
            }
        })
        .autocomplete({
            minLength: 0,
            source: function( request, response ) {

                response( $.ui.autocomplete.filter(
                    availableTags, extractLast( request.term )

                        ) );
            },
            focus: function() {
                // prevent value inserted on focus
                return false;
            },
            select: function( event, ui ) {
                var terms = split( this.value );
                // remove the current input
                terms.pop();
                // add the selected item
                terms.push( ui.item.value );

                terms.push( "" );
                this.value = terms.join( " " );
                return false;
            }
        });
});
</script>


@endsection
