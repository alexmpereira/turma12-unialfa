import React from 'react'
import './styles.css'


export const Card = (props) => {
    return (
        <div id={props.id} className='card'>
            {props.titulo}
            <img width={"100%"} src={props.img}>
            </img>
        </div> 
    )
}