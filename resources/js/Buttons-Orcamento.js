const buttonLixeira = "<button type='button' id='row#' class='btn btn-primary' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Apagar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'> <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/> <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/> </svg> </button>";
const buttonOlho = "<button type='button' class='btn btn-primary' onclick='UpDateRegist()' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Mostrar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'> <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z'/> <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0'/> </svg> </button>";
function DeletRegist(){
    var buttons = document.querySelectorAll("button");
    for (var i = 2; i < buttons.length; i++) {
        let linha = 1;
        if (i >= 4){
            linha =  Math.ceil((i - 1)/2);
        }
        if(buttons[i].id === ("row"+linha)){
            buttons[i].addEventListener("click", function (e) { 
                //todo confirmação pelo usuario 
                let value = e.currentTarget.id;
                value = value.replace("row","");
                document.getElementById('id'+value).style.display = 'none';
            })
        }
  }

}
function UpDateRegist(){
    
}

function AddRegistConcluidos(json){
    titulo();
    for(let i = 0; i < json.length; i++){
        var t = document.querySelectorAll(".table");
        var element = document.createElement("tbody");
        element.innerHTML = "<tr id='id"+json[i].indice+"'> " +
        "<td scope='row' class='text-center'>" + json[i].indice + "</td>" +
        "<td class='text-center'>" + json[i].telefone +"</td>"+
        "<td class='text-center'>" + json[i].nome + "</td>"+
        "<td class='text-center'>" + json[i].festa + "</td>"+
        "<td class='text-center'>" + json[i].data + "</td>"+
        "<td class='text-center'>"+
        "<div>"+  
            buttonLixeira.replace("row#","row" + json[i].indice) + 
            buttonOlho +
            "</div>"+
            "</td>"+
        "</tr>";
        document.querySelector(".table").append(element);
    }
}
function AddRegistNovos(json){
    tituloN();
    for(let i = 0; i < json.length; i++){
        var t = document.querySelectorAll(".table");
        var element = document.createElement("tbody");
        element.innerHTML = "<tr id='id"+json[i].indice+"'> " +
        "<td scope='row'>" + json[i].indice + "</td>" +
        "<td>" + json[i].dataRegistro +"</td>"+
        "<td>" + json[i].telefone +"</td>"+
        "<td>" + json[i].nome + "</td>"+
        "<td>" + json[i].festa + "</td>"+
        "<td>" + json[i].data + "</td>"+
        "<td class='text-center'>"+
        "<div>"+ 
        buttonLixeira.replace("row#","row" + json[i].indice) + 
        buttonOlho +
    "</div>"+
        "</td>"+
        "</tr>";
        document.querySelector(".table").append(element);
    }
}
function AddRegistPendentes(json){
    tituloP();
    for(let i = 0; i < json.length; i++){
        var t = document.querySelectorAll(".table");
        var element = document.createElement("tbody");
        
        element.innerHTML = "<tr id='id"+json[i].indice+"'> " +
        "<td scope='row'>" + json[i].indice + "</td>" +
        "<td>" + json[i].dataRegistro +"</td>"+
        "<td>" + json[i].telefone +"</td>"+
        "<td>" + json[i].nome + "</td>"+
        "<td>" + json[i].festa + "</td>"+
        "<td>" + json[i].data + "</td>"+
        "<td>" + json[i].pendencia + "</td>"+
        "<td class='text-center'>"+
        "<div>"+
        buttonLixeira.replace("row#","row" + json[i].indice) + 
        buttonOlho +
        "</div>"+
        "</td>"+
        "</tr>";
    
        document.querySelector(".table").append(element);
    }
}
function tituloN(){
    let t = document.querySelectorAll(".table");
    //console.log(t);
    element = document.createElement("thead");
    element.classList.add("thead-dark");    
    element.innerHTML = "<th scope='col' class='text-center'>#</th><th scope='col' class='text-center'>Data Recebimento</th> <th scope='col' class='text-center'>Contato</th><th scope='col' class='text-center'>Nome</th><th scope='col' class='text-center'>Evento</th><th scope='col' class='text-center'>Data Evento</th><th scope='col' class='text-center'>Acompanhemento</th>";
    document.querySelector(".table").append(element);
}
function tituloP(){
    let t = document.querySelectorAll(".table");
    //console.log(t);
    element = document.createElement("thead");
    element.classList.add("thead-dark");    
    element.innerHTML = "<th scope='col' class='text-center'>#</th><th scope='col' class='text-center'>Data Recebimento</th> <th scope='col' class='text-center'>Contato</th><th scope='col' class='text-center'>Nome</th><th scope='col' class='text-center'>Evento</th><th scope='col' class='text-center'>Data Evento</th><th scope='col' class='text-center'>Pendência</th><th scope='col' class='text-center'>Acompanhemento</th>";
    document.querySelector(".table").append(element);
}
function titulo(){
    let t = document.querySelectorAll(".table");
    //console.log(t);
    element = document.createElement("thead");
    element.classList.add("thead-dark");    
    element.innerHTML = "<th scope='col' class='text-center'>#</th> <th scope='col' class='text-center'>Contato</th><th scope='col' class='text-center'>Nome</th><th scope='col' class='text-center'>Evento</th><th scope='col' class='text-center'>Data Evento</th><th scope='col' class='text-center'>Acompanhemento</th>";
    document.querySelector(".table").append(element);
}
    
const json = {
    "Concluidos":
    [
        {"indice" : "1", "telefone" : '71988334508', "nome" : 'Diogo', "festa" : 'Festa do Carnaval', "data" : '20/06/2024'},
        {"indice" : "2", "telefone" : '71988334108', "nome" : 'Maria', "festa" : 'Aniversário', "data" : '22/08/2021'}
    ],
    "Novos":
    [
        {"indice" : "1", "dataRegistro":"28/01/2025", "telefone" : '71988334508', "nome" : 'Diogo', "festa" : 'Festa do Carnaval', "data" : '20/06/2024'},
        {"indice" : "2", "dataRegistro":"28/01/2025","telefone" : '71988334108', "nome" : 'Maria', "festa" : 'Aniversário', "data" : '22/08/2021'}
    ],
    "Pendentes":
    [
        {"indice" : "1","dataRegistro":"28/01/2025", "telefone" : '71988334508', "nome" : 'Diogo', "festa" : 'Festa do Carnaval', "data" : '20/06/2024', "Pendencia":"local"},
        {"indice" : "2","dataRegistro":"28/01/2025", "telefone" : '71988334108', "nome" : 'Maria', "festa" : 'Aniversário', "data" : '22/08/2021',"Pendencia":"local"}
    ]
}
function doc(){
    if( "Orçamentos Concluídos" == document.title){
        AddRegistConcluidos(json.Concluidos);
    }else if( "Novos Orçamentos" == document.title){
        AddRegistNovos(json.Novos);
    }else if("Orçamentos Pendentes" == document.title){
        AddRegistPendentes(json.Pendentes);
    }
}

DeletRegist();