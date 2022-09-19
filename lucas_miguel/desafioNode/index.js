const express = require('express');

const PORT = 4000;
const HOST = '0.0.0.0';

const app = express();

app.get('/', (req, res) => {
    res.send('Hello World Alfa');
});

app.listen(PORT, HOST);