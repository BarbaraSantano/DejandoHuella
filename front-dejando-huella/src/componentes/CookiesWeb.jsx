import CookieConsent from "react-cookie-consent";


function CookiesWeb() {
  return (
    <div className="ComponenteCookies">

<CookieConsent
  buttonText="Aceptar"
  cookieName="myAwesomeCookieName2"
  style={{
    background: "linear-gradient(to right, blue, violet)",
    
  }}
  buttonStyle={{
    background: "white",
    color: "purple",
    fontWeight: "bolder",
    borderRadius: "5px",
  }}
>
Aceptas que en 'Dejando Huella Albacete' tratemos tus datos para personalizar el servicio ofrecido, notificarte comunicaciones internas, noticias y ofertas de nuestros servicios via email, sms, whatsapp o telefónicamente, así como realizar analíticas de tráfico y datos de uso y lo establecido en la politica de privacidad. Puedes revocar el consentimiento, ejercer tus derechos de acceso, rectificación, cancelación, oposición, limitación del tratamiento, portabilidad y supresión escribiéndonos a info@albacetedejandohuella.org{" "}
 
</CookieConsent>
    </div>
  );
}

export default CookiesWeb;