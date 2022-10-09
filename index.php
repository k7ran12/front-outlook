<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <div class="sign-in">
            <div class="logo">
                <img src="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"
                    alt="">
            </div>
            <div class="email">
                <div class="form">
                    <div class="collapse collapse-horizontal show titulo" id="sign_in">
                        Sign in
                    </div>
                    <div class="collapse collapse-horizontal correo" id="div_password">
                        <button onclick="changeShowPass()" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sign_in" aria-expanded="false" aria-controls="sign_in"
                            style="background: none;border: 0;"><img
                                src="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"
                                alt=""></button>
                        <label id="label_correo">tauro24_vs@hotmail.com</label>
                    </div>
                    <div class="collapse collapse-horizontal titulo" id="div_password">
                        Enter password
                    </div>
                    <div class="collapse collapse-horizontal show input" id="sign_in">
                        <input type="text" placeholder="Email, phone, or Skype" id="input_email">
                    </div>
                    <div class="collapse collapse-horizontal input" id="div_password">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="collapse collapse-horizontal show no_account" id="sign_in">
                        <label>No account? <a href="">Create one!</a></label>
                    </div>
                    <div class="collapse collapse-horizontal no_account" id="div_password">
                        <label><a href="">Forgot password?</a></label>
                    </div>
                    <div class="collapse collapse-horizontal show no_account" id="sign_in">
                        <label><a href="">Sign in with a security key </a>&nbsp; <img
                                style="position: absolute;margin-top: 1%;"
                                src="https://logincdn.msauth.net/shared/1.0/content/images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg"
                                alt=""></label>
                    </div>
                    <div class="collapse collapse-horizontal no_account" id="div_password">
                        <label><a href="">Sign in with a security key</a></label>
                    </div>
                    <div class="collapse collapse-horizontal show button" id="sign_in">
                        <button onclick="changeShowSign()" type="button" data-bs-toggle="collapse"
                            data-bs-target="#div_password" aria-expanded="false"
                            aria-controls="div_password">Next</button>
                    </div>
                    <div class="collapse collapse-horizontal button" id="div_password">
                        <button type="button">Sign in</button>
                    </div>
                </div>
                <div class="collapse collapse-horizontal show sign-options" id="sign_in">
                    <div>
                        <img class="key"
                            src="https://logincdn.msauth.net/shared/1.0/content/images/signin-options_4e48046ce74f4b89d45037c90576bfac.svg"
                            alt="">
                        <label>Sign-in options</label>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="sign-in">
            <div class="collapse collapse-horizontal email">
                <div class="form">
                    <div class="correo">
                        <button onclick="changeShowPass()" type="button" data-bs-toggle="collapse"
                            data-bs-target="#sign_in" aria-expanded="false" aria-controls="sign_in"
                            style="background: none;border: 0;"><img
                                src="https://logincdn.msauth.net/shared/1.0/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg"
                                alt=""></button>
                        <label>tauro24_vs@hotmail.com</label>
                    </div>
                    <div class="enter-password">
                        Enter password
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="no_account">
                        <label><a href="">Forgot password?</a></label>
                    </div>
                    <div class="no_account">
                        <label><a href="">Sign in with a security key</a></label>
                    </div>
                    <div class="button">
                        <button type="button">Sign in</button>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script>
        let div_sign_in = document.querySelectorAll('#sign_in');
        let div_password = document.querySelectorAll('#div_password');
        let input_email = document.getElementById('input_email');
        let label_correo = document.getElementById('label_correo');


        function changeShowSign() {
            label_correo.innerHTML = input_email.value;
            for (let index = 0; index < div_sign_in.length; index++) {
                div_sign_in[index].classList.remove('show');
            }
        }
        function changeShowPass() {
            for (let i = 0; i < div_password.length; i++) {
                div_password[i].classList.remove('show');
            }
        }
        console.log(div_password);
    </script>
</body>

</html>