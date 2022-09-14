import React from "react";
//import './styles.css'

//o props dentro do parenteses trás o footer la do app.jsx
export const Footer = (props) => { //o => significa receber
    return(
        
      <footer
        style={{
          background: '#0d6efd',
          paddingTop: 15,
          paddingBottom: 15,
          marginTop: 15,
          width: '100%',
          display: 'flex',
          justifyContent: 'center',
          alignItems: 'center'
        }}
      > 
        <p>{props.textoFooter}</p>
      </footer>
    )
}