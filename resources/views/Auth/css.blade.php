<style>
    body {
        background: linear-gradient(90deg, #C7C5F4, #085395);   

        /* background: #5794c8; */
        /* background-image: url('https://media.giphy.com/media/bAmpRgACntwA0/giphy.gif'); */
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    .logincard {
        background: transparent;
        width: 30% !important;
        position: absolute !important;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 20px !important;
        background-color: #fff0 !important;
    }

    .ifc {
        background: #0000007a !important;
        border-radius: 12px !important;
        color: white !important;
        font-weight: bold !important;
    }

    .btn:hover {
        color: white;
    }

    .btn-login {
        border-radius: 12px !important;
        font-weight: bold !important;
        background: linear-gradient(red, black);
        color: white;
        border: 0;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }

    #logomss {
        width: 300px !important;
    }

    @media only screen and (max-width: 1020px) {
        #logomss {
            width: 227px !important;
        }

        .logincard {
            width: 45% !important;
        }
    }

    @media only screen and (max-width: 768px) {
        .logincard {
            width: 80% !important;
        }
    }

    /* 
    @media only screen and (max-width: 425px) {
    } 
    */

    @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Raleway, sans-serif;
    }



    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .screen {
        background: #085395;
        position: relative;
        height: 500px;
        width: 350px;
        box-shadow: 0px 0px 24px #5C5696;
    }

    .screen__content {
        z-index: 1;
        position: relative;
        height: 100%;
    }

    .screen__background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        -webkit-clip-path: inset(0 0 0 0);
        clip-path: inset(0 0 0 0);
    }

    .screen__background__shape {
        transform: rotate(45deg);
        position: absolute;
    }

    .screen__background__shape1 {
        height: 520px;
        width: 520px;
        background: #FFF;
        top: -50px;
        right: 120px;
        border-radius: 0 72px 0 0;
    }

    .screen__background__shape2 {
        height: 220px;
        width: 220px;
        background: #085395;
        top: -172px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape3 {
        height: 540px;
        width: 190px;
        background: #085395;
        top: -24px;
        right: 0;
        border-radius: 32px;
    }

    .screen__background__shape4 {
        height: 400px;
        width: 200px;
        background: #085395;
        top: 420px;
        right: 50px;
        border-radius: 60px;
    }

    .login {
        width: 320px;
        padding: 30px;
        padding-top: 156px;
    }

    .login__field {
        padding: 20px 0px;
        position: relative;
    }

    .login__icon {
        position: absolute;
        top: 30px;
        color: #085395;
    }

    .login__input {
        border: none;
        border-bottom: 2px solid #D1D1D4;
        background: none;
        padding: 10px;
        padding-left: 24px;
        font-weight: 700;
        width: 75%;
        transition: .2s;
    }

    .login__input:active,
    .login__input:focus,
    .login__input:hover {
        outline: none;
        border-bottom-color: #6A679E;
    }

    .login__submit {
        background: #fff;
        font-size: 14px;
        margin-top: 30px;
        padding: 16px 20px;
        border-radius: 26px;
        border: 1px solid #D4D3E8;
        text-transform: uppercase;
        font-weight: 700;
        display: flex;
        align-items: center;
        width: 100%;
        color: #085395;
        box-shadow: 0px 2px 2px #5C5696;
        cursor: pointer;
        transition: .2s;
    }

    .login__submit:active,
    .login__submit:focus,
    .login__submit:hover {
        border-color: #6A679E;
        outline: none;
    }

    .button__icon {
        font-size: 24px;
        margin-left: auto;
        color: #7875B5;
    }

    .social-login {
        position: absolute;
        height: 140px;
        width: 160px;
        text-align: center;
        bottom: 0px;
        right: 0px;
        color: #fff;
    }

    .social-icons {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-login__icon {
        padding: 20px 10px;
        color: #fff;
        text-decoration: none;
        text-shadow: 0px 0px 8px #7875B5;
    }

    .social-login__icon:hover {
        transform: scale(1.5);
    }

    .ptchmp {
        top: 14%;
        position: absolute;
        left: 50%;
        z-index: 2;
        transform: translateX(-50%);
    }

    .txpt {
        color:black;
        font-weight: bold;
        font-size: 14px;
        margin-top: 5px;
    }
</style>