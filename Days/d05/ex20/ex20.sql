SELECT
film.id_genre AS 'id_genre',
genre.nom AS 'nom genre',
film.id_distrib AS 'id_distrib',
distrib.nom AS 'nom distrib ',
titre AS 'titre film'
FROM film
LEFT JOIN genre ON film.id_genre = genre.id_genre
LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib
WHERE film.id_genre >= 4 AND film.id_genre <= 8;
