#include<TDALISTACONTACTOS.H>
#include<conio.h>



void menuPrincipal(LISTACONTACTOS *);

tipoContacto temporal; 


int main()
         {
           LISTACONTACTOS L;
          
		   if(crearVacia(&L)==1)
          {
            menuPrincipal(&L);
			return EXIT_SUCCESS; 
		  }
		 
		  else
		 {
           printf("NO HAY MEMORIA PARA EJECUTAR EL PROGRAMA\n");
           return EXIT_FAILURE;
         }
          return 0;
}

void menuPrincipal(LISTACONTACTOS *L)
     {
       tipoContacto temporal;
       char opcion,opcion2;

           do
           {    
		       system("cls");
               printf("MENU PRINCIPAL\n\n");
               printf("1. Agregar Contacto\n");
               printf("2. Mostrar Contactos\n");
               printf("3. Buscar Contacto\n");
               printf("4. Eliminar Contacto\n");
               printf("5. Modificar Contacto\n");
               printf("6. Salir del programa\n");
               printf("Ingrese opcion [1..6] : ");
               scanf("%c",&opcion);
               fflush(stdin);
                
				switch(opcion)
                {
                   case '1':   

                      printf("Ingrese Rut : ");
                      fgets(temporal.rut,11,stdin);
                      fflush(stdin);
                      sacaEnter(temporal.rut);
                      printf("Ingrese Nombre Pila : ");
                      fgets(temporal.nombrePila,16,stdin);
                      fflush(stdin);
                      sacaEnter(temporal.nombrePila);
                      strupr(temporal.nombrePila);
                      printf("Ingrese Apellido Paterno : ");
                      fgets(temporal.apellidoPaterno,16,stdin);
                      fflush(stdin);
                      sacaEnter(temporal.apellidoPaterno);
                      strupr(temporal.apellidoPaterno);
                      printf("Ingrese Apellido Materno : ");
                      fgets(temporal.apellidoMaterno,16,stdin);
                      fflush(stdin);
                      sacaEnter(temporal.apellidoMaterno);
                      strupr(temporal.apellidoMaterno);
                      printf("Ingrese Telefono : ");
                      fgets(temporal.telefono,9,stdin);
                      fflush(stdin);
                      sacaEnter(temporal.telefono);
                      printf("Ingrese Correo Electronico : ");
                      fgets(temporal.correoElectronico,26,stdin);
                      fflush(stdin);
                      sacaEnter(temporal.correoElectronico);
                      strupr(temporal.correoElectronico);
                      insertar(L,temporal);
                      break;
                 
				 case '2': mostrar(*L);
                      system("PAUSE");
                      break;

                 case '3':  
				      do
                      {
                         printf("Buscar Contactos\n\n");
                         printf("1. Buscar por Rut\n");
                         printf("2. Buscar por Apellido Paterno\n");
                         printf("3. Cancelar\n");
                         printf("Ingrese opcion [1..3] : ");
                         scanf("%c",&opcion2);
                         fflush(stdin);
          
		                     switch(opcion2)
                             {
                                 case '1' : 
                                             printf("Ingrese Rut : ");
                                             fgets(temporal.rut,11,stdin);
                                             fflush(stdin);
                                             sacaEnter(temporal.rut);
                                              buscarPorRut(*L,temporal.rut);
                                              break;
		                        case '2' :
                                             printf("Ingrese Apellido Paterno : ");
                                             fgets(temporal.apellidoPaterno,16,stdin);
                                             fflush(stdin);
                                             sacaEnter(temporal.apellidoPaterno);
                                             buscarPorApellidoPaterno(*L,temporal.apellidoPaterno);
                                              break; 
                               case '3': break;
                                              default : printf("OPCION NO VALIDA \n");
                              }
                        } while(opcion2 != '3');
                    break;

                   case '4':   
                              printf("Buscar Contactos \n\n");
                              printf("Ingrese Rut: ");
                              fgets(temporal.rut,11,stdin);
                              fflush(stdin);
                              sacaEnter(temporal.rut);
                              strupr(temporal.apellidoPaterno);
                              buscarPorRut(*L, temporal.rut);

                             printf("1. Eliminar Por Rut \n");
                             printf("2. Cancelar \n");
                             printf("Ingrese opcion [1..2] : ");
                             scanf("%c",&opcion2);
                             fflush(stdin);
                                 switch(opcion2)
                                  {
                                     case '1' :eliminar(L, temporal.rut);
                                      break;
                                     case '2': system ("PAUSE");
                                      break;
                                     default : printf("OPCION NO VALIDA \n");
                                 }
                                   system("PAUSE");
                                   break;
   
                   case '5':  
                              printf("Ingrese rut: "); 
                              fgets(temporal.rut,11,stdin);
                              fflush(stdin);
                              sacaEnter(temporal.rut);
                              observarRut_(L, temporal.rut);
                               printf("1. Modificar Telefono\n");
                              printf("2. Modificar Correo\n");
                              printf("Ingrese Opcion: [1..2] : ");
                              scanf("%c",&opcion);
                               fflush(stdin);
        
		                         switch(opcion)
                                 {
                                     case '1':  modificarTelefono(L, temporal.rut);
                                     break;
          
                                     case '2':  modificarCorreo(L, temporal.rut);
                                      break;          
                                  }
                                     break;
                    case '6': 
                              system("PAUSE");
                             break;
                             default : printf("OPCION NO VALIDA \n"); 
                            }
                         
					   } while(opcion != '6');
 }

