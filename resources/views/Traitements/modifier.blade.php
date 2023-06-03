<x-masterDash title="les patients">
    <h3> Modifier Un Traitement :</h3>

    @if ($errors->any())
        <x-alert type="danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif
    <form method="POST" action="{{ route('traitements.update',$traitement->Num_Traitement) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Numéro de dossier</label>
            <input type="number" name="NumDoss" class="form-control" value="{{ old('NumDoss',$patient->NumDoss) }}">
            @error('NumDoss')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label">Date de traitement</label>
            <input type="date" name="DateTraitement" class="form-control" value="{{ old('DateTraitement',$traitement->DateTraitement) }}">
            @error('DateTraitement')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Acte</label>
            <select name="Acte" id="Acte">
                <option value="Traitement endodontique" {{ old('Acte', $traitement->Acte) == 'Traitement endodontique' ? 'selected' : '' }}>Traitement endodontique</option>
                <option value="Obturation composite"{{ old('Acte', $traitement->Acte) == 'Obturation composite' ? 'selected' : '' }}>Obturation composite</option>
                <option value="Détartrage"{{ old('Acte', $traitement->Acte) == 'Détartrage' ? 'selected' : '' }}>Détartrage</option>
                <option value="Surfaçage"{{ old('Acte', $traitement->Acte) == 'Surfaçage' ? 'selected' : '' }}>Surfaçage</option>
                <option value="Extraction"{{ old('Acte', $traitement->Acte) == 'Extraction' ? 'selected' : '' }}>Extraction</option>
                <option value="Extraction chirurgicale"{{ old('Acte', $traitement->Acte) == 'Extraction chirurgicale' ? 'selected' : '' }}>Extraction chirurgicale</option>
                <option value="Couronne ccm"{{ old('Acte', $traitement->Acte) == 'Couronne ccm' ? 'selected' : '' }}>Couronne ccm</option>
                <option value="Couronne zircone"{{ old('Acte', $traitement->Acte) == 'Couronne zircone' ? 'selected' : '' }}>Couronne zircone</option>
                <option value="Couronne ccc"{{ old('Sexe', $traitement->Acte) == 'Couronne ccc' ? 'selected' : '' }}>Couronne ccc</option>
                <option value="Implant"{{ old('Acte', $traitement->Acte) == 'Implant' ? 'selected' : '' }}>Implant</option>
                <option value="Prothèse adjointe totale"{{ old('Acte', $traitement->Acte) == 'Prothèse adjointe totale' ? 'selected' : '' }}>Prothèse adjointe totale</option>
                <option value="Stellite"{{ old('Acte', $traitement->Acte) == 'Stellite' ? 'selected' : '' }}>Stellite</option>
                <option value="Prothèse adjointe partielle"{{ old('Acte', $traitement->Acte) == 'Prothèse adjointe partielle' ? 'selected' : '' }}>Prothèse adjointe partielle</option>
                <option value="Valplast"{{ old('Acte', $traitement->Acte) == 'Valplast' ? 'selected' : '' }}>Valplast</option>
                <option value="Inlaycore"{{ old('Acte', $traitement->Acte) == 'Inlaycore' ? 'selected' : '' }}>Inlaycore</option>
                <option value="Blanchiment"{{ old('Acte', $traitement->Acte) == 'Blanchiment' ? 'selected' : '' }}>Blanchiment</option>
                <option value="Orthodontie"{{ old('Acte', $traitement->Acte) == 'Orthodontie' ? 'selected' : '' }}>Orthodontie</option>
            </select><br>
            @error('Acte')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
              
        <div class="mb-3">
            <label class="form-label">Dent</label>
            <input type="number" name="Dent" class="form-control" value="{{ old('Dent',$traitement->Dent) }}">
            @error('Dent')
                <div class="text-danger">{{ $message }}</div>
            @enderror    
        </div>

        <div class="my-4">
            <button type="submit" class="btn  profile-button">Ajouter</button>
            <a href="{{ route('traitementpage') }}" class="btn btn-default">Retour</a>
        </div>
    </form>
</x-masterDash>
