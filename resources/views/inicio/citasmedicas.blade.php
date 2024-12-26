<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Consulta Médica</title>
  </head>
  <body>    
    <h1 class="text-center mb-4">Gestion consulta Médica - Hospital Isidro Ayora</h1>

    <form>
      <!-- Campo para Nombres -->
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input 
          type="text" 
          class="form-control" 
          id="nombres" 
          name="nombres"
          placeholder="Ingrese los nombres del paciente" 
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
          placeholder="Ingrese los apellidos del paciente" 
          required>
      </div>

      <!-- Edad -->
      <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input 
          type="number" 
          class="form-control" 
          id="edad" 
          name="edad"
          placeholder="Ingrese la edad del paciente" 
          required>
      </div>

      <!-- Dirección -->
      <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input 
          type="text" 
          class="form-control" 
          id="direccion" 
          name="direccion"
          placeholder="Ingrese la dirección del paciente" 
          required>
      </div>

      <!-- Ciudad -->
      <div class="mb-3">
        <label for="ciudad" class="form-label">Ciudad</label>
        <input 
          type="text" 
          class="form-control" 
          id="ciudad" 
          name="ciudad"
          placeholder="Ingrese la ciudad" 
          required>
      </div>

      <!-- Provincia -->
      <div class="mb-3">
        <label for="provincia" class="form-label">Provincia</label>
        <input 
          type="text" 
          class="form-control" 
          id="provincia" 
          name="provincia"
          placeholder="Ingrese la provincia" 
          required>
      </div>

      <!-- Número Telefónico -->
      <div class="mb-3">
        <label for="telefono" class="form-label">Número Telefónico</label>
        <input 
          type="tel" 
          class="form-control" 
          id="telefono" 
          name="telefono"
          placeholder="Ingrese el número telefónico" 
          required>
      </div>

      <!-- Razón de la consulta -->
      <div class="mb-3">
        <label for="razon_consulta" class="form-label">Razón de la consulta</label>
        <textarea 
          class="form-control" 
          id="razon_consulta" 
          name="razon_consulta"
          rows="3"
          placeholder="Describa la razón de la consulta" 
          required></textarea>
      </div>

      <!-- ¿Para quién es la consulta? -->
      <div class="mb-3">
        <label for="consulta_para" class="form-label">¿Para quién es la consulta?</label>
        <input 
          type="text" 
          class="form-control" 
          id="consulta_para" 
          name="consulta_para"
          placeholder="Ingrese el nombre de la persona para quien es la consulta" 
          required>
      </div>

      <!-- ¿Está interesada en asistir? -->
      <div class="mb-3">
        <label class="form-label">¿La persona para quien es la consulta está interesada en asistir?</label>
        <div>
          <div class="form-check form-check-inline">
            <input 
              class="form-check-input" 
              type="radio" 
              name="interes_asistir" 
              id="asistir-si" 
              value="Sí" 
              required>
            <label class="form-check-label" for="asistir-si">Sí</label>
          </div>
          <div class="form-check form-check-inline">
            <input 
              class="form-check-input" 
              type="radio" 
              name="interes_asistir" 
              id="asistir-no" 
              value="No" 
              required>
            <label class="form-check-label" for="asistir-no">No</label>
          </div>
        </div>
      </div>

      <!-- Contacto en caso de emergencia -->
      <div class="mb-3">
        <label for="contacto_emergencia" class="form-label">En caso de emergencia llamar a:</label>
        <input 
          type="text" 
          class="form-control" 
          id="contacto_emergencia" 
          name="contacto_emergencia"
          placeholder="Ingrese nombre y apellidos del contacto" 
          required>
        <input 
          type="tel" 
          class="form-control mt-2" 
          id="telefono_emergencia" 
          name="telefono_emergencia"
          placeholder="Ingrese el número de contacto" 
          required>
      </div>

      <!-- Agenda tu cita -->
      <div class="mb-3">
        <label for="fecha_cita" class="form-label">Agenda tu cita</label>
        <input 
          type="datetime-local" 
          class="form-control" 
          id="fecha_cita" 
          name="fecha_cita" 
          required>
      </div>

      <!-- Especialidad de la Visita Médica -->
      <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad de la Visita Médica</label>
        <select 
          class="form-select" 
          id="especialidad" 
          name="especialidad"
          required>
          <option selected disabled>Seleccione la especialidad</option>
          <option value="Medicina General">Medicina General</option>
          <option value="Pediatría">Pediatría</option>
          <option value="Cardiología">Cardiología</option>
          <option value="Dermatología">Dermatología</option>
          <option value="Ginecología">Ginecología</option>
        </select>
      </div>

      <!-- Número de consultorio y doctor -->
      <div class="mb-3">
        <label for="numero_consultorio" class="form-label">Número de Consultorio</label>
        <input 
          type="text" 
          class="form-control" 
          id="numero_consultorio" 
          name="numero_consultorio"
          placeholder="Se asignará el número de consultorio" 
          readonly>
      </div>

      <div class="mb-3">
        <label for="nombre_doctor" class="form-label">Nombre del Doctor</label>
        <input 
          type="text" 
          class="form-control" 
          id="nombre_doctor" 
          name="nombre_doctor"
          placeholder="Se asignará el nombre del doctor" 
          readonly>
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