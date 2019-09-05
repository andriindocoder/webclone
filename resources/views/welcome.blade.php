@extends('layouts.main')
@section('content')
   <form method="post" action="./" id="form1" class="form-required">

      @include('layouts.header')

      @include('layouts.fotokategori')

      @include('layouts.newsevent')

      @include('layouts.footer')

      @include('layouts.modal')

      <a href="#" class="scrollToTop">
      <img src="{{ asset('/images/totop.png') }}" alt="Arrow" /></a>
      
   </form>
@endsection