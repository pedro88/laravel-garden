<x-layout>
    <h1>Welcome to Greens page</h1>
    
    @foreach ($greens as $green)
    <ul>
    <a href="/green/ {{ $green['id'] }} ">
    <li>
        <strong>{{$green['name'] }}</strong>
    </li>
    </a>
    </ul>    
    @endforeach
    
    </x-layout>