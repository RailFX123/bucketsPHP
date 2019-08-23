$(document).ready(function() {
    var table = $('#datatable_example').dataTable({
        "bProcessing": true,
        "bPaginate": true,
        "sPaginationType": "full_numbers",
        "iDisplayLength": 5,
        "ajax": {
            'type': 'POST',
            'url': 'datatable.php',
            'data': {
                ACTIVAR: 'OK'
            },
        },
        'columnDefs': [{
            "targets": 4, // your case first column
            "className": "text-center",
        }],
        "aoColumns": [
            { mData: 'nombre' },
            { mData: 'apellido' },
            { mData: 'TELEFONO' },
            { mData: 'correo' },
            {
                mData: 'curriculum',
                "render": function(data, type, row, meta) {
                    if (type === 'display') {
                        data = '<a class="btn btn-info" href="' + data + '" target="_blank" rel="noopener noreferrer" id="view" name="view"><i class="fa fa-download" aria-hidden="true"></i></a>  <button class="btn btn-info" id="row" name="row" value="' + data + '"><i class="fa fa-eye" aria-hidden="true"></i></button>';
                    }
                    return data;
                }
            }
        ]
    });
    console.log(table);

});

$(document).click(function(e) {
    if (e.target.id == 'row') {
        var contents = document.getElementById('pdfFinal');
        contents.data = e.target.value;
    }
});