<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="grid">
  <div class="cube">
    <div class="item">
      <ul class="tabs">
        <li>
          <input type="radio" name="tabs" id="tab1" checked="checked"/>
          <label class="nav" for="tab1">Entrar</label>
          <div class="tab-content" id="loginTabContent">
            <form action="comprobar_login.php" method="post" id="loginForm">
              <label class="frm" for="email">Usuario</label>
              <input type="text" name="login" required="required"/>
              <label class="frm" for="password">Contraseña</label>
              <input type="password" name="password" required="required"/>
              <input type="checkbox" name="keep"/>
              <label class="frm" for="keep">Mantener sesión iniciada</label>
              <button id="loginBtn" type="submit" name="enviar">Entrar</button><span><a href="#">¿Olvidaste la contraseña?</a></span>
            </form>      
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2"/>
          <label class="nav" for="tab2">Registro</label>
          <div class="tab-content" id="signupTabContent">
            <form action="registro.php" method="post" id="registForm">
              <label class="frm" for="email">Email</label>
              <input type="text" name="login" required="required"/>
              <label class="frm" for="password">Contraseña</label>
              <input type="password" name="password" required="required"/>
              <label class="frm" for="password">Confirma la contraseña</label>
              <input type="password" name="password" required="required"/>
              <button id="loginBtn" type="submit">Registro</button>
            </form>
          </div>
        </li>
      </ul>
    </div>
    <div class="done">
      <canvas id="canvas"></canvas>
      <div id="fill"></div>
      <div class="success"><span>Login correcto</span><i class="fa fa-check"></i></div>
    </div>
  </div>
</div>
</body>
</html>