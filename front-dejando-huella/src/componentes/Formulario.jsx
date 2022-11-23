import React from 'react'
import '../estilos/formulario.css';
import perro1 from '../media/perroformu1.jpg';
import perro2 from '../media/gatoyperroformu.jpg';
import perro3 from '../media/gatoformu1.jpg';
import emailjs from 'emailjs-com';


export const Formulario = () => {
    function enviarEmail(e){
        e.preventDefault();
        emailjs.sendForm('service_75ei1kv','template_0tyjflx',e.target,'pfYc5nnw5aMg1owHl').then(res=> {
          alert("Se ha enviado correctamente.");
          console.log(res);  
        })
    }
  return (
    <div className="containergral">
    <div className="containerfotos">
        <img src={perro1} alt="" />
        <img src={perro3} alt="" />
        <img src={perro2} alt="" />
    </div>
    <h2 className="titulocentrado">Contacta con nosotrxs: </h2>
        <form onSubmit={enviarEmail}>
            <div className="formunombre">
                <input type="text" placeholder="Nombre" id="nombre" name="nombre"/>
            </div>
            <div className="formuemail">
                <input type="email" placeholder="Email" id="email" name="email"/>
            </div>
            <div className="formumensaje">
                <input type="text" placeholder="Mensaje" id="mensaje"name="mensaje"/>
            </div>
            <div>
                <button type="submit" className="botonformu">Enviar</button>
            </div>
        </form>
    </div>
  )}
  export default Formulario