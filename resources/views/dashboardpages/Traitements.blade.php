<x-masterDash title="Traitements">

    <div class="text-center py-2 mt-2"> La liste des patients </div>

    <table class="table table-bordered ">
        <tr>
            <th>ID</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Type de Traitement</th>
            <th>Numéro de Dent</th>
            <th>Actions</th>
        </tr>

        @foreach ($traitements as $traitement)
            {{-- @dd($traitement); --}}
            @foreach ($traitement->patients as $patient)
                {{-- @dd($patient); --}}
                <tr>
                    <td>{{ $patient->NumDoss }}</td>
                    <td>{{ $patient->PrenomPat }}</td>
                    <td>{{ $patient->NomPat }}</td>
                    <td>{{ $traitement->Acte }}</td>
                    <td>{{ $traitement->Dent }}</td>
                    <td>  Actions  </td>
                </tr>
            @endforeach
        @endforeach
    </table>

    {{ $patients->links() }}
</x-masterDash>
