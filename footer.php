    <!-- footer Start -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul id="menu2">
                <li><a href="#">О нас</a></li>
                <li><a href="#">Гарантия и сроки</a></li>
                <li><a href="#">Ремонт</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Контакты</a></li>
              </ul>
            </div>
            <p>Copyright &copy; Crafted by Alexandr Bulgakov.</p>
          </div>
        </div>
      </div>
    </footer>
            
            
  <script>
      document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
      });
    });
  </script>
  
    <?php wp_footer(); ?>
  </body>
</html>