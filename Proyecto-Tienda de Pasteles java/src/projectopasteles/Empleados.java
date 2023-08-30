package projectopasteles;


public class Empleados {
    
    String nombre;
    String domicilio;
    String correo;
    int telefono;
    String rut;
    String entrada;
    String salida;
    int sueldo;
     Empleados(){
        
        this.nombre="";
        this.domicilio="";
        this.correo="";
        this.telefono=0;
        this.rut="";
        this.entrada="";
        this.salida="";
        this.sueldo=500000;
    
     }
     
     String datosEmpleados(String dat){
         
         return dat;
     }
     int ventasRealizadas(int vent)
     {
         return vent;
     }
     String horaEntrada(String hor){
         
         return hor;
     }
     
     String horaSalida(String hor){
         
         return hor;
     }
     
}
