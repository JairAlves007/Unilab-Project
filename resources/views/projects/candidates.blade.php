@extends('layouts.main')

@section('title', 'Veja A Lista de Candidatos')

@section('content')

@include('layouts.navbar')

<div class="d-flex">

    @include('layouts.sidebar')

    <div class="content p-1">
        <div class="list-group-item">
            <div class="d-flex">
                <div class="mr-auto p-2">
                    <h2 class="display-4 titulo">Candidatos</h2>
                </div>
            </div>

            @include('hintMessages')

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($candidates as $candidate)

                        <tr>
                            <th>{{ $candidate->user_id }}</th>
                            <td>{{ $candidate->name }}</td>
                            <td>{{ $candidate->email}}</td>
                            <td class="text-center">
                                <a href="{{ route('projects.approved', $candidate->user_id) }}"
                                    class="btn btn-outline-success btn-sm">
                                    Aprovar
                                </a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>

@endsection
