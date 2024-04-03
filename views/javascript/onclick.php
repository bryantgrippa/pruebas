<head>
    <meta charset="utf-8">
    <title>click</title>
</head>

<body>
    <label for="">aqui no pasa nada</label>
    <button>
        Clic aquí
    </button>

    <br>

    <label for="">si haces click aqui aparece un alert</label>
    <button onclick="alert('Hizo clic!')">
        Clic aquí
    </button>
    <!-- alert(). Esta es una instrucción predefinida en JavaScript llamada función. 
    Lo que esta función hace es mostrar una ventana emergente con el valor provisto entre paréntesis. -->
    <br>

    <label for="">si haces dos veces click izquierdo aqui aparece un alert</label>
    <button ondblclick="alert('Hizo dos clic!')">
        Clic aquí
    </button>
    <!--el usuario hace doble clic con el botón izquierdo del ratón -->
    <br>

    <label for="">si haces click derecho aqui aparece un alert</label>
    <button oncontextmenu="alert('Hizo clic!')">
        Clic aquí
    </button>
    <!-- el usuario hace clic con el botón derecho del ratón -->
    <br>



</body>