@extends('layout')
@section('content')

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal" style="color:#01DF01">Laravel</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="{{URL::to('/companies')}}">Companies</a>
      <a class="p-2 text-dark" href="{{URL::to('/trainers')}}">Trainers</a>
      <a class="p-2 text-dark" href="{{URL::to('/categories')}}">Categories</a>
      <a class="p-2 text-dark" href="{{URL::to('/search')}}">Seach</a>


    </nav>

  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4" style="color: red">Companies</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
  </div>

  <!-- Table -->
  <table class="table table-dark" style="text-align: center">
    <!-- <thead>
    <tr style="color: yellow">
      <th scope="col" >ID</th>
      <th scope="col">Name</th>
      <th scope="col">Web</th>
      <th scope="col">Adress</th>
      <th scope="col">Code</th>
      <th scope="col">Phone</th>
    </tr>
    
  </thead> -->
  <thead>
    <tr style="color: yellow">
      <th scope="col" >ID</th>
      <th scope="col">Name</th>
      <th scope="col" >ID</th>
      <th scope="col">Name</th>
    </tr>
    
  </thead>

    <tbody>
      @foreach($categories as $category):
      <tr>
        <th scope="row">{!! $category->category_id !!}</th>
        <td scope="row">{!! $category->category_name !!}</td>
        @foreach($category->categoriesCompany as $company)
        <tr>
        <td></td>
        <td></td>
        <td scope="row">{!! $company->company_id !!}</td>
        <td scope="row">{!! $company->company_name !!}</td>
        </tr>
        @endforeach
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$categories->links()}}
@endsection