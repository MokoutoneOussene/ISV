@extends('layout.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LISTE DES SOUTENANCES</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Heure</th>
                                    <th scope="col">Thème</th>
                                    <th scope="col">Apprenant</th>
                                    <th scope="col">Jury</th>
                                    <th class="text-center" scope="col" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listes as $list)
                                    <tr>
                                        <th scope="row">{{ $list->id }}</th>
                                        <td>{{ $list->date_soutenance }}</td>
                                        <td>{{ $list->heure }}</td>
                                        <td>{{ $list->Demande->theme }}</td>
                                        <td>{{ $list->Demande->User->nom }} {{ $list->Demande->User->prenom }}</td>
                                        <td>{{ $list->Jury->code }}</td>
                                        <td>
                                            <a class="btn btn-success"
                                                href="{{ route('gestion_soutenance.show', [$list->id]) }}">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle w-100" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                            data-bs-target="#verticalycentered{{ $list->id }}">Evaluer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('gestion_soutenance.edit', [$list->id]) }}">Editer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ url('supprimer_soutenance/' . $list->id) }}">Supprimer</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <div class="modal fade" id="verticalycentered{{ $list->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Evaluation de la soutenance
                                                            {{ $list->id }} </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row g-3" method="POST"
                                                            action="{{ route('gestion_soutenance.update', [$list->id]) }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="text" name="statut" value="effectuée"
                                                                class="form-control" hidden>
                                                            <div class="row">
                                                                <div class="col-lg-12 mb-3">
                                                                    <label for="inputNanme4" class="form-label">Note</label>
                                                                    <input type="text" name="note"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="col-lg-12 mb-3">
                                                                    <label for="inputNanme4"
                                                                        class="form-label">Appreciation</label>
                                                                    <input type="text" name="appreciation"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Evaluer</button>
                                                        <button type="button" class="btn btn-dark"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                    </div>
                                                    </form> <!-- Vertical Form -->
                                                </div>
                                            </div>
                                        </div>
                    </div><!-- End Vertically centered Modal-->
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
