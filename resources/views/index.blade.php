@extends('layout.base') 
@section('pageContent')
    <div class="section">
        <ul>
            @foreach ($movies as $movie)
            <li>
                <h3>{{$movie -> title}}</h3>
                <h4>{{$movie -> original_title}}</h4>
                <h6>voto:{{$movie -> vote}}</h6>
            </li> 
            @endforeach
            
        </ul>
    </div>
@endsection