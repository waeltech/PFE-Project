<x-master title="les patients">
    <h3> Modifier Un Patient :</h3>

    @if ($errors->any())
        <x-alert type="danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif
    <form method="POST" action="{{ route('patients.update',$patient->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" value="{{ old('prenom',$patient->prenom) }}">
            @error('prenom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">nom</label>
            <input type="text" name="nom" class="form-control" value="{{ old('prenom',$patient->nom) }}">
            @error('nom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label">Sexe :</label>
            <select id="sexe" name="sexe" class="form-control">
                <option value="M" {{ old('sexe', $patient->sexe) == 'M' ? 'selected' : '' }}>M</option>
                <option value="F" {{ old('sexe', $patient->sexe) == 'F' ? 'selected' : '' }}>F</option>
            </select><br>
            @error('sexe')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
              

        <div class="mb-3">
            <label class="form-label">Né le :</label>
            <input type="date" class="form-control" name="dateNaiss" id="dateNaiss" value="{{ old('dateNaiss', $patient->dateNaiss) }}"><br>
            @error('dateNaiss')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">à :</label>
            <input type="text" class="form-control" name="lieuNaiss" value="{{ old('lieuNaiss', $patient->lieuNaiss) }}"><br>
            @error('lieuNaiss')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Age:</label>
            <input type="text" class="form-control" name="age" id="age" value="{{ old('age', $patient->age) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Etat Civil :</label>
            <input type="text" class="form-control" name="etatcivil" value="{{ old('etatcivil', $patient->etatcivil) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Addresse :</label>
            <input type="text" class="form-control" name="addresse" value="{{ old('addresse', $patient->addresse) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Mutuelle :</label>
            <select class="form-control" name="mutuelle">
                <option value="YES" {{ old('mutuelle', $patient->mutuelle) == 'YES' ? 'selected' : '' }}>YES</option>
                <option value="NO" {{ old('mutuelle', $patient->mutuelle) == 'NO' ? 'selected' : '' }}>NO</option>
            </select><br>
            @error('mutuelle')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Profession:</label>
            <input type="text" class="form-control" name="profession" value="{{ old('profession', $patient->profession) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $patient->email) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Tel:</label>
            <input type="tel" class="form-control" name="tel" value="{{ old('tel', $patient->tel) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Observations :</label>
            <textarea name="observations" class="form-control">{{ old('observations', $patient->observations) }}</textarea>
        </div>
    
        <div class="my-4">
            <button type="submit" class="btn btn-secondary profile-button">Modifier</button>
            <a href="{{ route('patientspage') }}" class="btn btn-default">Back</a>
        </div>
    </form>
</x-master>
