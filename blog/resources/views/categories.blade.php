@extends('layout')
@section('content')


<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
  <h5 class="my-0 mr-md-auto font-weight-normal" style="color:#01DF01">Laravel</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{URL::to('/companies')}}">Companies</a>
    <a class="p-2 text-dark" href="{{URL::to('/trainers')}}">Trainers</a>
    <a class="p-2 text-dark" href="{{URL::to('/categories')}}">Categories</a>
    <a class="p-2 text-dark" href="{{URL::to('/categoriescompanies')}}">CategoriesCompanies</a>
    <a class="p-2 text-dark" href="{{URL::to('/search')}}">Seach</a>
    
  </nav>
  
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4" style="color:yellow">Categories</h1>
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
</div>

<!-- Table -->
<div class="container">
  <div class="row">
    <div class="col-md-3">

    <form action ="{{URL::to('/searchCatagory')}}" method ="get" class="form-inline my-2 my-lg-0">
      {{ Form::label('category_id', 'Category :')}}
      {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


    
      
    
    </div>
    <div class="col-md-9"></div>
  </div>
</div>
@endsection