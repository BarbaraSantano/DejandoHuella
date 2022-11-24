import React from 'react';
import '../estilos/ultimosMiembros.css';

function UltimosMiembros (){
    return (
      <div className='ultimosmiembros'>
        <div className='titulo'>
         <h2>ULTIMOS MIEMBROS DE LA MANADA</h2>
     
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