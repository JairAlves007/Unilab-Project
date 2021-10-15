@extends('layouts.main')

@section('title', 'Crie seu Edital')

@section('content')

@include('layouts.navbar')

<div class="d-flex">

    @include('layouts.sidebar')

    <div class="form-create">

        <h1>Crie Um Edital</h1>

        @if($errors->any())

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach

        @endif

        <form action="/edict/store" method="POST" enctype="multipart/form-data">
            @csrf

            <div id="form-area">
                <div class="form-content">
                    <div class="form-group">
                        <label for="title">Titulo do Edital</label>
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="Insira o Titulo Aqui...">
                    </div>

                    <div class="form-group">
                        <label for="archive">Arquivo do Edital</label>
                        <input type="file" name="archive" class="form-control-file" id="archive">
                    </div>

                    <div class="form-group">
                        <label for="description">Descrição do Edital</label>
                        <textarea class="form-control" name="description" id="description" rows="5"
                            placeholder="Insira a Descrição Aqui..."></textarea>
                    </div>
                </div>

                <div class="form-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="submission_start">Início da Submissão</label>
                            <input type="date" name="submission_start" id="submission_start" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="submission_finish">Término da Submissão</label>
                            <input type="date" name="submission_finish" id="submission_finish" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="rate_start">Início da Avaliação</label>
                            <input type="date" name="rate_start" id="rate_start" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rate_finish">Término da Avaliação</label>
                            <input type="date" name="rate_finish" id="rate_finish" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="execution_start">Início da Execução</label>
                            <input type="date" name="execution_start" id="execution_start" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="execution_finish">Término da Execução</label>
                            <input type="date" name="execution_finish" id="execution_finish" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="min_titulation">Titulação Mínima</label>
                            <select class="form-control" name="min_titulations_id" id="min_titulation">
                                @foreach ($min_titulations as $titulation)
                                <option value="{{ $titulation->id }}">{{ $titulation->titulation }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="category">Categoria</label>
                            <select class="form-control" name="categories_id" id="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-success">Criar Edital</button>
        </form>
    </div>
    
</div>

@endsection
