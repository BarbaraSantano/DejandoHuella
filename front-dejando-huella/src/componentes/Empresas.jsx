import React from 'react'
import '../estilos/empresas.css';
import e1 from '../media/empresa-1.png';
import e2 from '../media/empresa-2.png';
import e3 from '../media/empresa-3.png';
import e4 from '../media/empresa-4.png';
import e5 from '../media/empresa-5.png';


function Empresas() {
  return (
    <div class="containerEmpresa">
        <h2>Empresas que Dejan Huella</h2>
        <div class="imagenes">
            <img src={e1}></img>
            <img src={e2}></img>
            <img src={e3}></img>
            <img src={e4}></img>
            <img src={e5}></img>
        </div>
    </div>
  )
}

export default Empresas