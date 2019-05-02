<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
        <input id="tab-2" type="hidden" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="group">
                        <label for="email" class="label">Email</label>
                        <input id="email" name="email" type="email" class="input">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                    </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" type="password" name="password" class="input" data-type="password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                    </div>
                    
                    <div class="group">
                        <input type="submit" class="button" value="Connexion">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </form>        
            </div>
            
        </div>
    </div>
</div>
</body>
</html>

