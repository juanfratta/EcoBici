@extends('layouts.template')
@section('content')
  <link rel="stylesheet" href="/css/styleHome.css">

<main class="row">
<div class= "cart col-md-5 offset-md-3">
    <table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">#item</th>
        <th scope="col">Modelo</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td></td>
        <td>123</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>123132</td>
        </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry the Bird</td>
        <td>123132</td>
      </tr>
    </tbody>
  </table>
</div>

</main>

@endsection
