const $tituloPagina = document.querySelector("#titulo");
// 1. Retorna apenas o primeiro elemento que corresponde aos seletores especificados.
$tituloPagina.textContent = "ETEC Professor Basilides de Godoy";
// 3. A propriedade textContent define ou retorna o conteúdo de texto.
const $registroAluno = document.querySelectorAll(".aluno");

$registroAluno.forEach($registro => {
    const $nota = $registro.querySelectorAll('.td-n');
    let $result = 0;
    $nota.forEach(nota =>  $result += parseFloat(nota.textContent)  );    

    const $mediaFinal = ($result / $nota.length).toFixed(2);
    const $media = $registro.querySelector(".td-media");
    $media.textContent = $mediaFinal;
    $media.style.color = ($mediaFinal >= 6) ? "blue" : "red";
    $media.style.fontWeight = "bold";
    const $situacao = $registro.querySelector('.td-situacao');
    $situacao.textContent = mostrarSituacao($mediaFinal,0);
    $situacao.classList.add(mostrarSituacao($mediaFinal,1));
})
function mostrarSituacao(x,index){
    const $resultado = ["Situação","estilo"];
    $resultado[0] = (x < 6) ? "Reprovado" : "Aprovado";
    $resultado[1] = (x < 6) ? "reprovado" : "aprovado";
    return $resultado[index];
}
/*
const dasda = x => ({
    estado: x < 6 ? "Reprovado" : "Aprovado",
    estilo: x < 6 ? "reprovado" : "aprovado"
})
// const um = [0, 1, 2, 3].reduce((accumulator, currentValue) =>  accumulator + currentValue, 0);
//   // sum is 6
//   console.log(sum);
*/