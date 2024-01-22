<h1 style="text-align: center">The members home page</h1>
{{-- {{$data}} --}}
@foreach ($members as $item)
    <li>{{$item['name']}}</li>
    <li>{{$item['email']}}</li>
    <li>{{$item['password']}}</li>
    {{-- <li>{{$item['email']}}</li> --}}
    <li></li>
    <li></li>
@endforeach