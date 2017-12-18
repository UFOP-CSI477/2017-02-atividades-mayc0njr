
// adds an element to the array if it does not already exist using a comparer 
// function
Array.prototype.pushIfNotExist = function(element) { 
    if (this.indexOf(element) == -1) {
        this.push(element);
    }
    console.log("element index: " + this.indexOf(element));
}; 

$(document).ready(function(){
    var items = []
    var sel1, sel2, sel3, sel4; //selecteds
    var cor1 = "sabonete"; var cor2 = "algodao"; var cor3 = "maquina"; var cor4 = "chave" //corrects
    var pontos = 0;
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
})
var group1 = function(option) {
    console.log(option.id);
}