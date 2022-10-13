import React, { useState } from 'react'
import { Footer } from './components/Footer';
import Header from './components/Header';
import './styles/global.css'
import banner from './img/banner.jpg'
import { Card } from './components/Card';
import card1 from './img/card1.jpg'
import card2 from './img/card2.jpg'
import card3 from './img/card3.jpg'
import card4 from './img/card4.jpg'
import axios from 'axios';



const requisicao = [
    {
        "id": 1,
        "titulo": "Trem bala",
        "imagem": card1
    }, {
        "id": 2,
        "titulo": "Thor Amor e Trovão",
        "imagem": card2
    }, {
        "id": 3,
        "titulo": "Ooops!",
        "imagem": card3
    }, {
        "id": 4,
        "titulo": "Top Gun - Maverick",
        "imagem": card4
    },
]


function App() {

    const [cards, setCards] = useState(requisicao);
    const [qualquerNome, setQualquerNome] = useState('');
    const [tituloHeader, setTituloHeader] = useState('');
    const [toggle, setToggle] = useState(0)
 
    function alterarNome() {
        if(toggle == 0){
            setQualquerNome('Cinema');
            setTituloHeader('Cinema em casa!')
            setToggle(1)
        } else {
            setQualquerNome('');
            setTituloHeader('');
            setToggle(1);
        }
        axios.get('https://back-filmes.herokuapp.com/filmes').then((res)=>{
                setCards(res.data)
        })
    }


    return (
        <>
            <Header titulo={tituloHeader}/>
            <button onClick={alterarNome}>Alterar Título</button>
            <img width='100%' src={banner} />
            <h2>{qualquerNome}</h2>
            <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center', flexWrap: 'wrap' }}>

                {
                    cards.map((element, index) => {
                        return (
                            <Card key={element.id} titulo={element.titulo} img={element.imagem} />
                        )
                    })
                }


            </div>
            <Footer nome="Gabriel dos Santos Silva"/>
        </>
    )
}

export default App;  
