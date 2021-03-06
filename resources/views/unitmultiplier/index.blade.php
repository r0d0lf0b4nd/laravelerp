@extends('layouts.app')

@section('content')

    <h1 class="text-center">Multiplicadores de unidades</h1>

    <table id="table" class="table table-condensed table-hover" data-toggle="bootgrid">
        <thead>
        <tr>
            <th data-column-id="id" data-type="numeric">#</th>
            <th data-column-id="um_name" data-order="asc">Nome</th>
            <th data-column-id="um_iso_code">Sigla</th>
            <th data-column-id="um_multiplier" data-type="decimal">Multiplicador</th>
            <th data-column-id="commands" data-formatter="commands" data-sortable="false">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($unitMultipliers as $unitMultiplier)
            <tr>
                <td>{{$unitMultiplier->id}}</td>
                <td>{{$unitMultiplier->um_name}}</td>
                <td>{{$unitMultiplier->um_iso_code}}</td>
                <td>{{$unitMultiplier->um_multiplier}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function(){
            $("#table").bootgrid({

            });
        });
        @if($errors->any())
            alert("Não foi possivel excluir. Existe {{$errors->first('records')}} registro(s) relacionado(s)!");
        @endif
    </script>
@stop