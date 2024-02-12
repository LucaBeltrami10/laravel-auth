@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="container">
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="project_name" class="form-label">Nome Progetto</label>
          <input type="text" class="form-control" id="project_name" name="project_name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione progetto</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="language_used-name" class="form-label">Linguaggi utilizzati</label>
            <input type="text" class="form-control" id="language_used"  name="language_used">
        </div>
        <div class="mb-3">
            <label for="framework_used" class="form-label">Frameword utilizzati</label>
            <input type="text" class="form-control" id="framework_used" name="framework_used">
        </div>
        <div class="mb-3">
            <label class="form-label" for="status" >Status</label>
            <input type="text" class="form-control" id="status" name="status">
            
          </div>
        <div class="mb-3">
            <label for="repository_url" class="form-label">Url Repository</label>
            <input type="text" class="form-control" id="repository_url" name="repository_url">
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
</div>

@endsection


<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>