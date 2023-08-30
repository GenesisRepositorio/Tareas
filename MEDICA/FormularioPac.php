<form action="guardarPac.php" method="POST">
    <legend>Form title</legend>
	     <label for="">IdPaciente</label>
        <input type="text"  id="IdPaciente" name="IdPaciente"><br><br>
	 <label for="">Nombre Paciente</label>
        <input type="text"  id="NombrePaciente" name="NombrePaciente"><br><br>
			 <label for="">Prevision</label>
		<select name="RazaAnimal" id="RazaAnimal" class="form-control">
            <option value="Perro">-- fonasa --</option>
            <option value="Gato">-- isapre --</option>
            <option value="Raton">-- indigente --</option>
        </select>
		 <label for="">Direccion</label>
        <input type="text"  id="Direccion" name="Direccion"><br><br>

		</br></br>
        <label for="">Patologias</label>
        <input type="text"  id="Patologias" name="Patologias"><br><br>
        <label for="">Ficha Atencion </label>
        <textarea name="FichaAtencion" id="FichaAtencion" cols="30" rows="10"></textarea><br><br>
	
		
        <label for="">imagen Paciente</label>
        <input type="text"  id="ImagenPaciente" name="ImagenPaciente"><br><br>
		<label for="">Fono</label>
        <input type="text"  id="Fono" name="Fono"><br><br>
    
        <label for="">Correo</label>
        <input type="text"  id="Correo" name="Correo"><br><br>
		<label for="">Alergias</label>
        <input type="text"  id="Alergias" name="Alergias"><br><br>
        
      <br><br>
      <input type="submit" name="enviar">
</form>