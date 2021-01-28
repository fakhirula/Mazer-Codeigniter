<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/index');
	}
	
	public function application_chat()
	{
		$this->load->view('admin/_partials/application-chat');
	}
	
	public function application_checkout()
	{
		$this->load->view('admin/_partials/application-checkout');
	}

	public function application_email()
	{
		$this->load->view('admin/_partials/application-email');
	}

	public function application_gallery()
	{
		$this->load->view('admin/_partials/application-gallery');
	}

	// ---------------------------------------------------------------------------------------------

	public function auth_forgot_password()
	{
		$this->load->view('admin/_partials/auth-forgot-password');
	}

	public function auth_login()
	{
		$this->load->view('admin/_partials/auth-login');
	}

	public function auth_register()
	{
		$this->load->view('admin/_partials/auth-register');
	}

	// ---------------------------------------------------------------------------------------------

	public function component_alert()
	{
		$this->load->view('admin/_partials/component-alert');
	}
	public function component_badge()
	{
		$this->load->view('admin/_partials/component-badge');
	}
	public function component_breadcrumb()
	{
		$this->load->view('admin/_partials/component-breadcrumb');
	}
	public function component_button()
	{
		$this->load->view('admin/_partials/component-button');
	}
	public function component_card()
	{
		$this->load->view('admin/_partials/component-card');
	}
	public function component_carousel()
	{
		$this->load->view('admin/_partials/component-carousel');
	}
	public function component_dropdown()
	{
		$this->load->view('admin/_partials/component-dropdown');
	}
	public function component_list_group()
	{
		$this->load->view('admin/_partials/component-list-group');
	}
	public function component_modal()
	{
		$this->load->view('admin/_partials/component-modal');
	}
	public function component_navs()
	{
		$this->load->view('admin/_partials/component-navs');
	}
	public function component_pagination()
	{
		$this->load->view('admin/_partials/component-pagination');
	}
	public function component_progress()
	{
		$this->load->view('admin/_partials/component-progress');
	}
	public function component_spinner()
	{
		$this->load->view('admin/_partials/component-spinner');
	}
	public function component_tooltip()
	{
		$this->load->view('admin/_partials/component-tooltip');
	}

	// ---------------------------------------------------------------------------------------------

	public function error_403()
	{
		$this->load->view('admin/_partials/error-403');
	}
	public function error_404()
	{
		$this->load->view('admin/_partials/error-404');
	}
	public function error_500()
	{
		$this->load->view('admin/_partials/error-500');
	}
	
	// ---------------------------------------------------------------------------------------------

	public function extra_component_avatar()
	{
		$this->load->view('admin/_partials/extra-component-avatar');
	}
	public function extra_component_divider()
	{
		$this->load->view('admin/_partials/extra-component-divider');
	}
	public function extra_component_rating()
	{
		$this->load->view('admin/_partials/extra-component-rating');
	}
	public function extra_component_sweetalert()
	{
		$this->load->view('admin/_partials/extra-component-sweetalert');
	}
	public function extra_component_toastify()
	{
		$this->load->view('admin/_partials/extra-component-toastify');
	}

	// ---------------------------------------------------------------------------------------------

	public function form_editor_ckeditor()
	{
		$this->load->view('admin/_partials/form-editor-ckeditor');
	}
	public function form_editor_quill()
	{
		$this->load->view('admin/_partials/form-editor-quill');
	}
	public function form_editor_summernote()
	{
		$this->load->view('admin/_partials/form-editor-summernote');
	}
	public function form_editor_tinymce()
	{
		$this->load->view('admin/_partials/form-editor-tinymce');
	}
	public function form_element_checkbox()
	{
		$this->load->view('admin/_partials/form-element-checkbox');
	}
	public function form_element_input_group()
	{
		$this->load->view('admin/_partials/form-element-input-group');
	}
	public function form_element_input()
	{
		$this->load->view('admin/_partials/form-element-input');
	}
	public function form_element_radio()
	{
		$this->load->view('admin/_partials/form-element-radio');
	}
	public function form_element_select()
	{
		$this->load->view('admin/_partials/form-element-select');
	}
	public function form_element_textarea()
	{
		$this->load->view('admin/_partials/form-element-textarea');
	}
	public function form_layout()
	{
		$this->load->view('admin/_partials/form-layout');
	}
	
	// ---------------------------------------------------------------------------------------------

	public function layout_default()
	{
		$this->load->view('admin/_partials/layout-default');
	}
	public function layout_horizontal()
	{
		$this->load->view('admin/_partials/layout-horizontal');
	}
	public function layout_vertical_1_column()
	{
		$this->load->view('admin/_partials/layout-vertical-1-column');
	}
	public function layout_vertical_navbar()
	{
		$this->load->view('admin/_partials/layout-vertical-navbar');
	}
	
	// ---------------------------------------------------------------------------------------------

	public function table_datatable()
	{
		$this->load->view('admin/_partials/table-datatable');
	}
	public function table()
	{
		$this->load->view('admin/_partials/table');
	}
	
	// ---------------------------------------------------------------------------------------------

	public function ui_chart_apexcharts()
	{
		$this->load->view('admin/_partials/ui-chart-apexcharts');
	}
	public function ui_chart_chartjs()
	{
		$this->load->view('admin/_partials/ui-chart-chartjs');
	}
	public function ui_file_uploader()
	{
		$this->load->view('admin/_partials/ui-file-uploader');
	}
	public function ui_icons_bootstrap_icons()
	{
		$this->load->view('admin/_partials/ui-icons-bootstrap-icons');
	}
	public function ui_icons_dripicons()
	{
		$this->load->view('admin/_partials/ui-icons-dripicons');
	}
	public function ui_icons_fontawesome()
	{
		$this->load->view('admin/_partials/ui-icons-fontawesome');
	}
	public function ui_map_google_map()
	{
		$this->load->view('admin/_partials/ui-map-google-map');
	}
	public function ui_map_jsvectormap()
	{
		$this->load->view('admin/_partials/ui-map-jsvectormap');
	}
	public function ui_widgets_chatbox()
	{
		$this->load->view('admin/_partials/ui-widgets-chatbox');
	}
	public function ui_widgets_pricing()
	{
		$this->load->view('admin/_partials/ui-widgets-pricing');
	}
	public function ui_widgets_todolist()
	{
		$this->load->view('admin/_partials/ui-widgets-todolist');
	}
}
