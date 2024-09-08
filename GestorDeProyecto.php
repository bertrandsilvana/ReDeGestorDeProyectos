<?php
require_once 'usuario.php';
require_once 'proyecto.php';
require_once 'tarea.php';
require_once 'comentario.php';
require_once 'estado.php';

class GestorDeProyecto {
    private $usuarios = [];
    private $proyectos = [];
    private $tareas = [];
    private $comentarios = [];
    private $estados = [];

    // Métodos para gestionar usuarios
    public function agregarUsuario($usuario) {
        $this->usuarios[] = $usuario;
    }

    public function obtenerUsuario($id_usuario) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getIdUsuario() == $id_usuario) {
                return $usuario;
            }
        }
        return null;
    }

    public function actualizarUsuario($id_usuario, $nombre, $email) {
        $usuario = $this->obtenerUsuario($id_usuario);
        if ($usuario) {
            $usuario->setNombre($nombre);
            $usuario->setEmail($email);
        }
    }

    public function eliminarUsuario($id_usuario) {
        foreach ($this->usuarios as $key => $usuario) {
            if ($usuario->getIdUsuario() == $id_usuario) {
                unset($this->usuarios[$key]);
            }
        }
    }

    // Métodos para gestionar proyectos
    public function agregarProyecto($proyecto) {
        $this->proyectos[] = $proyecto;
    }

    public function obtenerProyecto($id_proyecto) {
        foreach ($this->proyectos as $proyecto) {
            if ($proyecto->getIdProyecto() == $id_proyecto) {
                return $proyecto;
            }
        }
        return null;
    }

    public function actualizarProyecto($id_proyecto, $nombre, $descripcion) {
        $proyecto = $this->obtenerProyecto($id_proyecto);
        if ($proyecto) {
            $proyecto->setNombre($nombre);
            $proyecto->setDescripcion($descripcion);
        }
    }

    public function eliminarProyecto($id_proyecto) {
        foreach ($this->proyectos as $key => $proyecto) {
            if ($proyecto->getIdProyecto() == $id_proyecto) {
                unset($this->proyectos[$key]);
            }
        }
    }

    // Métodos para gestionar tareas
    public function agregarTarea($tarea) {
        $this->tareas[] = $tarea;
    }

    public function obtenerTarea($id_tarea) {
        foreach ($this->tareas as $tarea) {
            if ($tarea->getIdTarea() == $id_tarea) {
                return $tarea;
            }
        }
        return null;
    }

    public function actualizarTarea($id_tarea, $nombre, $descripcion, $fecha_inicio, $fecha_fin, $id_proyecto, $id_usuario, $id_estado) {
        $tarea = $this->obtenerTarea($id_tarea);
        if ($tarea) {
            $tarea->setNombre($nombre);
            $tarea->setDescripcion($descripcion);
            $tarea->setFechaInicio($fecha_inicio);
            $tarea->setFechaFin($fecha_fin);
            $tarea->setIdProyecto($id_proyecto);
            $tarea->setIdUsuario($id_usuario);
            $tarea->setIdEstado($id_estado);
        }
    }

    public function eliminarTarea($id_tarea) {
        foreach ($this->tareas as $key => $tarea) {
            if ($tarea->getIdTarea() == $id_tarea) {
                unset($this->tareas[$key]);
            }
        }
    }

    // Métodos para gestionar comentarios
    public function agregarComentario($comentario) {
        $this->comentarios[] = $comentario;
    }

    public function obtenerComentario($id_comentario) {
        foreach ($this->comentarios as $comentario) {
            if ($comentario->getIdComentario() == $id_comentario) {
                return $comentario;
            }
        }
        return null;
    }

    public function actualizarComentario($id_comentario, $contenido, $fecha) {
        $comentario = $this->obtenerComentario($id_comentario);
        if ($comentario) {
            $comentario->setContenido($contenido);
            $comentario->setFecha($fecha);
        }
    }

    public function eliminarComentario($id_comentario) {
        foreach ($this->comentarios as $key => $comentario) {
            if ($comentario->getIdComentario() == $id_comentario) {
                unset($this->comentarios[$key]);
            }
        }
    }

    // Métodos para gestionar estados
    public function agregarEstado($estado) {
        $this->estados[] = $estado;
    }

    public function obtenerEstado($id_estado) {
        foreach ($this->estados as $estado) {
            if ($estado->getIdEstado() == $id_estado) {
                return $estado;
            }
        }
        return null;
    }

    public function actualizarEstado($id_estado, $nombre) {
        $estado = $this->obtenerEstado($id_estado);
        if ($estado) {
            $estado->setNombre($nombre);
        }
    }

    public function eliminarEstado($id_estado) {
        foreach ($this->estados as $key => $estado) {
            if ($estado->getIdEstado() == $id_estado) {
                unset($this->estados[$key]);
            }
        }
    }
}

