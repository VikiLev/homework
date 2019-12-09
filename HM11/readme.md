SELECT * FROM films WHERE year >= 1999;
select * from films where genre = "drama";
SELECT ID, CONCAT(name_film, ' FROM ', producer) AS name_film, genre FROM films;
SELECT COUNT(*) FROM films;
SELECT COUNT('drama') FROM films;
SELECT genre, COUNT(*) FROM films GROUP BY year;
SELECT ID AS nomber, name_film AS NAME, producer AS director FROM films;
SELECT * FROM films ORDER BY name_film;
SELECT * FROM films LIMIT 3;
SELECT DISTINCT genre FROM films;
SELECT * FROM films ORDER BY RAND() LIMIT 1;



select name, genre from film1 left join genre on (film1.genre_id = genre.id);
select name, genre, title from film1 left join mas on ( film1.id = mas.title_id) left join genre on (film1.genre_id = genre.id);
create table RES select name, genre, title from film1 left join mas on ( film1.id = mas.title_id) left join genre on (film1.genre_id = genre.id);



