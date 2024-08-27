@extends('backend.layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Succès !</strong> {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <a class="btn btn-dark mt-4" href="{{ route('gestion_activites.create') }}">+ Ajouter activites</a>
                        <h5 class="card-title">LISTE DES ACTIVITES</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Libelle</th>
                                    <th scope="col">Image</th>
                                    <th class="text-center" scope="col" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->libelle }}</td>
                                        <td>
                                            <img src="{{ asset('storage') . '/' . $list->image }}" alt="Profile" class="img-fluid" style="width: 100px;">
                                        </td>
                                        <td><a class="btn btn-success" href="{{ route ('gestion_domaines.show', [$list->id]) }}"><i class="bi bi-eye"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route ('gestion_domaines.edit', [$list->id]) }}">Editer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ url ('supprimer_domaine/' .$list->id) }}">Supprimer</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
