@extends('template.user')
@section('title', 'Halaman Profile')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-4">
             <img src="" alt="gambar" class="img-profile">
         </div>
         <div class="offset-md-2 col-md-6">
             <div class="content">
                 <label for="name">Name</label>
                 <p>{{ Auth::user()->name }}</p>
                 <label for="name">Email</label>
                 <p>{{ Auth::user()->email }}</p>
                 <label for="name">Address</label>
                 <p>{{ Auth::user()->address }}</p>
                 <label for="name">Phone</label>
                 <p>{{ Auth::user()->phone }}</p>
             </div>
         </div>
     </div>
 </div>
    
@endsection