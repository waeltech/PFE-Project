<x-masterDash title="Patients">


    <div class="text-center py-2 mt-2"> La liste des patients </div>

    <table class="table table-bordered ">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        @foreach ($traitements as $traitement)
            <tr>
                <td>{{ $traitement->Num_Traitement }}</td>
                <td>{{ $traitement->DateTraitement }}</td>
                <td>{{ $traitement->Acte }}</td>
                <td>{{ $traitement->Dent }}</td>
                <td class="text-center">
                    {{-- Les actions d'insertion,modification et suppression  --}}
                    <a class="btn btn-primary btn-sm action-btn" href="{{ route('patients.Ajouter') }}"
                        role="button">Ajouter</a>
                    <form action="{{ route('patients.modifier', $traitement->Num_Traitement) }}" method="GET"
                        style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-sm action-btn">Modifier</button>
                    </form>
                    <form action="{{ route('patients.supprimer', $traitement->Num_Traitement) }}" method="POST"
                        style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm action-btn">Supprimer</button>
                    </form>
                    <a class="btn btn-warning btn-sm action-btn"
                        href="{{ route('patients.Afficher', $traitement->Num_Traitement) }}" role="button">Afficher Plus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $patients->links() }}
</x-masterDash>
