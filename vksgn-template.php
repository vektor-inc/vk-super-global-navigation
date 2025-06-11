<div class="vksgn-navigation<?php 
	if( wp_is_mobile()){ echo ' is_mobile'; }

	$domain = $_SERVER['HTTP_HOST'];
	if( strpos( $domain, 'pattern' ) !== false ){
		// Pattern Library
		echo ' is_dark';
	}

	if( strpos( $domain, 'demo' ) !== false  || strpos( $domain, 'test') !== false ){
		// Demo site
		echo ' is_demo';
	}
?>">
	<p class="demosite_message">このデモサイトは Vektor,Inc. のテーマとプラグインで構築されています。ご購入や詳細情報は下記のリンクもご参考ください。</p>
	<ul class="vksgn-primary">
		<li class="vksgn-primary-item product">
			<span><i class="fas fa-rocket"></i>今すぐ開始</span>
			<div class="vksgn-sub">
				<ul class="vksgn-sub-items">
					<li class="vksgn-sub-item"><a href="https://vk-fullsite-installer.com/"><i class="vk-icon fsi"></i>VK FullSite Installer<span>サイト丸ごとインポート</span></a></li>
					<li class="vksgn-sub-item"><a href="https://x-t9.vektor-inc.co.jp/"><i class="vk-icon x-t9"></i>X-T9<span>WordPress テーマ</span></a></li>
					<li class="vksgn-sub-item"><a href="https://lightning.vektor-inc.co.jp/"><i class="vk-icon lightning"></i>Lightning<span>WordPress テーマ</span></a></li>
					<li class="vksgn-sub-item"><a href="https://patterns.vektor-inc.co.jp/"><i class="vk-icon patterns"></i>VK Pattern Library<span>コピペで使えるライブラリ</span></a></li>
				</ul>
				<div class="vksgn-sub-title"><a href="https://vk-fullsite-installer.com/site/">実例を見る<i class="fas fa-chevron-right"></i></a></div>
			</div>
		</li>
		<li class="vksgn-primary-item product">
			<span><i class="fas fa-fire"></i>人気の製品</span>
			<div class="vksgn-sub">
				<ul class="vksgn-sub-items">
					<li class="vksgn-sub-item"><a href="https://www.vektor-inc.co.jp/service/wordpress-plugins/vk-blocks/"><i class="vk-icon"></i>VK Blocks<span>ブロック拡張プラグイン</span></a></li>
					<li class="vksgn-sub-item"><a href="https://www.vektor-inc.co.jp/service/wordpress-plugins/vk-filter-search/"><i class="vk-icon"></i>VK Filter Search<span>絞り込み検索プラグイン</span></a></li>
					<li class="vksgn-sub-item"><a href="https://www.vektor-inc.co.jp/service/wordpress-plugins/vk-ab-testing/"><i class="vk-icon"></i>VK AB Testing<span>ABテスト機能プラグイン</span></a></li>
					<li class="vksgn-sub-item"><a href="https://vws.vektor-inc.co.jp/vektor-passport "><i class="vk-icon"></i>Vektor Passport<span>お得なオールインワンライセンス</span></a></li>
				</ul>
				<div class="vksgn-sub-title"><a href="https://www.vektor-inc.co.jp/service/products/ ">製品一覧<i class="fas fa-chevron-right"></i></a></div>
			</div>
		</li>
		<li class="vksgn-primary-item know">
			<span><i class="fas fa-desktop"></i>知る・学ぶ</span>
			<div class="vksgn-sub">
				<ul class="vksgn-sub-items">
					<li class="vksgn-sub-item"><a href="https://training.vektor-inc.co.jp/"><i class="fas fa-laptop-code"></i>無料オンライン<br>学習ベクトレ</a></li>
					<li class="vksgn-sub-item"><a href="https://www.youtube.com/@VektorInc" target="_blank"><i class="fas fa-brands fa-youtube"></i>ベクトル公式 YouTube </a></li>
					<li class="vksgn-sub-item"><a href="https://x.com/vektor_inc" target="_blank"><i class="fas fa-brands fa-square-x-twitter"></i>ベクトル<br>公式 X </a></li>
				</ul>
				<div class="vksgn-sub-title"><a href="https://www.vektor-inc.co.jp/product-update/">製品更新情報<i class="fas fa-chevron-right"></i></a></div>
			</div>
		</li>
		<li class="vksgn-primary-item join">
			<span><i class="fas fa-users"></i>参加する</span>
			<div class="vksgn-sub">
				<ul class="vksgn-sub-items">
					<li class="vksgn-sub-item"><a href="https://vektor.connpass.com/" target="_blank"><i class="fas fa-chalkboard-teacher"></i>勉強会・<br>質問相談会</a></li>
					<li class="vksgn-sub-item"><a href="https://vws.vektor-inc.co.jp/vws-community"><i class="fab fa-discord"></i>VWS<br>
					ユーザーDiscord</a></li>
					<li class="vksgn-sub-item"><a href="https://vws.vektor-inc.co.jp/forums"><i class="far fa-comments"></i>VWS<br>
					フォーラム</a></li>
				</ul>
				<div class="vksgn-sub-title"><a href="https://vws.vektor-inc.co.jp/vws-community"> オンラインコミュニティ一覧<i class="fas fa-chevron-right"></i></a></div>
			</div>
		</li>
		<li class="vksgn-primary-item"><a href="https://vws.vektor-inc.co.jp/"><i class="fas fa-shopping-cart"></i>購入する</a></li>
	</ul>
</div>