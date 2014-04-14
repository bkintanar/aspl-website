$(function() {
    $('table th input:checkbox').on('click' , function(){
        var that = this;
        $(this).closest('table').find('tr > td:first-child input:checkbox')
        .each(function(){
            this.checked = that.checked;
            $(this).closest('tr').toggleClass('selected');
        });
    });
});

$('.btn-mini').click(function(){
    
    switch($(this).attr('rel')) {

        case 'edit':
            break;
        case 'activate':
            deactivateToggle($(this).parent().attr('id'), $(this), 'activate');
            break;
        case 'deactivate':
            deactivateToggle($(this).parent().attr('id'), $(this), 'deactivate');
            break;
    }
});

function deactivateToggle(dataId, btn, action) {
    $.ajax({
    type: "POST",
    url: '/a/courses/deactivate-toggle',
    data: { id: dataId }
    }).done(function( msg ) {
        if (action == 'deactivate') {
            btn.removeClass('btn-danger').addClass('btn-success').attr('rel', 'activate').find('i.bigger-120').removeClass('icon-trash').addClass('icon-ok');
            $('#status_'+dataId).removeClass('label-success').addClass('label-warning').html('inactive');
        }
        else {
            btn.removeClass('btn-success').addClass('btn-danger').attr('rel', 'deactivate').find('i.bigger-120').removeClass('icon-ok').addClass('icon-trash');
            $('#status_'+dataId).removeClass('label-warning').addClass('label-success').html('active');
        }
    });
}