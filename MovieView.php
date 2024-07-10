<?php
class MovieView
{
    function renderMoviesByGenre($genre, $movies)
    {
        echo "<h1>Lista por género: $genre</h1>";
        echo "<a href='index.html'> Volver </a>";
        // imprime la tabla de peliculas
        echo "<table>
       <thead>
           <tr>
               <th>Título</th>
               <th>Año</th>
               <th>Estudio</th>
           </tr>
       <thead>
       <tbody>
       ";

        foreach ($movies as $movie) {
            echo "
            <tr>
                <td>$movie->title</td>
                <td>$movie->year</td>
                <td>$movie->studio</td>
            </tr>
        ";
        }
        echo " </tbody>   
        </table>";
    }

    function renderError()
    {
        echo "<h2>Error! Género no especificado.</h2>";
    }
}
