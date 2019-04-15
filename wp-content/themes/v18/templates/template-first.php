<?php
/**
 * Template name: First Page Template
 */

get_header('main');
?>

<section class="about">
        <div class="about__wrapper">
          <h2 class="about__title">О семинаре</h2>
          <div class="about__column">
            <div class="about__texts">
              <p class="about__text about__text--first"><span>C</span>еминар «Русский XVIII век» — это научное сообщество, которое объединяет усилия филологов, занимающихся изучением русского языка и культуры XVIII века в общеевропейском культурном контексте. Он возник на филологическом факультете в 2007 году.</p>
              <p class="about__text">Его целью является многоаспектное панорамное описание и изучение русской литературной культуры XVIII века в их взаимосвязях.</p>
            </div>
            <div class="about__picture">
              <picture>
                <img class="about__image" src="<?php echo esc_url( V18_IMG_DIR . '/'); ?>image1@1x.png" srcset="<?php echo esc_url( V18_IMG_DIR . '/'); ?>image1@2x.png 2x" alt="Гравюра" width="291" height="299">
              </picture>
            </div>
          </div>
        </div>
      </section>

      <section class="tasks">
        <div class="tasks__wrap">
          <p class="tasks__paragraph paragraph">&sect;1</p>
          <div class="tasks__picture">
            <picture>
              <img class="tasks__image" src="<?php echo esc_url( V18_IMG_DIR . '/'); ?>image2@1x.png" srcset="<?php echo esc_url( V18_IMG_DIR . '/'); ?>image2@2x.png 2x" alt="Гравюра" width="232" height="197">
            </picture>
          </div>

          <div class="tasks__pagin"></div>

            <div class="tasks__wrapper">
                <h2 class="tasks__title">Основные задачи</h2>
                <div class="tasks__swiper-container">
                    <div class="tasks__swiper-wrapper">
                        <div class="tasks__swiper-slide">
                            <span class="tasks__number">1.</span>
                            <p class="tasks__text">Cоздание благоприятной научной атмосферы для комплексного исследования русского языка и литературы XVIII века в различных аспектах представителями различных филологических специальностей.</p>
                        </div>
                        <div class="tasks__swiper-slide">
                            <span class="tasks__number">2.</span>
                            <p class="tasks__text">Интеграция внутриуниверситетских подразделений и в расширение научных связей Университета с академическими научными учреждениями.</p>
                        </div>
                        <div class="tasks__swiper-slide">
                            <span class="tasks__number">3.</span>
                            <p class="tasks__text">Регулярное издание периодического сборника «Литературная культура России XVIII века», отражающего в первую очередь достижения университетской науки.</p>
                        </div>
                        <div class="tasks__swiper-slide">
                            <span class="tasks__number">4.</span>
                            <p class="tasks__text">Разработка инновационных информационно-поисковых систем по корпусу текстов русской литературы XVIII века и выработка новых методов электронной обработки и описания классических текстов русской литературы.</p>
                        </div>
                        <div class="tasks__swiper-slide">
                            <span class="tasks__number">5.</span>
                            <p class="tasks__text">Интеграция современной академической науки в университетский учебный процесс, создание учебно-методических комплексов и пособий нового поколения разных типов.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </section>

      <section class="history">
        <div class="history__wrapper">
          <div class="history__side">
            <p class="history__logo">XVIII <span class="dot">.</span></p>
            <p class="history__paragraph paragraph">&sect;2</p>
          </div>
          <div class="history__container">
            <h2 class="history__title">История и традиции</h2>
            <p class="history__text history__text--first">Существование междисциплинарного семинара «Русский XVIII век» именно на базе СПбГУ представляется перспективным в связи с глубокими традициями изучения языка, литературы и культуры XVIII века в стенах филологического факультета. </p>
            <p class="history__text">Здесь работали такие ведущие специалисты в области русской литературы XVIII века как В. Н. Перетц, В. В. Сиповский, Л. В. Пумпянский, Г. А. Гуковский, П. Н. Берков, Г. П. Макогоненко, И. З. Серман. Проблемами истории русского языка этого периода на филологическом факультете занимались А. И. Соболевский, В. В. Виноградов, Б. А. Ларин, Н. А. Мещерский, Г. Н. Акимова. Русско-европейские литературные связи XVIII века были предметом внимания М. П. Алексеева, В. М. Жирмунского, М. В. Разумовской. </p>
            <a href="#" class="history__btn button">Читать подробнее</a>
          </div>
        </div>
      </section>

      <section class="publics">
        <div class="publics__wrapper">
          <h2 class="publics__title">Наши публикации</h2>
          <ul class="publics__list default-list">
            <li class="publics__item">
              <a href="#" class="publics__link">
                <picture>
                  <img class="publics__image" src="<?php echo esc_url( V18_IMG_DIR . '/'); ?>events_pic/book1@1x.jpg" alt="Фото Opera Slavica" width="264" height="260">
                </picture>
              </a>
            </li>
            <li class="publics__item">
              <a href="#" class="publics__link">
                <picture>
                  <img class="publics__image" src="<?php echo esc_url( V18_IMG_DIR . '/'); ?>events_pic/book2@1x.jpg" alt="Фото Риторика" width="264" height="260">
                </picture>
              </a>
            </li>
            <li class="publics__item">
              <a href="#" class="publics__link">
                <picture>
                  <img class="publics__image" src="<?php echo esc_url( V18_IMG_DIR . '/'); ?>events_pic/book3@1x.jpg" alt="Фото Литературные связи" width="264" height="260">
                </picture>
              </a>
            </li>
            <li class="publics__item">
              <a href="#" class="publics__link">
                <picture>
                  <img class="publics__image" src="<?php echo esc_url( V18_IMG_DIR . '/'); ?>events_pic/book4@1x.jpg" alt="Фото Petra Philologica" width="264" height="260">
                </picture>
              </a>
            </li>
          </ul>
          <ul class="publics__slider slider default-list">
              <li class="slider__item"><span class="visually-hidden">1</span></li>
              <li class="slider__item slider__item--current"><span class="visually-hidden">2</span></li>
              <li class="slider__item"><span class="visually-hidden">3</span></li>
              <li class="slider__item"><span class="visually-hidden">4</span></li>
            </ul>
        </div>
        <div class="publics__wrap">
          <p class="publics__paragraph paragraph">&sect;3</p>
          <a href="#" class="publics__btn button">Посмотреть все публикации</a>
        </div>
      </section>
<?php
get_footer('all');