-- tintin2021
-- (pays, album, personnage, juron, pays_album, pers_album, juron_album)

<<<<<<< HEAD
-- remarque : pays visité = pays concernés par un album dans lequel apparait le personnage

=======
>>>>>>> 91b548550cbc02c0a108df4e16babfb219a81f33
-- -----------------------------------------------------------------------------
-- 01.pour chaque personnage -> tous les pays visités :
--    nom, prénom, sexe, pays (nom du pays)  
--    classés par ordre alphabétique sur personnage et pays
-- -----------------------------------------------------------------------------
<<<<<<< HEAD

=======
SELECT nomPers AS Nom, prenomPers AS Prenom, sexePers AS Sexe, nomPays
FROM personnage
    LEFT JOIN pers_album ON personnage.idPers = pers_album.idPers
    LEFT JOIN album ON album.idAlb = pers_album.idAlb
    LEFT JOIN pays_album ON album.idAlb = pays_album.idAlb
    LEFT JOIN pays ON pays_album.idPays = pays.idPays
ORDER BY Nom ASC, Prenom ASC, nomPays ASC
>>>>>>> 91b548550cbc02c0a108df4e16babfb219a81f33
-- -----------------------------------------------------------------------------
-- 02.pour chaque personnage méchant -> tous les pays visités :
--    nom, prénom, sexe, pays (nom du pays)  
--    classés par ordre alphabétique sur personnage et pays
-- -----------------------------------------------------------------------------
<<<<<<< HEAD

=======
SELECT nomPers AS Nom, prenomPers AS Prenom, sexePers AS Sexe, nomPays AS Pays
FROM personnage
    LEFT JOIN pers_album ON personnage.idPers = pers_album.idPers
    LEFT JOIN album ON album.idAlb = pers_album.idAlb
    LEFT JOIN pays_album ON album.idAlb = pays_album.idAlb
    LEFT JOIN pays ON pays_album.idPays = pays.idPays
WHERE gentilPers = 0
ORDER BY Nom ASC, Prenom ASC, Pays ASC
>>>>>>> 91b548550cbc02c0a108df4e16babfb219a81f33
-- -----------------------------------------------------------------------------
-- 03.pour chaque personnage -> nombre de pays visités :
--    nom, prénom, sexe, nombre de pays
--    classés par nombre de pays visités (en ordre décroissant)
-- -----------------------------------------------------------------------------
<<<<<<< HEAD

=======
SELECT nomPers AS Nom, prenomPers AS Prenom, sexePers AS Sexe, count( DISTINCT idPays) AS `Nombre de pays`
FROM personnage
    LEFT JOIN pers_album ON personnage.idPers = pers_album.idPers
    LEFT JOIN album ON album.idAlb = pers_album.idAlb
    LEFT JOIN pays_album ON album.idAlb = pays_album.idAlb
GROUP BY Nom
ORDER BY `Nombre de pays` DESC
>>>>>>> 91b548550cbc02c0a108df4e16babfb219a81f33
-- -----------------------------------------------------------------------------
-- 04.liste des pays dans lesquels on ne trouve aucun personnage féminin :
--    pays (nom du pays)  
--    classés par ordre alphabétique
-- -----------------------------------------------------------------------------
<<<<<<< HEAD

-- -----------------------------------------------------------------------------
=======
SELECT  nomPays, sexePers
FROM pays
    LEFT JOIN pays_album ON pays.idPays = pays_album.idPays
    LEFT JOIN album ON album.idAlb = pays_album.idAlb
    LEFT JOIN pers_album ON album.idAlb = pers_album.idAlb
    LEFT JOIN personnage ON personnage.idPers = pers_album.idPers
WHERE sexePers != "F"
ORDER BY nomPays ASC

-------------------------------------
>>>>>>> 91b548550cbc02c0a108df4e16babfb219a81f33
-- 05.liste des album dans lesquels on ne trouve aucun personnage féminin :
--    id, nom de l'album, année
--    classés par id
-- -----------------------------------------------------------------------------
<<<<<<< HEAD

=======
SELECT idAlb, titreAlb, dateAlb
FROM album
    LEFT JOIN pers_album ON album.idAlb = pers_album.idAlb
    LEFT Join
>>>>>>> 91b548550cbc02c0a108df4e16babfb219a81f33
-- -----------------------------------------------------------------------------
-- 06.premier album dans lequel apparait un personnage féminin :
--    id, nom de l'album, année
--    remarque: les id sont dans l'ordre de création des album
-- -----------------------------------------------------------------------------

-- -----------------------------------------------------------------------------
-- 07.dans quel album rencontre-t-on le plus de personnages grossiers ?
--    id, nom de l'album, année
-- -----------------------------------------------------------------------------

-- -----------------------------------------------------------------------------
-- 08.personnage féminin le plus grossier
--         (qui pronnonce le plus souvent des jurons):
--    nom, prénom
-- -----------------------------------------------------------------------------

-- -----------------------------------------------------------------------------
-- 09.personnage féminin qui connait le plus de jurons :
--    nom, prénom
-- -----------------------------------------------------------------------------

-- -----------------------------------------------------------------------------
-- 10.noms de personnage qui apparaissent plus d'une fois :
--    ex: ALCAZAR (le général et sa femme)
--    nom, nb de personnage
-- -----------------------------------------------------------------------------


