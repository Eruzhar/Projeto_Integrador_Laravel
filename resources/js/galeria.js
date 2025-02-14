const inputFile = document.getElementById("Imagem-up")

inputFile.addEventListener('change', getImage);


function getImage(e){
    const image = e.target.files[0]
    imageToBase64(image, (base64) => {
        const img = document.getElementById('ImagemUpLoad')
        img.src = base64
//        img.style.display = 'block'
    })
}

function imageToBase64(image, callback){
    const reader = new FileReader()
    reader.readAsDataURL(image)
    reader.onload = () => callback(reader.result)
    reader.onerror = error => console.error(error)
}

function LimparImagem(){
    document.getElementById('ImagemUpLoad').src = '../imagens/istockphoto-1147544807-1024x1024.jpg'
    document.getElementById('Imagem-up').value = ''
}

function LimparFormulario(){
    document.getElementById('Titulo-Imagem').value = ''
    document.getElementById('Descrição').value = ''
}

function SalvarImagem(){
    console.log(document.getElementById('Imagem-up').value);
    console.log(document.getElementById('Titulo-Imagem').value);
    console.log(document.getElementById('Descrição').value);
}