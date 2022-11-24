import React, { useEffect } from "react";
import useFetch from "../hooks/useFetch";
import '../estilos/tarjetaanimal.css';
import tick from  '../media/tickmorado.png';


export default function Users() {
  const [state, fetchProyecto] = useFetch();

  useEffect(
    function () {
      fetchProyecto({
        // ruta linux
        //url: "http://127.0.0.1:8000/api/gatos",
        // ruta Windows
         url: "http://localhost/DejandoHuella/DejandoHuella/public/index.php/api/gatos",
        method: "GET"
      });
    },
    [fetchProyecto]
  );

  if (state.isLoading) {
    return <div>Cargando datos de la api...</div>;
  }

  if (state.isFailed) {
    return <div>Fallo recuperando los datos</div>;
  }

  if (state.isSuccess) {
    return (
	    <div className="container">
			{
				 state.data.map(card=>{
					return(
								<div className='content' id="tarjetaAnimal" key={card.id}>
                    <div id="cabecera">
                      <h1 id="nombreAnimal">{card.nombre}</h1> 
                      <img src={(`../media/${card.imagen} `)} alt=""/>
                    </div>
                    <div id="tablaContenido">
                      <thead>
                        <tr>
                          <th id="cabeceraTabla">Fecha de nacimiento</th>
                          <th id="cabeceraTabla">Sexo</th>
                          <th id="cabeceraTabla">Raza</th>
                          <th id="cabeceraTabla">Esterilizado</th>
                          <th id="cabeceraTabla">Test</th>
                          <th id="cabeceraTabla">Edad</th>
                          <th id="cabeceraTabla">Tamaño</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td id="cuerpoTabla">{card.fecha_nacimiento}</td>
                          <td id="cuerpoTabla">{card.sexo}</td>
                          <td id="cuerpoTabla">{card.raza}</td>
                          <td id="cuerpoTick"><img src={tick}/></td>
                          <td id="cuerpoTick"><img src={tick}/></td>
                          <td id="cuerpoTabla">{card.edad}</td>
                          <td id="cuerpoTabla">{card.tamano}</td>
                        </tr>
                      </tbody>
                      </div>
                      <div>
                          <p id="comentario">{card.descripcion}</p>
                      </div>
                  </div>          				
					)
				})
			}
		</div>
    ); 
  }
  return null;
}
