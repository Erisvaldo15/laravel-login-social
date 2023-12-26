@extends('template')

@section('content')
    <div id="content" class="slideForDown">
        <header>
            <img src="/images/logo.svg" alt="Logo Image">
        </header>
        <div id="welcome">
            <h1> Acesse a plataforma </h1>
            <p> Faço login ou registre-se para começar a construir seus projetos ainda hoje. </p>
        </div>
        <form>
            <div class="input-wrapper">
                <label for="email"> E-mail </label>
                <input type="text" name="email" id="email" placeholder="Write your e-mail">
                <p class="error-message hide"></p>
            </div>
            <div class="input-wrapper">
                <div class="label-wrapper">
                    <label for="password"> Password </label>
                    <a href="#"> Redeem password? </a>
                </div>
                <input type="password" name="password" id="password" placeholder="Write your password">
                <img src="/images/eye-off.svg" alt="" class="toggle-password">
                <img src="/images/eye.svg" alt="" class="toggle-password hide">
                <p class="error-message hide"></p>
            </div>
            <div class="socials">
                <a href="/auth/google/redirect" class="social">
                    <img src="/images/google.svg" alt="Google Icon">
                    <p> Google </p>
                </a>
                |
                <a href="/auth/facebook/redirect" class="social">
                    <img src="/images/facebook.svg" alt="Facebook Icon">
                    <p> Facebook </p>
                </a>
            </div>
            <button type="submit"> Send </button>
            <p>
                You haven't account?
                <span>
                    <a href="#"> Create one right now. </a>
                </span>
            </p>
        </form>
    </div>
    <img src="/images/background.svg" alt="Background Image" id="background-image">
@endsection
