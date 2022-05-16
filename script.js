let $tituloPagina = document.querySelector("#titulo");
// 1. Retorna apenas o primeiro elemento que corresponde aos seletores especificados.
$tituloPagina.textContent = "ETEC Professor Basilides de Godoy";
// 3. A propriedade textContent define ou retorna o conteúdo de texto.
let $tabela = document.querySelector("#tabela-aluno");
// console.log($tabela);
let $registroAluno = document.querySelectorAll(".aluno");
console.log($registroAluno);

for(let n = 0; n < $registroAluno.length; n++){
    let $registro = $registroAluno[n];
    //let $nome = $contagem.querySelector(".td-nome").textContent;
    let $n1 = nota(".td-n1",$registro);
    let $n2 = nota(".td-n2",$registro);
    let $n3 = nota(".td-n3",$registro);
    //let $mediaFinal = calcularMedia($n1, $n2, $n3);
    let $mediaFinal = ((a+b+c) / 3).toFixed(2);
    let $media = $registro.querySelector(".td-media");
    $media.textContent = $mediaFinal;
    $media.style.color = ($mediaFinal >= 6) ? "blue" : "red";
    $media.style.fontWeight = "bold";
    console.log($media)
}
function nota(nota,registro){
    return parseFloat(registro.querySelector(nota).textContent);
}
/*
function calcularMedia(a,b,c){
    return ((a+b+c) / 3).toFixed(2);
}
*/