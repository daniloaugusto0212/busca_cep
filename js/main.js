function copyAddress(clicado, copiado) {
    $(clicado).click(function () {
        $(copiado).select()
        document.execCommand('copy')
        $('.copied').slideToggle();
        setTimeout(function(){
            $('.copied').fadeOut();
        },3000)
        return false
        //alert('Copiado para a área de transferência.')
    })
}

copyAddress('#copyRua', '#logradouro')
copyAddress('#copyBairro', '#bairro')
copyAddress('#copyLocalidade', '#localidade')
copyAddress('#copyUf', '#uf')
