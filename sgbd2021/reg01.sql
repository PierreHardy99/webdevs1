-- liste des personnes
SELECT *
FROM personnes;

-- nom, prenom, sexe ?
SELECT nomP,prenomP,sexeP
FROM personnes;

-- nom, prenom, sexe triés par ordre alphabétique
SELECT nomP,prenomP,sexeP
FROM personnes
ORDER BY nomP ASC, prenomP ASC;

-- nom, prenom, sexe des italiens triés par ordre alphabétique
SELECT nomP,prenomP,sexeP
FROM personnes
WHERE paysP = "italy"
ORDER BY nomP ASC, prenomP ASC;

-- nom, prenom, sexe des italiens et des français triés par ordre alphabétique
SELECT nomP, prenomP, sexeP, paysP
FROM personnes
WHERE paysP = "italy" OR paysP = "france"
ORDER BY nomP ASC, prenomP ASC;

SELECT nomP, prenomP, sexeP, paysP
FROM personnes
WHERE paysP IN ("italy","france")
ORDER BY nomP ASC, prenomP ASC;

-- nom,prenom,taille des personnes de moins de 150 cm
SELECT nomP,prenomP,tailleP
FROM personnes
WHERE tailleP < 150
ORDER BY nomP ASC, prenomP ASC;

-- nom,prenom,taille des personnes entre 150 et 200 cm
SELECT nomP,prenomP,tailleP
FROM personnes
WHERE tailleP BETWEEN 150 and 200
ORDER BY nomP ASC, prenomP ASC;

-- nom,prenom,taille des personnes pas entre 150 et 200 cm
SELECT nomP,prenomP,tailleP
FROM personnes
WHERE tailleP NOT BETWEEN 150 and 200
ORDER BY nomP ASC, prenomP ASC;

-- nom,prenom,taille des français de 2.20m ou plus
SELECT nomP, prenomP, tailleP
FROM personnes
WHERE paysP = "france" AND tailleP >= 220;

SELECT nomP, prenomP, tailleP
FROM personnes
WHERE nomP LIKE "AS";

-- nom,prenom,taille des personnes dont le nom contient au moins un A
SELECT nomP, prenomP, tailleP
FROM personnes
WHERE nomP LIKE "%A%";

-- nom,prenom,taille des personnes dont le nom contient au moins deux A
SELECT nomP, prenomP, tailleP
FROM personnes
WHERE nomP LIKE "%A%A%";

-- nom,prenom,taille des personnes dont le nom contient un seul A
SELECT nomP, prenomP, tailleP
FROM personnes
WHERE nomP LIKE "%A%" AND NOT LIKE "%A%A%";

-- nom,prenom,taille des personnes dont la 2ème lettre du nom est un A
SELECT nomP, prenomP, tailleP
FROM personnes
WHERE nomP LIKE "_A%";

SELECT DISTINCT paysP -- DISTINCT supprime les doublons
FROM personnes
ORDER BY paysP ASC;

-- Liste des personnes + IMC (masse en KG / taille²)
SELECT nomP as `Nom`, prenomP AS `prénom`, 
       masseP/((tailleP/100) * (tailleP/100)) AS `IMC`
FROM personnes
ORDER BY `IMC` DESC;

-- Liste des personnes en surpoids (imc > 50)
SELECT nomP as `Nom`, prenomP AS `prénom`, 
       masseP/((tailleP/100) * (tailleP/100)) AS `IMC`
FROM personnes
WHERE `IMC` >= 50
ORDER BY `IMC` DESC;