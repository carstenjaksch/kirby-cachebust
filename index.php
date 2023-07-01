<?php

Kirby::plugin('ca/cachebust', [
	'components' => [
		'css' => function ($kirby, $url) {
            $relative_url = Url::path($url, false);
            $file_root = $kirby->roots()->index() . DS . $relative_url;

            if (F::exists($file_root)) {
                return url(dirname($relative_url) . '/' . F::name($relative_url) . '.' . F::modified($file_root) . '.css');
            }
		},
		'js'  => function ($kirby, $url) {
            $relative_url = Url::path($url, false);
            $file_root = $kirby->roots()->index() . DS . $relative_url;

            if (F::exists($file_root)) {
                return dirname($relative_url) . '/' . F::name($relative_url) . '.' . F::modified($file_root) . '.js';
            }
		}
	]
]);
