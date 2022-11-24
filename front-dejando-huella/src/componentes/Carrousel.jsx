import React from 'react';
import { useState } from "react";
import { useEffect } from "react";
import "../estilos/carousel.css";
import "../estilos/boton.css";
import 'react-gallery-carousel/dist/index.css';
import {Link} from 'react-router-dom'

export const Carrousel = () => {
  const [current, setCurrent] = useState(0);


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

    <div className="textSlider">
      <h2 className="h2"> “Más de 258 300 animales fueron abandonados en 2020. Dicho de otro modo,  700 animales que terminan en las calles o perreras de España cada día”</h2>

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
 <Link to="/animal"><button className="btncarrousel " onClick="" >Ver todos </button></Link>


    </div>
      
    


  );
};

export default Carrousel;
