import React from 'react';
import '../estilos/ultimosMiembros.css';

function UltimosMiembros (){
    return (
      <div className='ultimosmiembros'>
        <div className='titulo'>  <h2>ULTIMOS MIEMBROS DE LA MANADA</h2>
        <br></br>
        <p>En la última década han recogido 15.635 perros y gatos abandonados en Albacete. Manteniendo la media anual, en el año 2021 se hicieron cargo de 1.525 animales entre perros y gatos. A todos se les ha aplicado desde hace muchos años el criterio ético de sacrifico cero real
</p>
        </div>

        <img 
          className='imagenUltimosMiembros'
          src={require(`../media/ultimo-1.png`)}
          alt={`Foto de `} />
        <img 
          className='imagenUltimosMiembros'
          src={require(`../media/ultimo-2.png`)}
          alt={`Foto de `} />
                  <img 
          className='imagenUltimosMiembros'
          src={require(`../media/ultimo-3.png`)}
          alt={`Foto de `} />
        <a title="" href="https://api-platform.com/">
              <img className='imagenUltimosMiembros'
                  src={require(`../media/ultimo-4.png`)}
                  alt={`Foto de `}/></a>
      </div>
    );
  }


export default UltimosMiembros;