<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GalleryTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'gallery_id' => [
				'type' => 'INT',
				'constraint' => 100,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'keterangan' => [
				'type' => 'TEXT',
			],
			'nama_file' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			]
		]);
		$this->forge->addPrimaryKey('gallery_id');
		$this->forge->createTable('gallery');
	}

	public function down()
	{
		$this->forge->dropTable('gallery');
	}
}
