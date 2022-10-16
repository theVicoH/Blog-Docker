# Victor Huang

Bonjour Monsieur,

Je voudrais m'excuser pour ce rendu car je n'ai pas pu finir votre devoir. La raison est que j'ai dû assister durant ce week-end à l'évènement du Figaro à l'espace champeret pour vendre Hétic aux lycéeens. Bien sûr cela n'excuse en rien le travail non-fini que je vous rends aujourd'hui.

Tout de même je voudrais vous donner mon roadmap pour si j'avais eu un peu plus de temps et si il me restait encore un peu d'énergie.

## Post

- Concernant les posts, j'aurai sélectionner le nom, le prénom, ainsi que le contenu grace à la joiture entre la table users et articles.
- Puis pour chaque éléments sélectionnés je fais un echo json encode.
- Côté Js, je récupère par méthode AJAX les json qui ont été envoyé par php.
- Et grâce à un set_intervall, je vide toute la div correspondante aux posts puis je fais un nouveau fetch vers php pour récupérer la modification de la data base.
- Pour la partie HTML, j'aurai sélectionné les articles en random et réalisé un foreach pour qu'ils puissent être affichés.

## Admin

- Pour les admins, j'ajouterai un insert avec la colonne admin en true, du coup si la db n'a pas été créé, on l'a créé et on ajoute un admin.
- Sur la homepage, je vais ajouté un boutton delete pour chaque post que si $_SESSION['admin']==true.
- Et si le boutton delete est appuyé, je ferai une requete sql delete qui va me supprimer le posts correspondant.

## Websocket

Je sais que pour ce genre de site, on priviligie l'utilisation de WebSocket, mais mon niveau actuel en php ne me le permet pas.

# Facebook 2

Sachez que l'année dernière, j'ai réalisé un projet similaire qui consistait à refaire facebook, voici le lien https://github.com/tralalavico/Projet-FB où je me suis principalement occupé de tout ce qui est messagerie instantané. Donc si vous voulez savoir plus concrètement comment j'aurai réalisé les posts ce sera sur ce projet là.