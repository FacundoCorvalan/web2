"use strict";

let formulario = document.querySelector("#form_user");
if(formulario){
    formulario.addEventListener('submit', enviarDatos());
}

async function enviarDatos(e){
    //e.preventDefault();
    let data = new FormData(formulario  );
    let nombre = data.get('nombre');
    let apellido = data.get('apellido');
    let edad = data.get('edad');

    let url = `${nombre}/${apellido}/${edad}`;
    console.log(url);
    let response = await fetch(url);
    let resultado = await response.text();
    console.log(resultado);
    //document.querySelector('#resultado').innerHTML = resultado;
}