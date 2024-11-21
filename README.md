# form valid retro
Estudia y escribe un programa PHP parecido a este programa que permita al usuario rellenar un formulario con
distintos tipos de campos y con reglas de validación asociadas. 

Este programa PHP permita al usuario rellenar un formulario de registro con los datos de nombre, contraseña, fecha de nacimiento, telefono, tienda, edad y suscripción. 
Los datos introducidos deben de respetar ciertas reglas de validación que se comprobarán en el servidor con las funciones filter_input y filter_var. Las reglas son las siguientes:
Todos los campos son requeridos y deben ser rellenados.
1. El nombre nombre se compone de 3 a 25 caracteres con mayúsculas y minúsculas y espacios en blanco.
2. DNI del usuario se compone de 9 dígitos y una letra. La letra se obtiene calculando el módulo del número de DNI entre 23.
3. La contraseña contiene de 6 a 8 caracteres con mayúsculas, minúsculas, digitos y los símbolos !@#$%^&*()+
4. El correo electrónico ha de tener el formato correcto.
5. El teléfono ha de tener el formato correcto.
6. La edad debe tener un valor comprendido entre el 18 y el 120.
7. La fecha de nacimiento debe de tener el formato correcto. El elemento del formulario ya captura la edad en el formato correcto.
8. La tienda ya viene de manera correcta desde el formulario según la opción elegida.
9. El idioma ya viene de manera correcta desde el formulario según la opción elegida.
10. Los intereses viajan como un array de valores que hay que convertir a una cadena. No es necesario marcar alguna opción.
11. La suscripción a la revista ya viene de manera correcta desde el formulario.
12. Foto del usuario. El fichero de la foto debe tener extensión jpg y jpeg.

El script recibe los datos del formulario y los valida de acuerdo con las reglas de validez descritas anteriormente. En el caso en que 
algún dato no sea válido se mostrará de nuevo el formulario con una anotación cerca del campo que indique que el valor introducido no es correcto.
Cuando todos los valores son válidos el script responde con una página que muestra un mensaje de aceptación del formulario, por ejemplo, **formulario correcto**.
Si hay valores inválidos en el formulario, además de mostrar las anotaciones de los campos incorrectos, los campos aparecerán rellenos con los valores
introducidos por el usuario de manera que no tenga que volver a rellenar todos los valores de nuevo.

