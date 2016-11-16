<?php 
if ($isRated === false) {
	echo $this->Rating->display([
		'item' => $post['id'],
		'url' => [$post['id'])
	]);
} else {
	echo __('You have already rated.');
}
?>