@extends('layouts.app')

@section('content')

<div class="container">
    <h3 align="center" class="col-md-5">Cadastro de Login</h3>

        <div class="form-area">
            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="col-md-4">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="col-md-4">
                        <label>Senha</label>
                        <input type="text" class="form-control" name="senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                        <button class="btn btn-outline-danger">Sair</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $logins as $key => $login)
                <tr>
                    <td scope="col">{{ ++key }}</td>
                    <td scope="col">{{ $login->nome }}</td>
                    <td scope="col">{{ $login->email }}</td>

                    <td scope="col">
                        <a href="{{ route('login.edit', $login->id) }}">
                            <button>
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                            </button>
                        </a>

                        <form action=" {{ route('login.destroy', $student->id) }} " method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</div>
@ndsection

@push('css')
<style>
    .form-area{
        padding: 20px;
        margin-top: 20px;
        background-color: #b3e5fc;
    }
    .bi-trash-fil{
        color: red;
        font-size: 18px;
    }
    .bi-pencil{
        color: green;
        font-size: 18px;
        margin-left: 20px;
    }
</style>
@endpush