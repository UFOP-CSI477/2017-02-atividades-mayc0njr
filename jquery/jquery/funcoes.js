//sintaxe
//$(seletor).acao()

$(document).ready(function(){
  //todo conteudo do jQuery
  console.log("Documento pronto para uso.");

  //P-> CLick -> Hide
  $("p").click(function(){
    $(this).hide();
  });

  $("button[name='exibir']").click(function(){
    $("#links").show(); //procura no id=links
  });

  $("button[name='ocultar']").click(function(){
    $("#links").hide(); //procura no id=links
  });

  $("button[name='mudar']").click(function(){
    $("#titulo").addClass("jumbotron");
    $("button").addClass("btn btn-primary");
    $("#links").addClass("alert alert-info");

    $("p").removeClass("h2");

    $("a").toggleClass("btn btn-warning");
  });

  $("button[name='validar']").click(function(){
    if ($("#estado").val() == "0") {
      alert("Selecione o estado!");
      $("#estado").focus();
    }
    else {
      alert($("#estado option:selected").text());
    }

  });

});
