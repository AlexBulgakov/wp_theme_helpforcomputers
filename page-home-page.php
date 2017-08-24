<?php get_header(); ?>
        
    <!-- Slider Start -->
    <section id="slider">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <div class="block">
              <h1 class="animated fadeInUp">ЛУЧШИЙ СЕРВИС APPLE <br>&#38; ЛЮБАЯ СЛОЖНОСТЬ</h1>
              <p class="animated fadeInUp">Большой практический опыт мастеров, современное</br>
              оборудование и наличие комплектующих на складе<br>
              позволяют быстро справиться с проблемами любого<br>
              уровня сложности и эффективно устранить неисправности.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Wrapper Start -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title" id="about">
                <h2>О нас</h2>
                <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рыбного знаках собрал, большого прямо вершину, текст это назад пояс.</p>
              </div>
              <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Океана строчка несколько, первую составитель буквенных толку безорфографичный запятой великий заголовок напоивший моей взгляд ему вершину вопрос, журчит ведущими безопасную обеспечивает рекламных курсивных? Всеми лучше взобравшись, точках раз не скатился своих они живет повстречался щеке гор журчит lorem своих одна жаренные. Первую, собрал, семь. Родного которое подзаголовок снова, подпоясал скатился.</p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="<?php bloginfo( "template_directory" ); ?>/img/wrapper-img.gif" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>

<?php include get_template_directory() . '/price/price.php' ?>

  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-12 right">
        <a name="order-form"></a>
          <div class="section-title">
            <h2>Заявка на ремонт</h2>
          </div>
          <p>*Получи скидку 10% на ремонт при оформлении заявки</p>
          <form id="form" action="send.php" method="post">
            <div class="row">
              <input type="text" name="name" placeholder="Имя" required="required">
            </div>
            <div class="row">
              <input id="phone" type="text" name="phone" placeholder="Ваш телефон" required="required">
              <script type="text/javascript">
                jQuery(function($){
                  $("#phone").mask(" +7(999) 999-99-99");
                });
              </script>
            </div>
            <div class="row">
              <textarea type="text" placeholder="Описание поломки" required="required"></textarea>
            </div>
            <div class="center-align">
                <input type="submit" value="ПОЛУЧИТЬ СКИДКУ" class="btn btn-view-works submit">
            </div>
            <script type="text/javascript">
              $(document).ready(function(){
                  $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form
                        var form_data = $(this).serialize(); //собираем все данные из формы
                        $.ajax({
                        type: "POST", //Метод отправки
                        url: "<?php bloginfo( "template_directory" ); ?>/send-cupon.php", //путь до php фаила отправителя
                        data: form_data,
                        success: function() {
                              //код в этом блоке выполняется при успешной отправке сообщения
                              alert("Ваше сообщение отправлено!");
                              $('#form').find('input[type="text"]').val('');
                              $('#form').find('textarea[type="text"]').val('');
                          }
                  });
                  return false;
              });    
              });
            </script>
          </form>
        </div>
      </div>
    </div>
  </section>
   
    <a id="guarantee"></a>
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <h2>Качественно, гарантия - 3 месяца!</h2>
              <p>Наш сервисный центр предлагает полный спектр услуг по диагностике и ремонту компьютеров от Apple. В нашем распоряжении опыт, профильные знания и специализированный инструментарий для анализа состояния аппарата, быстрого устранения неполадок любого типа.</p>
              <!-- <a class="btn btn-default btn-call-to-action" href="#" >Записаться на ремонт</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Start -->
    <section id="testimonial">
      <div class="container" id="reviews">
        <div class="row">
          <div class="section-title text-center">
            <h2>Несколько фактов о нас</h2>
            <p>Мы стараемся проникнуться проблемой каждого нашего клиента и сделать наш сервис лучше, быстрее, качественее!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="block">
              <ul class="counter-box clearfix">
                <li>
                  <div class="block">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <h4 class="counter">1500</h4>
                    <span>Довольных клиентов</span>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <i class="ion-ios-glasses-outline"></i>
                    <h4 class="counter">300</h4>
                    <span>Уникальных ремонтов</span>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <i class="ion-ios-compose-outline"></i>
                    <h4 class="counter">200</h4>
                    <span>Полезных советов</span>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <i class="ion-ios-timer-outline"></i>
                    <h4 class="counter">35040</h4>
                    <span>Часов мы с вами</span>
                  </div>
                </li>

              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="testimonial-carousel">
              <div id="testimonial-slider" class="owl-carousel">
                  <?php comments_template( '/comments-page.php' ); ?>
              </div>
            </div>
          </div>
        
      </div>
    </section>

    <section id="call-to-action">
      <div class="container" id="guarantee">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <div class="comment">
                <?php       
                    ##
                    ##  Визуализация формы добавления отзывов
                    ##      
                    //поменяем порядок выдачи полей
                    add_filter('comment_form_fields', 'kama_reorder_comment_fields' );
                    function kama_reorder_comment_fields( $fields ){
                      // die(print_r( $fields )); // посмотрим какие поля есть

                      

                      $new_fields = array(); // сюда соберем поля в новом порядке
                      
                      $myorder = array('author','email','comment'); // нужный порядок ,'email'

                      foreach( $myorder as $key ){
                        $new_fields[ $key ] = $fields[ $key ];
                        unset( $fields[ $key ] );
                      }

                      // если остались еще какие-то поля добавим их в конец
                      if( $fields )
                        foreach( $fields as $key => $val )
                          $new_fields[ $key ] = $val;

                      return $new_fields;
                    }
                    
                    
                    $args = array(
                      'fields'      => array(
                                'author' => '<div class="comment-form-author"><input id="author" name="author" type="text" size="30" placeholder="Имя" /></div><br>',
                                'email' => '<div class="comment-form-email"> <input id="email" name="email" type="text" size="30" placeholder="E-mail"/></div><br>',
                                //'url' => '<p class="comment-form-url"><label for="url">Сайт</label> <input id="url" name="url" type="text" value="" size="30" /></p>' //<label for="email">E-mail</label>
                              ),
                      'comment_field'        => '<div class="textAreaSize"><label for="comment"> Текст отзыва</label> <textarea id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea></div>', //' . _x( 'Comment', 'noun' ) . '
                      // изменим название кнопки
                      'label_submit'    => 'Отправить отзыв',
                      'class_submit'    => 'sc_contact_form_submit btn btn-default btn-call-to-action',
                      'submit_button'   => '<button name="%1$s" type="submit" id="%2$s" class="%3$s"/>%4$s</button>',
                      'submit_field'    => '<p class="squareButton sc_button_size sc_button_style_global global">%1$s %2$s</p>',
                      'title_reply'       => 'Заполните все поля',
                      'comment_notes_before' => '',
                    );
                    //Оставьте свой отзыв
 
                comment_form($args); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonial">
      <div class="container" id="contact">
        <div class="row">
          <div class="col-md-5">
            <h3>HELP FOR APPLE</h3>
            <p>Сервис по ремонту техники APPLE</p>
            <p>Адрес: г. Санкт-Петербург,<br>
            <img src="<?php bloginfo( "template_directory" ); ?>/img/logo-peterburgskiy-metropoliten-300x244.png" width="25" height="20" alt="">Петроградская,<br>
            Большой проспект ПС 76-78,<br>
            2-й этаж, М офис, код домофона 39</p>
            <p>Телефон: +7 (812) 993-76-33</p>
            <p>Email: info@help4apple.ru</p>
            <h4>НАШ ГРАФИК РАБОТЫ:</h4>
            <p>пн — пт  — с 11:00 до 20:00,<br>
            сб — вс — с 12:00 до 20:00</p>
            <p>Мы будем рады помочь устранить поломки<br>
            Вашего девайса!</p>
          </div>
        
          <div class="col-md-7">
            <div class="wpb_wrapper">
              <div class="wpb_map_wraper">
                <iframe src="https://www.google.com/maps/d/embed?mid=1tT2GwvcKvvoDrjb2kxr50cdnnD0" style="border: 0px none; width: 100%; pointer-events: none;" allowfullscreen="" height="500"></iframe>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    
<?php get_footer();