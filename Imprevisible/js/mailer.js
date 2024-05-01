// Import the Nodemailer library
const nodemailer = require("nodemailer");

// Create a transporter using SMTP transport
const transporter = nodemailer.createTransport({
  service: "Gmail",
  auth: {
    user: "abdoul.baabdoul@gmail.com",
    pass: "CristianoRonaldo",
    host: "smtp.gmail.com",
    port: 587,
    secure: false, // use SSL
  },
});

// Email data
const mailOptions = {
  from: "",
  to: "abdoul.baabdoul@gmail.com",
  subject: "Node.js Email Tutorial",
  text: "This is a basic email sent from Node.js using Nodemailer.",
};

// Send the email
transporter.sendMail(mailOptions, (error, info) => {
  if (error) {
    console.error("Erreur lors de l'envoi du mail 😣:", error);
  } else {
    console.log("Email envoyé avec succès 😁 !!!!!!!!!!!!!!! :", info.response);
  }
});
