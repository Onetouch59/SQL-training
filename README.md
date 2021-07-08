# SQL EXERCICES

## Configuration de l'environnement de travail

1. Clonez ce *repository*. 
2. En local, dans phpMyAdmin, créez une base de données intitulée « db_mockdata », choisissez comme interclassement « utf8_general_ci » ;
3. Importez le fichier « mock_data.csv » présent sur ce *repository*. Dans les options d'importation, choisissez « utf8 » comme jeu de caractères du fichier, définissez comme nom pour la nouvelle table « table_mockdata » et cochez la *checkbox* « *The first line of the file contains the table column names* » (la première ligne du fichier contient le nom des colonnes de la table) ;
4. Exécutez l'import ;
5. Cliquez sur la table, puis sur « Parcourir » pour vérifier les données présentes dans la table : si la première ligne a bien donné son nom aux colones, il est possible qu'elle se soit aussi importée comme une ligne dans la table... on va donc la supprimer. En SQL !
6. Dans l'onglet « SQL », tapez « `DELETE FROM table_mockdata WHERE id LIKE 'id'` puis Excecutez la requête. Confirmez.
7. Dans l'onglet « Structure », modifiez le champs « id » : type *int*, *Not Null*, *Auto-increment* : `« ALTER TABLE table_mockdata CHANGE id id INT(4) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (id);` »

> « *mock data* » se traduit en  français par « données fictives » : les données contenue dans cette base de donnée ne sont évidemment pas réelles !
## Défis

Écrivez la requête SQL pour  :

> Pour réussi cet exercice, utiliser l'excellent site [sql.sh](https://sql.sh/) !

1. Afficher tous les gens dont le nom est Palmer ;
2. Afficher toutes les femmes ;
3. Afficher tous les états dont la lettre commence par N ;
4. Afficher tous les emails qui contiennent google ;
5. Afficher la répartition par Etat et le nombre d'enregistrement par état (croissant) ;
6. Insérer un nouvel utilisateur ;
7. Mettre à jour l'adresse mail du nouvel utilisateur ;
8. Supprimer le nouvel utilisateur ;
9. Afficher le nombre de femmes et d'hommes ;
10. Afficher l'âge de chaque personne ;
11. Afficher la moyenne d'âge des femmes et la moyenne d'âge des hommes ;
11. Créer deux nouvelles tables : une qui contient l'ensemble des membres de l'ACS, l'autre qui contient les département de naissance de chacun, avec numéros et nom écrit ;
12. Afficher le nom de chaque apprenant avec son département de naissance.
# SQL-training
