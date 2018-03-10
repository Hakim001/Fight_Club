@extends('layout')

@section('title', 'Projets')

@section('content')
  <div class="row">
    @foreach ($projects as $key => $project)
      <div class="col-md-6">
        <article>
          <h1 class="h3">{{ $project->title }}</h1>
          <h2 class="h5 text-muted">Publié le <time>@datetime($project->created_at)</time></h2>
          <p class="lead text-justify">@nl2br($project->body)</p>
        </article>
      </div>
      @if( $key % 2 == 1 )
        <div class="hidden-sm-down clearfix"></div>
      @endif
    @endforeach
  </div>
@endsection 
