<?php get_header(); ?>

      <div class="header_content">
        <div class="header_image">
          <div class="header_image_inner">
            <div class="top_image_eria">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top-image2.png">
            </div>
            <div class="sp_image_eria">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top-image-sp.png">
            </div>
            <div class="top_name_eria"><img src="<?php echo get_template_directory_uri(); ?>/images/top_name.svg" class="image_1"><img src="<?php echo get_template_directory_uri(); ?>/images/top_all.svg" class="image_2">
            <a href="<?php echo esc_url( home_url('/') ); ?>supporter" class="top_supporter_btn" target="_blank">
            <p>かじわら英樹後援会入会のご案内</p>
            <span class="link_surcle"></span>
            <span class="link_border">
              <span></span>
            </span>
            </a>
            </div>
            <div class="sp_name_eria"><img src="<?php echo get_template_directory_uri(); ?>/images/top_sp_name.svg" class="image_sp_1"><img src="<?php echo get_template_directory_uri(); ?>/images/top_all.svg" class="image_2">

            </div>
            <a href="<?php echo esc_url( home_url('/') ); ?>supporter" class="top_supporter_btn top_supporter_btn_sp" target="_blank">
              <p>かじわら英樹後援会入会のご案内</p>
              <span class="link_surcle"></span>
              <span class="link_border">
                <span></span>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="information" id="information">

        <div class="info_title"><img src="<?php echo get_template_directory_uri(); ?>/images/info_title.svg"></div>

          <div class="news_box">

              <?php
                $arg = array(
                    'posts_per_page' => 3, // 表示する件数
                    'orderby' => 'date', // 日付でソート
                    'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                    'post_type' => 'gikai_news'// 表示したいカテゴリーのスラッグを指定
                );
                $posts = get_posts( $arg );
                if( $posts ): ?>
                 <!--ループ開始 -->
                  <ul>
                <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
                    <li>
                      <p class="news_time">
                        <?php the_time( 'Y.m.d' ); ?>
                      </p>
                      <span class="news_term">
                        <?php echo get_the_term_list($post->ID, 'val'); ?>
                      </span>
                      <p class="news_in_title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>を更新しました。</a>
                      </p>
                    </li>
                <?php endforeach; ?>
                  </ul>
                  <!--ループ終わり -->
              <?php
                endif;
                wp_reset_postdata();
              ?>
          </div>

          <div class="more_link">
            <a href="<?php echo esc_url( home_url('/') ); ?>/sintyaku" class="arrow2">もっとみる</a>
          </div>

      </div>

      <div class="social" id="social">
        <div class="sns_title"><img src="<?php echo get_template_directory_uri(); ?>/images/sns_title.svg"></div>
          <div class="social_inner">
            <div class="fb-container">
              <div class="fb-page"
              data-href="https://www.facebook.com/fugikaigin.kajihide/"
              data-width="400"
              data-height="500"
              data-tabs="timeline,events"
              data-hide-cover="false"
              data-show-facepile="true"
              data-small-header="false"
              data-adapt-container-width="true">
              </div>
            </div><!-- fb-container out -->
            <div class="sns_link">
              <a href="https://line.me/R/ti/p/%40661zyrla" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/line_card.png"></a>
              <a href="https://twitter.com/kajiwarahideki" target="_blank" class="tw_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_btn_logo.svg"></a>
              <a href="https://www.instagram.com/h.kajiwara/" target="_blank" class="in_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/insta_btn_logo.svg"></a>
              <a href="https://www.youtube.com/channel/UCXQrD6NPHAo4pNXDk9cxh1w" target="_blank" class="yo_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube_btn_logo.svg"></a>
            </div>
          </div>
      </div>

      <div class="message" id="message">
        <div class="message_title"><img src="<?php echo get_template_directory_uri(); ?>/images/message_title.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/message_sub_title.svg"></div>
        <div class="message_inner">
          <div class="message_text">
            <p>小さい頃からご近所の皆さんに面倒を見てもらい、お世話になってきました。</p>
            <p>現在、地域活動を通じて、皆様とお話をしていると山科・京都には多くの課題があることに改めて気がつきました。そして、自分を育ててくれた山科への恩返しがしたいと強く思うようになりました。</p>
            <p>私自身2人の子どもの父親として、山科区民として、すべてのひとが「安心して子供を育てられる」「安心して住める」「安心して老後が過ごせる」街へとなるよう府政を前へ進めます。</p>
            <p>若輩者ですが、取り柄は若さ、行動力、野球で鍛えた体力です。<br>必ず結果を残します。</p>
          </div>
        </div>
      </div>

      <div class="activ_movie">
        <div class="movie_title"><img src="<?php echo get_template_directory_uri(); ?>/images/movie_title.svg"></div>
        <div class="movie_box">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/CRuEIIYyD7w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/llAQw4FY-i8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/om_Iy8UZa64" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="policy" id="policy">
        <div class="policy_title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/policy_title.svg">
        </div>

        <div class="policy_inner_old">

          <div class="policy_01 policy_block">
            <div class="policy01_inner">
              <div class="policy_01_img"><img src="<?php echo get_template_directory_uri(); ?>/images/policy01.svg"></div>
              <div class="policy_01_text">
                <p class="p_main">京都を訪れるほとんどの方が、京都駅から観光をスタートされ、混雑が発生しています。交通需要の集中により通勤・通学など日々の生活が脅かされるだけでなく、京都観光の満足度を低下させつつあります。</p>
                <div class="p01_box">
                  <p class="p_ob"><span>▶︎▶︎</span>京都観光は山科駅から</p>
                  <p class="p_01">山科駅を京都の第２の玄関口（サブゲート）にし、京都にお越しになる皆さんに山科駅から観光をスタートしていただくことで、交通機関の需要が分散され、スムーズな移動ができます。また、毘沙門堂や隋心院、勧修寺など山科にある観光地に多くの方々に訪れていただく機会ができます。</p>
                </div>
                <div class="p01_box">
                  <p class="p_ob"><span>▶︎▶︎</span>京都の新たな玄関口へ</p>
                  <p class="p_01">山科駅を京都観光の新たな玄関口とすることで、山科における雇用の創出、またイメージアップに結び付き、地域の発展に大きく貢献することができると考えています。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="policy_02 policy_block">
            <div class="policy02_inner">
              <div class="policy_02_text">
                <p class="p_main_2">２人の子供をもつ子育て世代の一人として、子供を産み育てやすい環境を実現しなければいけないと考えています。</p>
                <div class="p02_box">
                  <p class="p_ob_2"><span>▶︎▶︎</span>子育て世代の声を届けます</p>
                  <p class="p_02">数字上の待機児童ゼロを目指すだけではなく、例えば、一人目と二人目のお子さんが別の保育園に通わないといけない状況を無くすなど、実際に子育てをする皆さんの悩みや体験を伺い課題を認識し、解決していきます。</p>
                </div>
                <div class="p02_box">
                  <p class="p_ob_2"><span>▶︎▶︎</span>子どもたちの未来のために</p>
                  <p class="p_02">生まれた環境や親の所得によって子供たちの未来が左右されることがないよう、すべての子供たちに等しくチャンスが与えられる社会の実現を目指します。</p>
                </div>
                <div class="p02_box">
                  <p class="p_ob_2"><span>▶︎▶︎</span>自分を育ててくれた山科への恩返し</p>
                  <p class="p_02">母子家庭で育ち、ご近所の皆様に面倒を見ていただいた経験から、地域ぐるみで子供を育み見守る温かさや大切さを感じています。地域の皆さんとともに、子育て環境日本一の実現に取り組むことが、山科への恩返しだと考えています。</p>
                </div>
              </div>
              <div class="policy_02_img"><img src="<?php echo get_template_directory_uri(); ?>/images/policy02.svg"></div>
            </div>
          </div>
          <div class="policy_03 policy_block">
            <div class="policy03_inner">
              <div class="policy_03_img"><img src="<?php echo get_template_directory_uri(); ?>/images/policy03.png"></div>
              <div class="policy_03_text">
                <p class="p_main_3">小さい頃、近所の商店街は活気があり、子供も多く、まちは元気に溢れていました。現在、個人商店は多くが閉店、小学校のクラス数も減少、山科から火が消えてしまったかのようです。</p>
                <div class="p03_box">
                  <p class="p_ob_3"><span>▶︎▶︎</span>高齢者にも優しい山科に</p>
                  <p class="p_03">高齢者が安心して暮らせるまちは、みんなが住み良いまち。日々の生活をいきいきと過ごすことができるよう多世代交流の場所をつくることで心も体も健康で長生きできる、子供からお年寄りまで笑顔で活気あふれる山科の実現を目指します。</p>
                </div>
                <div class="p03_box">
                  <p class="p_ob_3"><span>▶︎▶︎</span>“京都に山科があってよかった”という誇りを!!</p>
                  <p class="p_03">JRや地下鉄東西線、また高速道路のI.C.など、恵まれたインフラの今以上の活用と、車も自転車も歩行者も通行しにくい、山科の道の改善で、現在お住まいの方、新たな住居を探す若い世代の方の選択肢として、山科が一番にのぼるような住環境の整備を目指します。</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>


      <div class="profile" id="profile">
        <div class="profile_title"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_title.svg"></div>
        <div class="profile_inner">
          <div class="p_box">
            <div class="p_image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/prof.png">
            </div>
            <div class="prof_text">
              <p class="prof_name"><ruby>梶原<rp>(</rp><rt>かじわら</rt><rp>)</rp>英樹<rp>(</rp><rt>ひでき</rt><rp>)</rp></ruby></p>
              <p class="birth">昭和58年5月6日生まれ</p>
              <div class="p_text">
              <div class="p_t_first">
                <p>大宅小・大宅中・東稜高 卒業</p>
                <p>JR西日本 入社（平成14年）</p>
                <p>車掌（平成15〜26年）</p>
                <p class="prof_s">特急サンダーバード等を担当</p>
                <p>輸送指令員（平成27〜29年）</p>
                <p class="prof_s">緊急時、安全確保と正常運行への回復</p>
                <p>安全推進室（平成29年〜）</p>
                <p class="prof_s">鉄道の安全性を向上させる仕事</p>
                <p>京都府議会議員（平成31年〜）</p>
              </div>
              <p class="prof_r">[役歴] 現・東稜高校硬式野球部OB会副会長<br>
              百々消防分団 団員<br>
              百々体育振興会 庶務<br>
              保護司<br>
              大宅アトムズ　顧問<br>
              東山ボーイズ　顧問</p>
              <p class="prof_r">[趣味] 野球、ソフトボール、ソフトバレー、卓球、バドミントン、星空観測</p>
              <p class="prof_r">[家族] 妻（パート）、息子一人、娘一人</p>
            </div>
            </div>
          </div>
          <div class="p_suishin">
            <div class="hukidashi">
            <div class="su_text">
              <p class="su_title">私も応援します！</p>
              <p>明るくバイタリティー溢れる梶原英樹さん。
              京都・山科を、より活気あるまちにするためには、梶原さんのような発信力と行動力のある方が必要です。
              みなさんと共に歩む京都府政へ。私も全力で応援します。
              </p>
              <p class="s_name"><span>衆議院議員</span><span>前原 誠司</span></p>
            </div>
            </div>
            <div class="su_image">
              <p>私も応援します！</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/suishin_image.jpg">
            </div>
          </div>
        </div>
      </div>

      <div class="contact" id="contact">
        <div class="contact_title"><img src="<?php echo get_template_directory_uri(); ?>/images/contact_title.svg"></div>
        <div class="contact_box">
          <p class="box_inner_title">以下のフォームに必要事項をご記入の上、送信してください。<br>※お問合せフォームからのセールス・勧誘等へは、送信いただいても対応いたしかねますので<span class="aks">予めご了承ください。</span></p>
          <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]');?>
          <p class="recaptcha_policy">このサイトはreCAPTCHAとGoogleによって保護されています。<a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a>と <a href="https://policies.google.com/terms" target="_blank">利用規約</a>が適用されます。</p>
        </div>
      </div>

      <?php get_footer(); ?>
