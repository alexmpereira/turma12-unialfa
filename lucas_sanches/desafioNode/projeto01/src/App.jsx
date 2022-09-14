import React, { useState } from "react";
import axios from "axios";
import { Card } from "./components/Card";
import { Footer } from "./components/Footer";
import Header from "./components/Header";
import banner from './imagens/3984219.jpg';
import card1 from './imagens/card1.jpg'
import card2 from './imagens/card2.jpg'
import card3 from './imagens/card3.jpg'
import card4 from './imagens/card4.jpg'

import './styles/global.css'

const requisicao = [
  {
    "id": 1,
    "titulo":'Trem bala',
    "imagem": card1
  },
  {
    "id": 2,
    "titulo":'Thor',
    "imagem": card2
  },
  {
    "id": 3,
    "titulo":'Ops',
    "imagem": card3
  },
  {
    "id": 4,
    "titulo":'Top Gun maverick',
    "imagem": card4
  },
]

function App(){

  const [cards, setCards] = useState(requisicao)
  const [qualQuerNome, setqualQuerNome] = useState("New Filmes")
  const [reactName, setreactName] = useState("Texte")

function alterarNome(){
  setqualQuerNome('Cinema')
  axios.get('https://back-filmes.herokuapp.com/filmes').then((resposta) => {
    setCards(resposta.data)
  })

  setreactName

}
  return (
    //a abertura de maior e menor e o seu fechamento, 
    //serve para que o react identifique que as informações dentro dele são tags html  
    /*O Header que esta sendo usado aqui é o do da pasta Header que esta dentro do componente.
      Para fazer a auto importação, basta digitar "<Header" aí da um auto compleete */
    <>
      <Header 
        textoHeader = "Cinema do Marco"
      />
      <button onClick={alterarNome}>
        Alterar nome
      </button>
        <img width='100%' src={banner}/>

        <h2>{qualQuerNome}</h2>

        <div
          style={{
            display: 'flex',
            justifyContent: 'center',
            alignItems: 'center',
            flexWrap: 'wrap'

          }}
        >
          {//o map é o for each do java script. A diferença, é que ele tem o poder de retorno dentro do html
            cards.map((element, index) =>{
              return(
                <Card 
                  key={element.id}
                  titulo={element.titulo}
                  img={element.imagem}
                />
              )
            })
          }
          

        </div>

      <Footer 
        textoFooter = "Desenvolvido por Lucas Sanches"   
      />
   
    </>
    
  )
}
export default App;