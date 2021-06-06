$(document).ready(function () {
    $('.js--table-products').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
        }
    });

    $('.js--delete-produto').on('click', function () {
        let nome_produto = $(this).data('nome-produto');
        let id_produto = $(this).data('id-produto');
        $('.js--modal-nome-produto').text(nome_produto);
        $('.js--button-delete-produto').data('id-produto', id_produto);
        $('#modalDeleteProduto').modal('toggle');
    });

    $('.js--button-delete-produto').on('click', function(){
       let id_produto = $(this).data('id-produto');

        $.ajax({
            method: "POST",
            url: "/produtos/delete/"+id_produto
        })
            .done(function( msg ) {
                $('#modalDeleteProduto .js--modal-alert').html('<div class="alert alert-success" role="alert">\n' +
                    '                    Produto exclúido com sucesso' +
                    '                </div>');
                setTimeout(function(){
                    $('#modalDeleteProduto').modal('toggle');
                    location.reload();
                }, 1000);
            });
    });

    $('#modalDeleteProduto').on('hidden.bs.modal', function(){
        $('#modalDeleteProduto .js--modal-alert').html('');
    })
});