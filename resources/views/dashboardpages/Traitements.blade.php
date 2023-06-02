<x-masterDash title="Traitements">


    <div class="text-center py-2 mt-2"> La liste des patients </div>

    <table class="table table-bordered ">
        <tr>
            <th>NumDoss</th>
            <th>Numéro de traitement</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Type de Traitement</th>
            <th>Numéro de Dent</th>
            <th>Actions</th>
        </tr>

        @foreach ($traitements as $traitement)
            <tr>
                <td>{{ $traitement->patients->first()->NumDoss }}</td>
                <td>{{ $traitement->Num_Traitement }}</td>
                <td>{{ $traitement->patients->first()->PrenomPat }}</td>
                <td>{{ $traitement->patients->first()->NomPat }}</td>
                <td>{{ $traitement->Acte }}</td>
                <td>{{ $traitement->Dent }}</td>
                <td class="text-center">
                    {{-- Les actions d'insertion,modification et suppression  --}}
                    <a class="btn btn-primary btn-sm action-btn" href="{{ route('traitements.Ajouter') }}"
                        role="button">Ajouter</a>
                    <form action="{{ route('traitements.modifier', $traitement->patients->first()->NumDoss) }}" method="GET"
                        style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-sm action-btn">Modifier</button>
                    </form>
                    <form action="{{ route('patients.supprimer', $traitement->patients->first()->NumDoss) }}" method="POST"
                        style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm action-btn">Supprimer</button>
                    </form>
                    <a class="btn btn-warning btn-sm action-btn"
                        href="{{ route('patients.Afficher',$traitement->patients->first()->NumDoss) }}" role="button">Afficher
                        Plus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $traitements->links() }}
    

</x-masterDash>