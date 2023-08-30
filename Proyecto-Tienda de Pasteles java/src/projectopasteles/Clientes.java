package projectopasteles;

import javax.swing.JOptionPane;

public class Clientes {
    
    String nombre;
    String tipo_de_pasteles;
    String direccion;
    int hora_de_entrega;
    String tipo_de_pago;
     
    Clientes(){
        
        this.nombre="";
        this.tipo_de_pasteles="";
        this.direccion="";
        this.hora_de_entrega=0;
        this.tipo_de_pago="";
        
    }

    public Clientes(String nombre, String tipo_de_pasteles, String direccion, int hora_de_entrega, String tipo_de_pago) {
        this.nombre = nombre;
        this.tipo_de_pasteles = tipo_de_pasteles;
        this.direccion = direccion;
        this.hora_de_entrega = hora_de_entrega;
        this.tipo_de_pago = tipo_de_pago;
    }
    
 
    
    
    String nombreCliente(String cli){
        
        this.nombre=cli;
        nombre=JOptionPane.showInputDialog("Ingrese su nombre");
        return cli;
        
    }
    
    int totalCliente(int cli)
    {
      
        return cli;
        
    }
    
    int totalPago(int pa){
        
        return pa;
    }
    
    String tipoPasteles(String pa){
        return pa;
    }
}
