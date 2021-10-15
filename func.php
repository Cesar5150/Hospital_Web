<?php

session_start();
require_once "conexion.php";

$conexion=Conectar();

$consulta=' ';

function consultar(){
    global $conexion, $consulta;
    $sql = "SELECT registro.IdRegistro, registro.FechaIngreso, registro.FechaSalida, registro.IdPaciente, 
            paciente.NomPaciente, paciente.ApellPaciente,
            doctor.IdDoctor, doctor.NomDoctor, doctor.ApellDoctor,
            especialidad.NombreEsp,
            tratamiento.NombreTra, tratamiento.CostoTra, 
            cama.IdCama, cama.CostoC
            
            
            FROM registro, paciente, doctor, especialidad, tratamiento, tratamientoregistro, cama
            
            WHERE registro.IdPaciente = paciente.IdPaciente
            
            AND registro.IdDoctor = doctor.IdDoctor
            AND doctor.IdEspecialidad = especialidad.IdEspecialidad
            AND registro.IdRegistro = tratamientoregistro.IdRegistro
            AND tratamiento.IdTratamiento = tratamientoregistro.IdTratamiento
            AND registro.IdCama = cama.IdCama";

    return $conexion->query($sql);
}

function paciente(){
    global $conexion, $consulta;
    $sql = "SELECT registro.FechaIngreso, registro.FechaSalida, 
            paciente.IdPaciente, paciente.NomPaciente, paciente.ApellPaciente, 
            cama.IdCama, 
            tratamiento.NombreTra,     tratamiento.CostoTra 
            
            FROM registro, paciente, cama, tratamiento, tratamientoregistro 
            
            WHERE registro.IdPaciente = paciente.IdPaciente 
            AND registro.IdCama = cama.IdCama 
            AND registro.IdRegistro = tratamientoregistro.IdRegistro 
            AND tratamiento.IdTratamiento = tratamientoregistro.IdTratamiento";

    return $conexion->query($sql);
}

function doctor(){
    global $conexion, $consulta;
    $sql = "SELECT doctor.IdDoctor, doctor.NomDoctor, doctor.ApellDoctor,
            especialidad.NombreEsp

            FROM doctor, especialidad
    
            WHERE doctor.IdEspecialidad = especialidad.IdEspecialidad";

    return $conexion->query($sql);
}

function tratamiento(){
    global $conexion, $consulta;
    $sql = "SELECT tratamiento.IdTratamiento, tratamiento.NombreTra, tratamiento.CostoTra

            FROM tratamiento";

    return $conexion->query($sql);
}

function usuario(){
    global $conexion, $consulta;
    $sql = "SELECT * FROM usuario";

    return $conexion->query($sql);
}


?>