const ModalProposta = {

    open() {

        //abrir o modal ao clicar em adicionar
        //adicionar classe ligado ao nosso modal
        document.querySelector('.modal').classList.add('ligado')
    },
    close() {

        //fechar o modal
        //precisamos remover a classe ligado

        document.querySelector('.modal').classList.remove('ligado')
    }

}




