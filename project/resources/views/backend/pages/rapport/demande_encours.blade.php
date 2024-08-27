@extends('layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LISTE DES DEMANDES EN COURS</h5>
                        <div class="m-3">
                            <button class="btn"><a class="btn btn-warning" href="{{ route('liste_demande') }}">Toutes les
                                    demandes</a></button>
                            <button class="btn"><a class="btn btn-primary"
                                    href="{{ route('demande_inputees') }}">Demandes inputées</a></button>
                            <button class="btn"><a class="btn btn-success"
                                    href="{{ route('demande_acceptees') }}">Demandes acceptées</a></button>
                            <button class="btn"><a class="btn btn-danger" href="{{ route('demande_refusees') }}">Demandes
                                    refusées</a></button>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Demandeur</th>
                                    <th scope="col">Thème</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center" scope="col" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->User->nom }} {{ $list->User->prenom }}</td>
                                        <td>{{ $list->theme }}</td>
                                        <td>{{ $list->session }}</td>
                                        <td>{{ $list->date_demande }}</td>
                                        <td><a class="btn btn-success" href="{{ url('detail_demande', [$list->id]) }}"><i
                                                    class="bi bi-eye"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    @if (Auth::user()->roles_id == 3)
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <form method="POST"
                                                                    action="{{ url('inputer_demande', [$list->id]) }}">
                                                                    @csrf
                                                                    <input type="text" name="statut" value="inputée"
                                                                        hidden>
                                                                    <button type="submit" class="btn">Inputer</button>
                                                                </form>
                                                            </a>
                                                        </li>
                                                    @endif
                                                    @if (Auth::user()->roles_id == 2)
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <form method="POST" action="">
                                                                @csrf
                                                                <input type="text" name="statut" value="acceptée"
                                                                    hidden>
                                                                <button type="submit" class="btn">Modifier</button>
                                                            </form>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <form method="POST" action="">
                                                                @csrf
                                                                <input type="text" name="statut" value="acceptée"
                                                                    hidden>
                                                                <button type="submit" class="btn">Supprimer</button>
                                                            </form>
                                                        </a>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
