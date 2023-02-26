<?php

return call_user_func(function () use ($ep, $mail_headers_default, $email) {
	$prefecture = "テスト4県";
	$city = "テスト4市";
	// Copyrightに表示される名称。 *returnで返している配列のlabel.copyrightを参照
	$city_copy_right = "#copy-right#";
	// サービス名・サイト名
	$service = "テスト4サービス";
	// 暗号化に使うシード値（オープン後は変更禁止）
	$crypt_key = "zdnKs1QjXcvnCe";
	// 提供開始日
	$since = "$since";
	// DBのパスワード
	$db_pass = "ZgHTo1m7aa9OKMGQ";

	return [
		'application' => [
			// 暗号化に使うシード値（オープン後は変更禁止）
			'crypt_key' => $crypt_key,
			// 提供開始日
			'since' => $since,
		],
		'label' => [
			'prefecture' => $prefecture,
			'city' => $city,
			'service' => $service,
			'description' => "${city} ${service} は子育て・予防接種情報サービスです",
			'keywords' => "${city},保健所,予防接種,予防接種スケジュール,病院,インフルエンザ",
			'copyright' => "copyright &copy; ${city_copy_right}. all right reserved.",
		],
		'db' => [
			'pass' => $db_pass,
		],
	];
});
