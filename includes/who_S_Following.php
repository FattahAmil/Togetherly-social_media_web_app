
<?php
if ($id==false) {
    header("location:login.php");
}

$reqFollow1 = $conn->query('SELECT * FROM users where not id_user='.$_SESSION['id_session'].' AND id_user NOT IN (SELECT id_following FROM follow WHERE id_follower = '.$_SESSION['id_session'].')');

/*
$reqFollow1->execute(array($_SESSION['id_session'],$donner1['id_users']));
$reqFollow1=$reqFollow1->rowCount();
$reqFollow2 = $conn->prepare('SELECT * FROM users inner join follow on id_users=id_follower where id_follower= ? and id_following = ?');*/

?>

<script>
    function removeMe(element) {
            var id = element.getAttribute("id");
            // alert(element.getAttribute("id"));
            $('#' + id).parent().remove();
        }
   // addhision son reloade la page en utilisant AJAX
function supprimerClient(followedid) {
  $.ajax({
    type: "GET",
    url: "./action/follow.php",
    data: { followedid: followedid },
    success: function(response) {
        
        
      // effectuer une autre action
    },
    error: function() {
      alert("Erreur lors de la adhission du user");
    }
  });
}
</script>
<div class="widget widget-who-following">
                                <h3 class="widget-title">Who's Following</h3>
                                <?php
                               
                                
                                 while ($donner1 =$reqFollow1->fetch()) {
                                    
                                    ?>
                                <div class="following-item d-flex justify-content-between align-items-center" >
                                    <a href="#"><img src="assets/images/user/user-42.jpg" class="rounded-circle" alt="image"></a>
                                    <span class="name"><a href="#"><?php echo $donner1['nom_user']." ".$donner1['prenom_user'];?></a></span>
                                    <span class="add-friend" id="user-<?php echo $donner1['nom_user'];?>" onclick="removeMe(this)"><a style="cursor: pointer;" OnClick=" return supprimerClient(<?php echo $donner1['id_user']; ?>);">Add</a></span>

                                </div>
                                <?php }?>
                                
                            </div>

            
    
    <?php
   
    
  
    
   

    /*<script>
        function removeMe(element) {
            var id = element.getAttribute("id");
            // alert(element.getAttribute("id"));
            $('#' + id).parent().remove();
        }
    </script>*/ 
    ?>


