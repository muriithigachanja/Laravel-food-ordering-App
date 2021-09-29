<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $fillable = [
        'logo', 'site_name', 'tagline', 'sidebar_content', 'contact_text', 'contact_btn_label', 'contact_btn_link', 'footer', 'header_pdf', 'footer_pdf', 'footer_csv', 'logo_active', 'title_active', 'about_active', 'primary_color', 'secondary_color', 'button_color', 'button_hover_color', 'meta_filter_activate', 'meta_filter_on_label', 'meta_filter_off_label', 'top_background', 'bottom_background', 'bottom_section_active', 'login_content', 'register_content', 'activate_login_home', 'home_page_style', 'activate_religions', 'activate_languages', 'activate_organization_types', 'activate_contact_types', 'activate_facility_types', 'homepage_background', 'banner_text1', 'banner_text2', 'sidebar_content_part_1', 'sidebar_content_part_2', 'sidebar_content_part_3', 'part_1_image', 'part_2_image', 'part_3_image', 'title_link_color', 'top_menu_color'
    ];
}
