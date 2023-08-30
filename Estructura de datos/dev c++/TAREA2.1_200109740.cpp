#include<TDALISTACONTACTOS.h>
#include<conio.h>

void menuPrincipal();

int main()
{
	LISTACONTACTOS L;
	if(crearVacia(&L)==1)
	{
		menuPrincipal();
		return EXIT_SUCCESS;	
	}
	else
	{
		printf("NO HAY MEMORIA PARA EJECUTAR EL PROGRAMA\n");
		return EXIT_FAILURE;
	}
	return 0;
}

void menuPrincipal()
{
	char opcion;
	
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
			case '1': //llamar a agregar y leer la info a agregar
						break;
			case '2': //llamar a mostrar
						break;
			case '3': //llamar a menu buscar
						break;
			case '4': //llamar a eliminar y antes leer el rut
			 	     	break;
			case '5': //llamar a modificar
						break;
			case '6': //llamar mensaje de salida
						system("PAUSE");
						break;
			default : printf("OPCION NO VALIDA \n");					
		}
			
	} while(opcion != '6');
}
