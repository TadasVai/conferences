require('./bootstrap');

$(function(){
    $(document).on('click', '#logout-bnt', function (e){
        e.preventDefault();
        $('#logout-form').trigger('submit');
    });
});
