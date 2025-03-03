<h1>Home Page Route</h1>
<h2>Hello @{{$name}}</h2>
<p>You are study in {{$std}}</p>
@for($i=0;$i<5;$i++)
    Current Index is {{$i}} <br>
@endfor

Time sis {{date('Y-m-d')}}

@auth
    {!!"<h2>User is Authenticated</h2>"!!}   
@endauth
@isset($post)
@if($post==1)
    @switch($post2)
        @case(1)
            <h2>Hello Word 1</h2>
            @break
        @case(2)
            <h2>Hello Word 2</h2>
            
            @break
        @default
            <h2>Default Word</h2>
            
    @endswitch

@endif
    <h2>Post is set {{$post}}</h2>   
@endisset

