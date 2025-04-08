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

      <div class="cal">
    
      </div>


      <div class="information" id="information">

        <div class="info_title"><img src="<?php echo get_template_directory_uri(); ?>/images/info_title.svg"></div>

        <div class="news-lit">
<div class="news-lit-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2501_kyosuki_news_front.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/2501_kyosuki_news_back.jpg">
</div>
          
        <div class="youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xiwY2xeD58I?si=GBavmDdARoJNiUut" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        </div>

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
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>を発行しました。</a>
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
              <a href="https://twitter.com/kajiwarahideki" target="_blank" class="sns_btn tw_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter_btn_logo.svg"></a>
              <a href="https://www.instagram.com/h.kajiwara/" target="_blank" class="sns_btn in_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/insta_btn_logo.svg"></a>
              <a href="https://www.youtube.com/channel/UCXQrD6NPHAo4pNXDk9cxh1w" target="_blank" class="sns_btn yo_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube_btn_logo.svg"></a>
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
          <iframe width="560" height="315" src="https://www.youtube.com/embed/om_Iy8UZa64" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="policy" id="policy_fst">

      <div class="policy_new_title"><img src="<?php echo get_template_directory_uri(); ?>/images/pol-new-tit.svg"></div> 

        <div class="bg_border first_border">
          <img src="<?php echo get_template_directory_uri(); ?>/images/bg_train.png" alt="">
        </div>

        <div class="policy_inner policy_inner_fst">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pol-tit-1.svg" class="pol-tit-1">
            <div class="policy_inner_block p_i_b_1">

              <div class="pol_inner_flex pol_inner_flex_1">
                <div class="pol_inner_flex_box pol_flex_text">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol_flex_yer_1.svg" class="pol-yer pol-yer-1">
                  <p>かじわら英樹は1983年に山科区東野で生まれました。<br>母子家庭で、私を育てるために働き詰めだった母。<br>でもご近所のみなさんが良く面倒を見てくれました。</p>
                </div>
                <div class="pol_inner_flex_box pol_flex_pic">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-1.png" alt="" class="pol-bt-1">
                </div>
              </div>
            </div>

            <div class="policy_inner_block p_i_b_2">
              <div class="pol_inner_flex pol_inner_flex_2">
                <div class="pol_inner_flex_box pol_flex_text_2">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol_flex_yer_2.svg" class="pol-yer pol-yer-2">
                </div>
                <div class="pol_inner_flex_box pol_flex_pic_2">
                  <p>地元の大宅小・大宅中・東稜高校を卒業。高校時代は野球部で仲間の大切さを学びました。</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-2.png" alt="" class="pol-bt-2">
                </div>
                <div class="pol_inner_flex_box pol_flex_pic_2">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-3.png" alt="" class="pol-bt-3">
                  <p>現在も大宅アトムズ・京都東山ボーイズ/レッドベアーズの顧問として地域の野球を応援しています。</p>
                </div>
              </div>
            </div>

            <div class="policy_inner_block p_i_b_3">
              <div class="pol_inner_flex pol_inner_flex_3">
                <div class="pol_inner_flex_box pol_flex_wrap">
                  <div class="pol_flex_wrap_top">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pol_flex_yer_3.svg" class="pol-yer pol-yer-3">
                    <p>卒業後は世の中に貢献できる仕事に就きたいと JR西日本に入社。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-4.png" class="pol-bt-4">
                  </div>
                  <div class="pol_flex_wrap_bottom">
                    <div class="pol_flex_wrap_inner">
                      <span>2003-2014</span>
                      <p>車掌 特急サンダーバード等を担当</p>
                      <span>2015-2017</span>
                      <p>輸送指令員</p>
                      <span>2017-2018</span>
                      <p>安全推進室</p>
                    </div>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-5.png" class="pol-bt-5">
                  </div>
                </div>
                <div class="pol_inner_flex_box pol_flex_pic_3">
                  <p>乗客目線で考えることをモットーに、どうしたら安全で快適に駅や電車を利用いただけるのかを考え、様々なことを提案してきました。</p>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-6.png" alt="">
                </div>
              </div>
            </div>

            <div class="policy_inner_block p_i_b_4">
              <div class="pol_inner_flex pol_inner_flex_4">
                <div class="pol_inner_flex_box pol_flex_pic_4">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol_flex_yer_4.svg" class="pol-yer pol-yer-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-7.png" class="pol-bt-7">
                  <p>小さい時からお世話になったご近所のみなさん、そして今は亡き、大力食堂のお母さんに「人の役に立つよう頑張れ」と言われ、立候補を決意。忘れられない思い出です。</p>
                </div>
                <div class="pol_inner_flex_box pol_flex_pic_4">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol_flex_yer_5.svg" class="pol-yer pol-yer-5">
                  <p>たくさんの人に支えられ、4月 京都府議会議員選挙当選</p>
                  <div class="pol_flex_pic_4_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-8.png" class="pol-bt-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pol-bt-9.png" class="pol-bt-9">
                  </div>
                </div>
              </div>
            </div>
        </div>


        <div class="policy_inner_2_tit">
          
          <div class="policy_inner_2_tit_block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pol-giin-image.png" class="pol-giin-image">
            <div> 
              <h2>かじわら英樹 <span class="aks">4年間の実績</span></h2>
              <p>みなさんからの声を聞き、府議会で提案し、実現しました！</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/pol-tit-2.svg" class="pol-tit-2">
          </div>
          <div class="bg_border">
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/kosodate-tit.svg" alt="" class="kosodate-tit">
        </div>
        

        <div class="policy_inner policy_inner_2">
          <div class="pol_inner_flex pol_inner_flex_2">
            <div class="pol_inner_flex_text">
              <p class="pol-strong">きょうと子育て<span class="aks">応援レーン</span></p>
              <p class="pol-weight">旅券事務所、運転免許更新センター等において、妊婦やお子様連れの申請者に対する優先受付を実施</p>
              <div class="pol_inner_flex_text_bottom">
                <p>泣き出したり、ベビーカーが他の方の邪魔にならないか心配…などお子様連れの外出を応援します。</p>
              </div>
            </div>
            <div class="pol_inner_flex_image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pol-giin-img1.png" alt="" class="pol-giin-img1">
            </div>
          </div>
          <div class="pol_inner_flex pol_inner_flex_2">
            <div class="pol_inner_flex_text">
              <p class="pol-strong pol-strong-2">外出・移動支援<span class="aks">モデル事業</span></p>
              <p class="pol-weight">府内の複数の商店街やコンビニエンスストアと連携し、お子様連れでの外出を応援する「きょうと子育て応援施設」を展開</p>
              <div class="pol_inner_flex_text_bottom">
                <p>授乳室がトイレにしかない,キレイな場所でお世話したいなどの声が形になりました！</p>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/kaji-ok.png" alt="" class="kaji-ok">
            </div>
            <div class="pol_inner_flex_image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pol-giin-img2.png" alt="" class="pol-giin-img2">
            </div>
          </div>
          <div class="pol_inner_flex pol_inner_flex_2">
            <div class="pol_inner_flex_text">
              <p class="pol-strong">リトルベビー<span class="aks">ハンドブック</span></p>
              <p class="pol-weight">生まれてきた時の体重が2500g未満の低出生体重児は京都府で年間およそ1600人。<br>先輩ママたちが立ち上がり、リトルベビーの親に寄り添うハンドブック作成へ</p>
              <div class="pol_inner_flex_text_bottom">
                <p>一般的な母子手帳では思ったように記録することができない、母子健康手帳を見るたびに落ち込んでしまうという声から作られました。</p>
              </div>
            </div>
            <div class="pol_inner_flex_image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/littlebaby.png" alt="" class="pol-giin-img3">
            </div>
          </div>

        </div>


        <div class="policy_inner_2_tit policy_inner_an_tit">
          <div class="bg_border">
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/anzen-tit.svg" alt="" class="kosodate-tit">
        </div>

        <div class="policy_an_block">
          <div class="policy_inner policy_inner_an">
            <div class="pol_inner_flex pol_inner_flex_an">
              <div class="pol_inner_flex_image">
                <div class="comm-block">
                  <div class="comment balloon-under">
                    <p>旧安祥寺川の治水対策</p>
                  </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/anshin1.png" alt="" class="anshin1">
              </div>
              <div class="pol_inner_flex_text">
                <p>2021年8月の大雨の際、増水し濁流があふれた御陵原西町、山ノ谷の旧安祥寺川の嵩上げ工事が実現しました。</p>
              </div>
            </div>
          </div>
  
          <div class="policy_inner policy_inner_an">
            <div class="pol_inner_flex pol_inner_flex_an">
              <div class="pol_inner_flex_image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/anshin2.png" alt="" class="anshin2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/anshin3.png" alt="" class="anshin3">
              </div>
              <div class="pol_inner_flex_text">
                  <div class="comm-block">
                    <div class="comment balloon-under">
                      <p>わかりやすい表示へ</p>
                    </div>
                  </div>
                <p>誤って侵入する車両が多かった小野学区の時間帯通行禁止の場所に注意看板の設置が実現しました。</p>
              </div>
            </div>
          </div>
  
          <div class="policy_inner policy_inner_an">
            <div class="pol_inner_flex pol_inner_flex_an">
                <div class="comm-block">
                  <div class="comment balloon-under">
                    <p>きれいな山科川へ</p>
                  </div>
                </div>
              <div class="pol_inner_flex_image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/anshin4.png" alt="" class="anshin4">
              </div>
              <div class="pol_inner_flex_text">
                <p>山科区に19箇所、「夢とゴミは捨てないで」の心に刺さる看板設置が実現しました。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/kaji-check.png" alt="" class="kaji-check">
              </div>
            </div>
          </div>
  
          <div class="policy_inner policy_inner_an">
            <div class="pol_inner_flex pol_inner_flex_an">
              <div class="comm-block">
                <div class="comment balloon-under">
                  <p>特急はるか、山科駅に停車</p>
                </div>
              </div>
              <div class="pol_inner_flex_text">
                <p>通過していた関空特急はるか号が山科駅にすべて停車。通勤にも便利に。</p>
              </div>
              <div class="pol_inner_flex_image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/anshin5.png" alt="" class="anshin5">
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="policy" id="policy">
        <div class="policy_title"><img src="<?php echo get_template_directory_uri(); ?>/images/policy_title.svg"></div> 

        <div class="policy_kyoto">
          <div class="policy_kyoto_tit">
            <img src="<?php echo get_template_directory_uri(); ?>/images/policy-inner-tit.png" alt="" class="pol_in_tit">
          </div>

          <div class="policy_kyoto_wrap">

            <div class="policy_kyoto_block">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pol-kyoto-1.png" alt="" class="pol-kyoto-1">
              <div class="policy_kyoto_block_tit">
                <p>教育で京都を<span class="aks">立て直す！</span></p>
              </div>
              <div class="policy_kyoto_block_text">
                <p>生まれた環境や親の所得によって子どもたちの未来が左右されることがないよう、すべての子供たちに等しくチャンスが与えられる社会の実現を目指します。<br
                  >塾や習い事、部活動にもお金がかかります。<br
                  >親の所得格差が子どもの教育格差をもたらしているのは納得できません。<br
                  >塾や習い事・部活動に使える引換券を配り、すべての子どもが夢や希望を持てる社会を目指します。<br
                  >また、事実30年間、日本の平均賃金は上がっていません。<br
                  >賃金は上がらない、子どもの数は減る。<br
                  >しかし大学の数は増え、入学金や授業料は年々上がり、親や子の負担は昔と比べものにならず、出生率にも大きく影響しています。<br
                  >加えて、自治体に委ねられている学校給食や医療費の負担（特に0歳〜18歳）について国から強くサポートをするべきだと京都から訴え、家庭の負担を軽減するとともに、子育て家庭が孤立することなく、見守られ支えられていると感じられるよう地域や企業をはじめ、ひとりひとりの意識・行動を変え、子育て世代が住みやすいまちづくりを力強く推進します。</p>
              </div>
            </div>
            <div class="kyoto_bg_border"></div>

            <div class="policy_kyoto_block">

              <div class="policy_kyoto_block_tit policy_kyoto_block_tit_2">
                <p>誰もが安心して<span class="aks">暮らせる京都</span></p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/pol-kyoto-2.png" alt="" class="pol-kyoto-2">
              </div>
              <div class="policy_kyoto_block_text">
                <p>先人の苦労があり、いま、私たちは当たり前に暮らしています。<br
                >これまでの日本を築き、守ってくれた方々への感謝の気持ちは絶対に忘れてはいけません。<br
                >前述した教育や子育て環境の充実を進める一方で、誰もが安心して、日々の生活をいきいきと過ごすことができる社会を目指します。<br
                >そのために、多世代交流の場所をつくることや高齢者の介護予防・フレイル対策等を進める必要もあり、今まで以上に「予防」という観点に注力することが重要だと考えます。<br
                >またSDGsにも掲げられている“持続可能な経済成長及び働きがいのある雇用の促進”として、働く者の立場で長時間労働の是正も含めて柔軟な働き方を推進し、さらに賃金が上がる社会の実現と経済の好循環を目指します。<br
                >「安心して暮らせる」「安心して仕事ができる」「安心して老後を過ごせる」社会を目指し、心も体も健康で長生きできる、子供からお年寄りまで笑顔で活気あふれる京都の実現を目指します。
                </p>
              </div>
            </div>
            <div class="kyoto_bg_border"></div>

            <div class="policy_kyoto_block">
              
              <div class="policy_kyoto_block_tit policy_kyoto_block_tit_3">
                <p>山科の発展なくして<span class="aks">京都の発展なし</span></p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/yamashina.png" alt="" class="y-m-text">
              </div>
              <div class="policy_kyoto_block_flex">
                <div class="policy_kyoto_block_text">
                  <p>京都を訪れる方のほとんどが、京都駅から観光をスタートされることで混雑が発生しています。<br
                    >交通需要の集中により通勤・通学など日々の生活が脅かされるだけでなく、京都観光の満足度を低下させつつあります。<br
                    >そこで！ 山科が今こそチャンスです！<br
                    >2024年春には北陸新幹線（現在は東京～金沢）が敦賀まで延伸し、北陸・甲信越地方から京都が近くなります。この機を逃さず山科駅に特急サンダーバード号を停車させ、山科から京都観光をスタートしていただく仕組みができれば山科の魅力を多くの方に知っていただく機会にもなります。<br
                    >また2023年春には大阪駅に直結する「仮称：うめきた（大阪）地下駅」が開業し、関西空港へのアクセスおよび広域ネットワークの強化に大きく貢献することが期待されています。<br
                    >加えて、サンダーバード号が関西空港まで延長運転するよう力強く推進し、山科の活性化に一層取組んで参ります。
                  </p>
                </div>
                <div class="policy_kyoto_block_image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol-kyoto-3.png" alt="" class="pol-kyoto-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pol-kyoto-4.png" alt="" class="pol-kyoto-4">
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
                <p>京都府議会議員（平成31年〜）現在二期目</p>
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
