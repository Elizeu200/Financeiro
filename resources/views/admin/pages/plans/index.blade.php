@extends('adminlte::page')

@section('title', 'Plano')

@section('content_header')
    <h1>Planos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div id="filtros"></div>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    <tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                    <tr>
                        <td>
                            {{ $plan->name }} 
                        </td>
                        <td>
                            {{ $plan->Price }}     
                        </td> 
                        <td style="width=10px">
                            <a href="" class="btn btn-warning">Ver</a> 
                        </td>         
                        </tr>
                    @endforeach
                </tbody>
            </table>        
        </div>
    </div>
@stop