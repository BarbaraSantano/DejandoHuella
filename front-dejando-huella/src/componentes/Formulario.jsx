import React from 'react'
import '../estilos/formulario.css';

export const Formulario = () => {
  return (
    <div id="container">
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
                <input type="textarea"/>
            </div>
            <div id="botonformu">
                <button type="submit"/>
            </div>
        </form>
    </div>
  )}