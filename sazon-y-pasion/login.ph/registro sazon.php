    
    <form class="form" action="./registrar.php" method="POST">
    <h2>REGISTRO</h2>
    <input type="text" id="username"name="nombre"placeholder="Nombre de usuario"required>
        <input type="text" id="last name"name="apellido"placeholder="Apellido de usuario"required>
        <input type="email" id="email" name="correo" placeholder="Correo electrónico"required>
        <div class='contraseña'>
          <input type="password" id="password"name="contraseña" placeholder="Contraseña" required>
          <img src="ojo.png" alt="" height="30px" id="verContraseña">
        </div>
       <center> <button type="submit">Registrarse</button></center>
    </form>
<style>
  body{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color:#212F3D;
        background-size: cover;
      }
    h2{
      color:white;
    }
    p{
      font-size: 19px;
      font-weight: 700;
      font-family:Arial, Helvetica, sans-serif;
      color:#EFEFEF ; 
  }
  
  form {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 10px;
  border-radius: 2.5em;
  padding: 150px;
  width: 150px;
  height: 180px;
  box-shadow: #FC2E19 0px 1px 25px;
  background-color:rgba(17, 24, 39, 1);
}

.form::before {
  background-color: rgba(17, 24, 39, 1);
  position: absolute;
  margin-top: 150px;
  margin-left: 150px;
  z-index: -1;
  border-radius: 2.7em;
}

button {
  margin-top: 10px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 17px;
  background: #ED6621;
  color: black;
  padding: 0.7em 5.5em;
  display: flex;
  align-items: center;
  border: 2px solid #66da4300;
  border-radius: 5em;
  overflow: hidden;
  transition: all 0.2s;
  cursor: pointer;
}

.button:hover {
  border: 2px solid #ff5900;
  background: #00000000;
  color: #ff5900;
}

.button:active {
  border: 2px solid #66da4300;
  background: #ff5900;
  color: black;
}
#alert-container {
        width: 400px;
        margin: 20px auto;
    }
    
    .alert {
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
    }
    
    .alert-success {
        background-color: #dff0d8;
        color: #3c763d;
      }
      
      .alert-danger {
        background-color: #f2dede;
        color: #a94442;
      }
input, .contraseña {
  width: calc(100% - 0px);
  padding: 8px;
  margin-bottom: 20px;
  border: 1px solid #66da4300;
  outline: none;
  color: #ff5900;
  font-family: Arial, Helvetica, sans-serif;
  transition: 0.2s;
  border-radius:25px;
}

input:focus {
  border: 1px solid #66da4300;
  border-bottom: 1px solid #ff5900;
  background-color:transparent;
  color: red;
}

input[type='password']::-ms-reveal,
input[type='password']::-ms-clear{
  display:none;
}

.contraseña {
  display: flex;
  border: 1px solid #66da4300;
 padding: 0px ;
}
.contraseña:focus {
  background-color: transparent;
  padding: 0;
  margin: 0;
}
input::placeholder {
  color: red;
}

.textarea {
  font-family: Arial, Helvetica, sans-serif;
  width: calc(100% - 10px);
  padding: 8px;
  height: 100px;
  margin-bottom: 20px;
  border: 1px solid #66da4300;
  border-bottom: 1px solid #ff5900;
  outline: none;
  background-color: transparent;
  color: #ff5900;
}

.textarea:focus {
  border: 1px solid #66da4300;
  border-bottom: 1px solid #ff5900;
  background-color: transparent;
  color: white;
}
input,
    button {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
    }
</style>

<script>

  
  
  
  function showAlert(message, type) {
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert ' + type;
    alertDiv.appendChild(document.createTextNode(message));
    var alertContainer = document.getElementById('alert-container');
    alertContainer.appendChild(alertDiv);
    setTimeout(function() {
        alertDiv.remove();
      }, 3000);
    }

function submitForm(event) {
    event.preventDefault();
    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;
    
    // Aquí puedes realizar la validación de los campos del formulario
    
    // Ejemplo de validación simple
    if (username === '' || password === '' || email === '') {
      showAlert('Por favor, completa todos los campos', 'alert-danger');
    } else {
      // Aquí puedes realizar el envío del formulario o cualquier otra acción
        showAlert('Registro exitoso', 'alert-success');

        // Limpiar los campos del formulario después del registro
        document.getElementById('username').value = '';
        document.getElementById('password').value = '';
        document.getElementById('email').value = '';
    }
  }
  var password = document.querySelector('#password');
  let contenedor = document.querySelector('.contraseña');
  let ojo = document.querySelector('#verContraseña');

  contenedor.addEventListener('click', ()=> {
    contenedor.style.backgroundColor = 'transparent';
  })

  ojo.addEventListener('click', ()=> {
    if(password.type == 'password'){
      password.type = 'text'
    }else {
      password.type = 'password'
    }
  })

</script>