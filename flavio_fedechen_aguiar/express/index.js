const express = require('express')
const app = express()
const port = 3000

app.get('/', (request, response) => {
    response.sendFile(__dirname + '/index.html')
})

app.listen(port, () => {
    console.log('Executando app na porta 3000')
})