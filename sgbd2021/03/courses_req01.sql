SELECT *
FROM animal
ORDER BY nomA ASC;

SELECT *
FROM animal
WHERE espA = 'CHIEN'
ORDER BY nomA ASC;

SELECT *
FROM animal
WHERE espA = 'CHIEN' AND nationA = 'BE'
ORDER BY nomA ASC;

SELECT nomA as `nom`, descA A `description`, espA AS `espèce`
FROM
WHERE nationA IS NULL

SELECT nomA as `nom`, descA A `description`, espA AS `espèce`
FROM
WHERE nomA LIKE '%A%';

SELECT nomA as `nom`, descA A `description`, espA AS `espèce`
FROM
WHERE nomA LIKE '%A%' AND nomA NOT LIKE '%A%A%';