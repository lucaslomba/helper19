$('#comercio').submit(function(e) {
    e.preventDefault();
      Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = empresaDelivery(formulario);
});

function empresaDelivery(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "../backend/empresadeliveryform.php",
        assync: false
    }).then(sucesso, falha);

    function sucesso(data) {
        $sucesso = $.parseJSON(data)["sucesso"];
        $menssagem = $.parseJSON(data)["menssagem"];
        $('#menssagem').show("slow");
        if ($sucesso) {
          
            Swal.fire(
                'Sua empresa foi cadastrada com sucesso!',
                'Sua empresa já está aparecendo para os clientes.',
                'success'
              ).then(function () {
                window.location = "empresas.php"
            });
            
                
        } else {
            Swal.fire({
                title: 'Falha ao cadastrar sua empresa!',
                text: 'Verifique os campos e tente novamente.',
                icon: 'error',
                confirmButtonText: 'Voltar'
              })
        }
    }
    function falha() {
        console.log("erro");
    }

   
}