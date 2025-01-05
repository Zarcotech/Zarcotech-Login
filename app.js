const express = require('express');
const path = require('path');
const app = express();

app.get('/', (req, res) => {
    res.sendFile(path.join('/home/zidan/Zidan/login', 'index.html'));
});

app.listen(8000, () => {
    console.log('Server is running on http://localhost:8000');
});
