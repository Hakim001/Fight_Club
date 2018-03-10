@extends('layout')

@section('navbar', 'Administration')

@section('title', 'Espace administration')

@section('content')
  <h1 class="text-xs-center">Projets</h1>
  <div class="row">
    <div class="col-md-6">
      @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
      @endif
      <form action="" method="post" class="p-y-3 p-x-2">
        {{ csrf_field() }}
        <input type="text" name="title" class="form-control" placeholder="Nom du projet" value="{{ old('title') }}">
        <textarea name="body" class="form-control" placeholder="Texte du projet">{{ old('body') }}</textarea>
        <input type="submit" class="btn btn-success" value="Publier">
      </form>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Éditer</th>
            <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
            <tr>
              <th>{{ $project->id }}</th>
              <td>{{ $project->title }}</td>
              <td><a href="{{ url('admin/editer') }}/{{ $project->id }}" class="text-success">Éditer</a></td>
              <td><a href="{{ url('admin/supprimer') }}/{{ $project->id }}" class="text-success">Supprimer</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
