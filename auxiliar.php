
// Proyectos
echo "\nProyectos:\n";
foreach ($gestor->proyectos as $proyecto) {
    echo "ID: " . $proyecto->getIdProyecto() . ", Nombre: " . $proyecto->getNombre() . ", Descripción: " . $proyecto->getDescripcion() . "\n";
}

// TAREAS
echo "\nTareas:\n";
foreach ($gestor->tareas as $tarea) {
    echo "ID: " . $tarea->getIdTarea() . ", Nombre: " . $tarea->getNombre() . ", Descripción: " . $tarea->getDescripcion() . ", Fecha Inicio: " . $tarea->getFechaInicio() . ", Fecha Fin: " . $tarea->getFechaFin() . ", ID Proyecto: " . $tarea->getIdProyecto() . ", ID Usuario: " . $tarea->getIdUsuario() . ", ID Estado: " . $tarea->getIdEstado() . "\n";
}

// COMENTARIOS
echo "\nComentarios:\n";
foreach ($gestor->comentarios as $comentario) {
    echo "ID: " . $comentario->getIdComentario() . ", ID Tarea: " . $comentario->getIdTarea() . ", ID Usuario: " . $comentario->getIdUsuario() . ", Contenido: " . $comentario->getContenido() . ", Fecha: " . $comentario->getFecha() . "\n";
}
?>