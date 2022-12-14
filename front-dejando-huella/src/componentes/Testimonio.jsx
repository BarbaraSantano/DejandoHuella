import React from 'react';
import '../estilos/Testimonio.css';
import Boton from './Boton';

class Testimonio extends React.Component {
  render() {
    return (
      <div className='contenedor-testimonio'>
        <img 
          className='imagen-testimonio'
          src={require(`../media/testimonio-${this.props.imagen}.png`)}
          alt={`Foto de `} />
        <div className='contenedor-texto-testimonio'>
          <p className='titulo-testimonio'>
            <strong>{this.props.titulo}</strong>
          </p>
          <p className='subtitulo-testimonio'>
            {this.props.subtitulo} 
          </p>
          <p className='texto-testimonio'>"{this.props.testimonio}"</p>
          <div className="contenedor-boton">
          <a title="" href={"https://www.albacetedejandohuella.org/"}>  <Boton texto='Saber más' /></a>
                        </div>


        </div>
      </div>
    );
  }
}

export default Testimonio;