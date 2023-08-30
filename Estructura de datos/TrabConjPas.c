#include <conjuntosEnteros.h>

int main()
{
	int pasElem1;
	int pasElem2;
	
    printf ("Pedido Numero 1\n");
	
	CONJUNTOENTERO C1;
	
	printf("Ingrese cantidad de pasteles del pedido 1: ");
	scanf("%d",&pasElem1);
	if (pasElem1==0)
	{
		printf ("Cantidad = 0, por lo tanto no existe pasteles.\n");
	}
	else
	{
	crearConjunto(&C1,pasElem1);
	mostrarConjunto(C1);
	ordenarDescendente(&C1);
	mostrarConjunto(C1);
	ordenarAscendente(&C1);
	mostrarConjunto(C1);
	numeroMayor(C1);
	numeroMenor(C1);
	printf ("\n");
	}
	
	printf ("Pedido Numero 2\n");

	CONJUNTOENTERO C2;
	
	printf("Ingrese cantidad de pasteles del pedido 2: ");
	scanf("%d",&pasElem2);
	if (pasElem2==0)
	{
	printf ("Cantidad = 0, por lo tanto no existe pasteles.\n");
	}
	else
	{
	crearConjunto(&C2,pasElem2);
	mostrarConjunto(C2);
	ordenarDescendente(&C2);
	mostrarConjunto(C2);
	ordenarAscendente(&C2);
	mostrarConjunto(C2);
	printf("El pastel mayor es : %d \n",numeroMayor(C2));
	printf("El pastel menor es : %d \n",numeroMenor(C2));
	printf ("\n");
}
   	printf ("||Operacion con los pedidos||\n");
	if ((pasElem1 == 0)||(pasElem2 == 0)  )
	{
		printf ("Para realizar estas operacion los dos conjuntos deben existir!\n");
	}
	else
	{
    CONJUNTOENTERO C3;
	C3=sumarConjuntos(C1,C2);
	mostrarConjunto(C3);
	
	CONJUNTOENTERO C4;
	C4=restarConjuntos(C1,C2);
	mostrarConjunto(C4);
	
	
	
	
	}
	return 0;
	
	
	
	
	
	
	
	
	
	
}

