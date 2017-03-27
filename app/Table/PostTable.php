<?php
namespace App\Table;

use Core\Table\Table;
/**
* 
*/
class PostTable extends Table
{
	protected $table = "articles";

	public function last()
	{
		return $this->query(" SELECT articles.id,
									articles.titre,
									articles.contenu,
									articles.date,
									categories.titre as category
								FROM articles
								LEFT JOIN categories
									ON category_id = categories.id
								ORDER BY articles.date DESC
							");
	}

	public function find($id)
	{
		return $this->query(" SELECT articles.id,
									articles.titre,
									articles.contenu,
									articles.date,
									categories.titre as category
								FROM articles
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE articles.id = ?
							", [$id], true);
	}

	public function lastByCategory($category_id, $one=false)
	{
		return $this->query(" SELECT articles.id,
									articles.titre,
									articles.contenu,
									articles.date,
									categories.titre as category
								FROM articles
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE categories.id = ?
								ORDER BY articles.id DESC
							", [$category_id], $one);
	}
}