const http = require('http');

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello World\n');
});

const PORT = 3000;
server.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}/`);
});


//Steps:

//Create a folder and open it in cmd.
//Type command "npm init -y"
//a json file will be created
//after that creae a new file called server.js
//add code
// run the code by "node server.js"