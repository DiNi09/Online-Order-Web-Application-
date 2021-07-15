var datatble;
$(document).ready(function () {
    //alert('working ajax');
    datatble = $('#tablName').DataTable({
        'ajax' : './BackEnd/fetchproduct.php',
        'order':[]
    });

});