import React from 'react'
import '../estilos/empresas.css';
import e1 from '../media/empresa-1.png';
import e2 from '../media/empresa-2.png';
import e3 from '../media/empresa-3.png';
import e4 from '../media/empresa-4.png';
import e5 from '../media/empresa-5.png';


function Empresas() {
  return (
    <div class="containerEmpresa">
        <h2>Empresas que Dejan Huella</h2>
        <div class="imagenes">
          <a href={"https://www.facebook.com/dogcenteralbacete/?ref=page_internal"}><img src={e1}></img></a>
          <a href={"https://m.facebook.com/sanantonveterinaria/?locale2=es_ES"}><img src={e2}></img></a>
          <a href="#"><img src={e3}></img></a>
          <a href={"https://www.veterinariaargosalbacete.com"}><img src={e4}></img></a>
          <a href={"https://www.facebook.com/DogVillageAlbacete"}><img src={e5}></img></a>
        </div>
    </div>
  )
}

export default Empresas