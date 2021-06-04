@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンお気に入りボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavotite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- お気に入りボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-light btn-sm"]) !!}
    {!! Form::close() !!}
@endif