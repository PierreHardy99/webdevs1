-- tintin2021
-- (pays, album, personnage, juron, pays_album, pers_album, juron_album)

-----------------------------------------------------------------------------
-- 01.liste des personnages
--    --> Nom, Prénom, Fonction, Sexe
--    classés par ordre alphabétique sur nom, prenom
---------------------------------------------------------------------------

SELECT nomPers AS `nom`,
        prenomPers AS `prénom`,
        fonctPers AS `fonction`,
        sexePers AS `sexe`
FROM personnage
GROUP BY nomPers ASC, prenomPers ASC;

-----------------------------------------------------------------------------
-- 02.liste des personnages féminins
--    --> Nom, Prénom, Fonction, Sexe
--    classés par ordre alphabétique sur nom, prenom
---------------------------------------------------------------------------

SELECT nomPers AS `nom`,
        prenomPers AS `prénom`,
        fonctPers AS `fonction`,
        sexePers AS `sexe`
FROM personnage
WHERE sexePers = 'F'
ORDER BY nomPers ASC, prenomPers ASC;

-----------------------------------------------------------------------------
-- 03.liste des personnages féminins
--    --> Nom, Prénom, Fonction, Sexe
--    classés par ordre alphabétique sur nom, prenom
--    dont le nom commence par 'A' ou 'a'
---------------------------------------------------------------------------

SELECT nomPers AS `nom`,
        prenomPers AS `prénom`,
        fonctPers AS `fonction`,
        sexePers AS `sexe`
FROM personnage
WHERE sexePers = 'F' AND nomPers LIKE 'A%'
ORDER BY nomPers ASC, prenomPers ASC;

-----------------------------------------------------------------------------
-- 04.liste des personnages féminins
--    --> Nom, Prénom, Fonction
--    classés par ordre alphabétique sur nom, prenom
--    dont le nom contient 1 seule lettre 'A' ou 'a'
---------------------------------------------------------------------------

SELECT nomPers AS `nom`,
        prenomPers AS `prénom`,
        fonctPers AS `fonction`,
        sexePers AS `sexe`
FROM personnage
WHERE sexePers = 'F' AND nomPers LIKE '%A%' AND nomPers NOT LIKE '%A%A%'
ORDER BY nomPers ASC, prenomPers ASC;

----------------------------------------------------------------------------- 
-- 05.liste des personnages féminins
--    --> Nom, Prénom, Fonction, Sexe
--    classés par ordre alphabétique sur nom, prenom
--    dont le nom commence par une voyelle (a e i o u y)
---------------------------------------------------------------------------

SELECT nomPers AS `nom`,
        prenomPers AS `prénom`,
        fonctPers AS `fonction`,
        sexePers AS `sexe`
FROM personnage
WHERE sexePers = 'F' AND nomPers LIKE 'A%' OR nomPers LIKE 'E%' OR nomPers LIKE 'I%' OR nomPers LIKE 'O%' OR nomPers LIKE 'U%' OR nomPers LIKE 'Y%'
ORDER BY nomPers ASC, prenomPers ASC;

SELECT nomPers AS `nom`,
        prenomPers AS `prénom`,
        fonctPers AS `fonction`,
        sexePers AS `sexe`
FROM personnage
WHERE sexePers = 'F' AND LEFT(nomPers,1) IN ('A','E','I','O','U','Y') 
ORDER BY nomPers ASC, prenomPers ASC;

SELECT nomPers AS `nom`,
        prenomPers AS `prénom`,
        fonctPers AS `fonction`,
        sexePers AS `sexe`
FROM personnage
WHERE sexePers = 'F' AND LEFT(nomPers,1) RLIKE '^[AEIOUY].*' 
ORDER BY nomPers ASC, prenomPers ASC;

----------------------------------------------------------------------------- 
-- 06.liste des album
--    --> idAlb, titre
--    classés par ordre alphabétique sur titre
---------------------------------------------------------------------------

SELECT idAlb, titreAlb AS `titre`
FROM album
ORDER BY `titre` ASC;


----------------------------------------------------------------------------- 
-- 07.pour chaque album -> tous les pays visités
--    idAlb, titre, année, pays(nom du pays)
--    classés par ordre alphabétique sur titre, puis nom du pays
---------------------------------------------------------------------------

SELECT `a`.idAlb, `a`.titreAlb AS `titre`, `a`.dateAlb AS `année`, `p`.nomPays AS `nom du pays`
FROM album AS `a`
LEFT JOIN pays_album AS `palb` ON `a`.idAlb = `palb`.idAlb
LEFT JOIN pays AS `p` ON `palb`.idPays = `p`.idPays
ORDER BY `titre` ASC, `nom du pays` ASC;


----------------------------------------------------------------------------- 
-- 08.pour chaque album -> nombre de pays visités
--    idAlb, titre, année, nombre de pays
--    classés par ordre alphabétique sur titre
---------------------------------------------------------------------------

SELECT `a`.idAlb, `a`.titreAlb AS `titre`, `a`.dateAlb AS `année`, COUNT(idPays) AS `nombre de pays`
FROM album AS `a`
LEFT JOIN pays_album AS `palb` ON `palb`.idAlb = `a`.idAlb
GROUP BY idAlb
ORDER BY `titre` ASC;


---------------------------------------------------------------------------
-- 09.pour chaque pays -> nombre d'album concernés
--    pays(nom du pays), nbre d'album
--    classés par ordre alphabétique sur nom du pays
---------------------------------------------------------------------------

SELECT nomPays AS `nom du pays`, COUNT(idAlb) as `Nbre d'album`
FROM pays AS `p`
LEFT JOIN pays_album AS `palb` ON `palb`.idPays = `p`.idPays
GROUP BY `p`.idPays
ORDER BY `p`.nomPays ASC;

-----------------------------------------------------------------------------
-- 10.tous les jurons prononcés par Tintin
--    idJur, juron (nomJur)
--    classés par ordre alphabétique sur nom du juron
---------------------------------------------------------------------------

SELECT nomPers AS `Nom`, `j`.idJur, nomJur AS `juron`
FROM juron AS `j`
LEFT JOIN juron_album AS `jalb` ON `j`.idJur = `jalb`.idJur
LEFT JOIN personnage AS `p` ON `jalb`.idPers = `p`.idPers
WHERE nomPers = 'TINTIN'
ORDER BY `juron` ASC;

-----------------------------------------------------------------------------
-- 11.tous les jurons DIFFERENTS prononcés par Tintin
--    idJur, juron (nomJur)
--    classés par ordre alpahbétique sur nom du juron
---------------------------------------------------------------------------

SELECT DISTINCT nomPers AS `Nom`, `j`.idJur, nomJur AS `juron`
FROM juron AS `j`
LEFT JOIN juron_album AS `jalb` ON `j`.idJur = `jalb`.idJur
LEFT JOIN personnage AS `p` ON `jalb`.idPers = `p`.idPers
WHERE nomPers = 'TINTIN'
ORDER BY `juron` ASC;

----------------------------------------------------------------------------- 
-- 12.pour chaque album, tous les jurons DIFFERENTS prononcés par Tintin
--    idAlb, titre, idJur, juron (nomJur)
--    classés par ordre alpahbétique sur titre, nom du juron
---------------------------------------------------------------------------

SELECT DISTINCT a.idAlb, titreAlb AS `titre`, j.idJur, nomJur AS `juron`
FROM album AS a
LEFT JOIN juron_album AS jalb ON a.idAlb = jalb.idAlb
LEFT JOIN juron AS j ON jalb.idJur = j.idJur
LEFT JOIN personnage AS p ON jalb.idPers = p.idPers
WHERE nomPers = 'TINTIN'
GROUP BY nomJur
ORDER BY `titre` ASC, nomJur ASC;

-----------------------------------------------------------------------------
-- 13.pour chaque album, le nombre de jurons DIFFERENTS prononcés par Tintin
--    idAlb, titre, nombre de jurons
--    classés par ordre alpahbétique sur titre
-----------------------------------------------------------------------------

SELECT  a.idAlb, titreAlb AS `titre`, COUNT(j.Idjur) AS `nombre de jurons`
FROM album AS a
LEFT JOIN juron_album AS jalb ON a.idAlb = jalb.idAlb
LEFT JOIN juron AS j ON jalb.idJur = j.idJur
LEFT JOIN personnage AS p ON jalb.idPers = p.idPers
WHERE nomPers = 'TINTIN'
GROUP BY `titre`
ORDER BY `titre` ASC, nomJur ASC;

-- -----------------------------------------------------------------------------
-- 14.les 5 album dans lesquels tintin prononce le plus de jurons DIFFERENTS
--    idAlb, titre, nombre de jurons
-- -----------------------------------------------------------------------------

SELECT DISTINCT a.idAlb, titreAlb AS `titre`, COUNT(j.Idjur) AS `nombre de jurons`
FROM album AS a
LEFT JOIN juron_album AS jalb ON a.idAlb = jalb.idAlb
LEFT JOIN juron AS j ON jalb.idJur = j.idJur
LEFT JOIN personnage AS p ON jalb.idPers = p.idPers
WHERE nomPers = `TINTIN`
ORDER BY `titre` ASC, nomJur ASC
LIMIT 5;