@extends('layout.basico')

@section('content')

<form action="{{ url('users') }}" method="post">
    @csrf
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group">
                <label for="password_confirmation">Password novamente</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <div class="form-group">
                <label for="password">Telefone (somente números. ex: 31989099741) </label>
                <input type="number" length="11" class="form-control" id="telefone" name="telefone">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group">
                <label for="password">Deseja exibir seu email?</label>
                <select class="custom-select" id="email_visivel" name="email_visivel">
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                  </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="Cadastrar">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
        </div>
    </div>
</form>
{{var_dump($errors)}}
@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>$error</li>
        @endforeach
    </ul>
@endif
@endsection
