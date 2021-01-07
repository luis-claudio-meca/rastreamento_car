function InicializaBD(){
    if (localStorage.getItem("Totaldisponivel") === null)
        localStorage.setItem("Totaldisponivel", 30);
    if (localStorage.getItem("disponivel") === null)
        localStorage.setItem("disponivel", 50);
    if (localStorage.getItem("Totalocupado") === null)
        localStorage.setItem("Totalocupado", 10);
    if (localStorage.getItem("ocupado") === null)
        localStorage.setItem("ocupado", 50);  
    if (localStorage.getItem("status1") === null)
        localStorage.setItem("status1",'disponivel');
    if (localStorage.getItem("status2") === null)
        localStorage.setItem("status2",'disponivel');
    if (localStorage.getItem("status3") === null)
        localStorage.setItem("status3",'disponivel');
    if (localStorage.getItem("status4") === null)
        localStorage.setItem("status4",'disponivel');
    if (localStorage.getItem("status5") === null)
        localStorage.setItem("status5",'disponivel');

}


TotalcarOcupMatriz = Number(localStorage.getItem("Totalocupado"));

function ContadorDisponivel(){
    cont = 0;
    props = [
        localStorage.getItem("status1"),
        localStorage.getItem("status2"),
        localStorage.getItem("status3"),
        localStorage.getItem("status4"),
        localStorage.getItem("status5")
    ]
        for (i=0 ; i<5 ; i++){
    
            if(props[i] === 'disponivel'){
                cont++
            }
        }
        return String (cont);
    }
    
    function ContadorEstoque(){
        cont = 0;
    props = [
        localStorage.getItem("status1"),
        localStorage.getItem("status2"),
        localStorage.getItem("status3"),
        localStorage.getItem("status4"),
        localStorage.getItem("status5")
    ]
        for (i=0 ; i<5 ; i++){
    
            if(props[i] === 'estoque'){
                cont++
            }
        }
        return String (cont);
    }

    function ContadorCliente(){
        cont = 0;
    props = [
        localStorage.getItem("status1"),
        localStorage.getItem("status2"),
        localStorage.getItem("status3"),
        localStorage.getItem("status4"),
        localStorage.getItem("status5")
    ]
        for (i=0 ; i<5 ; i++){
    
            if(props[i] === 'cliente'){
                cont++
            }
        }
        return String (cont);
    }
    
