@extends('layouts.main')

@section('title')
	Paiement  - Confirmation
@endsection

@section('content')
    <div class="container">
        <div class="row pub ">
           <h4>Paiement / Confirmation</h4>
        </div>

	
        <div class="row pub panier">
          <div class="row">
            <h3>Confirmation de paiement : </h3>
          </div>
          <div class="row">
    				
    				<p>Merci d'avoir choisi notre site pour vos achats .</p>
    				<p>Nous sommes heureux de vous confirmer votre commande N° <strong>{{$panier->id }} </strong>: et la validation de la transaction : <strong>{{$charge['id']}}</strong> </p>
    				<p>Les détails supplémentaires sont disponibles dans votre <a href="">compte personnel</a>.</p>

            <p> <a href="{{route('catalogue')}}" class="btn btn-icon btn-primary"><i class="fa fa-reply"></i><span>Retour au catalogue</span></a></p>
          </div>
        </div>

        
    </div>
@endsection

@section('scripts')
<!-- 
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('js/stripe.js') }}"></script> -->
@endsection