import React from 'react'
import './styles.css'

export const Footer = (props) => {
    return (
        <footer>
            <p>Desenvolvido por {props.nome}</p>
        </footer> 
    )
}