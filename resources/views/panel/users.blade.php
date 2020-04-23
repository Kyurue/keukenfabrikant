@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">naam</th>
                <th scope="col">email</th>
                <th scope="col">bewerken</th>
                <th scope="col">verwijder</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user )
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><button class="btn btn-success"><a href='/admin/users/{{$user->id}}/edit'>bewerken</a></button></td>
                <td>
                    {!!Form::open(['action' => ['userController@destroy', $user->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('verwijderen', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </td>
            </tr>
            @endforeach
    </table>
    </div>
</div>
<script type="text/javascript">
    $('.confirmation').click(function(e){
        let result = confirm("Weet je zeker dat je de gebruiker wilt verwijderen?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>
@endsection