<?php
/**
 * Template name: Members Template
 */

get_header('page');
?>
    <section class="heading">
        <div class="heading__wrap heading__wrap--members">
            <h2 class="heading__title heading__title--members"><?php ; the_title() ?></h2>
            <p class="heading__logo">XVIII <span class="dot">.</span></p>
        </div>
    </section>

    <section class="members">
        <div class="members__wrapper">
            <ul class="members__list default-list">

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>buharkin@1x.jpg" alt="Фото: Петр Евгеньевич Бухаркин" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Петр Евгеньевич <br>Бухаркин</h3>
                            <p class="members__degree">доктор филологических наук</p>
                            <p class="members__text">Профессор кафедры истории русской литературы СПбГУ, руководитель семинара «Русский XVIII век» и студенческого семинара «Русская литература XVIII века», член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>
                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>veselova@1x.jpg" alt="Фото: Александра Юрьевна Веселова" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Александра Юрьевна <br>Веселова</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Научный сотрудник Отдела русской литературы XVIII века ИРЛИ (Пушкинский Дом) РАН, член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>kareva@1x.jpg" alt="Фото: Наталия Владимировна Карева" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Наталия Владимировна <br>Карева</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Старший научный сотрудник отдела «Словарь языка М.&nbsp;В.&nbsp;Ломоносова» ИЛИ РАН. </p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>vlasov@1x.jpg" alt="Фото: Сергей Васильевич Власов" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Сергей Васильевич <br>Власов</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Доцент кафедры французского языка СПбГУ.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>volkov@1x.jpg" alt="Фото: Сергей Святославович Волков" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Сергей Святославович <br>Волков</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Заведущий отделом «Словарь языка М.&nbsp;В.&nbsp;Ломоносова» ИЛИ РАН, член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>kislova@1x.jpg" alt="Фото: Екатерина Игоревна Кислова" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Екатерина Игоревна <br>Кислова</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Доцент кафедры русского языка МГУ имени М.&nbsp;В.&nbsp;Ломоносова, член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>ponomareva@1x.jpg" alt="Фото: Марина Валерьевна Пономарева" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Марина Валерьевна <br>Пономарева</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Старший преподаватель кафедры истории русской литературы СПбГУ, член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>guskov@1x.jpg" alt="Фото: Николай Александрович Гуськов" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Николай Александрович <br>Гуськов</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Доцент кафедры истории русской литературы СПбГУ.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>matveev@1x.jpg" alt="Фото: Евгений Михайлович Матвеев" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Евгений Михайлович <br>Матвеев</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text members__text--more">Доцент кафедры истории русской литературы СПбГУ, старший научный сотрудник отдела «Словарь языка М.&nbsp;В.&nbsp;Ломоносова» ИЛИ РАН, соруководитель студенческого семинара «Русская литература XVIII века», член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>sharihina@1x.jpg" alt="Фото: Миляуша Габдрауфовна Шарихина" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Миляуша Габдрауфовна <br>Шарихина</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Лаборант отдела «Словарь языка М.&nbsp;В.&nbsp;Ломоносова» ИЛИ РАН.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>tiraspolskaja@1x.jpg" alt="Фото: Анна Юрьевна Тираспольская" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Анна Юрьевна <br>Тираспольская</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Доцент кафедры русского языка для гуманитарных и естественных факультетов СПбГУ, член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>rudnev@1x.jpg" alt="Фото: Дмитрий Владимирович Руднев" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Дмитрий Владимирович <br>Руднев</h3>
                            <p class="members__degree">доктор филологических наук</p>
                            <p class="members__text">Доцент кафедры русского языка СПбГУ.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>kretova@1x.jpg" alt="Фото: Евгения Дмитриевна Кретова" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Евгения Дмитриевна <br>Кретова</h3>
                            <p class="members__degree"></p>
                            <p class="members__text">Аспирант кафедры истории русской литературы СПбГУ.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>ulrike@1x.jpg" alt="Фото: Ульрике Екуч" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Ульрике Екуч</h3>
                            <p class="members__degree">Dr. habil.</p>
                            <p class="members__text">Профессор Института славистики Грейфсвальдского университета (Германия), член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>koposova@1x.jpg" alt="Фото: Татьяна Александровна Копосова" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Татьяна Александровна <br>Копосова</h3>
                            <p class="members__degree"></p>
                            <p class="members__text">Аспирант кафедры истории русской литературы СПбГУ.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>cherdakov@1x.jpg" alt="Фото: Дмитрий Наилевич Чердаков" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Дмитрий Наилевич <br>Чердаков</h3>
                            <p class="members__degree"></p>
                            <p class="members__text">Старший преподаватель кафедры русского языка СПбГУ.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>cilina@1x.jpg" alt="Фото: Анастасия Алексеевна Цылина" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Анастасия Алексеевна Цылина</h3>
                            <p class="members__degree"></p>
                            <p class="members__text">Аспирант Брауновского университета (Провиденс, США).</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>levitt@1x.jpg" alt="Фото: Маркус Левитт" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Маркус Левитт</h3>
                            <p class="members__degree">Ph. D.</p>
                            <p class="members__text">Профессор кафедры славянских языков и литератур университета Южной Калифорнии (Лос-Анджелес, США), член редколлегии периодического сборника «Литературная культура России XVIII века».</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>

                <li class="members__item">
                    <ul class="members__profile default-list">
                        <li class="members__photo">
                            <a href="#" class="members__link">
                                <picture>
                                    <img class="members__image" src="<?php echo esc_url( V18_IMG_DIR . '/members/'); ?>tverjanovich@1x.jpg" alt="Фото: Ксения Юрьевна Тверьянович" width="264" height="264">
                                </picture>
                            </a>
                        </li>
                        <li class="members__about">
                            <h3 class="members__name">Ксения Юрьевна <br>Тверьянович</h3>
                            <p class="members__degree">кандидат филологических наук</p>
                            <p class="members__text">Cтарший преподаватель кафедры истории русской литературы СПбГУ.</p>
                        </li>
                    </ul>
                    <ul class="members__slider slider default-list">
                        <li class="slider__item slider__item--current"><span class="visually-hidden">1</span></li>
                        <li class="slider__item"><span class="visually-hidden">2</span></li>
                    </ul>
                </li>
            </ul>

            <p class="members__paragraph paragraph">&sect;4</p>

        </div>
    </section>
<?php
get_footer('all');
