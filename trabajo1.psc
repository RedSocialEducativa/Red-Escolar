Proceso sin_titulo
	dimension a(5);
	dimension b(5);
	dimension producto(5);
	
	definir i como entero;
	
	para i<-1 hasta 5 con paso 1 hacer
		
		Escribir "ingrese un valor para el arreglo a (",i,"):";
		leer n
		a(i)=n;
	FinPara
	
	para i<-1 hasta 5 con paso 1 hacer
		
		Escribir "ingrese un valor para el arreglo b (",i,"):";
		leer n
		b(i)=n;
	fin para	
	
	Para i<-1 Hasta 5 Con Paso 1 Hacer
	
		producto(i) = a(i)*b(i)
		
	Fin Para
	para i<-1 hasta 5 Con Paso 1 Hacer
		escribir "el producto es", producto(i);
	FinPara
FinProceso
