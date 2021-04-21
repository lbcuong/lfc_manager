@extends('admin.dashboard')
@section('player_page')
<form action = "{{ url('/delete-player') }}" method = "post">
    {{ csrf_field() }}
    <table class='table text-light'> 
        <thead>
            <tr>
                <th>Name</th> 
                <th>Squad number</th> 
                <th>Height</th> 
                <th>Date of birth</th> 
                <th>Nationality</th> 
                <th>Position</th> 
                <th>Salary</th> 
                <th>Signed</th>
                <th>Delete</th>
            </tr>
        <thead>
        <tbody id='table'>
            @foreach ($players as $item => $player)          
            <tr class="hover_table">
                <td> {{$player->name}} </td>
                <td> {{$player->squad_number}} </td>
                <td> {{$player->height}} </td>
                <td> {{$player->birth}} </td>
                <td> {{$player->nation}} </td>
                <td> {{$player->position}} </td>
                <td> {{$player->salary}} </td>
                <td> {{$player->signed}} </td>
                <td> <a onclick="return confirm('Are you sure to delete this player?')" class="fa fa-remove text-success" href="{{ url('/delete-player/'.$player->id) }}"></a></td>
            </tr>
            @endforeach
        </tbody>   
    </table>
</form>
@endsection