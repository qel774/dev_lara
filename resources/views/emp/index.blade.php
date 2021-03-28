@extends('layouts.helloapp')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EMP Add</div>

                <div class="card-body">
                    
                    @foreach ($emps as $emp)

                    <div class="form-group row">
                        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                        <div class="col-md-6 input-group-text">
                            {{ $emp->id }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6 input-group-text">
                            {{ $emp->name }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Mail') }}</label>

                        <div class="col-md-6 input-group-text">
                            {{ $emp->mail }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                        <div class="col-md-6 input-group-text">
                            {{ $emp->age }}
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                        <form method="POST" action="/emp/delete/{{$emp->id}}">
                            @csrf
                                <button type="submit" class="btn btn-danger btn-dell">
                                    {{ __('削除') }}
                                </button>
                            </form>
                            <button type="button" class="btn btn-primary" onclick="history.back()">
                                {{ __('戻る') }}
                            </button>
                        </div>  
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection