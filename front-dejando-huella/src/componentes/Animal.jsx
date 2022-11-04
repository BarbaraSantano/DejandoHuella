import React, { useEffect } from "react";
import useFetch from "../hooks/useFetch";
import '../estilos/animal.css';


export default function Users() {
  const [state, fetchProyecto] = useFetch();

  useEffect(
    function () {
      fetchProyecto({
        url: "http://localhost/DejandoHuella/back-dejando-huella/public/index.php/api/animals",

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
                        
						
								<div className='face' key={card.id}>
                     
 
                                <h3>{card.nombre} {card.descripcion}</h3>
                              
                     </div>
                        				
					)
				})
			}
		</div>
    ); 
  }
  return null;
}
