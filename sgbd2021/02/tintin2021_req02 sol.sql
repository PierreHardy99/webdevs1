-- tintin2021
-- (pays, album, personnage, juron, pays_album, pers_album, juron_album)

--  pays visités = pays concerné par un album dans lequel apparait un personnage -----------------------------------------------------------------------------
-- 01.pour chaque personnage -> tous les pays visités :
--    nom, prénom, sexe, pays (nom du pays)  
--    classés par ordre alphabétique sur personnage et pays
-- 
SELECT nomPers, prenomPers, sexePers , nomPays 
FROM personnage
    LEFT JOIN pers_album ON personnage.idPers = pers_album.idPers
    LEFT JOIN album ON pers_album.idAlb = album.idalb
    LEFT JOIN pays_album ON album.idAlb = pays_album.idalb
    LEFT JOIN pays ON pays_album.idPays= pays.idPays
ORDER BY nomPers ASC , nomPays ASC
;

-----------------------------------------------------------------------------

-- -----------------------------------------------------------------------------
-- 02.pour chaque personnage méchant -> tous les pays visités :
--    nom, prénom, sexe, pays (nom du pays)  
--    classés par ordre alphabétique sur personnage et pays
-- -----------------------------------------------------------------------------
SELECT nomPers, prenomPers, sexePers , nomPays 
FROM personnage
    LEFT JOIN pers_album ON personnage.idPers = pers_album.idPers
    LEFT JOIN album ON pers_album.idAlb = album.idalb
    LEFT JOIN pays_album ON album.idAlb = pays_album.idalb
    LEFT JOIN pays ON pays_album.idPays= pays.idPays
WHERE gentilPers ="0"
ORDER BY nomPers ASC , nomPays ASC
;
-- -----------------------------------------------------------------------------
-- 03.pour chaque personnage -> nombre de pays visités :
--    nom, prénom, sexe, nombre de pays
--    classés par nombre de pays visités (en ordre décroissant)
-- -----------------------------------------------------------------------------
SELECT personnage.idpers , nomPers, prenomPers, sexePers , COUNT(DISTINCT pays_album.idPays) 
FROM personnage
    LEFT JOIN pers_album ON personnage.idPers = pers_album.idPers
    LEFT JOIN album ON pers_album.idAlb = album.idalb
    LEFT JOIN pays_album ON album.idAlb = pays_album.idalb
GROUP BY personnage.idPers 
ORDER BY  COUNT(DISTINCT pays_album.idPays) DESC
;
-- 96 RESULTATS-----------------------------------------------------------------------------


-- 04.liste des pays dans lesquels on ne trouve aucun personnage féminin :
--    pays (nom du pays)  
--    classés par ordre alphabétique
-- -----------------------------------------------------------------------------
SELECT  pays.idPays , nomPays
FROM pays 
    LEFT JOIN  pays_album ON pays.idPays = pays_album.idpays
    LEFT JOIN album ON pays_album.idalb = album.idalb
    LEFT JOIN pers_album ON album.idAlb = pers_album.idAlb
    LEFT JOIN personnage ON pers_album.idPers = personnage.idPers
GROUP BY pays.idPays
HAVING sum(sexePers="F" ) = 0
;
    

-- 14 RESULTATS-----------------------------------------------------------------------------
-- 05.liste des album dans lesquels on ne trouve aucun personnage féminin :
--    id, nom de l'album, année
--    classés par id
-- -----------------------------------------------------------------------------
SELECT  titreAlb, dateAlb, album.idalb, nomPers,prenomPers
FROM album 
    LEFT JOIN pers_album ON album.idAlb = pers_album.idAlb
    LEFT JOIN personnage ON pers_album.idPers = personnage.idPers
GROUP BY album.idalb
HAVING sum(sexePers="F" ) = 0
;

--- liste des albums avec des personnages feminins
SELECT DISTINCT album.idAlb
FROM album
    LEFT JOIN pers_album ON album.idAlb = pers_album.idAlb
    LEFT JOIN personnage ON pers_album.idPers = personnage.idPers
WHERE sexePers ="F"
;
--11 RESULTATS
-- 
--  Listes des album SANS personnage feminins ( Requète imbriquée)
SELECT idalb
from album
WHERE idalb NOT IN ( SELECT album.idAlb
FROM album
    LEFT JOIN pers_album ON album.idAlb = pers_album.idAlb
    LEFT JOIN personnage ON pers_album.idPers = personnage.idPers
WHERE sexePers ="F" )
;

-----------------------------------------------------------------------------
-- 06.premier album dans lequel apparait un personnage féminin :
--    id, nom de l'album, année
--    remarque: les id sont dans l'ordre de création des album
-- -----------------------------------------------------------------------------
SELECT  titreAlb, dateAlb, album.idalb 
FROM album 
    LEFT JOIN pers_album ON album.idAlb = pers_album.idAlb
    LEFT JOIN personnage ON pers_album.idPers = personnage.idPers
WHERE sexePers = "F"
GROUP BY titreAlb
ORDER BY album.idalb ASC
LIMIT 1
;
-- -----------------------------------------------------------------------------
-- 07.dans quel album rencontre-t-on le plus de personnages grossiers ?
--    id, nom de l'album, année
-- -----------------------------------------------------------------------------
SELECT album.idAlb, titreAlb, dateAlb , COUNT(nomJur)
FROM album 
    LEFT JOIN juron_album ON album.idAlb = juron_album.idAlb
    LEFT JOIN personnage ON juron_album.idPers = personnage.idPers
    LEFT JOIN juron ON juron_album.idJur = juron.idJur
GROUP BY album.idAlb 
ORDER BY COUNT(nomJur) DESC
LIMIT 1
;

--REP : ON A MARCHE SUR LA LUNE -----------------------------------------------------------------------------
-- 08.personnage féminin le plus grossier
--         (qui pronnonce le plus souvent des jurons):
--    nom, prénom
-- -----------------------------------------------------------------------------
SELECT nomPers ,prenomPers ,COUNT(juron.idJur)
FROM personnage
    LEFT JOIN juron_album ON personnage.idPers = juron_album.idPers
    LEFT JOIN juron ON juron_album.idJur = juron.idJur 
WHERE sexePers ="F"
GROUP BY nomPers
ORDER BY COUNT(juron.idJur) DESC
LIMIT 1
;
-- CASTAFIORE BIANCA 15
-----------------------------------------------------------------------------
-- 09.personnage féminin qui connait le plus de jurons :
--    nom, prénom
-- -----------------------------------------------------------------------------

SELECT COUNT(DISTINCT idJur), prenomPers,nomPers
FROM personnage 
  LEFT JOIN juron_album ON personnage.idPers = juron_album.idPers 
WHERE sexePers ="F"
GROUP BY nomPers
ORDER BY COUNT(idJur) DESC
LIMIT 1
;
-- CASTAFIORE-----------------------------------------------------------------------------
-- 10.noms de personnage qui apparaissent plus d'une fois :
--    ex: ALCAZAR (le général et sa femme)
--    nom, nb de personnage
-- -----------------------------------------------------------------------------
SELECT nomPers,COUNT(idPers) as `nb de personnage`
FROM personnage
GROUP BY  nomPers
HAVING COUNT(idPers) > 1
;
    
