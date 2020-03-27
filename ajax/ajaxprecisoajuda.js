$('#precisoajuda').submit(function(e) {
    e.preventDefault();
     Swal.fire({
        title: 'Aguarde...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
    let formulario = $(this);
    let retorno = precisaAjuda(formulario);
});

function precisaAjuda(dados) {
    $.ajax({
        type: "POST",
        data: dados.serialize(),
        url: "../backend/precisoajudaform.php",
        assync: false
    }).then(sucesso, falha);

    function sucesso(data) {
        $sucesso = $.parseJSON(data)["sucesso"];
        $menssagem = $.parseJSON(data)["menssagem"];
        $('#menssagem').show("slow");
        if ($sucesso) {
         
            Swal.fire(
                'Você foi cadastrado com sucesso!',
                'Seus dados já estão disponíveis em nosso site.',
                'success'
              ).then(function () {
                window.location = "ajudantes.php"
            });
            
                
        } else {
            Swal.fire({
                title: 'Falha ao cadastrar seus dados!',
                text: 'Verifique os campos e tente novamente.',
                icon: 'error',
                confirmButtonText: 'Voltar'
              }).then(function () {
                window.location = "https://helper19.com.br"
            });
        }
    }
    function falha() {
        console.log("erro");
    }

}