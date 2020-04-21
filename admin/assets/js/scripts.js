// DataTable
var i;
for(i=1;i<=5;i++) {
    var table = $('#streamingTable'+i).DataTable({
        paging: false,
        info: false,
        autoWidth: false
    });
    window.onresize = function() {
        var w = this.innerWidth;
        table.column(4).visible( w > 767);
        table.column(3).visible( w > 767);
        table.column(2).visible( w > 767);
    }
    //trigger upon pageload
    $(window).trigger('resize');
}

// DataTable Search
var addScript = '';
$('.dataTables_filter').append(addScript);
$('.dataTables_filter').addClass('d-flex align-items-center justify-content-between flex-row-reverse mb-3');
$('.dataTables_filter label').addClass('d-flex align-items-center justify-content-end mb-0');
$('.dataTables_filter input').addClass('form-control ml-3');

// myModal Call
// $('.streaming-table tbody tr').click(function () {
//     $('#myModal').modal('show');
// });

// Limit
$('#limit').change(function () {
    if(!$(this).is(':checked')) {
        $('#price').attr('disabled', 'true');
    } else {
        $('#price').removeAttr('disabled');
    }
});

$('.watchlist').slick({
    arrows: false,
    draggable: false,
    dots: true,
    customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return '<a class="dot">' + (i+1) + '</a>';
    }
});

  // $("#demo").dataTable({
  //       paging: true
  //   });