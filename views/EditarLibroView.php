<?php

/**
 * Clase EditarLibroView
 *
 * Esta clase se encarga de mostrar la vista para editar un libro
 */
class EditarLibroView {
    /**
     * Muestra el formulario para editar un libro
     *
     * @param string $isbn El ISBN del libro
     * @param string $titulo El título del libro
     * @param string $autor El autor del libro
     * @param string $genero El género del libro
     * @param string $url La URL de la imagen del libro
     * @param string $msg Mensaje para mostrar en la vista
     * @return void
     */
    public function MostrarEditarLibro($isbn, $titulo, $autor, $genero, $url, $msg) {
        echo '<div class="bg-gray-100 flex items-center justify-center min-h-screen">';
        echo '    <form method="POST" action="index.php?controller=LibrosController&action=editarLibro" class="my-6 p-9 h-full bg-white rounded-lg shadow-lg w-full max-w-md">';
        echo '        <h2 class="text-2xl font-bold text-center mb-4">Editar libro </h2>';

        if (!empty($msg)) {
            echo '<p class="text-green-500 text-center mb-4">' . $msg . '</p>';
        }
        
        echo '        <div class="mb-4">';
        echo '            <label for="isbn" class="block text-gray-700">ISBN: (no lo puedes modificar)</label>';
        echo '            <input type="text" id="isbn" name="ISBN" class="w-full p-2 border border-gray-300 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-red-600" value="' . $isbn . '" readonly >';   
        echo '        </div>';

        echo '        <div class="mb-4">';
        echo '            <label for="titulo" class="block text-gray-700">Título:</label>';
        echo '            <input type="text" id="titulo" name="titulo" class="w-full p-2 border border-gray-300 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-red-600" value="' . $titulo . '">';
        echo '        </div>';

        echo '        <div class="mb-4">';
        echo '            <label for="autor" class="block text-gray-700">Autor:</label>';
        echo '            <input type="text" id="autor" name="autor" class="w-full p-2 border border-gray-300 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-red-600" value="' . $autor . '">';
        echo '        </div>';

        echo '        <div class="mb-4">';
        echo '            <label for="genero" class="block text-gray-700">Género:</label>';
        echo '            <input type="text" id="genero" name="genero" class="w-full p-2 border border-gray-300 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-red-600" value="' . $genero . '">';
        echo '        </div>';

        echo '        <div class="mb-4">';
        echo '            <label for="url" class="block text-gray-700">url imagen:</label>';
        echo '            <input type="text" id="genero" name="url" class="w-full p-2 border border-gray-300 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-red-600" value="' . $url . '">';
        echo '        </div>';
        
        echo '        <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition-all ease">Modificar</button>';
        echo '    </form>';
        echo '</div>';
    }
}
?>

