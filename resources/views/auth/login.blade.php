@extends('layouts.app')

@section('content')
<login>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card d-flex">

                    <div class="card-body container-fluid">
                        <div class="row d-flex align-items-center">
                            <div class="col-5 d-flex justify-content-center flex-column">
                                <h1>Accedi e gestisci la tua attività</h1>
                                <svg id="b582dbfc-ed60-4217-aa06-1e10ec960023" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="80%" height="80%" viewBox="0 0 842 678.37637"><title>business_shop</title><ellipse cx="426" cy="645.87637" rx="416" ry="32.5" fill="#3f3d56"/><polygon points="779.369 585.5 783.268 614.093 755.975 616.692 759.874 581.601 779.369 585.5" fill="#a0616a"/><path d="M829.70151,303.81246s2.59933,35.091,2.59933,36.39069S814.1055,431.1799,814.1055,431.1799s-25.99336,49.38737,0,48.0877,18.19534-46.788,18.19534-46.788l27.293-75.38072-11.697-53.28638Z" transform="translate(-179 -110.81181)" fill="#a0616a"/><polygon points="693.591 585.5 689.692 614.093 716.985 616.692 713.086 581.601 693.591 585.5" fill="#a0616a"/><path d="M842.69819,428.58056l-6.49834,9.09768s-3.899,38.99,0,51.9867,11.697,72.7814,11.697,76.6804,1.29966,6.49834,0,7.798-5.19867,1.29967-2.59934,3.899,2.59934,10.39734,2.59934,10.39734V594.938l16.89568,96.17542s-10.39734,11.697-2.59934,11.697,36.3907,0,35.091-12.99667l-2.59933-1.29967s-3.899-85.77807-2.59934-89.67707,0-11.697,0-11.697-2.59934-3.899,0-5.19868,2.59934-11.697,2.59934-11.697l11.697-79.27974s10.39734,53.28638,16.89568,58.48505,5.19867,18.19535,5.19867,18.19535l5.19867,114.37076s-5.19867,12.99668,0,15.596,27.293,11.697,28.59269-1.29966,7.798-126.06777,7.798-131.26645-1.29966-7.798,0-11.697-1.29966-3.899,0-3.899-2.59933-3.899-2.59933-6.49834V479.2676s1.29967-12.99667,2.59933-15.596-1.29966-5.19867,0-9.09767-2.59933-16.89568-2.59933-16.89568l-58.485-15.596Z" transform="translate(-179 -110.81181)" fill="#2f2e41"/><path d="M888.18656,719.70614s6.49834-6.49834-2.59934-6.49834a42.30349,42.30349,0,0,0-16.89568,3.899l-6.49834,23.394S835.55,761.94534,865.44237,759.346s25.34352-.64983,25.34352-.64983,9.09768-2.59934,10.39734-5.19867-2.59933-40.2897-2.59933-40.2897S894.6849,723.60514,888.18656,719.70614Z" transform="translate(-179 -110.81181)" fill="#2f2e41"/><path d="M944.07227,719.70614s-6.49834-6.49834,2.59934-6.49834a42.30349,42.30349,0,0,1,16.89568,3.899l6.49833,23.394s26.64319,21.44452-3.24916,18.84518-29.24253-.64983-29.24253-.64983-9.09767-2.59934-10.39734-5.19867,6.49834-40.2897,6.49834-40.2897S937.57393,723.60514,944.07227,719.70614Z" transform="translate(-179 -110.81181)" fill="#2f2e41"/><circle cx="680.59387" cy="56.53553" r="33.79136" fill="#a0616a"/><path d="M847.89686,192.041s5.19867,25.99336,5.19867,29.89236,22.09435,15.596,22.09435,15.596l24.69369-31.192s-15.596-22.09435-15.596-27.293Z" transform="translate(-179 -110.81181)" fill="#a0616a"/><path d="M867.39187,225.83239s-11.32759-3.015-14.76147-8.00583c0,0-35.92557,35.29886-35.92557,41.79719l28.59269,50.68705s0,18.19534,2.59934,19.495,0,0,0,5.19867-7.798,38.99-5.19867,44.18871,5.19867,1.29966,2.59933,9.09767-9.09767,49.38738-9.09767,49.38738,23.394-7.798,57.18538,5.19867,74.08106-5.19867,74.08106-5.19867-10.39734-23.394-7.798-31.192-6.49834-22.09435-6.49834-22.09435l-6.49833-119.56943s9.09767-53.28638,2.59933-55.88572L936.27426,203.738l-41.62054-5.11533S884.28755,224.53273,867.39187,225.83239Z" transform="translate(-179 -110.81181)" fill="#d0cde1"/><path d="M829.70151,250.52608l-12.99668,9.09767s-6.49834,19.495,0,28.59269,9.09768,22.09436,9.09768,22.09436l25.99335-2.59934Z" transform="translate(-179 -110.81181)" fill="#d0cde1"/><path d="M833.79434,131.63567l-5.86153-2.34663s12.25588-13.493,29.30768-12.31967l-4.79592-5.27995s11.72307-4.69318,22.38037,7.62649c5.60233,6.4762,12.0843,14.08861,16.12514,22.66391h6.2773l-2.61991,5.76875,9.16968,5.76874-9.41178-1.03622a31.921,31.921,0,0,1-.8902,14.94041l.25228,4.55962s-10.90958-16.87938-10.90958-19.226v5.86654s-5.86153-5.27986-5.86153-8.79977l-3.19718,4.10659-1.59858-6.45322-19.716,6.45322,3.19717-5.27986-12.25588,1.76,4.79592-6.45322s-13.85447,7.6265-14.38744,14.07972c-.53281,6.45313-7.46,14.6663-7.46,14.6663l-3.19717-5.86654S818.34129,140.43544,833.79434,131.63567Z" transform="translate(-179 -110.81181)" fill="#2f2e41"/><rect x="146.16914" y="282.832" width="516.46279" height="362.79825" fill="#f2f2f2"/><rect x="189.64496" y="421.25614" width="129.67789" height="226.37411" fill="#3f3d56"/><rect x="213.63162" y="434.83658" width="34.93166" height="32.56341" fill="#f2f2f2"/><rect x="260.40453" y="434.83658" width="34.93166" height="32.56341" fill="#f2f2f2"/><rect x="213.63162" y="479.24124" width="34.93166" height="33.74754" fill="#f2f2f2"/><rect x="260.40453" y="479.24124" width="34.93166" height="33.74754" fill="#f2f2f2"/><circle cx="302.83202" cy="549.6836" r="8.24541" fill="#00ccbc"/><rect x="362.79867" y="399.76697" width="256.35744" height="215.13036" fill="#3f3d56"/><polygon points="716.602 351.134 92.199 351.134 133.831 264.092 143.148 244.603 155.337 219.117 164.654 199.628 175.455 177.051 667.407 177.051 673.786 199.628 679.295 219.117 686.499 244.603 692.008 264.092 716.602 351.134" fill="#3f3d56"/><rect x="371.79367" y="488.96737" width="8.995" height="55.46915" fill="#00ccbc"/><rect x="371.79367" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="371.79367" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="385.28617" y="488.96737" width="21.73791" height="55.46915" fill="#00ccbc"/><rect x="385.28617" y="497.21278" width="21.73791" height="6.74625" fill="#f2f2f2"/><rect x="385.28617" y="529.44486" width="21.73791" height="6.74625" fill="#f2f2f2"/><rect x="412.27116" y="488.96737" width="8.995" height="55.46915" fill="#00ccbc"/><rect x="412.27116" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="412.27116" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="425.76366" y="488.96737" width="8.995" height="55.46915" fill="#00ccbc"/><rect x="425.76366" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="425.76366" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="623.50323" y="599.77918" width="8.995" height="55.46915" transform="translate(-359.97652 151.03236) rotate(-20.65411)" fill="#00ccbc"/><rect x="617.8187" y="609.06043" width="8.995" height="6.74625" transform="translate(-355.02271 148.05803) rotate(-20.65411)" fill="#f2f2f2"/><rect x="629.18777" y="639.22084" width="8.995" height="6.74625" transform="translate(-364.93033 154.0067) rotate(-20.65411)" fill="#f2f2f2"/><rect x="589.17278" y="488.96737" width="21.73791" height="55.46915" fill="#00ccbc"/><rect x="589.17278" y="497.21278" width="21.73791" height="6.74625" fill="#f2f2f2"/><rect x="589.17278" y="529.44486" width="21.73791" height="6.74625" fill="#f2f2f2"/><rect x="574.9307" y="488.96737" width="8.995" height="55.46915" fill="#00ccbc"/><rect x="574.9307" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="574.9307" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="561.43821" y="488.96737" width="8.995" height="55.46915" fill="#00ccbc"/><rect x="561.43821" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="561.43821" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2"/><rect x="698.46155" y="623.01626" width="55.46915" height="8.995" transform="translate(-296.13324 974.88303) rotate(-69.34589)" fill="#00ccbc"/><rect x="728.50754" y="607.93605" width="6.74625" height="8.995" transform="translate(-278.34283 970.44117) rotate(-69.34589)" fill="#f2f2f2"/><rect x="717.13846" y="638.09647" width="6.74625" height="8.995" transform="translate(-313.92365 979.32489) rotate(-69.34589)" fill="#f2f2f2"/><rect x="362.79867" y="544.43652" width="256.35744" height="5.24708" fill="#f2f2f2"/><rect x="474.48656" y="488.96737" width="47.22374" height="55.46915" fill="#00ccbc"/><rect x="486.1051" y="500.9607" width="23.98666" height="10.49416" fill="#f2f2f2"/><rect x="488.72864" y="399.76697" width="4.4975" height="47.97332" fill="#f2f2f2"/><circle cx="490.97739" cy="447.7403" r="7.49583" fill="#f2f2f2"/><polygon points="679.295 219.117 155.337 219.117 164.654 199.628 673.786 199.628 679.295 219.117" fill="#00ccbc"/><polygon points="692.008 264.092 133.831 264.092 143.148 244.603 686.499 244.603 692.008 264.092" fill="#00ccbc"/><path d="M925.87692,262.22309s-7.52619,19.353-5.95407,38.50094a20.29311,20.29311,0,0,0,3.35473,9.58676h0L831.07338,354.085s-41.66157,4.31346-31.26423,22.50881,48.08771-9.09767,48.08771-9.09767,98.77475-14.29635,106.57275-28.59269,12.99668-74.08106,12.99668-74.08106Z" transform="translate(-179 -110.81181)" fill="#a0616a"/><path d="M929.77592,208.93671h19.495s14.29635,2.59934,18.19535,28.59269,7.798,32.4917,3.899,32.4917-50.687-1.29967-50.687-2.59934S929.77592,208.93671,929.77592,208.93671Z" transform="translate(-179 -110.81181)" fill="#d0cde1"/><circle cx="100" cy="386.37637" r="100" fill="#00ccbc"/><circle cx="100" cy="386.37637" r="86" opacity="0.1"/><path d="M274.87909,547.93609V535.419c-6.32734-.12344-12.87306-2.355-16.69109-5.45314l2.618-8.30317a26.68122,26.68122,0,0,0,15.70942,5.3285c7.74578,0,12.98225-5.081,12.98225-12.14493,0-6.81643-4.2548-11.02973-12.32763-14.74806-11.12757-4.957-18.00034-10.65821-18.00034-21.43985,0-10.28668,6.43653-18.09426,16.47324-19.95312V446.18818h6.76358v12.02149A26.54267,26.54267,0,0,1,296.5888,462.547l-2.7277,8.17972a24.10671,24.10671,0,0,0-13.74554-4.21391c-8.39987,0-11.56381,5.70063-11.56381,10.65821,0,6.44429,4.03642,9.66644,13.52769,14.12844,11.23623,5.20506,16.90948,11.64935,16.90948,22.67909,0,9.79049-6.0003,18.962-17.23706,21.06771v12.88981Z" transform="translate(-179 -110.81181)" fill="#f2f2f2"/></svg>
                            </div>
                            <form method="POST" class="col-7" action="{{ route('login') }}">
                                @csrf
    
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
    
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</login>
@endsection
