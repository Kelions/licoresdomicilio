@extends('layouts.masterhome')
@section('body')
<div class="container-fluid mx-auto">

    <div class="mt-5 text-center">
        <h3 class="text-center text-warning" >Si Usted Maneja No conduzca</h3>
        <img src="{{asset('img/curao2.jpg')}}" class="img-responsive"alt="..." width="300">
    </div>

    <table class="table table-striped table-dark table-responsive mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody id="tbody_cart">

        </tbody>
      </table>
      </table>

</div>


@endsection