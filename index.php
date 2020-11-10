<?php
foreach (glob("*.html") as $file) {
	echo "<p>", "<a href='{$file}'>{$file}</a>", "</p>", PHP_EOL;
}