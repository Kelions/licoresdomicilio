@extends('layouts.masterhome')
@section('body')

<div class="row mt-5">
    <div class="col-12 col-md-12 col-lg-6 mx-auto">
        <table class="table table-dark table bordered table-striped table-responsive ">
             <thead class="thead-dark">
                <tr>
                    <td>Tipo</td>
                    <td>Marca</td>
                    <td>Precio</td>
                    <td>Acciones</td>

                </tr>
             </thead>
             <tbody id="tbody_productos">

             </tbody>
        </table>
    </div>
    
</div>
@endsection