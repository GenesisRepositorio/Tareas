package projectopasteles;

import javax.swing.JOptionPane;

public class Main {
    
    public static void main(String [] args){     //escribir clases y sus metodos
        
        int opcion;
        ArreglosBase gorro= new ArreglosBase();
        String apretar;
        apretar=JOptionPane.showInputDialog("Menu.\n 1-.Ingresar\n2-.Ingresar\n3-.Buscar \n");
        opcion=Integer.parseInt(apretar);
        
        switch(opcion)
        {
            case 1:JOptionPane.showMessageDialog(null,"Hola, Buenos Días ingrese sus datos");
                  gorro.cliente();
            break;
            case 2:JOptionPane.showMessageDialog(null, "Hola, Buenos Días ingrese sus datos");
                gorro.emple();
            break;
            
            case 3:JOptionPane.showMessageDialog(null,"ajdssad");
                gorro.insu();
            break;
            case 4:JOptionPane.showMessageDialog(null,"Me gustan los moquitos con pancito");
                gorro.produ();
            break; 
            case 5:JOptionPane.showMessageDialog(null,"aeddad");
                gorro.tor();
            break;
            
            
        }
        
        
        
    }
    
}
