import React from "react"
import './style.css'


//aqui esta sendo feita a importação do mapla do App.jsx
export const Card = (props) => {
    return (
        <div
            className='card'
        >
            <img 
                width="100%"
                src={props.img}

                //essa img vem do img={element.img} la do App.jsx que esta dentro do laço de repetição
            />

            <h2>{props.titulo}</h2>
        </div>
    )
}