@extends('layout.basico')

@section('content')

<div class="row">
    <div class="col-sm">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="" name="" value="{{$user->name}}" readonly >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="" name="" value="{{$user->email}}" readonly>
        </div>
        <div class="form-group">
            <label for="">Telefones</label>
            <ul>
                @foreach ($telefones as $telefone)
                    @if($telefone->visivel == 'S' && $telefone->ativo == 'S')
                        <li>{{$telefone->telefone}}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        <form action="{{ url('users/'.$user->id.'/edit') }}">
            <input type="submit" value="Editar seus dados" class="btn btn-primary">
        </form>
    </div>
    <div class="col-sm">
        <div class="row">
            <form action="{{ url('users/'.$user->id.'/edit') }}">
                <input type="submit" value="Adicionar Pet" class="btn btn-primary">
            </form>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Remover</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Spark</td>
                    <td>Dobermann</td>
                    <td>+</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Faísca</td>
                    <td>Vira lata</td>
                    <td>+</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Bathory</td>
                    <td>Shiba Inu</td>
                    <td>+</td>
                    <td>-</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
