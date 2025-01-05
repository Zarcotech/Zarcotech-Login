const express = require('express');
const app = express();
app.use(express.static('public/static'));

app.use(express.urlencoded({ extended: true }));

app.post('/some-endpoint', (req, res) => {
    const data = req.body.data;
    res.json({ received: data });
});

app.listen(8000, () => {
    console.log('Server is running on http://localhost:8000');
});
