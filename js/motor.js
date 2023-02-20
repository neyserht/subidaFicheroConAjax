function peticionServidor1(c1, d1, servidor1)
{
    let ajax1 = new XMLHttpRequest();

    ajax1.onreadystatechange = function(){
        if(ajax1.readyState==4 && ajax1.status==200)
        {
            c1.value="";
            document.getElementById(d1.id).innerHTML = ajax1.responseText;
        }
        else
        {
            c1.value="";
            document.getElementById(d1.id).innerHTML = "La petición no se ha podido procesar";
        }
    };
    let argumentos = "?c1=" + c1.value;
    ajax1.open('GET', servidor1 + argumentos, true);
    ajax1.send();
}


// Cuando todos los recursos se hayan cargado...
window.addEventListener("load", function(event){

    // Establecer una referencia de los elementos
    const c1 = document.getElementById("c1");
    const d1 = document.getElementById("d1");
    const b1 = document.getElementById("b1");
    let servidor1 = "";

    // Asociar el elemento al evento y llamada a la función
    if(b1)
    {
        b1.addEventListener("click", function(event){
            event.preventDefault();
            servidor1 = "servidor.php";
            peticionServidor1(c1, d1, servidor1);
        });
    }

});