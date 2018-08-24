<?php

class users{

    private $id_users;
    private $cod_area_formacion;
    private $cod_area_conocimiento;
    private $nombre_users;
    private $gener_users;
    private $anio_nac_users;
    private $mes_nac_users;
    private $dia_nac_users;
    private $cod_tipo_documento;
    private $documento_users;
    private $correo_users;
    private $pass_users;
    private $confirmar_users;
    private $celular_users;
    private $telefono_users;
    private $level_users;
    private $cod_pais;
    private $cod_depart;
    private $cod_ciudad;
    private $cod_comuna;
    private $cod_corregimiento;
    private $cod_vereda;
    private $cod_barrio;
    private $direccion_users;
    private $created_users;
    private $update_users;

public function getId_users(){
		return $this->id_users;
	}

	public function setId_users($id_users){
		$this->id_users = $id_users;
	}

	public function getCod_area_formacion(){
		return $this->cod_area_formacion;
	}

	public function setCod_area_formacion($cod_area_formacion){
		$this->cod_area_formacion = $cod_area_formacion;
	}

	public function getCod_area_conocimiento(){
		return $this->cod_area_conocimiento;
	}

	public function setCod_area_conocimiento($cod_area_conocimiento){
		$this->cod_area_conocimiento = $cod_area_conocimiento;
	}

	public function getNombre_users(){
		return $this->nombre_users;
	}

	public function setNombre_users($nombre_users){
		$this->nombre_users = $nombre_users;
	}

	public function getGener_users(){
		return $this->gener_users;
	}

	public function setGener_users($gener_users){
		$this->gener_users = $gener_users;
	}

	public function getAnio_nac_users(){
		return $this->anio_nac_users;
	}

	public function setAnio_nac_users($anio_nac_users){
		$this->anio_nac_users = $anio_nac_users;
	}

	public function getMes_nac_users(){
		return $this->mes_nac_users;
	}

	public function setMes_nac_users($mes_nac_users){
		$this->mes_nac_users = $mes_nac_users;
	}

	public function getDia_nac_users(){
		return $this->dia_nac_users;
	}

	public function setDia_nac_users($dia_nac_users){
		$this->dia_nac_users = $dia_nac_users;
	}

	public function getCod_tipo_documento(){
		return $this->cod_tipo_documento;
	}

	public function setCod_tipo_documento($cod_tipo_documento){
		$this->cod_tipo_documento = $cod_tipo_documento;
	}

	public function getDocumento_users(){
		return $this->documento_users;
	}

	public function setDocumento_users($documento_users){
		$this->documento_users = $documento_users;
	}

	public function getCorreo_users(){
		return $this->correo_users;
	}

	public function setCorreo_users($correo_users){
		$this->correo_users = $correo_users;
	}

	public function getPass_users(){
		return $this->pass_users;
	}

	public function setPass_users($pass_users){
		$this->pass_users = $pass_users;
	}

	public function getConfirmar_users(){
		return $this->confirmar_users;
	}

	public function setConfirmar_users($confirmar_users){
		$this->confirmar_users = $confirmar_users;
	}

	public function getCelular_users(){
		return $this->celular_users;
	}

	public function setCelular_users($celular_users){
		$this->celular_users = $celular_users;
	}

	public function getTelefono_users(){
		return $this->telefono_users;
	}

	public function setTelefono_users($telefono_users){
		$this->telefono_users = $telefono_users;
	}

	public function getLevel_users(){
		return $this->level_users;
	}

	public function setLevel_users($level_users){
		$this->level_users = $level_users;
	}

	public function getCod_pais(){
		return $this->cod_pais;
	}

	public function setCod_pais($cod_pais){
		$this->cod_pais = $cod_pais;
	}

	public function getCod_depart(){
		return $this->cod_depart;
	}

	public function setCod_depart($cod_depart){
		$this->cod_depart = $cod_depart;
	}

	public function getCod_ciudad(){
		return $this->cod_ciudad;
	}

	public function setCod_ciudad($cod_ciudad){
		$this->cod_ciudad = $cod_ciudad;
	}

	public function getCod_comuna(){
		return $this->cod_comuna;
	}

	public function setCod_comuna($cod_comuna){
		$this->cod_comuna = $cod_comuna;
	}

	public function getCod_corregimiento(){
		return $this->cod_corregimiento;
	}

	public function setCod_corregimiento($cod_corregimiento){
		$this->cod_corregimiento = $cod_corregimiento;
	}

	public function getCod_vereda(){
		return $this->cod_vereda;
	}

	public function setCod_vereda($cod_vereda){
		$this->cod_vereda = $cod_vereda;
	}

	public function getCod_barrio(){
		return $this->cod_barrio;
	}

	public function setCod_barrio($cod_barrio){
		$this->cod_barrio = $cod_barrio;
	}

	public function getDireccion_users(){
		return $this->direccion_users;
	}

	public function setDireccion_users($direccion_users){
		$this->direccion_users = $direccion_users;
	}

	public function getCreated_users(){
		return $this->created_users;
	}

	public function setCreated_users($created_users){
		$this->created_users = $created_users;
	}

	public function getUpdate_users(){
		return $this->update_users;
	}

	public function setUpdate_users($update_users){
		$this->update_users = $update_users;
	}
}
