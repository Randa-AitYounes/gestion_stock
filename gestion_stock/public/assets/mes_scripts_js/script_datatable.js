$(document).ready(function() {

    var getS = $('#multi-colum-dt').DataTable({
        columnDefs: [{
                targets: [0],
                checkboxes: {
                    selectRow: true
                },
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },

                orderData: false
            }, {
                targets: [1],
                orderData: [1, 0]
            }, {
                targets: [4],
                orderData: [4, 0]
            },




        ]

    });
    $('#multi-colum-dt tbody').on('click', 'tr', function() {
        $(this).toggleClass('selected');
        var length = getS.rows('.selected').data().length;
        var variable = "Ajouter les frais d\'approche";
        var variable2 = "Modifier les frais d'approche";
        var variable3 = "Ajouter des produits à la facture";
        var variable4 = "Ajouter de nouveaux produits à la facture";
        if (length > 1) {

            $("select option:contains(" + variable + ")").attr("disabled", true);
            $("select option:contains(" + variable2 + ")").attr("disabled", true);
            $("select option:contains(" + variable3 + ")").attr("disabled", true);
            $("select option:contains(" + variable4 + ")").attr("disabled", true);
            $("select option:contains('Modifier la facture')").attr("disabled", true);
        } else {
            $("select option:contains(" + variable + ")").attr("disabled", false);
            $("select option:contains(" + variable2 + ")").attr("disabled", false);
            $("select option:contains('Modifier la facture')").attr("disabled", false);

        }
    });

});
