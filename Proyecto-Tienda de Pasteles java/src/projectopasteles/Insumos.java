package projectopasteles;


public class Insumos {
    
    String Fecha_de_vencimiento;
    int cantidad;
    String marca;
    String Distribuidor;
    int Codigo_de_barra;
    
     Insumos(){
        
        this.Fecha_de_vencimiento="";
        this.cantidad=0;
        this.marca="";
        this.Distribuidor="";
        this.Codigo_de_barra=0;
     }
        
      int cantidadTotal(int total){
          return total;
      }
      String separacionMarcas(String sep){
          
          return sep;
      }
      
      String vencimientoProdu(String ven){
          
          return ven;
      }
      
      String perdidaInsumos(String per){
          
          return per;
      }
}
