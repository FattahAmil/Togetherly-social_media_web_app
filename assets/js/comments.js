function addcomments(id_post, content) {
  $.ajax({
      type: 'GET',
      url: './action/addcomment.php',
      data: {
          id_post: id_post,
          content: content.value
      },
      success: function(datacomment) {
        datacomment1=JSON.parse(datacomment);
        // Update the number of likes  
      
          // console.log(datacomment1.num_comments);
          $("#content-of-comment-"+id_post).val("");
          $("#number-comment"+id_post).text(datacomment1.num_comments);

          
          //ajoute le comentaire  
          $("#post-comment-list-"+id_post).append('<div class="comment-list"><div class="comment-image"><a href="my-profile.php"><img src="'+datacomment1.userInfo["imgprfl_user"]+'" class="rounded-circle" alt="image" width="60"></a></div><div class="comment-info"><h3><a href="my-profile.php">'+datacomment1.userInfo["prenom_user"]+' '+datacomment1.userInfo["nom_user"]+'</a></h3><span>'+datacomment1.createdAt+'</span><p>'+datacomment1.bodyComent+'</p><ul class="comment-react"><li><a href="#" class="like">Like(2)</a></li></ul></div></div>');
       
         
       
      },
      error: function(xhr, status, error) {
          console.log(xhr.responseText);
      }
  });
}
  