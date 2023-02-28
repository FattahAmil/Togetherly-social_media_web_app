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
      
          console.log(datacomment1.num_comments);
          $("#content-of-comment-"+id_post).val("");
          $("#number-comment"+id_post).text(datacomment1.num_comments);
       
         
       
      },
      error: function(xhr, status, error) {
          console.log(xhr.responseText);
      }
  });
}
  