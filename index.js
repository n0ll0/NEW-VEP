const express = require('express');
const app = express();
require('dotenv').config();
const mongo_uri = process.env.MONGODB;
let PORT = 5500;

app.get('/', (req, res) => {
  res.send('hello world');
})

app.listen(PORT + 1);