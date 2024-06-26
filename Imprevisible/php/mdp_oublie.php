<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprevisible - Mot de passe oublié</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @keyframes fade-right {
            0% {
                opacity: 0;
                transform: translateY(200px) scale(1);
            }

            100% {
                opacity: 1;
                transform: translateY(0px) scale(1);
            }
        }

        .container {
            width: 80%;
            display: flex;
            background-size: white;
            border-radius: 30px;
            overflow: hidden;
            height: 400px;
            margin: 0 auto;
            border: 2px solid rgb(255, 255, 255);
            margin-top: 30px;
            margin-bottom: 50px;
            animation: fade-right 0.9s;
        }

        .container .left {
            float: left;
            width: 50%;
            background-image: url("/Imprevisible/img/logo\ favicon\ arrondi.png"),
                radial-gradient(purple, rgb(0, 60, 255));
            background-repeat: repeat;
            background-size: 52px, auto;
            opacity: 0.5;
        }

        .container .right {
            float: right;
            width: 50%;
            text-align: center;
            background-color: rgb(255, 255, 255);
            /* height: 400px; */
            box-sizing: border-box;
        }

        .formBox {
            width: 100%;
            /* padding: 80px 40px; */
            /* height: 400px; */
            box-sizing: border-box;
            background: #fff;
        }

        .formBox p {
            /* margin: 0;
      padding: 0; */
            font-weight: bold;
            color: #1a8488;
        }

        .formBox h2 {
            color: #000000;
        }

        .formBox input,
        .formBox h2,
        .formBox textarea {
            margin-bottom: 20px;
        }

        .formBox p {
            margin-bottom: 10px;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        }

        .formBox h2 {
            margin-top: 20px;
            margin-bottom: 40px;
            font-size: 30px;
        }

        .formBox input[type="text"],
        .formBox input[type="radio"],
        .formBox input[type="email"] {
            border: none;
            border-bottom: 1px solid #508687;
            outline: none;
        }

        .formBox input[type="text"]:focus,
        .formBox input[type="radio"]:focus {
            border-bottom: 1px solid #000000;
        }

        #bouton_valider {
            width: 200px;
            height: 40px;
            font-size: 17px;
            font-weight: 600;
            font-size: 12px;
            color: #fff;
            cursor: pointer;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            transition: all 0.4s ease-in-out;
            background-image: linear-gradient(to right, #764ba2, blue);
            box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
        }

        #bouton_valider:hover {
            background-position: 100%;
            transition: all 0.4s ease-in-out;
        }

        textarea {
            width: 50%;
            height: 100%;
            border-radius: 8px;
        }

        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column-reverse;
                width: 90%;
                height: 100%;
                border-radius: 20px;
                margin-top: 0 auto;
            }

            .container .left {
                width: 100%;
            }

            .container .right {
                height: 100%;
                width: 100%;
            }

            .title h2 {
                color: white;
            }
        }

        #mdp_oublie,
        #pas_encore_de_compte {
            color: blue;
            margin-top: 10px;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        }

        #mdp_oublie:hover,
        #pas_encore_de_compte:hover {
            text-decoration: underline;
        }

        #div_questions {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
        </div>
        <div class="right">
            <div class="formBox">
                <form method="post" action="send_email.php">
                    <h2>Mot de passe oublié ?</h2>
                    <div>
                        <p>Entrez votre adresse email</p>
                        <p>Vous recevrez un lien pour modifier votre mot de passe</p>
                        <br>
                        <p style="color: black;">Email</p>
                        <input type="email" required name="email" placeholder="" id="email">
                        <br>
                        <input type="submit" name="insert" id="bouton_valider" value="Valider">
                    </div>
                    <a id="mdp_oublie" href="connexion.php">Votre mot de passe vous est revenu à l'esprit ?</a>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include_once 'footer.php';
?>