// server.js
const express = require('express');
const path = require('path');

const app = express();
const port = 3000;

// Serve static files (HTML, CSS, images, etc.)
app.use(express.static(path.join(__dirname, '')));

// Route to handle the main page
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'Main.html'));
});

// Start the server
app.listen(port, () => {
  console.log(`Server running at http://localhost:${port}`);
});
