// const ModalProposta = {
//   open() {
//     //abrir o modal ao clicar em adicionar
//     //adicionar classe ligado ao nosso modal
//   },
//   close() {
//     //fechar o modal
//     //precisamos remover a classe ligado

//     document.querySelector(".modal").classList.remove("ligado");
//   },
// };

$(document).ready(function () {
  $(".modal").hide();

  $("#buy").click(function () {
    document.querySelector(".modal").classList.add("ligado");
    $(".modal").show();
  });

  $("#close").click(function () {
    document.querySelector(".modal").classList.remove("ligado");
    $(".modal").hide();
  });
});


	
