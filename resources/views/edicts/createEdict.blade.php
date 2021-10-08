
@extends('layouts.main')

@section('title', 'Crie seu Edital')

@section('content')    
    <div class="content p-5">

        <form action="/edict/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titulo do Edital</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Insira o Titulo Aqui...">
            </div>
            <div class="form-group">
                <label for="archive">Arquivo do Edital</label>
                <input type="file" name="archive" class="form-control-file" id="archive">
            </div>
            <div class="form-group">
                <label for="description">Descrição do Edital</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Insira a Descrição Aqui..."></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_initial">Data de Início</label>
                    <input type="date" name="submission_start" id="date_initial" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="date_finish">Data de Término</label>
                    <input type="date" name="submission_finish" id="date_finish" class="form-control" required>
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
            <button type="submit" class="btn btn-success">Criar Edital</button>
        </form>
    </div>
@endsection