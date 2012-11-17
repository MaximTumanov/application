<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Error_Handler extends Controller_Template {
 
    public $template = 'templates/default';
 
    public function before()
    {
        parent::before();
 
        $this->template->page = URL::site(rawurldecode(Request::$initial->uri()));
            $this->template->title = 'Выбери свое событие - Anons.dp.ua';
            $this->template->keywords = 'афиша Днепропетровска, афиша Днепропетровск';
            $this->template->description = 'Ищете что посмотреть в Днепропетровске или не знаете куда пойти в Днепропетровске? Самая полная афиша Днепропетровска. Хорошо провести Выходной в Днепропетровске.';
            $this->template->image = '';
            $this->template->date = '';
            $this->template->styles_header = array();
            $this->template->styles_footer = array();
            $this->template->scripts = array();
            $this->template->menu = '';
            $this->template->content = '';
            $this->template->footer = '';
            $this->template->debug = array();
            $this->template->use_vkontakte_comment = false;
            $this->template->use_search_widget_in_second_pages = false;

            $anons_config = Kohana::$config->load('anons_config');
            $active_menu = 'home';
            View::bind_global('anons_config', $anons_config);
            View::bind_global('active_menu', $active_menu);
            View::bind_global('use_vkontakte_comment', $this->template->use_vkontakte_comment);
            View::bind_global('use_search_widget_in_second_pages', $this->template->use_search_widget_in_second_pages);
            View::bind_global('use_cap', $anons_config['use_cap']);
        // Если внутренний запрос
        if (Request::$initial !== Request::$current)
        {
            if ($message = rawurldecode($this->request->param('message')))
            {
                $this->template->message = $message;
            }
        }
        else
        {
            $this->request->action(404);
        }
        
        // устанавливаем HTTP статус
        $this->response->status((int) $this->request->action());
    }
 
    public function action_404()
    {
        $this->template->title = '404 Страница не найдена';
 
        // тут мы проверяем пришли попали ли мы на 404 страницу с нашего сайта
        if (isset ($_SERVER['HTTP_REFERER']) AND strstr($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) !== FALSE)
        {
            // устанавливаем влаг о том что 404 ошибка была с внутренней сслки
            $this->template->local = TRUE;
        }
 
        // устанавливаем HTTP статус
        $this->response->status(404);
        $view = View::factory('errors/404');
        $this->template->content = $view->render();
        mail('a.strug.ua@gmail.com', '404 error', $_SERVER['REQUEST_URI'] , "From: anons.dp.ua <noreply@anons.dp.ua>\r\n");
    }
 
    public function action_503()
    {
        $this->template->title = 'Сервис недоступен';
        $view = View::factory('errors/503');
        $this->template->content = $view->render();
        mail('a.strug.ua@gmail.com', '503 error', $_SERVER['REQUEST_URI'] , "From: anons.dp.ua <noreply@anons.dp.ua>\r\n");
    }
 
    public function action_500()
    {
        $this->template->title = 'Внутренняя ошибка сервера';
        $view = View::factory('errors/500');
        $this->template->content = $view->render();
    }
 
    public function after(){
        if($this->auto_render){
            if (Kohana::PRODUCTION) {
                $this->template->styles_header = array(
                    'css/main.pack.css' => 'screen',
                    'css/calendar/calendar-system.css' => 'screen',
                    'css/ui/ui.css' => 'screen'
                );
                $this->template->styles_footer = array();
                $this->template->scripts = array(
                    'js/script.pack.js'
                );          
            } else {
                $this->template->styles_header = array(
                    'css/main.css' => 'screen',
                    'css/calendar/calendar-system.css' => 'screen',
                    'css/ui/ui.css' => 'screen'
                );
                $this->template->styles_footer = array();
                $this->template->scripts = array(
                    'js/jquery.calendar.pack.js',
                    'js/calendar-en.js',
                    'js/jquery.cookie.js',
                    'js/dialog.js',
                    'js/jquery.highlight.js',
                    'js/jquery.scroll_to.js',
                    'js/jquery.ajax_load.js',
                    'js/jquery.ui.js',
                    'js/lazyload.js',
                    'js/script.js'
                    //'js/script.pack.js'
                );              
            }

            $this->template->menu = View::factory('widgets/menu')->render();
            $this->template->footer = View::factory('widgets/footer')->render();            
        }
        parent::after();
    }

} // End Error_Handler