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

    <div class="title">Ajouter Patient</div>
    <form method="POST" action="{{ route('patients.store') }}">
        @csrf
        <div class="p-3 py-5">
            <div class="row mt-2 ">
                <div class="col-md-6">
                    <label class="form-label labels">Prenom</label>
                    <input type="text" name="prenom" class="form-control" value="{{ old('prenom') }}">
                    @error('prenom')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label labels">nom</label>
                    <input type="text" name="nom" class="form-control" value="{{ old('nom') }}">
                    @error('nom')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <div class="row mt-3">
                <div>
                    <label class="form-label">Sexe :</label>
                    <select id="sexe" name="sexe" class="form-control">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select><br>
                    @error('sexe')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="form-label">Né le :</label>
                    <input type="date" class="form-control" name="dateNaiss" id="dateNaiss"><br>
                </div>


                <div>
                    <label class="form-label">à :</label>
                    <input type="text" class="form-control" name="lieuNaiss"><br>
                </div>



                <div>
                    <label class="form-label">Age:</label>
                    <input type="text" class="form-control" name="age" id="age"><br>
                </div>


                <div>
                    <label class="form-label">Etat Civil :</label>
                    <input type="text" class="form-control" name="etatcivil"><br>
                </div>



                <div>
                    <label class="form-label">Addresse :</label>
                    <input type="text" class="form-control" name="addresse"><br>
                </div>


                <div>
                    <label class="form-label">Mutuelle :</label>
                    <select class="form-control" name="mutuelle">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select><br>
                </div>

                <div>
                    <label class="form-label">Profession:</label>
                    <input type="text" class="form-control" name="profession"><br>
                </div>



                <div>
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email"><br>
                </div>



                <div>
                    <label class="form-label">Tel:</label>
                    <input type="tel" class="form-control" name="tel"><br>
                </div>

                <div>
                    <label class="form-label">Observations :</label>
                    <textarea name="observations" class="form-control"></textarea>
                </div>

            </div>



            <div class="my-4">
                <button type="submit" class="btn  profile-button">Ajouter</button>
                <a href="{{ route('patientspage') }}" class="btn btn-default">Back</a>
            </div>
        </div>

    </form>
</x-master>
