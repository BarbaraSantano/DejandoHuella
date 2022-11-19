import React  from 'react';
import '../estilos/cardBoton.css';
import Cards from '../json/data.json';


 function CardBoton() {
  
    return (
	    <div className="colaboraciones">	
			{
				 Cards.map(card=>{
					return(
                        
                            <div  className="otra"key={card.id} >
								<h3 className="nombre"><strong>{card.titulo}</strong></h3>
								<a title="" href={card.enlace}><img src={(`${process.env.PUBLIC_URL}../media/colaboradores/${card.imagen}`)}
									className='frontal' 
									alt=""/></a>	
							</div> 				
					)
				})
			}
		</div>
	); 
}
export default CardBoton;