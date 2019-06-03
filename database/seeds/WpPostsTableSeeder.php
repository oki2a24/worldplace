<?php

use Illuminate\Database\Seeder;

class WpPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_posts')->delete();
        
        \DB::table('wp_posts')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'post_author' => 1,
                'post_date' => '2019-06-02 10:24:29',
                'post_date_gmt' => '2019-06-02 01:24:29',
                'post_content' => '<!-- wp:paragraph -->
<p>WordPress へようこそ。こちらは最初の投稿です。編集または削除し、コンテンツ作成を始めてください。</p>
<!-- /wp:paragraph -->',
                'post_title' => 'Hello world!',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'hello-world',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2019-06-02 10:24:29',
                'post_modified_gmt' => '2019-06-02 01:24:29',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://localhost:8080/?p=1',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => '',
                'comment_count' => 1,
            ),
            1 => 
            array (
                'ID' => 2,
                'post_author' => 1,
                'post_date' => '2019-06-02 10:24:29',
                'post_date_gmt' => '2019-06-02 01:24:29',
                'post_content' => '<!-- wp:paragraph -->
<p>これはサンプルページです。同じ位置に固定され、(多くのテーマでは) サイトナビゲーションメニューに含まれる点がブログ投稿とは異なります。まずは、サイト訪問者に対して自分のことを説明する自己紹介ページを作成するのが一般的です。たとえば以下のようなものです。</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>はじめまして。昼間はバイク便のメッセンジャーとして働いていますが、俳優志望でもあります。これは僕のサイトです。ロサンゼルスに住み、ジャックという名前のかわいい犬を飼っています。好きなものはピニャコラーダ、そして通り雨に濡れること。</p></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>または、このようなものです。</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>XYZ 小道具株式会社は1971年の創立以来、高品質の小道具を皆様にご提供させていただいています。ゴッサム・シティに所在する当社では2,000名以上の社員が働いており、様々な形で地域のコミュニティへ貢献しています。</p></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>新しく WordPress ユーザーになった方は、<a href="http://localhost:8080/wp-admin/">ダッシュボード</a>へ行ってこのページを削除し、独自のコンテンツを含む新しいページを作成してください。それでは、お楽しみください !</p>
<!-- /wp:paragraph -->',
                'post_title' => 'サンプルページ',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'sample-page',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2019-06-02 10:24:29',
                'post_modified_gmt' => '2019-06-02 01:24:29',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://localhost:8080/?page_id=2',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            2 => 
            array (
                'ID' => 3,
                'post_author' => 1,
                'post_date' => '2019-06-02 10:24:29',
                'post_date_gmt' => '2019-06-02 01:24:29',
            'post_content' => '<!-- wp:heading --><h2>私たちについて</h2><!-- /wp:heading --><!-- wp:paragraph --><p>私たちのサイトアドレスは http://localhost:8080 です。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>このサイトが収集する個人データと収集の理由</h2><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>コメント</h3><!-- /wp:heading --><!-- wp:paragraph --><p>訪問者がこのサイトにコメントを残す際、コメントフォームに表示されているデータ、そしてスパム検出に役立てるための IP アドレスとブラウザーユーザーエージェント文字列を収集します。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>メールアドレスから作成される匿名化された (「ハッシュ」とも呼ばれる) 文字列は、あなたが Gravatar サービスを使用中かどうか確認するため同サービスに提供されることがあります。同サービスのプライバシーポリシーは https://automattic.com/privacy/ にあります。コメントが承認されると、プロフィール画像がコメントとともに一般公開されます。</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>メディア</h3><!-- /wp:heading --><!-- wp:paragraph --><p>サイトに画像をアップロードする際、位置情報 (EXIF GPS) を含む画像をアップロードするべきではありません。サイトの訪問者は、サイトから画像をダウンロードして位置データを抽出することができます。</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>お問い合わせフォーム</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>Cookie</h3><!-- /wp:heading --><!-- wp:paragraph --><p>サイトにコメントを残す際、お名前、メールアドレス、サイトを Cookie に保存することにオプトインできます。これはあなたの便宜のためであり、他のコメントを残す際に詳細情報を再入力する手間を省きます。この Cookie は1年間保持されます。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>もしあなたがアカウントを持っており、このサイトにログインすると、私たちはあなたのブラウザーが Cookie を受け入れられるかを判断するために一時 Cookie を設定します。この Cookie は個人データを含んでおらず、ブラウザーを閉じた時に廃棄されます。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>ログインの際さらに、ログイン情報と画面表示情報を保持するため、私たちはいくつかの Cookie を設定します。ログイン Cookie は2日間、画面表示オプション Cookie は1年間保持されます。「ログイン状態を保存する」を選択した場合、ログイン情報は2週間維持されます。ログアウトするとログイン Cookie は消去されます。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>もし投稿を編集または公開すると、さらなる Cookie がブラウザーに保存されます。この Cookie は個人データを含まず、単に変更した投稿の ID を示すものです。1日で有効期限が切れます。</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>他サイトからの埋め込みコンテンツ</h3><!-- /wp:heading --><!-- wp:paragraph --><p>このサイトの投稿には埋め込みコンテンツ (動画、画像、投稿など) が含まれます。他サイトからの埋め込みコンテンツは、訪問者がそのサイトを訪れた場合とまったく同じように振る舞います。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>これらのサイトは、あなたのデータの収集、Cookie の使用、サードパーティによる追加トラッキングの埋め込み、埋め込みコンテンツとのやりとりの監視を行うことがあります。アカウントを使ってそのサイトにログイン中の場合、埋め込みコンテンツとのやりとりのトラッキングも含まれます。</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3>アナリティクス</h3><!-- /wp:heading --><!-- wp:heading --><h2>あなたのデータの共有先</h2><!-- /wp:heading --><!-- wp:heading --><h2>データを保存する期間</h2><!-- /wp:heading --><!-- wp:paragraph --><p>あなたがコメントを残すと、コメントとそのメタデータが無期限に保持されます。これは、モデレーションキューにコメントを保持しておく代わりに、フォローアップのコメントを自動的に認識し承認できるようにするためです。</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>このサイトに登録したユーザーがいる場合、その方がユーザープロフィールページで提供した個人情報を保存します。すべてのユーザーは自分の個人情報を表示、編集、削除することができます (ただしユーザー名は変更することができません)。サイト管理者もそれらの情報を表示、編集できます。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>データに対するあなたの権利</h2><!-- /wp:heading --><!-- wp:paragraph --><p>このサイトのアカウントを持っているか、サイトにコメントを残したことがある場合、私たちが保持するあなたについての個人データ (提供したすべてのデータを含む) をエクスポートファイルとして受け取るリクエストを行うことができます。また、個人データの消去リクエストを行うこともできます。これには、管理、法律、セキュリティ目的のために保持する義務があるデータは含まれません。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>あなたのデータの送信先</h2><!-- /wp:heading --><!-- wp:paragraph --><p>訪問者によるコメントは、自動スパム検出サービスを通じて確認を行う場合があります。</p><!-- /wp:paragraph --><!-- wp:heading --><h2>あなたの連絡先情報</h2><!-- /wp:heading --><!-- wp:heading --><h2>追加情報</h2><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>データの保護方法</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>データ漏洩対策手順</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>データ送信元のサードパーティ</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>ユーザーデータに対して行う自動的な意思決定およびプロファイリング</h3><!-- /wp:heading --><!-- wp:heading {"level":3} --><h3>業界規制の開示要件</h3><!-- /wp:heading -->',
                'post_title' => 'プライバシーポリシー',
                'post_excerpt' => '',
                'post_status' => 'draft',
                'comment_status' => 'closed',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'privacy-policy',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2019-06-02 10:24:29',
                'post_modified_gmt' => '2019-06-02 01:24:29',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://localhost:8080/?page_id=3',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            3 => 
            array (
                'ID' => 4,
                'post_author' => 1,
                'post_date' => '2019-06-02 10:24:42',
                'post_date_gmt' => '0000-00-00 00:00:00',
                'post_content' => '',
                'post_title' => '自動下書き',
                'post_excerpt' => '',
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => '',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2019-06-02 10:24:42',
                'post_modified_gmt' => '0000-00-00 00:00:00',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://localhost:8080/?p=4',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
        ));
        
        
    }
}