<div {{$attributes->merge(['class' => "bg-$color-300 border-l-4 border-$color-200 text-$color-dark p-4"])}}   role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$slot}}</p>
    {{$prueba()}}

    
  </div>