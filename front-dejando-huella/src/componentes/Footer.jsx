import React from 'react'
import '../estilos/footer.css';
import facebook from '../media/FacebookLogo.png';
import insta from '../media/InstagramLogo.png';
import twitter from '../media/TwitterLogo.png';
import youtube from '../media/YoutubeLogo.png';
import logo from  '../media/logo_footer.png';

export const Footer = () => {
  return (

    <footer>
      <ul class="footer-menu-container">
        <li class="social-icon"><a href={"https://es-es.facebook.com/AlbaceteDejandoHuella/"}>< img src= {facebook}/></a></li>
        <li class="social-icon"><a href={"https://www.youtube.com/channel/UC2IEfzdjGJFE_fMJ_veeK9A"}>< img src= {youtube}/></a></li>
        <li class="social-icon"><a href={"https://www.albacetedejandohuella.org/"}>< img class="logo" src= {logo}/></a></li>
        <li class="social-icon"><a href={"https://www.instagram.com/albacetedejandohuella/?hl=es"}>< img src= {insta}/></a></li>
        <li class="social-icon"><a href={"https://twitter.com/DejandoHuellaAB?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"}>< img src= {twitter}/></a></li>
      </ul>
      <p class="copyright">&copy; ASOCIACIÓN EN DEFESENSA DE LOS ANIMALES - DEJANDO HUELLA ALBACETE - G55585457</p>
    </footer>
  
  )
}

export default Footer