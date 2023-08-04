import './bootstrap'

$('#example').DataTable({
    ajax: '/customer/draw',
    processing: true,
    serverSide: true,
    info: true,
    ordering: true,
    paging: true

});