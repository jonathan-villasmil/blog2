<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
       

    </head>
    @php
        $color = 'red';
        $alert = 'alert2';
    @endphp
    <body>
        
    
        <div class="container mx-auto ">
            <x-alert  :color="$color" class="mb-4">
                <x-slot name="title">
                    Titulo 1
                </x-slot>

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            </x-alert>

            <x-alert2 color="blue" class="mb-4">
               
                <x-slot name="title" >
                    Titulo de prueba
                </x-slot>

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </x-alert2>

            <x-dynamic-component :component="$alert">
                <x-slot name="title" >
                    Titulo de prueba
                </x-slot>

                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </x-dynamic-component>

        </div>
        
            

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
