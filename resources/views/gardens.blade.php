<x-layout>
    <h1>Welcome to Gardens page</h1>
    
    @foreach ($gardens as $garden)
    <ul>
    <a href="/garden/ {{ $garden['id'] }} ">
    <li>
        <strong>{{$garden['name'] }}</strong>
    </li>
    </a>
    </ul>    
    @endforeach
    
    </x-layout>