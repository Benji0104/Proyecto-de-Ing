<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Mascota</title>
  <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
  <div class="container">
    <h1>Formulario de Registro de Mascota</h1>
    <p>Use la tecla Tab para moverse de un campo de entrada a otro.</p>
    <form name="petRegistration" onsubmit="return formValidation();">
      <fieldset>
        <legend>Información del Propietario:</legend>
        <label for="ownerName">Nombre del Propietario:</label>
        <input type="text" name="ownerName" id="ownerName" required>
        <br>
        <label for="ownerEmail">Correo Electrónico:</label>
        <input type="email" name="ownerEmail" id="ownerEmail" required>
        <br>
        <label for="ownerPhone">Teléfono:</label>
        <input type="text" name="ownerPhone" id="ownerPhone" required>
      </fieldset>

      <fieldset>
        <legend>Información de la Mascota:</legend>
        <label for="petName">Nombre de la Mascota:</label>
        <input type="text" name="petName" id="petName" required>
        <br>
        <label for="petType">Tipo de Mascota:</label>
        <input type="text" name="petType" id="petType" required>
        <br>
        <label for="petBreed">Raza:</label>
        <input type="text" name="petBreed" id="petBreed" required>
        <br>
        <label for="petAge">Edad:</label>
        <input type="text" name="petAge" id="petAge" required>
        <br>
        <label for="petGender">Género:</label>
        <br>
        <label for="male">Macho</label>
        <input type="radio" name="petGender" id="male" value="male" required>
        <label for="female">Hembra</label>
        <input type="radio" name="petGender" id="female" value="female" required>
      </fieldset>

      <fieldset>
        <legend>Información Adicional:</legend>
        <label for="comments">Comentarios:</label>
        <textarea name="comments" id="comments" rows="4" cols="50"></textarea>
      </fieldset>

      <input type="submit" value="Registrar">
    </form>
  </div>
</body>
</html>
