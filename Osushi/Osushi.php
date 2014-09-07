<?php
namespace Osushi;

class Osushi
{
	/**
	 * @var array
	 * 絵文字への変換対象になる文字列一覧です
	 */
	 public $search_word = array (
		'すし',
		'おすし',
		'お鮨',
		'鮨',
		'スシ',
		'お寿司',
		'寿司',
		'osushi',
		'Osushi',
		'OSUSHI',
		'sushi',
		'Sushi',
		'SUSHI',
	);

	/**
	 * @param null $string
	 * @return mixed
	 * 各種お寿司関連ワードを絵文字に変換します。
	 */
	public function osushi($string = null)
	{
		$sushi_emoji = "\xf0\x9f\x8d\xa3  ";
		return str_replace($this->search_word,$sushi_emoji,$string);
	}
}
