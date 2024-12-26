<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro de Paciente</title>
  </head>
  <body>    
    <h1 class="text-center mb-4">Registro de Paciente - Hospital Isidro Ayora</h1>
<form>
  <!-- Campo para Nombres -->
  <div class="mb-3">
    <label for="nombres" class="form-label">Nombres</label>
    <input 
      type="text" 
      class="form-control" 
      id="nombres" 
      placeholder="Ingrese los nombres del paciente" 
      aria-label="Nombres del paciente" 
      required>
  </div>

  <!-- Campo para Apellidos -->
  <div class="mb-3">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input 
      type="text" 
      class="form-control" 
      id="apellidos" 
      placeholder="Ingrese los apellidos del paciente" 
      aria-label="Apellidos del paciente" 
      required>
  </div>

  <!-- Campo para Número de Cédula -->
  <div class="mb-3">
    <label for="cedula" class="form-label">Número de Cédula</label>
    <input 
      type="text" 
      class="form-control" 
      id="cedula" 
      placeholder="Ingrese el número de cédula" 
      aria-label="Número de Cédula" 
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

  <!-- Campo para Especialidad de la Visita Médica -->
  <div class="mb-3">
    <label for="especialidad" class="form-label">Especialidad de la Visita Médica</label>
    <select 
      class="form-select" 
      id="especialidad" 
      aria-label="Especialidad de la Visita Médica" 
      required>
      <option selected disabled>Seleccione la especialidad</option>
      <option value="Medicina General">Medicina General</option>
      <option value="Pediatría">Pediatría</option>
      <option value="Cardiología">Cardiología</option>
      <option value="Dermatología">Dermatología</option>
      <option value="Ginecología">Ginecología</option>
    </select>
  </div>

  <!-- Campo para Nombres del Doctor -->
  <div class="mb-3">
    <label for="doctor" class="form-label">Nombres del Doctor</label>
    <input 
      type="text" 
      class="form-control" 
      id="doctor" 
      placeholder="Ingrese los nombres del doctor" 
      aria-label="Nombres del Doctor" 
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