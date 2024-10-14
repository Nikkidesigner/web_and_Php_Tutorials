// Load the HTTP module
const http = require('http');

// Create an HTTP server
const server = http.createServer((req, res) => {
    // Set the response header content type as plain text
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    
    // Send a response back to the client
    res.end('Hello, World!\n');
});

// Define the port to listen on
const PORT = 3000;

// Start the server and listen on the defined port
server.listen(PORT, () => {
    console.log(`Server is running and listening on http://localhost:${PORT}`);
});
