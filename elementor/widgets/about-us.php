<?php
class Careox_About_Us extends \Elementor\Widget_Base {

	public function get_name() {
		return 'careox_about_us';
	}

	public function get_title() {
		return esc_html__( 'About Us', 'careox' );
	}

	public function get_icon() {
		return 'eicon-text-area';
	}

	public function get_categories() {
		return [ 'careox-cat' ];
	}

	public function get_keywords() {
		return [ 'about us', 'careox', 'widget' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
			'cx_about_us_section_heading',
			[
				'label' => esc_html__( 'About Heading', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'cx_about_us_title',
			[
				'label'         => esc_html__( 'Title', 'careox-core' ),
				'type'          => \Elementor\Controls_Manager::TEXT,
				'default'       => esc_html__( 'We Believe This Lifes About Give For Poor People.', 'careox-core' ),
                'label_block'   => true
			]
		);

		$this->add_control(
			'cx_about_us_title_tags',
			[
				'label' => esc_html__( 'Title Tags', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h3',
				'options' => [
					'h1' => __('H1', 'careox-core'),
					'h2' => __('H2', 'careox-core'),
					'h3' => __('H3', 'careox-core'),
					'h4' => __('H4', 'careox-core'),
					'h5' => __('H5', 'careox-core'),
					'h6' => __('H6', 'careox-core'),
				],
				'label_block'   => true
			]
		);

        $this->add_control(
			'cx_about_us_sub_title',
			[
				'label'         => esc_html__( 'Sub Title', 'careox-core' ),
				'type'          => \Elementor\Controls_Manager::TEXT,
				'default'       => esc_html__( 'OUR ABOUT US', 'careox-core' ),
                'label_block'   => true,
				'separator'	=> 'before'
			]
		);

		$this->add_control(
			'cx_about_us_sub_title_tags',
			[
				'label' => esc_html__( 'Sub Title Tags', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h6',
				'options' => [
					'h1' => __('H1', 'careox-core'),
					'h2' => __('H2', 'careox-core'),
					'h3' => __('H3', 'careox-core'),
					'h4' => __('H4', 'careox-core'),
					'h5' => __('H5', 'careox-core'),
					'h6' => __('H6', 'careox-core'),
				],
				'label_block'   => true
			]
		);

        $this->add_control(
			'cx_about_us_desc',
			[
				'label'         => esc_html__( 'Description', 'careox-core' ),
				'type'          => \Elementor\Controls_Manager::TEXTAREA,
				'default'       => esc_html__( 'Poor address a range of simply application and infrastructure this of passages of available, but the majority have suffered poor alteration in some form.', 'careox-core' ),
                'label_block'   => true,
				'separator'	=> 'before'
			]
		);



        $this->add_control(
			'cx_about_us_show_content_box',
			[
				'label' => esc_html__( 'Show Content Box', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'Show or Hide Content. Default: Show',
				'label_on' => esc_html__( 'Show', 'careox-core' ),
				'label_off' => esc_html__( 'Hide', 'careox-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before'
			]
		);

        $content_box = new \Elementor\Repeater();

		$content_box->add_control(
			'cx_about_us_content_box_title_icon',
			[
				'label' => esc_html__( 'Icon Class', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'add icon class' , 'careox-core' ),
				'label_block' => true,
			]
		);

		$content_box->add_control(
			'cx_about_us_content_box_title',
			[
				'label' => esc_html__( 'Title', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'add new title' , 'careox-core' ),
				'label_block' => true,
			]
		);

		$content_box->add_control(
			'cx_about_us_content_box_desc_icon',
			[
				'label' => esc_html__( 'Icon Class', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'icofont-check-circled' , 'careox-core' ),
				'label_block' => true,
			]
		);
        
		$content_box->add_control(
			'cx_about_us_content_box_desc',
			[
				'label' => esc_html__( 'Description', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'add new description' , 'careox-core' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'cx_about_us_content_box_list',
			[
				'label' => esc_html__( 'Content Box List', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $content_box->get_controls(),
				'default' => [
					[
						'cx_about_us_content_box_title_icon' 	=> esc_html__( 'icon-zakat', 'careox-core' ),
						'cx_about_us_content_box_title'			=> esc_html__( 'Treatment Help', 'careox-core' ),
						'cx_about_us_content_box_desc' 			=> esc_html__( 'No matter what you you have.', 'careox-core' ),
                    ],
					[
						'cx_about_us_content_box_title_icon' 	=> esc_html__( 'icon-charity', 'careox-core' ),
						'cx_about_us_content_box_title' 		=> esc_html__( 'Help Raising', 'careox-core' ),
						'cx_about_us_content_box_desc' 			=> esc_html__( 'No matter what you you have.', 'careox-core' ),
                    ]
				],
				'title_field' => '{{{ cx_about_us_content_box_title }}}',
			
                'condition' => [
                    'cx_about_us_show_content_box' => 'yes',
                ],
			]
		);

        $this->add_control(
			'cx_about_us_show_content_list',
			[
				'label' => esc_html__( 'Show Content List', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'Show or Hide Content. Default: Show',
				'label_on' => esc_html__( 'Show', 'careox-core' ),
				'label_off' => esc_html__( 'Hide', 'careox-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before'
			]
		);

        $content_list = new \Elementor\Repeater();

		$content_box->add_control(
			'cx_about_us_content_list_icon',
			[
				'label' => esc_html__( 'Icon Class', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'icofont-check-circled' , 'careox-core' ),
				'label_block' => true,
			]
		);
        
		$content_list->add_control(
			'cx_about_us_content_list_title',
			[
				'label' => esc_html__( 'Title', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'add new description' , 'careox-core' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'cx_about_us_content_list',
			[
				'label' => esc_html__( 'Content List', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $content_list->get_controls(),
				'default' => [
					[
						'cx_about_us_content_list_title' => __( 'We help companies develop powerful corporate social <a href="about.html">Responsibility,</a>', 'careox-core' ),
                    ],
					[
						'cx_about_us_content_list_title' => esc_html__( 'Helped fund 3,265 Project powerful corporate poor. ', 'careox-core' ),
					]
				],
				'title_field' => '{{{ cx_about_us_content_list_title }}}',
				'prevent_empty' => false,
                'condition' => [
                    'cx_about_us_show_content_list' => 'yes',
                ],
			]
		);


        $this->add_control(
			'cx_about_us_show_btn',
			[
				'label' => esc_html__( 'Show Button', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'Show or Hide Button. Default: Show',
				'label_on' => esc_html__( 'Show', 'careox-core' ),
				'label_off' => esc_html__( 'Hide', 'careox-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before'
			]
		);

        $this->add_control(
			'cx_about_us_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'About More' , 'careox-core' ),
				'label_block' => true,
                'condition' => [
                    'cx_about_us_show_btn' => 'yes',
                ],
			]
		);

        $this->add_control(
			'cx_about_us_btn_url',
			[
				'label' => esc_html__( 'Button Link', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
                'condition' => [
                    'cx_about_us_show_btn' => 'yes',
                ],
			]
		);

		$this->end_controls_section();


        $this->start_controls_section(
			'cx_about_us_section_image',
			[
				'label' => esc_html__( 'About Images', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'cx_about_us_section_image_one',
			[
				'label' => esc_html__( 'Choose Image One', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'cx_about_us_section_image_two',
			[
				'label' => esc_html__( 'Choose Image Two', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
                'separator' => 'before'
			]
		);

		$this->end_controls_section();



        $this->start_controls_section(
			'cx_about_us_section_media',
			[
				'label' => esc_html__( 'Media', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'cx_about_us_media_video_icon',
			[
				'label' => esc_html__( 'Video Icon', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
			]
		);

        $this->add_control(
			'cx_about_us_media_video_link',
			[
				'label' => esc_html__( 'Video Link', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'cx_about_us_media_text',
			[
				'label' => esc_html__( 'Media Text', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Always Support Us! ' , 'careox-core' ),
				'label_block' => true,
			]
		);


		$this->end_controls_section();


        $this->start_controls_section(
			'cx_about_us_section_shape_image',
			[
				'label' => esc_html__( 'Shape Images', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'cx_about_us_show_shape_one',
			[
				'label' => esc_html__( 'Show Shape Image', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'Show or Hide Shape Image. Default: Show',
				'label_on' => esc_html__( 'Show', 'careox-core' ),
				'label_off' => esc_html__( 'Hide', 'careox-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'cx_about_us_section_shape_image_one',
			[
				'label' => esc_html__( 'Choose Image One', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => XPOVIO_CORE_BASE_URL . "assets/images/shapes/about-1-shape-1.png",
				],
			]
		);

        $this->add_control(
			'cx_about_us_show_shape_two',
			[
				'label' => esc_html__( 'Show Shape Image', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'Show or Hide Button. Default: Show',
				'label_on' => esc_html__( 'Show', 'careox-core' ),
				'label_off' => esc_html__( 'Hide', 'careox-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before'
			]
		);

        $this->add_control(
			'cx_about_us_section_shape_image_two',
			[
				'label' => esc_html__( 'Choose Image Two', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => XPOVIO_CORE_BASE_URL . "assets/images/shapes/about-1-shape-2.png",
				],
			]
		);

        $this->add_control(
			'cx_about_us_show_shape_three',
			[
				'label' => esc_html__( 'Show Shape Image', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'Show or Hide Button. Default: Show',
				'label_on' => esc_html__( 'Show', 'careox-core' ),
				'label_off' => esc_html__( 'Hide', 'careox-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before'
			]
		);

        $this->add_control(
			'cx_about_us_section_shape_image_three',
			[
				'label' => esc_html__( 'Choose Image Three', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => XPOVIO_CORE_BASE_URL . "assets/images/shapes/about-1-shape-3.png",
				],
			]
		);

        $this->add_control(
			'cx_about_us_show_shape_four',
			[
				'label' => esc_html__( 'Show Shape Image', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
                'description' => 'Show or Hide Button. Default: Show',
				'label_on' => esc_html__( 'Show', 'careox-core' ),
				'label_off' => esc_html__( 'Hide', 'careox-core' ),
				'return_value' => 'yes',
				'default' => 'yes',
                'separator' => 'before'
			]
		);

        $this->add_control(
			'cx_about_us_section_shape_image_four',
			[
				'label' => esc_html__( 'Choose Image Four', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => XPOVIO_CORE_BASE_URL . "assets/images/shapes/about-1-shape-4.png",
				],
			]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'cx_about_us_section_donations_us',
			[
				'label' => esc_html__( 'Donations Us', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'cx_about_us_section_donations_us_content',
			[
				'label' => esc_html__( 'Media Text', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( '<span>#</span> We Give Donations Poor People Impact on Someone’s Life.' , 'careox-core' ),
				'label_block' => true,
			]
		);

        $this->add_control(
			'cx_about_us_section_donations_us_btn_text',
			[
				'label' => esc_html__( 'Button Text', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Donate Now' , 'careox-core' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'cx_about_us_section_donations_us_btn_url',
			[
				'label' => esc_html__( 'Button URL', 'careox-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);
		
		$this->end_controls_section();




		$this->start_controls_section(
			'careox_about_us_section_title_heading',
			[
				'label' => esc_html__( 'Title', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'careox_about_us_section_title_color',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => esc_html__('Title Color', 'xpovio-core'),
				'selectors' => [
					'{{WRAPPER}} .sec-title__title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'careox_about_us_section_title_typo',
				'label' => esc_html__('Typography', 'xpovio-core'),
				'selector' => '{{WRAPPER}} .sec-title__title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'careox_about_us_section_title_stroke',
				'label' => esc_html__('Title Stroke', 'xpovio-core'),
				'selector' => '{{WRAPPER}} .sec-title__title',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'careox_about_us_section_title_shadow',
				'label' => esc_html__('Title Shadow', 'xpovio-core'),
				'selector' => '{{WRAPPER}} .sec-title__title',
			]
		);

		$this->add_responsive_control(
			'careox_about_us_section_title_margin',
			[
				'label' => __('Margin', 'xpovio-core'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .sec-title__title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				],
			]
		);

		$this->end_controls_section();
		

		$this->start_controls_section(
			'careox_about_us_section_sub_title_heading',
			[
				'label' => esc_html__( 'Sub Title', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'careox_about_us_section_sub_title_color',
			[
				'label' => esc_html__('Sub Title Color', 'xpovio-core'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sec-title__tagline' => 'color: {{VALUE}}',
					'{{WRAPPER}} .sec-title__tagline__border' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'careox_about_us_section_sub_title_typo',
				'label' => esc_html__('Typography', 'xpovio-core'),
				'selector' => '{{WRAPPER}} .sec-title__tagline',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'careox_about_us_section_sub_title_shadow',
				'label' => esc_html__('Title Shadow', 'xpovio-core'),
				'selector' => '{{WRAPPER}} .sec-title__tagline',
			]
		);

		$this->add_responsive_control(
			'careox_about_us_section_sub_title_margin',
			[
				'label' => __('Margin', 'xpovio-core'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .sec-title__tagline' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'careox_about_us_section_desc_heading',
			[
				'label' => esc_html__( 'Description', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'careox_about_us_section_desc_color',
			[
				'label' => esc_html__('Description Color', 'xpovio-core'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .sec-title__tagline' => 'color: {{VALUE}}',
					'{{WRAPPER}} .sec-title__tagline__border' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'careox_about_us_section_desc_typo',
				'label' => esc_html__('Typography', 'xpovio-core'),
				'selector' => '{{WRAPPER}} .sec-title__tagline',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'careox_about_us_section_desc_shadow',
				'label' => esc_html__('Title Shadow', 'xpovio-core'),
				'selector' => '{{WRAPPER}} .sec-title__tagline',
			]
		);

		$this->add_responsive_control(
			'careox_about_us_section_desc_margin',
			[
				'label' => __('Margin', 'xpovio-core'),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => ['px'],
				'selectors' => [
					'{{WRAPPER}} .sec-title__tagline' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		// inline editing attributes
		$this->add_inline_editing_attributes( 'cx_about_us_title', 'basic' );
		$this->add_inline_editing_attributes( 'cx_about_us_sub_title', 'basic' );
		$this->add_inline_editing_attributes( 'cx_about_us_desc', 'basic' );
		$this->add_inline_editing_attributes( 'cx_about_us_btn_text', 'basic' );
		$this->add_inline_editing_attributes( 'cx_about_us_media_text', 'basic' );
		$this->add_inline_editing_attributes( 'cx_about_us_section_donations_us_content', 'basic' );
		$this->add_inline_editing_attributes( 'cx_about_us_section_donations_us_btn_text', 'basic' );

		// element render attritube
		$this->add_render_attribute(
			'cx_about_us_title',
			[
				'class' => 'sec-title__title bw-split-in-left'
			]
		);
		$this->add_render_attribute(
			'cx_about_us_sub_title',
			[
				'class' => 'sec-title__tagline bw-split-in-right'
			]
		);
		$this->add_render_attribute(
			'cx_about_us_desc',
			[
				'class' => 'about-one__content__text'
			]
		);
		$this->add_render_attribute(
			'cx_about_us_media_text',
			[
				'class' => 'about-one__image__video'
			]
		);
		$this->add_render_attribute(
			'cx_about_us_section_donations_us_content',
			[
				'class' => 'about-one__text wow fadeInUp'
			]
		);

		?>

        <section class="about-one">
			<?php if("yes" === $settings['cx_about_us_show_shape_four']): ?>
				<?php if($settings['cx_about_us_section_shape_image_four']['url']): ?>
					<div class="about-one__shape">
						<img src="<?php echo esc_url($settings['cx_about_us_section_shape_image_four']['url']); ?>" alt="<?php esc_attr_e('careox', 'careox-core'); ?>">
					</div>
				<?php endif; ?>
			<?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__image wow fadeInLeft" data-wow-delay="100ms">
							<?php if($settings['cx_about_us_section_image_one']['url']): ?>
								<div class="about-one__image__one">
									<img src="<?php echo esc_url($settings['cx_about_us_section_image_one']['url']); ?>" alt="<?php esc_attr_e('careox', 'careox-core'); ?>">
								</div>
							<?php endif; ?>
							<?php if($settings['cx_about_us_section_image_two']['url']): ?>
								<div class="about-one__image__two">
									<?php if($settings['cx_about_us_section_image_two']['url']): ?>
										<img src="<?php echo esc_url($settings['cx_about_us_section_image_two']['url']); ?>" alt="<?php esc_attr_e('careox', 'careox-core'); ?>">
									<?php endif; ?>
									<?php if($settings['cx_about_us_media_video_link']['url'] || $settings['cx_about_us_media_text']): ?>
										<div <?php echo $this->get_render_attribute_string( 'cx_about_us_media_text' ); ?>>
											<?php if($settings['cx_about_us_media_video_link']['url']): ?>
												<a href="<?php echo esc_url($settings['cx_about_us_media_video_link']['url']); ?>" class="video-popup">
													<i class="icofont-ui-play"></i>
												</a>
											<?php endif; ?>
											<?php echo esc_html($settings['cx_about_us_media_text']); ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php if("yes" === $settings['cx_about_us_show_shape_one']): ?>
								<?php if($settings['cx_about_us_section_shape_image_one']['url']): ?>
									<div class="about-one__image__shape-one">
										<img src="<?php echo esc_url($settings['cx_about_us_section_shape_image_one']['url']); ?>"  alt="<?php esc_attr_e('careox', 'careox-core'); ?>">
									</div>
								<?php endif; ?>
							<?php endif; ?>
							<?php if("yes" === $settings['cx_about_us_show_shape_two']): ?>
								<?php if($settings['cx_about_us_section_shape_image_two']['url']): ?>
									<div class="about-one__image__shape-two">
										<img src="<?php echo esc_url($settings['cx_about_us_section_shape_image_two']['url']); ?>"  alt="<?php esc_attr_e('careox', 'careox-core'); ?>">
									</div>
								<?php endif; ?>
							<?php endif; ?>
							<?php if("yes" === $settings['cx_about_us_show_shape_three']): ?>
								<?php if($settings['cx_about_us_section_shape_image_three']['url']): ?>
									<div class="about-one__image__shape-three">
										<img src="<?php echo esc_url($settings['cx_about_us_section_shape_image_three']['url']); ?>" alt="<?php esc_attr_e('careox', 'careox-core'); ?>">
									</div>
								<?php endif; ?>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">
								<?php if($settings['cx_about_us_sub_title']): ?>
									<<?php echo esc_attr($settings['cx_about_us_sub_title_tags']); ?> <?php echo $this->get_render_attribute_string( 'cx_about_us_sub_title' ); ?>>
										<span class="sec-title__tagline__border"></span>	
										<?php echo esc_html($settings['cx_about_us_sub_title']); ?>
									</<?php echo esc_attr($settings['cx_about_us_sub_title_tags']); ?>>
								<?php endif; ?>
								<?php if($settings['cx_about_us_title']): ?>
									<<?php echo esc_attr($settings['cx_about_us_title_tags']); ?> <?php echo $this->get_render_attribute_string( 'cx_about_us_title' ); ?>>
										<?php echo esc_html($settings['cx_about_us_title']); ?>
									</<?php echo esc_attr($settings['cx_about_us_title_tags']); ?>>
								<?php endif; ?>
                            </div>
                            <p <?php echo $this->get_render_attribute_string( 'cx_about_us_desc' ); ?>>
                                <?php echo esc_html($settings['cx_about_us_desc']); ?>
                            </p>
							<?php if($settings['cx_about_us_content_box_list']): ?>
								<div class="row gutter-y-30">
									<?php foreach($settings['cx_about_us_content_box_list'] as $index => $single_content): 
											$cx_ab_content_box_title_setting_key     = $this->get_repeater_setting_key('cx_about_us_content_box_title', 'cx_about_us_content_box_list', $index);
											$cx_content_box_desc_setting_key     	 = $this->get_repeater_setting_key('cx_about_us_content_box_desc', 'cx_about_us_content_box_list', $index);

											$this->add_render_attribute( 
												$cx_ab_content_box_title_setting_key, 
												[
													'class' => 'about-one__content__box__title'
												]
											);
											$this->add_render_attribute( 
												$cx_content_box_desc_setting_key, 
												[
													'class' => 'about-one__content__box__text'
												]
											);

											$this->add_inline_editing_attributes($cx_ab_content_box_title_setting_key, 'basic');	
											$this->add_inline_editing_attributes($cx_content_box_desc_setting_key, 'basic');
											
											$content_box_title_icon		= $settings['cx_about_us_content_box_list'][$index]['cx_about_us_content_box_title_icon'];
											$content_box_title		= $settings['cx_about_us_content_box_list'][$index]['cx_about_us_content_box_title'];
											$ontent_box_desc_icon		= $settings['cx_about_us_content_box_list'][$index]['cx_about_us_content_box_desc_icon'];
											$content_box_desc		= $settings['cx_about_us_content_box_list'][$index]['cx_about_us_content_box_desc'];
										?>
										<div class="col-md-6">
											<div class="about-one__content__box" style="--accent-color: #ffa415;">
												<div class="about-one__content__box__top">
													<div class="about-one__content__box__icon">
														<span class="<?php echo esc_attr($content_box_title_icon); ?>"></span>
													</div>
													<h5 <?php $this->print_render_attribute_string($cx_ab_content_box_title_setting_key); ?>><?php echo esc_html($content_box_title); ?></h5>
												</div>
												<?php if($content_box_title || $content_box_desc): ?>
													<p <?php $this->print_render_attribute_string($cx_content_box_desc_setting_key); ?>>
														<span class="about-one__content__box__text__icon">
															<i class="<?php echo esc_attr($ontent_box_desc_icon); ?>"></i>
														</span>
														<?php echo esc_html($content_box_desc); ?>
													</p>
												<?php endif; ?>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
                            <div class="about-one__content__border"></div>

							<?php if($settings['cx_about_us_content_list']): ?>
								<ul class="about-one__content__list">
									<?php 
										foreach($settings['cx_about_us_content_list'] as $index => $single_content): 
											$cx_content_list_title_setting_key     = $this->get_repeater_setting_key('cx_about_us_content_list_title', 'cx_about_us_content_list', $index);
												
											$this->add_inline_editing_attributes($cx_content_list_title_setting_key);	

											$content_list_title		= $settings['cx_about_us_content_list'][$index]['cx_about_us_content_list_title'];
									?>
										<li <?php echo $this->print_render_attribute_string($cx_content_list_title_setting_key); ?>>
											<span class="about-one__content__list__icon">
												<i class="icofont-check-circled"></i>
											</span>
											<?php echo wp_kses_post($content_list_title); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

                            <a href="<?php echo esc_url($settings['cx_about_us_btn_url']['url']); ?>" class="careox-btn"><span <?php echo $this->get_render_attribute_string( 'cx_about_us_btn_text' ); ?>><?php echo esc_html($settings['cx_about_us_btn_text']); ?></span></a>
                        </div>
                    </div>
                </div>
                <div <?php echo $this->get_render_attribute_string( 'cx_about_us_section_donations_us_content' ); ?>>
                    <span>#</span> <?php echo wp_kses_post($settings['cx_about_us_section_donations_us_content']); ?> 
					<?php if($settings['cx_about_us_section_donations_us_btn_url']['url'] || $settings['cx_about_us_section_donations_us_btn_text']): ?>
						<a href="<?php echo esc_html($settings['cx_about_us_section_donations_us_btn_url']['url']); ?>" class="careox-btn">
							<span <?php echo $this->get_render_attribute_string( 'cx_about_us_section_donations_us_btn_text' ); ?>><?php echo esc_html($settings['cx_about_us_section_donations_us_btn_text']); ?></span>
						</a>
					<?php endif; ?>
				</div>
            </div>
        </section>
		<?php
	}
}