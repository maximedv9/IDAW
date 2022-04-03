# Projet iMM : iMangerMieux - UV IDAW

Bienvenue sur la page Git dédiée au projet iMM de l'UV IDAW (P6) du groupe composé de Maxime DE VEYRAC et Hugo LIM, tous les deux en FISE 2023.

Le projet doit être placé dans un dossier IMM lui même contenu dans un dossier IDAW (pour que les liens restent les mêmes)

## Début

Pour commencer, rendez-vous à l'adresse "http://localhost/IDAW/IMM/frontend/inscription.php", et inscrivez votre profil. Celui-ci sera ajouté à la bdd. Vous serez en suite redirigé vers une page 'login.php', où vous devrez rentrer votre adresse mail de compte et votre mot de passe. Si ils sont correct, vous serez redirigez vers une page 'connected.php' où vous n'aurez plus qu'à cliquer sur le lien 'Cliquez ici pour aller à l'acceuil' qui vous redirigera vers la page d'acceuil, avec vos informations de connection stoquées dans une session. Néanmoins, les informations affichées sur l'applications seront toujours celles du comte 'hugo.lim@etu.imt-lille-douai.fr' (mot de passe: laisser une chaine vide) à cause de difficultés rencontrées dans la gestion de multiples comptes.

## Accueil

Page d'accueil avec un graphique réalisé avec amCharts ainsi que l'historique des repas pris et les nutriments apportés. Nous avons du inscrire les données du graphique en dur à cause d'un problème: En essayant de récupérer les données de la base de donnée grâce au tableau des nutriments affiché juste en dessous du graphique (les données du tableau sont celles que l'on utilise pour le graphique, et le tableau est bien chargé par une requête ajax à nutriments.php qui envoie des données de la bdd) à l'aide de getElementById, nous nous somme rendu compte que le HTML du tableau chargeait après le graphe, et que nous ne pouvions donc pas récupérer ses données pour le graphe. Nous n'avons pas réussi à résoudre ce problème.

## Profil

On affiche simplement ici le profil de l'utilisateur. Nous avons un problème JSON sur cette page ne nous permettant pas d'afficher le profil comme souhaité.

## Statistiques

Page ayant pour but d'afficher les repas pris, leur quantité et leur date sous la forme d'une liste.

## Aliments

Sur cette page, apparaît la liste complète des aliments de la base de données fournie à laquelle on a appliqué le plug-in Datatable permettant d'afficher la table des aliments avec l'option de recherche intuitive et la pagination.
L'option "Ajouter" permet normalement d'ajouter un repas dans la base de données en remplissant un formulaire HTML renseignant la quantité et la date. Malgré que la requête AJAX fonctionne correctement comme indiqué sur la console, nous essayons de réaliser une requête SQL dans une autre et il s'avère que dans le libellé de l'aliment récupéré, seuls les 3 premiers caractères sont conservés, le reste étant tronqué sans aucune raison.
Finalement, le repas ajouté n'apparaît pas dans la base de données (table 'consommer') et nous n'avons toujours pas réussi à résoudre le problème à l'heure actuelle.
