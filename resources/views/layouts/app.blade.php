<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="{{ asset('dist/css/plugins.min.css') }}" rel="stylesheet">

<!--main Css-->
<link href="{{ asset('dist/css/main.min.css') }}" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <style>
    .form-control{
        border-radius:10px;
        height: 40px;
    }
    .toggle-password {
    position: absolute;
    top: 49%;
    right: 12%;
    width: 20px;
    height: 20px;
    border: none;
    font-size: 22px;
    background-color: transparent;
}
@media only screen and (max-width: 770px) {
    .toggle-password {
    position: absolute;
    top: 49%;
    right: 17%;
    width: 20px;
    height: 20px;
    border: none;
    font-size: 22px;
    background-color: transparent;
}
}
</style>
@livewireStyles
</head>
<body>

    



    {{-- <livewire:city-table /> --}}
    {{-- @livewire(Livewire\Foo::class) --}}
    {{$slot}}
    @livewireScripts

    <script>
        window.addEventListener('alert', event => { 
                     toastr[event.detail.type](event.detail.message, 
                     event.detail.title ?? ''), toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                        }
                    });
    </script>
        
</body>
</html>
