@extends('layouts.admin')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">LISTE DES PRODUITS</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Numéro du produit</th>
          <th>Nom du produit</th>
          <th>Prix_hors_taxe</th>
          <th>Description</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ( $products as $product)
          <tr>
            <td>{{ $product -> id }}</td>
            <td>{{ $product -> name}}
            </td>
            <td>{{ $product -> price_before_tax}}</td>
            <td> {{ $product -> description }}</td>
            <td>{{ $product -> category }}</td>
            <td id="outer">
              <a class="inner btn btn-sm btn-info" href="{{ route('product.edit', $product->id)}}">Edit</a>
              <form method="post" action="{{ route('todos.destroy') }}" class="inner">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                  <input type="submit" class="btn btn-sm btn-danger" value="Delete">
              </form>
            </td>
          </tr>
        @endforeach
        
        <!--</tfoot>-->
      </table>
    </div>
    <!-- /.card-body -->
  </div>

 @endsection