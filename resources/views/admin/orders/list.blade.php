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
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/>href="{{ route('product.edit', $product->id)}}"></svg>
                <div class="input-group-text">
                </div>
                </a>
              <form method="post" action="{{ route('product.edit') }}" class="inner">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <!-- <input type="submit" class="btn btn-sm btn-danger" value="Delete"> -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="currentColor" width="12" height="12">
  <path d="M1.5 10.5h9c0.276 0 0.5-0.224 0.5-0.5V3c0-0.276-0.224-0.5-0.5-0.5h-9C1.224 2.5 1 2.724 1 3v7c0 0.276 0.224 0.5 0.5 0.5zM2 3h8v6H2V3zM9 1H7.5V0.5C7.5 0.224 7.276 0 7 0H5c-0.276 0-0.5 0.224-0.5 0.5V1H3C2.724 1 2.5 1.224 2.5 1.5v1C2.5 2.776 2.724 3 3 3h6c0.276 0 0.5-0.224 0.5-0.5v-1C9.5 1.224 9.276 1 9 1z"/>
</svg>

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