{{-- 
<form action="/edital/store" method="POST" enctype="multipart/form-data">
    @csrf
    
    <span>Imagem</span>
    <input type="file" name="image">
    <br>
    <span>Arquivo</span>
    <input type="file" name="archive">
    <br>
    <input type="text" name="title">
    <br>
    <textarea name="description" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Enviar</button>
</form> --}}
@extends('layouts.main')
<div class="content p-5">

    <form action="/edital/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titulo do Edital</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Insira o Titulo Aqui...">
        </div>
        <div class="form-group">
            <label for="file">Arquivo do Edital</label>
            <input type="file" name="file" class="form-control-file" id="file">
        </div>
        <div class="form-group">
            <label for="description">Descrição do Edital</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Insira a Descrição Aqui..."></textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date_initial">Data de Início</label>
                <input type="date" name="date_initial" id="date_initial" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="date_finish">Data de Término</label>
                <input type="date" name="date_finish" id="date_finish" class="form-control" required>
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="min_titulation">Titulação Mínima</label>
                <select class="form-control" name="min_titulation" id="min_titulation">
                    <option value="1">Graduado</option>
                    <option value="2">Pós-Graduado</option>
                    <option value="3">Doutorado</option>
                    <option value="4">Mestrado</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="category">Categoria</label>
                <select class="form-control" name="category" id="category">
                    <option value="1">Desenvolvimento</option>
                    <option value="2">Estágio</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Criar Edital</button>
    </form>
</div>