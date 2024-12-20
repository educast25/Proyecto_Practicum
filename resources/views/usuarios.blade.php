<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Gestión de Usuarios</title>
  </head>
  <body>    
    <h1 class="text-center mb-4">Gestión de Usuarios - Hospital Isidro Ayora</h1>

    <form>
      <!-- Campo para Nombres -->
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input 
          type="text" 
          class="form-control" 
          id="nombres" 
          name="nombres"
          placeholder="Ingrese los nombres del usuario" 
          aria-label="Nombres del usuario" 
          required>
      </div>

      <!-- Campo para Apellidos -->
      <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input 
          type="text" 
          class="form-control" 
          id="apellidos" 
          name="apellidos"
          placeholder="Ingrese los apellidos del usuario" 
          aria-label="Apellidos del usuario" 
          required>
      </div>

      <!-- Número de cédula -->
      <div class="mb-3">
        <label for="cedula" class="form-label">Número de Cédula</label>
        <input 
          type="text" 
          class="form-control" 
          id="cedula" 
          name="cedula"
          placeholder="Ingrese el número de cédula" 
          aria-label="Número de cédula" 
          required>
      </div>

      <!-- Fecha de ingreso al hospital -->
      <div class="mb-3">
        <label for="fecha_ingreso" class="form-label">Fecha de Ingreso al Hospital</label>
        <input 
          type="date" 
          class="form-control" 
          id="fecha_ingreso" 
          name="fecha_ingreso" 
          required>
      </div>

      <!-- Campo para Sexo -->
      <div class="mb-3">
        <label class="form-label">Sexo</label>
        <div>
          <div class="form-check form-check-inline">
            <input 
              class="form-check-input" 
              type="radio" 
              name="sexo" 
              id="sexo-masculino" 
              value="Masculino" 
              required>
            <label class="form-check-label" for="sexo-masculino">Masculino</label>
          </div>
          <div class="form-check form-check-inline">
            <input 
              class="form-check-input" 
              type="radio" 
              name="sexo" 
              id="sexo-femenino" 
              value="Femenino" 
              required>
            <label class="form-check-label" for="sexo-femenino">Femenino</label>
          </div>
        </div>
      </div>

      <!-- Perfil del usuario del sistema -->
      <div class="mb-3">
        <label for="perfil" class="form-label">Perfil del Usuario</label>
        <select 
          class="form-select" 
          id="perfil" 
          name="perfil"
          aria-label="Perfil del usuario" 
          required>
          <option selected disabled>Seleccione el perfil</option>
          <option value="Cajera">Cajera</option>
          <option value="Médico">Médico</option>
          <option value="Administrador">Administrador</option>
          <option value="Contabilidad">Contabilidad</option>
          <option value="Otros">Otros</option>
        </select>
      </div>

      <!-- Área a la que pertenece -->
      <div class="mb-3">
        <label for="area" class="form-label">Área</label>
        <input 
          type="text" 
          class="form-control" 
          id="area" 
          name="area"
          placeholder="Ingrese el área a la que pertenece el usuario" 
          required>
      </div>

      <!-- Botones de acción -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
      </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>