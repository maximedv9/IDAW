# Projet iMM : iMangerMieux - UV IDAW

Bienvenue sur la page Git dédiée au projet iMM de l'UV IDAW (P6) du groupe composé de Maxime DE VEYRAC et Hugo LIM, tous les deux en FISE 2023.

## Accueil

Page d'accueil avec un graphique réalisé avec amCharts ainsi que l'historique des repas pris et les nutriments apportés.

## Profil

On affiche simplement ici le profil de l'utilisateur. Nous avons un problème JSON sur cette page ne nous permettant pas d'afficher le profil comme souhaité.

## Statistiques

Page ayant pour but d'afficher les repas pris, leur quantité et leur date sous la forme d'une liste.

## Aliments

Sur cette page, apparaît la liste complète des aliments de la base de données fournie à laquelle on a appliqué le plug-in Datatable permettant d'afficher la table des aliments avec l'option de recherche intuitive et la pagination. 
L'option "Ajouter" permet normalement d'ajouter un repas dans la base de données en remplissant un formulaire HTML renseignant la quantité et la date. Malgré que la requête AJAX fonctionne correctement comme indiqué sur la console, nous essayons de réaliser une requête SQL dans une autre et il s'avère que dans le libellé de l'aliment récupéré, seuls les 3 premiers caractères sont conservés, le reste étant tronqué sans aucune raison.
Finalement, le repas ajouté n'apparaît pas dans la base de données (table 'consommer') et nous n'avons toujours pas réussi à résoudre le problème à l'heure actuelle.

