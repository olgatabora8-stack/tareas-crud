<?php
class Empleado
{
	private PDO $conexion;

	public function __construct(PDO $conexion)
	{
		$this->conexion = $conexion;
	}

	public function obtenerTodos(): array
	{
		$consulta = $this->conexion->query(
			'SELECT id, nombres, apellidos, Fecha AS fecha_nac, salario, puesto, imagen
			 FROM empleados
			 ORDER BY id DESC'
		);

		return $consulta->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerPorId(int $id): ?array
	{
		$consulta = $this->conexion->prepare(
			'SELECT id, nombres, apellidos, Fecha AS fecha_nac, salario, puesto, imagen
			 FROM empleados
			 WHERE id = :id'
		);
		$consulta->execute(['id' => $id]);

		$empleado = $consulta->fetch(PDO::FETCH_ASSOC);
		return $empleado ?: null;
	}

	public function agregar(array $datos): bool
	{
		$consulta = $this->conexion->prepare(
			'INSERT INTO empleados (nombres, apellidos, Fecha, salario, puesto, imagen)
			 VALUES (:nombres, :apellidos, :fecha_nac, :salario, :puesto, :imagen)'
		);

		return $consulta->execute($datos);
	}

	public function actualizar(int $id, array $datos): bool
	{
		$datos['id'] = $id;
		$consulta = $this->conexion->prepare(
			'UPDATE empleados
			 SET nombres = :nombres,
				 apellidos = :apellidos,
				 Fecha = :fecha_nac,
				 salario = :salario,
				 puesto = :puesto,
				 imagen = :imagen
			 WHERE id = :id'
		);

		return $consulta->execute($datos);
	}

	public function eliminar(int $id): bool
	{
		$consulta = $this->conexion->prepare('DELETE FROM empleados WHERE id = :id');
		return $consulta->execute(['id' => $id]);
	}
}
