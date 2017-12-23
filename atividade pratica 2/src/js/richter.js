var escala = []
escala[0] = "Terremoto Magnitude: "
escala[1] = "Geralmente não sentido, mas gravado.";
escala[2] = "Às vezes sentido, mas raramente causa danos.";
escala[3] = "No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiões próximas.";
escala[4] = "Pode ser destrutivo em áreas em torno de até 100 km do epicentro.";
escala[5] = "Grande terremoto. Pode causar danos sérios numa grande faixa.";
escala[6] = "Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros.";
var errorCalc = "Confira se não há valores inválidos ou negativos."

$(document).ready(function(){

    $("#calculate").click(()=>{
        var a = $("#amplitude").val()
        var t = $("#tempo").val()
        if(a < 0 || t < 0){
            $("#alertaV1").text(errorCalc)
            $("#magni").val("")
            $("#alertaV1").show()
            return
        }
        var result = calcRichter(a, t)
        var index;
        if(result <= 3.5)
            index = 1;
        else if(result <= 5.4)
            index = 2;
        else if(result <= 6.0)
            index = 3;
        else if(result <= 6.9)
            index = 4;
        else if(result <= 7.9)
            index = 5;
        else 
            index = 6;
        $("#alertaV1").text(escala[0] + result + ". " + escala[index])
        $("#alertaV1").show()
        $("#magni").val(result)

    })

    var calcRichter = function(a, t){
        var p1 = Math.log10(a)
        var p2 = Math.log10(8*t)
        return (p1 + (3*p2) -2.92).toFixed(2)
    }
})