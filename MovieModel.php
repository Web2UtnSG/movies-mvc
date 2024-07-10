<?php
class MovieModel{
   /**
    *  Obtiene la lista de peliculas de la DB según género
    */
   function getMoviesByGenre($genre) {
       $db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '1234');
       $query = $db->prepare('SELECT * FROM movies WHERE genre = ?');
       $query->execute([$genre]);
       $movies = $query->fetchAll(PDO::FETCH_OBJ);
       return $movies;
   }
}
