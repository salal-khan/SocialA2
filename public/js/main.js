/**
 * Created by salal on 10/17/2016.
 */
var statustId = 0;
var statusBodyElement = null;

$('.dropdown-menu').find('#editpost').on('click', function (event) {
    event.preventDefault();

    statusBodyElement = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.childNodes[3].childNodes[1].childNodes[1].childNodes[1];
    var bodytext = statusBodyElement.textContent;
    statustId = event.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.dataset['statusid'];
    console.log(statustId);
    $('#post-body').val(bodytext);
    $('#edit-modal').modal();
});


$('#modal-save').on('click', function () {
    $.ajax({
        method: 'POST',
        url: urlEdit,
        data: {body: $('#post-body').val(), statustId: statustId, _token: token}
    })
        .done(function (msg) {
            $(statusBodyElement).text(msg['new_status_body']);
            $('#edit-modal').modal('hide');
        });
});

$('.like').on('click', function (event) {
    event.preventDefault();
    var liked = event.target.previousElementSibling == null;
    statustId = event.target.parentNode.parentNode.dataset['statusid'];
    likeCount = event.target.parentNode.parentNode.parentNode.childNodes[3];
    var likethumbs = event.target.parentNode.childNodes[1];
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: liked, statusId: statustId, _token: token}
    }).done(function (msg) {
        event.target.innerText = liked ? event.target.innerText == 'Like' ? 'Liked' : 'Like' :
                                         event.target.innerText == 'Liked' ? 'Like' : 'Liked';

        var condition =event.target.innerText;
        if(condition.localeCompare('Like')){
           $(event.target).addClass('text-primary');
            $(likethumbs).addClass('text-primary');
            $(event.target).removeClass('text-muted');
            $(likethumbs).removeClass('text-muted');

        }
        else{
            $(event.target).removeClass('text-primary');
            $(likethumbs).removeClass('text-primary');
            $(event.target).addClass('text-muted');
            $(likethumbs).addClass('text-muted');
        }
        likeCount.innerText=msg['statusLikeCount'];
        console.log(msg['statusLikeCount']);
    });

});

$('.status_privecy_btn').click('click', function (event) {
    event.preventDefault();
document.getElementById('status_privecy_btn').innerText =event.target.childNodes[3].textContent;

    console.log(event.target.childNodes[3].textContent);
});