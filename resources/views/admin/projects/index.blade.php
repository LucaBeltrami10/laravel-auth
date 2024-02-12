@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Progetto</th>
            <th scope="col">Linguaggi</th>
            <th scope="col">Framework</th>
            <th scope="col">Status</th>
            <th scope="col">Repository</th>
            <th scope="col">Descrizione</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
          <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->project_name }}</td>
            <td>{{ $project->language_used }}</td>
            <td>{{ $project->framework_used }}</td>
            <td>{{ $project->status }}</td>
            <td>{{ $project->repository_url }}</td>
            <td>{{ $project->description }}</td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
        
</div>

@endsection