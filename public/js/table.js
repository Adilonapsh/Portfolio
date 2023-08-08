function getbasicdynamictable(url,tableid,tablename,rowgroup){
    var columns = [];
    $.get(url, function (data) {
        if($(data.data).length > 0) {
            columnNames = Object.keys(data.data[0]);
            for (var i in columnNames) {
                if (columnNames[i] == 'updated_at') {
                    columns.push({
                        name: columnNames[i],
                        data: columnNames[i],
                        title: 'Terakhir di update',
                    });
                } else if (columnNames[i] == 'name') {
                    columns.push({
                        name: columnNames[i],
                        data: columnNames[i],
                        title: 'Nama',
                    });
                }else {
                    columns.push({
                        name: columnNames[i],
                        data: columnNames[i],
                        title: columnNames[i].split('_').join(' '),
                    });
                }
            }
        }
        $.get(url, function(data){
            if($(data.data).length > 0) {
                var table = $('#'+tableid).DataTable({
                    // dom: 'bfrtip',
                    dom: 'tipr',
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    select: true,
                    ajax: url,
                    columns: columns,
                    columnDefs: [{
                            width: '1%',
                            targets: 0,
                            className: 'text-center'
                        },
                        {
                            className: 'all',
                            targets: -1
                        }
                    ],
                    rowGroup: (tableid == 'datatable-ajax') ? {dataSrc: rowgroup} : '',
                    lengthMenu: [ [15, 25, 50 ,100, -1], [15, 25, 50, 100, "Semua"] ],
                    fixedColumns: {
                        left: 0,
                        right: 1
                    },
                });

                table.draw();
                table.ajax.reload();

                // ROWGROUP
                table.on('rowgroup-datasrc', function ( e, dt, val ) {
                    var index = table.column(val+':name').index();
                    table.order.fixed({ pre: [[index, 'asc']] }).draw();
                } );


                $('#select-rowgroup-user').change(function (e) {
                    e.preventDefault();
                    if (this.value == 'Pilih Semua') {
                        table.column(6).search('').draw();
                    } else {
                        // table.rowGroup().disable();
                        table.order([ JSON.parse(this.value), 'asc' ]).draw();
                    }
                });

                // EXPORTS
                var buttons = new $.fn.dataTable.Buttons(table, {
                    dom: {
                        button: {
                            className: 'btn btn-accent px-3'
                        }
                    },
                    buttons: [
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fa-solid fa-file-excel" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export Excel"></i>',
                            title: 'Rekapitulasi Data ' + tablename,
                            exportOptions: {
                                columns: exports,
                            },
                            customize: function (doc){
                            },
                            action: serverSideExport
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fa-solid fa-file-pdf" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Export PDF"></i>',
                            title: 'Rekapitulasi Data ' + tablename,
                            orientation: 'landscape',
                            pageSize: 'A2',
                            customize: function (doc) {
                            },
                            exportOptions: {
                                columns: exports,
                            },
                            action: serverSideExport
                        },
                    ]
                }).container().appendTo($('#export-btn'));

                function serverSideExport(e, dt, button, config) {
                    var self = this;
                    var oldStart = dt.settings()[0]._iDisplayStart;
                    dt.one('preXhr', function (e, s, data) {
                        data.start = 0;
                        data.length = 2147483647;
                        dt.one('preDraw', function (e, settings) {
                            if (button[0].className.indexOf('buttons-excel') >= 0) {
                                $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                                    $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                                    $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                            } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                                $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                                    $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                                    $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                            }
                            dt.one('preXhr', function (e, s, data) {
                                settings._iDisplayStart = oldStart;
                                data.start = oldStart;
                            });
                            setTimeout(dt.ajax.reload, 0);
                            return false;
                        });
                    });
                    dt.ajax.reload();
                }

                // REFRESH TABLE
                $('#btn-refresh').click(function (e) {
                    e.preventDefault();
                    table.ajax.reload();
                });
            }
        });
    });
}
