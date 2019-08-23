@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')
    <div class="container mt--8 pb-5">
        <!-- Table -->
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
                        <form role="form" method="POST" action="{{ route('submit-board.store') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <label for="">Board Title*</label>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g transform="translate(0, 0)"><path fill="#444444" d="M15.144,5.438l-4.316-0.627L8.897,0.9c-0.338-0.683-1.456-0.683-1.794,0l-1.93,3.911L0.856,5.438 C0.039,5.557-0.292,6.565,0.302,7.145l3.124,3.044l-0.737,4.299c-0.139,0.814,0.717,1.439,1.451,1.054L8,13.513l3.861,2.03 c0.728,0.381,1.591-0.234,1.451-1.054l-0.737-4.299l3.124-3.044C16.292,6.565,15.961,5.557,15.144,5.438z"></path></g></svg></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title" value="{{ old('title') }}" required autofocus>
                                </div>
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="">Email*</label>
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g transform="translate(0, 0)"><path fill="#444444" d="M15,1H1C0.448,1,0,1.447,0,2v12c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V2C16,1.447,15.552,1,15,1z M14,13H2V6.723l5.504,3.145c0.308,0.176,0.685,0.176,0.992,0L14,6.723V13z M14,4.42L8,7.849L2,4.42V3h12V4.42z"></path></g></svg></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('short_description') ? ' has-danger' : '' }}">
                                <label for="#">Short Description*</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g transform="translate(0, 0)"><path fill="#444444" d="M15,1h-3v2h2v11H2V3h2V1H1C0.4,1,0,1.4,0,2v13c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V2C16,1.4,15.6,1,15,1z"></path> <rect x="5" fill="#444444" width="6" height="4"></rect> <rect data-color="color-2" x="4" y="6" fill="#444444" width="8" height="2"></rect> <rect data-color="color-2" x="4" y="10" fill="#444444" width="8" height="2"></rect></g></svg></span>
                                    </div>
                                    <textarea class="form-control{{ $errors->has('short_description') ? ' is-invalid' : '' }} form-control-alternative" rows="3" name="short_description" required></textarea>
                                </div>
                                @if ($errors->has('short_description'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('short_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('additional_information') ? ' has-danger' : '' }}">
                                <label for="#">Additional Information*</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g transform="translate(0, 0)"><path fill="#444444" d="M15,1h-3v2h2v11H2V3h2V1H1C0.4,1,0,1.4,0,2v13c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V2C16,1.4,15.6,1,15,1z"></path> <rect x="5" fill="#444444" width="6" height="4"></rect> <rect data-color="color-2" x="4" y="6" fill="#444444" width="8" height="2"></rect> <rect data-color="color-2" x="4" y="10" fill="#444444" width="8" height="2"></rect></g></svg></span>
                                    </div>
                                    <textarea class="form-control{{ $errors->has('additional_information') ? ' is-invalid' : '' }} form-control-alternative" rows="5" placeholder="{{ __('app was built using Laravel !') }}" name="additional_information" required></textarea>
                                </div>
                                @if ($errors->has('additional_information'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('additional_information') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('demo_url') ? ' has-danger' : '' }}">
                                <label for="">Demo url</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g transform="translate(0, 0)"><path data-color="color-2" fill="#444444" d="M4.5,16c-1.2,0-2.3-0.5-3.2-1.3c-1.8-1.8-1.8-4.6,0-6.4L2,7.6L3.4,9L2.7,9.7 c-1,1-1,2.6,0,3.6c1,1,2.6,1,3.6,0l3-3c1-1,1-2.6,0-3.6L8.6,6L10,4.6l0.7,0.7c1.8,1.8,1.8,4.6,0,6.4l-3,3C6.9,15.5,5.7,16,4.5,16z"></path> <path fill="#444444" d="M6,11.4l-0.7-0.7c-1.8-1.8-1.8-4.6,0-6.4l3-3c0.9-0.9,2-1.3,3.2-1.3s2.3,0.5,3.2,1.3c1.8,1.8,1.8,4.6,0,6.4 L14,8.4L12.6,7l0.7-0.7c1-1,1-2.6,0-3.6c-1-1-2.6-1-3.6,0l-3,3c-1,1-1,2.6,0,3.6L7.4,10L6,11.4z"></path></g></svg></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('demo_url') ? ' is-invalid' : '' }} form-control-alternative" placeholder="{{ __('https://your-project.com') }}" type="url" name="demo_url" required>
                                </div>
                                @if ($errors->has('demo_url'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('demo_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('source_code_url') ? ' has-danger' : '' }}">
                                <label for="">Github or source code url*</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g transform="translate(0, 0)"><polygon data-color="color-2" fill="#444444" points="8,13.4 2.1,9.7 0,11 8,16 16,11 13.9,9.7 "></polygon> <polygon fill="#444444" points="0,6 8,1 16,6 8,11 "></polygon></g></svg></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('source_code_url') ? ' is-invalid' : '' }} form-control-alternative" placeholder="{{ __('https://github.com/your-repo') }}" type="url" name="source_code_url" required>
                                </div>
                                @if ($errors->has('source_code_url'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('source_code_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('social_network_url') ? ' has-danger' : '' }}">
                                <label for="#">Facebook social url</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g transform="translate(0, 0)"><path fill="#444444" d="M14.682,2.318c-1.757-1.757-4.607-1.757-6.364,0C8.197,2.439,8.104,2.577,8,2.707 C7.896,2.577,7.803,2.439,7.682,2.318c-1.757-1.757-4.607-1.757-6.364,0c-1.757,1.757-1.757,4.607,0,6.364L8,15l6.682-6.318 C16.439,6.925,16.439,4.075,14.682,2.318z"></path></g></svg></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('social_network_url') ? ' is-invalid' : '' }} form-control-alternative" placeholder="{{ __('https://facebook.com/your-profile') }}" type="url" name="social_network_url" required>
                                </div>
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