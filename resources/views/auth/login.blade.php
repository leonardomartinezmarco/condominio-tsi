
<div class="container">
    <h1>Login Redes Sociais</h1>

    <div>
        <a class="facebook" href="{{route('social.login', ['provider'=>'facebook'])}}">Facebook</a>
        <a class="twitter" href="{{route('social.login', ['provider'=>'twitter'])}}">Twitter</a>
        <a class="github" href="{{route('social.login', ['provider'=>'github'])}}">Github</a>
    </div>
</div>

<link href="{{ asset('css/login.css') }}" rel="stylesheet"> 


