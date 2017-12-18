
// adds an element to the array if it does not already exist using a comparer 
// function
var ajuda1 = "Clique sobre o elemento para selecioná-lo! O elemento ficará amarelo.";
var ajuda3 = "No final, ele ficará verde se estiver correto. Se ele estiver errado, ficará vermelho.";

var ajuda2 = "Clique sobre uma figura, e um nome para selecioná-los. Eles ficarão com a mesma cor."
var ajuda4 = "No final, eles ficarão verde se estiverem corretos. Se eles estiverem errados, ficarão vermelhos.";

var alerta = "Selecione um nome antes de selecionar uma figura.";
var alerta2 = "Selecione a figura que combina com o nome selecionado.";
var alerta3 = "Este já foi selecionado, escolha outro.";

var alertGrupos = "Voce nao escolheu um objeto em todos os grupos.";
var alertFiguras = "Voce nao relacionou todas as figuras.";
var msgPont = "Sua pontuação foi "

Array.prototype.pushIfNotExist = function(element) { 
    if (this.indexOf(element) == -1) {
        this.push(element);
        return true;
    }
    console.log("element index: " + this.indexOf(element));
    return false;
}; 

$(document).ready(function(){
    var items = []
    var sel1, sel2, sel3; //selecteds
    var cor1 = "sabao"; var cor2 = "algodao"; var cor3 = "maquina"; //corrects
    var pontos = 0;
    //cores.
    var isName = true;
    var colors_name = ["yellow-name", "purple-name", "blue-name", "orange-name"];
    var colors_icon = ["yellow-icon", "purple-icon", "blue-icon", "orange-icon"];
    var icons = []; //usados para comparar certo/errado
    var names = [];
    var icc = [];//usados para colorir certo/errado
    var nmc = []; 
    var pos_atual = 0;
    //verifica se o resultado ja foi calculado.
    var jaCalc = false;
    $(".clickable-g1").click((event) =>{
        var itm = event.target.name == undefined ? event.target.id : event.target.name;
        items.pushIfNotExist(itm);
        if(sel1 != undefined){
            sel1.classList.remove("selected");
            sel1.classList.add("option-border");
        }
        sel1 = document.getElementById(itm);
        sel1.classList.add("selected");
        console.log("event: " + event);
        console.log(items);
    })

    $(".clickable-g2").click((event) =>{
        var itm = event.target.name == undefined ? event.target.id : event.target.name;
        items.pushIfNotExist(itm);
        if(sel2 != undefined){
            sel2.classList.remove("selected");
            sel2.classList.add("option-border");
        }
        sel2 = document.getElementById(itm);
        sel2.classList.add("selected");
        console.log("event: " + event);
        console.log(items);
    })

    $(".clickable-g3").click((event) =>{
        var itm = event.target.name == undefined ? event.target.id : event.target.name;
        items.pushIfNotExist(itm);
        if(sel3 != undefined){
            sel3.classList.remove("selected");
            sel3.classList.add("option-border");
        }
        sel3 = document.getElementById(itm);
        sel3.classList.add("selected");
        console.log("event: " + event);
        console.log(items);
    })

    $(".figure-name").click(function(event){
        if(!isName){
            alert(alerta2);
            return;
        }
        if(event.target.classList.contains("relacionado")){
            alert(alerta3);
            return;
        }
        event.target.classList.add(colors_name[pos_atual]);
        event.target.classList.add("relacionado");
        event.target.classList.remove("figure-name");
        names[pos_atual] = event.target.id;
        nmc[pos_atual] = event.target;
        isName = false;
        console.log(names, pos_atual);
        
    });

    $(".figure-icon").click(function(event){
        if(isName){
            alert(alerta);
            return;
        }
        if(event.target.classList.contains("relacionado")){
            alert(alerta3);
            return;
        }
        event.target.classList.add(colors_icon[pos_atual]);
        event.target.classList.add("relacionado");
        icons[pos_atual] = event.target.name;
        icc[pos_atual] = event.target;
        isName = true;
        console.log(icons, pos_atual);
        pos_atual++;
    });

    $("#resultado").click(() =>{
        if(jaCalc){
            return;
        }
        var sels = [sel1, sel2, sel3]
        var cors = [cor1, cor2, cor3]
        this.pontos = 0
        for(var x=0 ; x < sels.length ; x++){
            if(sels[x] === undefined){
                alert(alertGrupos);
                return;
            }
            if(sels[x].id === cors[x])
                this.pontos++
            else{
                console.log(sels[x] + " != " + cors[x]);
            }
        }
        console.log("s1: " + sel1.id);
        console.log("s2: " + sel2.id);
        console.log("s3: " + sel3.id);
        // console.log("s4: " + sel4);
        console.log("\n");
        console.log("c1: " + cor1);
        console.log("c2: " + cor2);
        console.log("c3: " + cor3);
        // console.log("c4: " + cor4);
        console.log(this.pontos);
        for(var x = 0 ; x < icons.length ; x++){
            if(icons[x] === undefined){
                alert(alertFiguras);
                return;
            }
            if(icons[x] === names[x])
                this.pontos++;
        }
        console.log(this.pontos);
        alert(msgPont + this.pontos + "!");
        $("#pont").text("Pontuação: " + this.pontos);
        $("#pont").addClass("pont");
    })

    $("#ajuda1").click(() => {
        alert(ajuda1 + "\n" + ajuda3);
    });

    $("#ajuda2").click(() => {
        alert(ajuda2 + "\n" + ajuda4);
    });
})
var group1 = function(option) {
    console.log(option.id);
}