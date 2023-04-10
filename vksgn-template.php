<div class="vksgn-navigation<?php 
	if( wp_is_mobile()){ echo ' is_mobile'; }

	$domain = $_SERVER['HTTP_HOST'];
	if( strpos( $domain, 'pattern' ) !== false ){
		// Pattern Library
		echo ' is_dark';
	}
?>">
	<ul class="vksgn-primary">
		<li class="vksgn-primary-item product">
			<span><i class="fas fa-glasses"></i>製品を見る</span>
			<div class="vksgn-sub">
				<ul class="vksgn-sub-items">
					<li class="vksgn-sub-item"><a href="https://lightning.vektor-inc.co.jp/"><i class="vk-icon lightning"></i>Lightning<span>WordPressテーマ</span></a></li>
					<li class="vksgn-sub-item"><a href="https://www.vektor-inc.co.jp/service/wordpress-plugins/vk-blocks/"><i class="vk-icon"></i>VK Blocks<span>ブロック拡張プラグイン</span></a></li>
					<li class="vksgn-sub-item"><a href="https://patterns.vektor-inc.co.jp/"><i class="vk-icon"></i>VK Pattern Library<span>コピペで使えるライブラリ</span></a></li>
					<li class="vksgn-sub-item"><a href="https://www.vektor-inc.co.jp/service/wordpress-plugins/vk-filter-search/"><i class="vk-icon"></i>VK Filter Search<span>絞り込み検索プラグイン</span></a></li>
				</ul>
				<div class="vksgn-sub-title"><a href="https://www.vektor-inc.co.jp/service/products/">製品一覧<i class="fas fa-chevron-right"></i></a></div>
			</div>
		</li>
		<li class="vksgn-primary-item"><a href="https://vws.vektor-inc.co.jp/"><i class="fas fa-shopping-cart"></i>購入する</a></li>
		<li class="vksgn-primary-item"><a href="https://training.vektor-inc.co.jp/"><i class="fas fa-desktop"></i>学習する</a></li>
		<li class="vksgn-primary-item join">
			<span><i class="fas fa-users"></i>参加する</span>
			<div class="vksgn-sub">
				<ul class="vksgn-sub-items">
					<li class="vksgn-sub-item"><a href="https://vektor.connpass.com/" target="_blank"><i class="fas fa-chalkboard-teacher"></i>VWS<br>
					オンライン勉強会</a></li>
					<li class="vksgn-sub-item"><a href="https://vws.vektor-inc.co.jp/vws-community"><i class="fab fa-discord"></i>VWS<br>
					ユーザーDiscord</a></li>
					<li class="vksgn-sub-item"><a href="https://vws.vektor-inc.co.jp/forums"><i class="far fa-comments"></i>VWS<br>
					フォーラム</a></li>
				</ul>
				<div class="vksgn-sub-title"><a href="https://vws.vektor-inc.co.jp/vws-community"> オンラインコミュニティ一覧<i class="fas fa-chevron-right"></i></a></div>
			</div>
		</li>
		<li class="vksgn-primary-item"><a href="https://showcase.vektor-inc.co.jp/archives/author/wpmaster"><i class="fas fa-share-square"></i>実例を見る</a></li>
	</ul>
</div>