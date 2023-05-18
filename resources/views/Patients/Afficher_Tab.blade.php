<x-master title="les patients">
    <h3>LES PATIENTS :</h3>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PRENOM</th>
            <th>Afficher Plus</th>
        </tr>
        
        @foreach ($patients as $patient)
        <tr>
            <td>{{$patient->NumDoss}}</td>
            <td>{{$patient->NomPat}}</td>
            <td>{{$patient->Email}}</td>
            <td>{{$patient->PrenomPat}}</td>
            <td><a class="btn btn-primary" href="{{ route('patients.Afficher',$patient->NumDoss) }}" role="button">Afficher Plus</a></td>
        </tr>
        
        @endforeach        
    </table>
{{$patients->links()}}

</x-master>