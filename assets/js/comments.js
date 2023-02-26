$(document).ready(function() {
    // Soumettre le formulaire de commentaire en utilisant AJAX
    $('#comment-form').submit(function(event) {
      // Empêcher la soumission par défaut du formulaire
      event.preventDefault();
      // Récupérer les données du formulaire
      var formData = $(this).serialize();
      // Envoyer les données du formulaire en utilisant AJAX
      $.ajax({
        type: 'POST',
        url: './action/addcomment.php',
        data: formData,
        success: function(data) {
          // Actualiser la section de commentaires
          $('#comment-section').html(data);
          // Effacer le contenu du formulaire
          $('#comment-form')[0].reset();
        }
      });
    });
  });
  