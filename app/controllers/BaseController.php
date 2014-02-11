<?php

class BaseController extends Controller {

    protected $theme = '';

    public function __construct()
    {
        $this->theme = Input::get('theme') ? Input::get('theme') : Config::get('theme.active');
        $this->data['theme'] = $this->theme;
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    // retrieves the controller's related files if it exists.
    protected function _get_script($_file)
    {
        header("Expires: Thu, 19 Nov 1981 08:52:00 GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");

        $_array = explode(DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR, $_file);
        $cnt = count($_array);

        if (strpos($_array[$cnt - 1], '.') === false) {
            $_array[$cnt - 1] .= '.php';
        }
        $script_name = substr($_array[$cnt - 1], 0, -14);
        $script_name = str_replace('\\', '/', $script_name);

        // js
        if (file_exists('themes' . DIRECTORY_SEPARATOR . $this->theme . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . strtolower($script_name) . '.js')) {
            if (fopen(asset('themes' . DIRECTORY_SEPARATOR . $this->theme . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . strtolower($script_name) . '.js'), 'r')) {
                $this->data['controller_js'] = strtolower($script_name) . '.js';
            }
        }

        // css
        if (file_exists('themes' . DIRECTORY_SEPARATOR . $this->theme . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . strtolower($script_name) . '.css')) {
            if (fopen(asset('themes' . DIRECTORY_SEPARATOR . $this->theme . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . strtolower($script_name) . '.css'), 'r')) {
                $this->data['controller_css'] = strtolower($script_name) . '.css';
            }
        }
    }

    protected function _template_data($blade_file, $layout = 'site')
    {
        $blade_file = $this->theme . ".{$blade_file}";

        if (Request::is('adm*')) {
            $this->layout = View::make($this->theme . '.adm-master');
        } else if (Request::is('login*')) {
            $this->layout = View::make($this->theme . '.adm-login-master');
        } else {
            $this->layout = View::make($this->theme . '.master');
        }

        foreach ($this->data as $k => $v) {
            $this->layout->$k = $v;
        }

        $this->layout->content = View::make($blade_file, $this->data);
    }

    protected function _set_blade_master_file($master_layout)
    {
        $this->layout = View::make($master_layout);
    }

    public function paginate($items, $page = 1, $per_page = 5)
    {
        $offset = ($page * $per_page) - $per_page;

        $total_items = count($items);
        $total_pages = ceil($total_items / $per_page);
        $sliced_items = array_slice($items, $offset, $per_page);

        return array('items' => $sliced_items, 'paginator' => Paginator::make($sliced_items, $total_items, $per_page));
    }
}