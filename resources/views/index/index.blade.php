@extends('../layouts.frontend')
@section('content')
   <div class="rows">
    <p>
      ({{Helpers::fecha(date('d-m-Y'))}}) | <span id="spanreloj"></span><hr />
    </p>
     <!--caja-->
     <div class="col-md-4 borde">
       
          <h2>Conexión Logifire</h2>
          <p class="text-success">Conexión operativa .</p>
     </div>
     <!--/caja-->
    <!--caja-->
     <div class="col-md-4 borde">
       
          <h2>Conexión PI</h2>
          <p class="text-success">Conexión PI .</p>
     </div>
     <!--/caja-->
    <!--caja-->
     <div class="col-md-4 borde">
       
          <h2>Seguimiento LPN</h2>
          <p class="text-success">Seguimiento LPN .</p>
     </div>
     <!--/caja-->
   </div>
@endsection
