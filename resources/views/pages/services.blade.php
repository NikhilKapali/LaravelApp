@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
    @if(count($services)>0)
        <ul class="list-group">
            @foreach ($services as $services)
                <li class="list-group-item">{{$services}}</li>
            @endforeach
        </ul>
    @endif
@endsection