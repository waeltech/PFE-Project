<x-masterDash title="Ajouter un traitement">
    <h1>Ajouter un traitement</h1>
    <form method="POST" action="{{ route('traitements.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Numéro de dossier</label>
            <input type="number" name="NumDoss" class="form-control" value="{{ old('NumDoss') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Date de traitement</label>
            <input type="date" name="DateTraitement" class="form-control" value="{{ old('DateTraitement') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Acte</label><br>
            <select name="Acte" id="Acte">
                <option value="Traitement endodontique">Traitement endodontique</option>
                <option value="Obturation composite">Obturation composite</option>
                <option value="Détartrage">Détartrage</option>
                <option value="Surfaçage">Surfaçage</option>
                <option value="Extraction">Extraction</option>
                <option value="Extraction chirurgicale">Extraction chirurgicale</option>
                <option value="Couronne ccm">Couronne ccm</option>
                <option value="Couronne zircone">Couronne zircone</option>
                <option value="Couronne ccc">Couronne ccc</option>
                <option value="Implant">Implant</option>
                <option value="Prothèse adjointe totale">Prothèse adjointe totale</option>
                <option value="Stellite">Stellite</option>
                <option value="Prothèse adjointe partielle">Prothèse adjointe partielle</option>
                <option value="Valplast">Valplast</option>
                <option value="Inlaycore">Inlaycore</option>
                <option value="Blanchiment">Blanchiment</option>
                <option value="Orthodontie">Orthodontie</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Dent</label>
            <input type="number" name="Dent" class="form-control" value="{{ old('Dent') }}">
        </div>

        <div class="my-4">
            <button type="submit" class="btn  profile-button">Ajouter</button>
            <a href="{{ route('traitementpage') }}" class="btn btn-default">Retour</a>
        </div>
    </form>
</x-masterDash>
