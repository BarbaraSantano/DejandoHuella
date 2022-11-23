import React, { useEffect } from "react";
import useFetch from "../hooks/useFetch";
import '../estilos/animal.css';


export default function Users() {
  const [state, fetchProyecto] = useFetch();

  useEffect(
    function () {
      fetchProyecto({
        // ruta linux
        //url: "http://127.0.0.1:8000/api/animals",
        // ruta Windows
        url: "http://localhost/DejandoHuella/DejandoHuella/public/index.php/api/perro",
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
                        
						
								<div className='content' key={card.id}>
                     <h1>{card.nombre}</h1> 
                      <img src={(`../media/${card.imagen} `)}className='frontal' alt=""/>
                     </div>
                        				
					)
				})
			}
		</div>
    ); 
  }
  return null;
}
