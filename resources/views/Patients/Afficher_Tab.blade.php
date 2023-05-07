<x-master title="les patients">
    <h3>LES PATIENTS :</h3>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>Afficher Plus</th>
        </tr>
        
        @foreach ($patients as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->name}}</td>
            <td>{{$patient->email}}</td>
            <td>{{$patient->password}}</td>
            <td><a class="btn btn-primary" href="{{ route('patients.Afficher',$patient->id) }}" role="button">Afficher Plus</a></td>
        </tr>
        
        @endforeach        
    </table>
{{$patients->links()}}

</x-master>