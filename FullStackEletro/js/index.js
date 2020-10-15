const express = require("express");
const server = express();
const router = express.Router();
const fs = require('fs');
const cors = require('cors'); /*Pacote para o Node.js que auxilia na 
configuração das opções do CORS. Com ele, é possível atender às requisições
de origem distinta. */

server.use(cors());
server.use(express.json({extended: true}));
server.use(router);

const readFile = () => {  
    const content = fs.readFileSync('./data/clientes.json', 'utf-8');
  return JSON.parse(content);
}

const writeFile = (content) => {
const updateFile = JSON.stringify(content);
fs.writeFileSync('./data/clientes.json', updateFile, 'utf-8');
}

router.get('/', (_, res) => {
  const content = readFile();
  res.send(content);
});

router.post('/', (req, res) => {
const {name, email, phone} = req.body;
console.log(req.body);
  const currentContent = readFile();

  const id = Math.random().toString(32).substr(2, 9);
  currentContent.push({id, name, email, phone});
  writeFile(currentContent);
  res.send(currentContent);
  
});

router.put('/:id', (req, res) => {
 const {id} = req.params;
const {name, email, phone} = req.body;

 const currentContent = readFile();
 const selectedClient = currentContent.findIndex((client) => client.id === id);
 
 const {id: cId, name: cName, email: cMail, phone: cPhone} = currentContent[selectedClient];

 const newObject = {
   cId,
   name: name ? name: cName,
   email: email ? email: cMail,
   phone: phone ? phone: cPhone
 }

currentContent[selectedClient] = newObject;
writeFile(currentContent);
 res.send(newObject);
});

router.delete('/:id', (req, res) => {
 const {id} = req.params;
 const currentContent = readFile();
 const selectedClient = currentContent.findIndex((client) => client.id === id);
 currentContent.splice(selectedClient, 1);
writeFile(currentContent);
 res.send(currentContent);
});

server.listen(3002, () => {
console.log('Rodando servidor');
});