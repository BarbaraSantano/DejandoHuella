import React from 'react';
import '../estilos/ultimosMiembros.css';

function UltimosMiembros (){
    return (
      <div className='ultimosmiembros'>
        <div className='titulo'>  <h2>ULTIMOS MIEMBROS DE LA MANADA</h2>
        <br></br>
        <p>258 300 animales fueron abandonados en 2020.Más de 700 animales que terminan en las calles o perreras de nuestro país cada día, según los datos del estudio de abandono y adopción 2021.
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