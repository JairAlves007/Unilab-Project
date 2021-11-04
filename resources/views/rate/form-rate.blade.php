@extends('layouts.main')

@section('title', 'Anexe um Projeto')

@section('content')

    @include('layouts.navbar')

    <div class="d-flex">

        @include('layouts.sidebar')

        <div class="form-create">

            <h1>Área De Avaliação</h1>
            <h3>Projeto: "fdhbgudfhgbdo"</h3>
            <form action="nothing" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" aria-label="Radio button for following text input" value="1"> 1
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" aria-label="Radio button for following text input" value="2"> 2
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" aria-label="Radio button for following text input" value="3"> 3
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>

@endsection
