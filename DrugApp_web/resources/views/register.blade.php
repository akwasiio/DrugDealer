@extends('layouts.app')


@section('content')

    <div class="container">
        <h2>Add New Drug</h2>

        <form method="POST" action="{{route("registerRoute")}}">

            <!--name-->
            <div class="form-group row">
                <label for="name"
                       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input type="text"
                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           name="name"
                           value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <!--company name-->
            <div class="form-group row">
                <label for="company_name"
                       class="col-md-4 col-form-label text-md-right">{{ __('company name') }}</label>

                <div class="col-md-6">
                    <input type="text"
                           class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}"
                           name="company_name"
                           value="{{ old('company_name') }}" required autofocus>

                    @if ($errors->has('company_name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <!--email-->
            <div class="form-group row">
                <label for="email"
                       class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                <div class="col-md-6">
                    <input type="text"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email"
                           value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <!--phone-->
            <div class="form-group row">
                <label for="phone"
                       class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                <div class="col-md-6">
                    <input type="text"
                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                           name="phone"
                           value="{{ old('phone') }}" required autofocus>

                    @if ($errors->has('phone'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <!--dosage-->
            <div class="form-group row">
                <label for="dosage"
                       class="col-md-4 col-form-label text-md-right">{{ __('dosage') }}</label>

                <div class="col-md-6">
                    <input type="text"
                           class="form-control{{ $errors->has('dosage') ? ' is-invalid' : '' }}"
                           name="dosage"
                           value="{{ old('dosage') }}" required autofocus>

                    @if ($errors->has('dosage'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dosage') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <!--description-->
            <div class="form-group row">
                <label for="description"
                       class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                <div class="col-md-6">
                    <textarea type="text"
                              class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                              name="description" required autofocus>
                    </textarea>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <!--side effect-->
            <div class="form-group row">
                <label for="side_effects"
                       class="col-md-4 col-form-label text-md-right">{{ __('side_effects') }}</label>

                <div class="col-md-6">
                    <textarea type="text"
                              class="form-control{{ $errors->has('side_effects') ? ' is-invalid' : '' }}"
                              name="side_effects" required autofocus>
                    </textarea>

                    @if ($errors->has('side_effects'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('side_effects') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
            {{ csrf_field() }}
        </form>


    </div>

@endsection

