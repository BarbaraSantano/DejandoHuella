import React from 'react'

function Blog() {
  return (
    <div className='contenedor-blog'>
        <img 
          className='imagen-blog'
          src={require(`../media/blog.jpg`)}
          alt={`Foto de perro y humano leyendo`} />


    </div>
  )
}

export default Blog