@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des Commandes</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Numéro de Commandes</th>
          <th>Coût hors taxe</th>
          <th>Taxe</th>
          <th>Coût total</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ( $orders as $order)
          <tr>
            <td>{{ $order -> slug }}</td>
            <td>{{ $order -> cost_before_tax }}
            </td>
            <td>{{ $order -> tax}}</td>
            <td> {{ $order -> total_cost }}</td>
            <td>{{ $order -> slug }}</td>
          </tr>
        @endforeach
        
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

 @endsection