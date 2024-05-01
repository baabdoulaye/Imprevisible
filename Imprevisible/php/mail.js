// function sendMail() {
//   var params = {
//     from_name: document.getElementById("prenom").value,
//     email_id: document.getElementById("email").value,
//     message: document.getElementById("message").value,
//   };
//   emailjs
//     .send("service_nhn0dux", "template_kvrupa6", params)
//     .then(function (res) {
//       alert("Message envoyé !" + res.status);
//     });
// }

function sendMail() {
  var params = {
    from_name: document.getElementById("prenom").value,
    email_id: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };

  // Au lieu d'envoyer directement à EmailJS, on empêche la soumission par défaut du formulaire
  // event.preventDefault();

  fetch("send_mail.php", {
    method: "POST",
    body: JSON.stringify(params),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert("Message envoyé !");
      } else {
        alert(
          "Une erreur est survenue lors de l'envoi du message: " + data.error
        );
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Une erreur est survenue. Veuillez réessayer plus tard.");
    });
}
