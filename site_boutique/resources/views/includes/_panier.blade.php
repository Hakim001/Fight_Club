
	            

	            
	            
	            
	            

<table class="table  table-responsive" id="panier">
		            <thead class="thead-default">
		              <tr>
		                <th>#</th>
		                <th>Produit</th>
		                <th>Qte</th>
		                <th>Prix Unit. HT</th>
		                <th>Prix total HT</th>
		                <th></th>
		              </tr>
		            </thead>
		            <tbody>
		                @php
		                  $index=1;
		                @endphp
		            
		                @foreach ($panier as $product)
		            	<tr>
			                <td scope="row">{{ $index }}</td>
			                <td class="product_name"><a href="{{ route('produits.index', ['slug' => str_slug($product->name)]) }}">{{ $product->name }}</a></td>
			                <td>
		                <div class="input-group-sm">
                          <span class="input-group-btn-sm">
                             <button class="btn btn-secondary subOne  " type="button" data-input="{{$product->id}}">-</button>
                          </span>
                            <input type="text" class="form-control-sm  small-input" id="input-{{$product->id}}"  aria-label="qte" value="{{$product->qty}} " readonly>
                           <span class="input-group-btn-sm">
                           <button class="btn btn-secondary addOne " type="button"  data-input="{{$product->id}}">+</button>
                          </span>
                       </div>
			                </td>
		                	<td>{{ round($product->price, 2)}} €</td>
		                	<td id="total-{{$product->id}}"><span>{{round($product->price * $product->qty, 2)}}</span> €</td>
		                	<td><a href="{{route('panier.delete', ['id' => $product->id])}}" class="btn btn-icon btn-danger "> <i class="fa fa-trash"></i></a></td>
		              	</tr>
              		      @php
		                    $index ++;
		                  @endphp
              		  
	              		  @endforeach	              			              	
		              			              			              	
		              	<tr>
		              	<td colspan="2"><form method="POST" action="">
		              		
						  	<form class="form-inline">
							  		{{csrf_field()}}
								  <div class="form-group ">
								    <label for="coupon" class="">Coupon de réduction</label>
								    <input type="text" class="form-control" id="coupon" placeholder="Ex: REMISE20">
								  </div>
								  <button type="submit" class="btn btn-primary">Appliqer le coupon</button>
							</form>
						</td>
						<td colspan="4"></td>
		              </tr>
		              	
		              <tr class="">
		                <td colspan="4" class="text-right "> Total HT</td>
		                <td  colspan="2"id="totalht"><span>{{ \Cart::subtotal() }}</span> €</td>
		              </tr>
		              <tr class="">
		                <td colspan="4" class="text-right "> T.V.A </td>
		                <td colspan="2" id="tax"><span>{{ \Cart::tax() }}</span> €</td>
		              </tr>
		              <tr class="total ">
		                <td colspan="4" class="text-right"> Total</td>
		                <td  colspan="2" id="total"><span>{{ \Cart::total() }}</span> €</td>
		              </tr>
		            </tbody>
		          </table>
		          
		         <div class="row">
             <div class="col-md-6 text-left">
              <a href="{{route('catalogue')}}" class="btn btn-icon btn-primary  "><i class="fa fa-reply"></i><span>Retour au catalogue</span></a>
            </div>
            <div class="col-md-6 text-right">
              <a  href="{{route('panier.valider')}}" class="btn btn-icon btn-black"><i class="fa fa-check"></i><span>Valider le Panier </span></a>
            </div>
         </div>