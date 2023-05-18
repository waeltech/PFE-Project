<x-master title="les patients">

    @if ($errors->any())
        <x-alert type="danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif

    <h1> Ajouter Patient : </h1>
    <form method="POST" action="{{ route('patients.store') }}">
        @csrf
        <div class="p-3 py-5">
            <div class="row mt-2 ">
                <div class="col-md-6">
                    <label class="form-label labels">Prenom</label>
                    <input type="text" name="PrenomPat" class="form-control" value="{{ old('PrenomPat') }}">
                    @error('PrenomPat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label labels">nom</label>
                    <input type="text" name="NomPat" class="form-control" value="{{ old('NomPat') }}">
                    @error('NomPat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="row mt-3">
                <div>
                    <label class="form-label">Sexe :</label>
                    <select id="sexe" name="Sexe" class="form-control">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select><br>
                    @error('Sexe')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="form-label">Né le :</label>
                    <input type="date" class="form-control" name="DateNaiss" id="dateNaiss"><br>
                </div>


                <div>
                    <label class="form-label">à :</label>
                    <input type="text" class="form-control" name="LieuNaiss"><br>
                </div>



                <div>
                    <label class="form-label">Age:</label>
                    <input type="text" class="form-control" name="Age" id="age"><br>
                </div>


                <div>
                    <label class="form-label">Etat Civil :</label>
                    <input type="text" class="form-control" name="Etat_civil"><br>
                </div>



                <div>
                    <label class="form-label">Addresse :</label>
                    <input type="text" class="form-control" name="Addresse"><br>
                </div>


                <div>
                    <label class="form-label">Mutuelle :</label>
                    <select class="form-control" name="Mutuelle">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select><br>
                </div>

                <div>
                    <label class="form-label">Profession:</label>
                    <input type="text" class="form-control" name="Profession"><br>
                </div>



                <div>
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="Email"><br>
                </div>



                <div>
                    <label class="form-label">Tel:</label>
                    <input type="tel" class="form-control" name="Tel"><br>
                </div>

                <div>
                    <label class="form-label">Observations :</label>
                    <textarea name="Observations" class="form-control"></textarea>
                </div>

            </div>



            <div class="my-4">
                <button type="submit" class="btn  profile-button">Ajouter</button>
                <a href="{{ route('patientspage') }}" class="btn btn-default">Back</a>
            </div>
        </div>

    </form>

<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</x-master>
