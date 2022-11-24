import React  from 'react';
import '../estilos/cardBoton.css';
import Cards from '../json/data.json';


 function CardBoton() {
 
    return (
		<div className="textCaja">
			<h1 className="h"> Adopta un perro ó gato</h1>
			 <p>Si no puedes comprometerte a adoptar un animal para siempre, ¡aún puedes ayudar!!</p>
		
	    	<div className="caja">	
		
				
			{
				 Cards.map(card=>{
					return(

                            <div  className="caja1"key={card.id} >
								<a title="" href={card.enlace}><img src={(`${process.env.PUBLIC_URL}../media/colaboradores/${card.imagen}`)}
									className='imagen' 
									alt=""/></a>			
							</div>
									
					)
				})
			}
			</div>
		</div>
	); 
}
export default CardBoton;