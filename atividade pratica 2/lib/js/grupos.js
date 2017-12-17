
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
    $(".clickable-div").click((event) =>{
        var itm = event.target.name == undefined ? event.target.id : event.target.name;
        items.pushIfNotExist(itm);
        alert(itm);
        console.log("event: " + event);
        console.log(items);
    })
})
var group1 = function(option) {
    console.log(option.id);
}