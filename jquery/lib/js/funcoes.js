// Sintaxe jQuery:
// $(seletor).acao()

$(document).ready(() => {
    //todo conteudo do jQuery
    console.log("Documento pronto para uso")
    
    //"p" = seletor de classe p || ocultando P ao click.
    $("p").click(function(){
        console.log("this: " + this);
        $(this).hide();
    })
    
    $("button[name='exibir']").click(()=>{
        $("#links").show()
    });
    $("button[name='ocultar']").click(()=>{
        $("#links").hide()
    });

    $("button[name='mudar']").click(()=>{
        $("#titulo").addClass("jumbotron")
        $("button").addClass("btn btn-primary")
        $("#links").addClass("alert alert-info")
        $("p").removeClass("h2")
        $("a").toggleClass("btn btn-warning")
        $("button[name='exibir']").text("Churro Paladar")
        $("button[name='ocultar']").text("Churro Errante")
        $("button[name='mudar']").text("Churro")
    });
})