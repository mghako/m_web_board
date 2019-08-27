@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-8">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                        <h5>i’d love to share open-source projects on <u>mboard.app</u> – i’d love to get to know yours.</h5>

                        <h5>Please feel free to submit your open-source projects.</h5>

                        <h5>We reserve our right to not publish projects if they don’t fit our vision for <u>mboard.com</u> or contain illegal contents. Also, i may tweak your data to fit into our layout! If you don’t like a change i made or want to change details on your project page, please contact me via e-mail (mail@mghako.com)!</h5>
                            <small>{{ __('Thanks for sharing your resources') }}</small>
                        </div>
                        <form role="form" method="POST" action="{{ route('board.store') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <label for="">Board Title*</label>
                                    <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title" value="{{ old('title') }}" placeholder="Booking app" required autofocus>
                                
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                <label for="">Board Category*</label>
                                    <select name="category" id="category"  class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ ucfirst($category->name) }}</option>
                                        @endforeach
                                    </select>
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="">Email*</label>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="your email to contact" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('short_description') ? ' has-danger' : '' }}">
                                <label for="#">Short Description*</label>
                                    <textarea class="form-control{{ $errors->has('short_description') ? ' is-invalid' : '' }} form-control-alternative" rows="3" name="short_description" placeholder="what you project/board does" required></textarea>
                                @if ($errors->has('short_description'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('short_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('additional_information') ? ' has-danger' : '' }}">
                                <label for="#">Additional Information*</label>
                                    <textarea class="form-control{{ $errors->has('additional_information') ? ' is-invalid' : '' }} form-control-alternative" rows="5" placeholder="{{ __('app was built using Laravel !') }}" name="additional_information" required></textarea>
                                @if ($errors->has('additional_information'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('additional_information') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('demo_url') ? ' has-danger' : '' }}">
                                <label for="">Demo url</label>
                                    <input class="form-control{{ $errors->has('demo_url') ? ' is-invalid' : '' }} form-control-alternative" placeholder="{{ __('https://your-project.com') }}" type="url" name="demo_url" required>
                                @if ($errors->has('demo_url'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('demo_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('source_code_url') ? ' has-danger' : '' }}">
                                <label for="">Github or source code url*</label>
                                    <input class="form-control{{ $errors->has('source_code_url') ? ' is-invalid' : '' }} form-control-alternative" placeholder="{{ __('https://github.com/your-repo') }}" type="url" name="source_code_url" required>
                                @if ($errors->has('source_code_url'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('source_code_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('social_network_url') ? ' has-danger' : '' }}">
                                <label for="#">Facebook social url</label>
                                    <input class="form-control{{ $errors->has('social_network_url') ? ' is-invalid' : '' }} form-control-alternative" placeholder="{{ __('https://facebook.com/your-profile') }}" type="url" name="social_network_url" required>
                                @if ($errors->has('social_network_url'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('social_network_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                           
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Submit board') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection