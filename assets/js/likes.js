
function addLike(id_post, like_type) {
    $.ajax({
        type: 'GET',
        url: './action/addlike.php',
        data: {
            id_post: id_post,
            like_type: like_type
        },
        success: function(data) {
            data1=JSON.parse(data);
            // Update the number of likes  
           $("#numberlike-"+id_post).text(data1.num_likes);
           
         
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}