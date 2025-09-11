<head>
    <style>
        /* section {
            background: #23272f;
            box-shadow: 0 2px 12px rgba(20, 30, 40, 0.22);
        }

        h1,
        h2,
        h3 {
            color: #6ea8fe;
        }

        a {
            color: #6ea8fe;
        }

        a:hover {
            color: #a4c8ff;
        } */

        .nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-radius: 12px;
            background: #fff;
            padding: 12px 0;
            box-shadow: 0 2px 12px rgba(20, 30, 40, 0.22);
            position: sticky;
            top: 0;
            z-index: 1000;
            margin: 10px;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            font-weight: 400;
            padding: 8px;
            transition: background 0.2s, color 0.2s;
        }

        #contribuer .nav a:hover{
            color: #e0e6ef;
            background: #2d6cdf;
            border-radius: 6px;
        }
        #contribuer.dark .nav a {
            color: #e0e6ef;
        }

        #contribuer.dark .nav a:hover {
            background: #2d6cdf;
            color: #fff;
            border-radius: 6px;
        }

        body.dark .nav {
            background: #23272f;
        }

        #contribuer.dark {
            background: linear-gradient(to right, #6200ee, #3700b3);
        }

        footer {
            background: #232f3e;
            color: #e0e6ef;
        }

        #contribuer h1,
        #contribuer h3 {
            color: #2d6cdf;
            margin-top: 0;
        }

        section {
            background: #fff;
            margin: 32px auto;
            padding: 32px 24px;
            border-radius: 12px;
            max-width: 700px;
            box-shadow: 0 2px 12px rgba(44, 62, 80, 0.07);
        }

        #contribuer.dark section {
            background: #2c3138;
            box-shadow: 0 2px 12px rgba(20, 30, 40, 0.18);
        }

        #contribuer .etape-1 {
            border-left: 6px solid #2d6cdf;
        }

        #contribuer .etape-2 {
            border-left: 6px solid #27ae60;
        }

        .etape-3 {
            border-left: 6px solid #f39c12;
        }

        ol,
        ul {
            margin-left: 24px;
            padding-left: 0;
        }

        ol {
            list-style: decimal inside;
        }

        ul {
            list-style: disc inside;
        }

        li {
            margin-bottom: 8px;
            font-size: 1.05em;
        }




        footer {
            background: #2d6cdf;
            color: #fff;
            text-align: center;
            padding: 32px 10px 24px 10px;
            margin-top: 48px;
            border-radius: 0 0 12px 12px;
        }
    </style>
</head>

<body id="contribuer">

    <div class="nav">
        <a href="?page=home">Accueil</a>
        <a href="#list" onclick="alert('en dev..')">liste des contributeurs</a>
        <a href="#modif" onclick="alert('en dev..')">liste des modifications</a>
        <a href="#todo" onclick="alert('en dev..')">liste des tâches à faire</a>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>

    <section class="etape-1">
        <h1>Comment contribuer</h1>
        <h2>Soumission de modifications</h2>
        <p>Tout d'abord, assurez-vous d'avoir soumis une requete de modifications. par e-mail à l'équipe de
            développement. si pas encore
            <a href="contact.html">cliquez ici</a> une fois vous recevrez le lien du depot github. chaque contribution
            compte
        </p>
    </section>
    <section class="etape-2">
        <h1>Votre part compte</h1>
        <p>sachez que vous contribuer sur plusieurs plans, que ce soit en améliorant la documentation, en corrigeant des
            bugs ou en ajoutant de nouvelles fonctionnalités.</p>
        <ol>
            <ul>
                <li>
                    <h2>contribution</h2>
                </li>
            </ul>

            <li>Amélioration de la documentation</li>
            <li>Correction de bugs</li>
            <li>Ajout de nouvelles fonctionnalités</li>
            <li>Tests et validation</li>
            <li>Maintenance et support</li>
            <li>Création des composants</li>
        </ol>
    </section>
    <section class="etape-3">
        <h1>Etapes à suivre</h1>
        <p>pour contribuer assurer vous de </p>
        <ul>
            <li>Forker le depot</li>
            <li>Cloner le depot</li>
            <li>Créer une nouvelle branche</li>
            <li>Effectuer vos modifications</li>
            <li>Soumettre une demande de tirage</li>
            <li>Attendre la révision</li>
            <li>Apporter des modifications si nécessaire</li>
            <li>Confirmer la fusion</li>
            <li>Supprimer la branche</li>
            <li>Mettre à jour la documentation</li>
            <li>Informer l'équipe de votre contribution</li>
            <li>Suivre l'évolution de votre contribution</li>
            <li>Participer aux discussions</li>
            <li>Respecter les délais</li>
        </ul>

    </section>

    <footer>
        <h2>Merci de votre contribution</h2>
        <p>Nous apprécions chaque effort pour améliorer notre projet. Votre contribution est précieuse et nous aide à
            progresser.
        </p>
    </footer>
</body>

</body>