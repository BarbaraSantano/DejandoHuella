import React from 'react'
import Testimonio from '../componentes/Testimonio.jsx'

function Conocenos() {
  return (
    
<div className='contenedor-principal'>  
      <h2>  </h2>
      <Testimonio 
        titulo='Acerca de nuestro Equipo'
        subtitulo='Dejando huella Albacete'
        imagen='equipo'
        testimonio='Somos una asociación de animales de Albacete (España) que trabaja por la defensa, acogida y adopción de perros y gatos. Llevamos más de 7 años al pie del cañón. ¡Conócenos más!.'/>
      <Testimonio
       titulo='Proyecto CES'
       subtitulo='Captura, esterilizaciÓn y suelta del animal' 
        imagen='proyecto'
        testimonio='La población felina callejera de Albacete va en aumento actualmente y haciendo un cómputo a la baja se estima una cifra en torno a los 2.500 gatos que sobreviven en el entorno urbano. El principal motivo es la falta de control de los gatos callejeros o “colonias” que malviven en la calle y la carencia de un control de sus ciclos reproductivos, sin olvidarnos de la irresponsabilidad de quienes abandonan a sus animales o a las camadas, algo que en este último supuesto, podría haberse evitado fácilmente con la esterilización.'/>
    
      </div>

  )
}


      export default Conocenos
    