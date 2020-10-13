const exibirCategoria = (categoria) => {

  let elementos = document.getElementsByClassName('box_produto');

  for(let i = 0; i < elementos.length; i++){
    console.log(elementos[i].id);
    if(categoria == elementos[i].id){
      elementos[i].style = 'display: inline-block';
    } else {
      elementos[i].style = 'display: none';
    }
  }
};

const exibirTodos = () => {
  let elementos = document.getElementsByClassName('box_produto');

  for(let i = 0; i < elementos.length; i++){
    elementos[i].style = 'display: inline-block';
  }
}

const destaque = (imagem) => {
  //console.log(imagem);
  if(imagem.width == 120){
    imagem.width = 240;    
  } 
};

  const tirarDestaque =(imagem) => {
    imagem.width = 120;
  }

