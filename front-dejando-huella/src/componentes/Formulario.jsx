import React from 'react'
import '../estilos/formulario.css';
import perro1 from '../media/perroformu1.jpg';
import perro2 from '../media/gatoyperroformu.jpg';
import perro3 from '../media/gatoformu1.jpg';

export const Formulario = () => {
  return (
    <div id="containergral">
    <div id="containerfotos">
        <img src={perro1} alt="" />
        <img src={perro3} alt="" />
        <img src={perro2} alt="" />
    </div>
    <h1 id="titulocentrado">Contacta con nosotrxs: </h1>
        <form>
            <div id="formunombre">
                <input type="text" placeholder="Nombre" id="nombre"/>
            </div>
            <div id="formuemail">
                <input type="text" placeholder="Email" id="email"/>
            </div>
            <div id="formumensaje">
                <input type="textarea" placeholder="Mensaje" id="mensaje"/>
            </div>
            <div>
                <button type="submit" id="botonformu">Enviar</button>
            </div>
        </form>
    </div>
  )}