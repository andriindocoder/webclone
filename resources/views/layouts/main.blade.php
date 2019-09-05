<!DOCTYPE html>
<html dir="ltr" lang="id">
   @include('layouts.head')

   <body class="front_page">

      @include('layouts.style-jquery')

      @yield('content')

      @include('layouts.script')
      
   </body>
</html>