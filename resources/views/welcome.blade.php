@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ __('El Clínica') }}</div>

            <div class="card-body">

                <form>
                    @csrf

                    <div class="form-group row">
                        <label for="specialtie" class="col-md-4 col-form-label text-md-right">{{ __('Especialidade') }}</label>

                        <div class="col-md-6">
                            <select id="specialtie" type="specialtie" class="form-control @error('specialtie') is-invalid @enderror" name="specialtie" size="6" autofocus onclick="search_professionals()">
                                @foreach($specialties as $specialtie)
                                <option value="{{ $specialtie->id }}">{{ $specialtie->name }}</option>
                                @endforeach
                            </select>

                            @error('specialtie')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="professionals" class="col-md-6">
        
    </div>
</div>
<div class="row">
    <div id="schedule" class="col-md-12">
        
    </div>
</div>





@endsection