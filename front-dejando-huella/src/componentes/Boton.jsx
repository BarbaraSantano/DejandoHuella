import React from "react";
import '../estilos/boton.css';

function Boton(props) {

  return (
    <div
      className='btn'>
      {props.texto}
    </div>
  )
}

export default Boton;