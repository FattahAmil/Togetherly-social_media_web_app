
function addLike(id_post, like_type) {
    $.ajax({
        type: 'GET',
        url: './action/addlike.php',
        data: {
            id_post: id_post,
            like_type: like_type
        },
        success: function(data) {
            // Update the number of likes
            $('.number').text(data.num_likes);

            // Update the selected reaction
            $('.post-react a').removeClass('active');
            if (data.like_type) {
                $('.react-list a[data-type="' + data.like_type + '"]').addClass('active');
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}
s