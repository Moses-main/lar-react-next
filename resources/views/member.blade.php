<h1 style="text-align: center">The members home page</h1>
{{-- {{$data}} --}}
<table border="1">
<tr>
    <td>Name </td>
    <td>Email </td>
    <td>Operation </td>
</tr>
    @foreach ($members as $item)

    <tr>
        <td>{{$item['name']}} </td>
        <td>{{$item['email']}}</td>
        <td><a href={{"delete/".$item['id']}}>Delete</a></td>
    </tr>
    
@endforeach
</table>