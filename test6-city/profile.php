<?php

return call_user_func(function () use ($ep, $mail_headers_default, $email) {
	$prefecture = "テスト6県";
	$city = "テスト6市";
	// Copyrightに表示される名称。 *returnで返している配列のlabel.copyrightを参照
	$city_copy_right = "Test6 City ";
	// サービス名・サイト名
	$service = "テスト6サービス";
	// 暗号化に使うシード値（オープン後は変更禁止）
	$crypt_key = "b8P4KOC2aQkdZ80C";
	// 提供開始日
	$since = "2023/02/27";
	// DBのパスワード
	$db_pass = "xcTNBmu6YEpfcOQX";

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