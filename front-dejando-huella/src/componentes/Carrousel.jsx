import React from 'react';
import { useState } from "react";
import { useEffect } from "react";
import "../estilos/carousel.css";
import "../estilos/boton.css";
import 'react-gallery-carousel/dist/index.css';

export const Carrousel = () => {
  const [current, setCurrent] = useState(0);
  const handleClick = () => {
    //esta ruta solo es para probar si funcionan enlace externos y esta OK
    window.open('http://localhost/DejandoHuella/DejandoHuella/public/index.php/socio', '_blank')
  }

  const [newsList, setNewsList] = useState([
    {
      img: "../media/uno.png",
    },
    {
      img: "../media/dos.png",
    },
    {
      img: "../media/tres.png",
    },
  ]);

  const length = newsList.length;

  useEffect(() => {
    setNewsList([
      {
        img: "../media/uno.png",
      },
      {
        img: "../media/dos.png",
      },
      {
        img: "../media/tres.png",
      },
    ]);
  }, []);

  useEffect(() => {
    let milisecs = 4000;

    let intervalChange = setInterval(nextSlide, milisecs);

    return () => clearInterval(intervalChange);

  }, [current]);

  const nextSlide = () => {
    setCurrent(current === length - 1 ? 0 : current + 1);
  };
  return (

    <div className="prueba">
      <div>

        {length !== 0 ? (
          <div className="trendingNews">

            {newsList.map((noticia, index) => (
              <div

                key={index}
                className={index === current ? "slide active" : "slide"}
              >

                {index === current && (
                  <div className="sliderCont">
                    <img

                      id="imgTrendingCont"
                      alt="fotoTrending"
                      src={noticia.img}

                    />
                  </div>
                )}
              </div>

            ))}
        
          </div>
        ) : null}

<button className="btn" onClick={handleClick} >Hazte Socio/a </button>

      </div>
      
    </div>


  );
};

export default Carrousel;
