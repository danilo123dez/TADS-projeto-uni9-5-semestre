$(document).ready(function () {
    $('.js--table-orders').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
        }
    });

    $('.js--info-pedido').on("click", function () {
        let id_pedido = $(this).data('id-pedido');
        let button = $(this);

        if (button.hasClass('js--openned-info')) {
            $('.js--info-pedidos-'+id_pedido).remove();
            button.removeClass('js--openned-info')
        } else {

            $.ajax({
                method: "POST",
                url: "/pedido/find/" + id_pedido
            })
                .done(function (data) {
                    data = $.parseJSON(data);
                    let tr = button.parent().parent();
                    let html = '<tr style="background: #dadadaee;" class="js--info-pedidos-'+id_pedido+'"> ' +
                        '<td colspan="2">Nome</td>' +
                        '<td>Quantidade</td>' +
                        '<td>Valor</td>' +
                        '</tr>'
                    ;
                    $.each(data.data, function (index, value) {
                        html += '<tr class="js--info-pedidos-'+id_pedido+'">';
                        html += '<td colspan="2">' + value.Nome + '</td>';
                        html += '<td>' + value.Quantidade + '</td>';
                        html += '<td>R$ ' + formatarMoeda(value.Valor) + '</td>';
                        html += '</tr>';
                    });
                    console.log(tr)
                    tr.after(html);
                    button.addClass('js--openned-info')
                });
        }
    });

    $('.js--confirm-pedido').on('click', function () {
        let id_pedido = $(this).data('id-pedido');
        $.ajax({
            method: "POST",
            url: "/pedido/confirm/" + id_pedido
        })
            .done(function (data) {
                data = $.parseJSON(data);
                if(data.error === 0){
                    $('.card-body').prepend("<div class=\"alert alert-success\" role=\"alert\">\n" +
                        "                    Pedido marcado como entregue!" +
                        "                </div>");
                    setTimeout(function(){
                        location.reload();
                    }, 1000);
                }
            });
    });
});

function formatarMoeda(valor) {
    valor = valor + '';
    valor = parseInt(valor.replace(/[\D]+/g, ''));
    valor = valor + '';
    valor = valor.replace(/([0-9]{2})$/g, ",$1");

    if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
    }

    return valor;
}
