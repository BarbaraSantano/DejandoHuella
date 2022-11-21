import React from 'react'
import '../estilos/formulario.css';
// import perro1 from '../../media/perroformu1.jpg';
// import perro2 from '../media/gatoyperroformu.jpg';
// import perro3 from '../media/gatoformu1.jpg';
// import logo from  '../media/logo_footer.png';

export const Formulario = () => {
  return (
    <div id="containergral">
    {/* <div id="containerfotos">
        <img src={perro1} alt="" />
        <img src={perro1} alt="" />
        <img src={perro1} alt="" />
    </div> */}
    <h1 id="titulocentrado">Contacta con nosotrxs: </h1>
        <form>
            <div id="formunombre">
                <label htmlFor="">Nombre </label>
                <input type="text"/>
            </div>
            <div id="formuemail">
                <label htmlFor="">Email </label>
                <input type="text"/>
            </div>
            <div id="formumensaje">
                <label htmlFor="">Mensaje </label>
                <input id="areatexto" type="textarea"/>
            </div>
            <div>
                <button type="submit" id="botonformu">Enviar</button>
            </div>
        </form>
    </div>
  )}