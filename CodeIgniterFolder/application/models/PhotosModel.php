<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class PhotosModel extends CI_Model
{
	protected string $table = 'photos';
	protected string $continent = 'continent';
	protected string $id = 'id';

	/**
	 * Selects photos by continent
	 *
	 * @param string $continent The continent to select photos from
	 * @return array The result of the query
	 */
	public function select_photos_by_continent(string $continent): array
	{
		return $this->db->select('*')
			->from($this->table)
			->where($this->continent, $continent)
			->get()
			->result();
	}

	/**
	 * Selects a photo by ID
	 *
	 * @param int $id The ID of the photo to select
	 * @return array The result of the query
	 */
	public function select_photo_by_id(int $id): array
	{
		return $this->db->select('*')
			->from($this->table)
			->where($this->id, $id)
			->get()
			->result();
	}
}
