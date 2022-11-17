import React from 'react'
import videoperro from '../media/perro.mp4'
import '../estilos/video.css';
import Boton from './Boton';



const video = () => {
  return (
    <div className='video'>
      <div className='overlay'></div>
      <video src={videoperro} autoPlay loop muted />
      <div className="info-content">
        
        <h2><strong>Dejando huella Albacete</strong></h2>
        
          <h4> Ayuda y rescate de animales en situación de peligro</h4>
       
        <div className="contenedor-boton">
          <Boton
            texto='Colabora' />
        </div>
      </div>

    </div>
  )
}

export default video