<x-masterDash title="les patients">
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
    <form method="POST" action="{{ route('patients.update',$patient->NumDoss) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input type="text" name="PrenomPat" class="form-control" value="{{ old('PrenomPat',$patient->PrenomPat) }}">
            @error('PrenomPat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">nom</label>
            <input type="text" name="NomPat" class="form-control" value="{{ old('NomPat',$patient->NomPat) }}">
            @error('NomPat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label">Sexe :</label>
            <select id="sexe" name="Sexe" class="form-control">
                <option value="M" {{ old('Sexe', $patient->Sexe) == 'M' ? 'selected' : '' }}>M</option>
                <option value="F" {{ old('Sexe', $patient->Sexe) == 'F' ? 'selected' : '' }}>F</option>
            </select><br>
            @error('Sexe')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
              

        <div class="mb-3">
            <label class="form-label">Né le :</label>
            <input type="date" class="form-control" name="DateNaiss" id="dateNaiss" value="{{ old('DateNaiss', $patient->DateNaiss) }}"><br>
            @error('DateNaiss')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">à :</label>
            <input type="text" class="form-control" name="LieuNaiss" value="{{ old('LieuNaiss', $patient->LieuNaiss) }}"><br>
            @error('LieuNaiss')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Age:</label>
            <input type="text" class="form-control" name="Age" id="age" value="{{ old('Age', $patient->Age) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Etat Civil :</label>
            <input type="text" class="form-control" name="Etat_civil" value="{{ old('Etat_civil', $patient->Etat_civil) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Addresse :</label>
            <input type="text" class="form-control" name="Addresse" value="{{ old('Addresse', $patient->Addresse) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Mutuelle :</label>
            <select class="form-control" name="Mutuelle">
                <option value="YES" {{ old('Mutuelle', $patient->Mutuelle) == 'YES' ? 'selected' : '' }}>YES</option>
                <option value="NO" {{ old('Mutuelle', $patient->Mutuelle) == 'NO' ? 'selected' : '' }}>NO</option>
            </select><br>
            @error('Mutuelle')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Profession:</label>
            <input type="text" class="form-control" name="Profession" value="{{ old('Profession', $patient->Profession) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" name="Email" value="{{ old('Email', $patient->Email) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Tel:</label>
            <input type="tel" class="form-control" name="Tel" value="{{ old('tel', $patient->tel) }}"><br>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Observations :</label>
            <textarea name="Observations" class="form-control">{{ old('Observations', $patient->Observations) }}</textarea>
        </div>
    
        <div class="my-4">
            <button type="submit" class="btn btn-secondary profile-button">Modifier</button>
            <a href="{{ route('patientspage') }}" class="btn btn-default">Back</a>
        </div>
    </form>
</x-masterDash>
