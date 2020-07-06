	@extends('frontendtemplate')
	@section('content')


	<!-- ----------- body start--------------- -->
	<div class="book">
		<div class="container-fluid">
			<div class="row py-5">
				<div class="col-lg-12 " align="center">
				

						<div class="col-lg-12 col-md-12 col-sm-12 pb-3">
							<div class="card">
								<div class="card-body">
									<div class="row">
										@foreach ($modern as $row)

											@php
									$a ="avaiable";
       										$total=0;
       							 $qty=$row->borrowdetail;
       						 $rent_qty=count($qty);
        						$qties = $row->qties;
        					foreach($qties as $q)
        						{
         				 $total+=$q->qty;
        							}
        
    							@endphp


										<div class="col-lg-3 col-md-10 col-sm-10" 
										style="text-align: center;">
										<img src="{{asset($row->photo)}}" class="img-thumbnail" alt="Cinque Terre" style="width: 50%;height: 50%;">
										<h4 class="mt-3">{{$row->name}}</h4>
										
										   @if($total>$rent_qty)
										<input type="text" name="" disabled="disabled" value="{{$a}}" class="text-center bg-success">

									@else
										<input type="text" name="" disabled="disabled" value="unavaiable" class="text-center bg-success">

								 	@endif
								 	
									</div>
									@endforeach
								
							
					     </div>

</div>
</div>
</div>
</div>


		
</div>
</div>
</div>
</div>

@endsection