var firebaseConfig = {
apiKey: "AIzaSyASSuQ8YuFT0XZBAX0wL7ISkdaB9aN3Vp4",
authDomain: "rastreamento-car.firebaseapp.com",
databaseURL: "https://rastreamento-car-default-rtdb.firebaseio.com",
projectId: "rastreamento-car",
storageBucket: "rastreamento-car.appspot.com",
messagingSenderId: "927397666664",
appId: "1:927397666664:web:184c0f4fba5438f4e140dd",
measurementId: "G-6B1PBSWJY7"
};
// Initialize Firebase

firebase.initializeApp(firebaseConfig);


var ref = firebase.database().ref();
var ref1 = firebase.database().ref('clientes');

///////////////////////-------DB FireBase Contadores ----------/////////////
function ContadorDisponivelDB(){
//Pegar valores do DB
var cont = 0;
ref1.once('value').then(snapshot =>{
    
 snapshot.forEach( value => {
  
     if( value.child('status').val() === 'disponivel'){
        cont++
        
    }
 })


}) .then( ()=>{
    document.getElementById("totaldisponiveis").innerHTML= cont;
})
}

function ContadorEstoqueDB(){
    cont = 0;
    ref1.once('value').then(snapshot =>{
    
        snapshot.forEach( value => {
   
        if( value.child('status').val() === 'estoque'){
            cont++
             
    }
})


}) .then( ()=>{
    document.getElementById("ocupadototal").innerHTML= cont;
})
}

function ContadorClienteDB(){
    cont = 0;
    ref1.once('value').then(snapshot =>{
    
        snapshot.forEach( value => {
   

        if( value.child('status').val() === 'cliente'){
            cont++         
        }
    })
    
    
    }) .then( ()=>{
        document.getElementById("totcli").innerHTML= (20+ cont);
        document.getElementById("clientetotal").innerHTML= cont;   
    })
    }


function ContadorEmUsoDB(){
    cont = 0;
    ref1.once('value').then(snapshot =>{
        
        snapshot.forEach( value => {
       
        if( value.child('status').val() === 'estoque' || value.child('status').val() === 'cliente'){
            cont++
                 
        }
    })
    
    
}) .then( ()=>{
    document.getElementById("totalocupado").innerHTML = cont;
    })
}



//////////////////////////////////////////////////////////////////////////////
function ContadorDisponivelDB2(){
    //Pegar valores do DB
    var cont = 0 ;

    ref1.once('value').then(snapshot =>{
        
     snapshot.forEach( value => {      
        if( value.child('status').val() === 'disponivel'){
            cont++ 
        }
     })
    
    
    }) .then( ()=>{
        
        var divconteiner = document.createElement('div');
        divconteiner.setAttribute('class', 'container__cliente'); 

        var divcliente = document.createElement('div');
        divcliente.setAttribute('class', 'quant__cliente'); 

        divconteiner.appendChild(divcliente);

        var paragrafo = document.createElement('p');
        var texto     = document.createTextNode(cont);
        paragrafo.appendChild(texto);
        divcliente.appendChild(paragrafo);
        
    /////////////////////////////////////////////////////////////////
 
    var divimgcliente = document.createElement('div');
    divimgcliente.setAttribute('class', 'img_cliente'); 

    divconteiner.appendChild(divimgcliente);

    var imagem = document.createElement('img');
    imagem.setAttribute('src', '../img/logo-cliente/honda.png'); 
    divimgcliente.appendChild(imagem);
    
    var divnomecliente = document.createElement('div');
    divnomecliente.setAttribute('class', 'nome__cliente'); 

    var pnome = document.createElement('p');
    var texto = document.createTextNode('Honda');  // falta dinamizar
    pnome.appendChild(texto);
    
    divnomecliente.appendChild(pnome);
    divconteiner.appendChild(divnomecliente);
   
    document.getElementById('mapa').appendChild(divconteiner);
    })
    }