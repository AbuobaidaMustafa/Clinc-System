
@include('Layouts.head')

@include('Layouts.header')

@include('Layouts.sidebar')

<div class="page-wrapper">
                
@include('Layouts.alert')

<div class="content">
@yield('content')
</div>
   
</div>


@include('Layouts.footer');