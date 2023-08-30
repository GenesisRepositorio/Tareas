package projectopasteles;

import java.util.*;

public class ArreglosBase {
   
    
    String Clientes[]= new String[5];
    String Empleados[] = new String [8];
    String Insumos[] = new String [5];
    String Productos[] = new String [4];
    String Tortas[] = new String [4];
    String Editar[] = new String [8];
    
    Scanner nombre = new Scanner(System.in);
    Scanner tipo_de_pastel = new Scanner(System.in);
    Scanner hora = new Scanner (System.in);
    Scanner direccion = new Scanner (System.in);
    Scanner tipo_del_pago = new Scanner (System.in);
    
   
    
    public void cliente(){      
        int i;
        System.out.println("Ingrese nombre: ");
        for(i=0  ; i<Clientes.length  ; i++)
        {
            Clientes[i]=nombre.nextLine();
        } 
        
          
    }
    
    public void emple(){    
        int i;
        System.out.println("Ingrese nombre de empleado: ");
        for(i=0  ; i<Empleados.length  ; i++)
        {
            Empleados[i]=nombre.nextLine();
        }          
    }
    
    public void insu(){      
        int i;
        System.out.println("Ingrese insumos: ");
        for(i=0  ; i<Clientes.length  ; i++)
        {
            Clientes[i]=nombre.nextLine();
        }       
    }
    
    public void produ(){      
        int i;
        System.out.println("Ingrese nombre: ");
        for(i=0  ; i<Clientes.length  ; i++)
        {
            Clientes[i]=nombre.nextLine();
        }       
    }
    
    public void tor(){      
        int i;
        System.out.println("Ingrese nombre: ");
        for(i=0  ; i<Clientes.length  ; i++)
        {
            
            Clientes[i]=nombre.nextLine();
        }       
    }
    
}
