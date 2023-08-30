package projectopasteles;


public class Tortas {
    
    String tamaño;
    String sabor;
    String decoracion;
    int piso;
    int precio;
   
  
     Tortas(){
        
        this.tamaño="";
        this.sabor="";
        this.decoracion="";
        this.piso=0;
        this.precio=0;
     }

    public Tortas(String tamaño, String sabor, String decoracion, int piso, int precio) {
        this.tamaño = tamaño;
        this.sabor = sabor;
        this.decoracion = decoracion;
        this.piso = piso;
        this.precio = precio;
    }

    public String getTamaño() {
        return tamaño;
    }

    public void setTamaño(String tamaño) {
        this.tamaño = tamaño;
    }

    public String getSabor() {
        return sabor;
    }

    public void setSabor(String sabor) {
        this.sabor = sabor;
    }

    public String getDecoracion() {
        return decoracion;
    }

    public void setDecoracion(String decoracion) {
        this.decoracion = decoracion;
    }

    public int getPiso() {
        return piso;
    }

    public void setPiso(int piso) {
        this.piso = piso;
    }

    public int getPrecio() {
        return precio;
    }

    public void setPrecio(int precio) {
        this.precio = precio;
    }
     
    
    
     
     }

