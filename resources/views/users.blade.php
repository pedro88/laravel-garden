<x-layout>
<h1>Welcome to Users page</h1>

@foreach ($users as $user)
<ul>
<a href="/user/ {{ $user['id'] }} ">
<li>
    <strong>{{$user['name'] }}</strong>
</li>
</a>
</ul>    
@endforeach

</x-layout>