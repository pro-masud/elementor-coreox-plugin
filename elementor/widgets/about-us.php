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
			'careox_about_us_section_heading',
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
			'cx_about_us_sub_title',
			[
				'label'         => esc_html__( 'Sub Title', 'careox-core' ),
				'type'          => \Elementor\Controls_Manager::TEXT,
				'default'       => esc_html__( 'OUR ABOUT US', 'careox-core' ),
                'label_block'   => true
			]
		);

        $this->add_control(
			'cx_about_us_desc',
			[
				'label'         => esc_html__( 'Description', 'careox-core' ),
				'type'          => \Elementor\Controls_Manager::TEXTAREA,
				'default'       => esc_html__( 'Poor address a range of simply application and infrastructure this of passages of available, but the majority have suffered poor alteration in some form.', 'careox-core' ),
                'label_block'   => true
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'careox_about_us_section_style_heading',
			[
				'label' => esc_html__( 'About Heading Style', 'careox-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$heading = $settings['heading'];
		$description = $settings['description'];

		$this->add_inline_editing_attributes('heading', 'basic');
		$this->add_render_attribute(
			'pro',
			[
				'class' => [ 'heading', 'promasud', $heading ],
			]
		);
		?>

        <section class="about-one">
            <div class="about-one__shape">
                <img src="<?php echo XPOVIO_CORE_BASE_URL ;?>assets/images/shapes/about-1-shape-4.png" alt="careox">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__image wow fadeInLeft" data-wow-delay="100ms">
                            <div class="about-one__image__one">
                                <img src="<?php echo XPOVIO_CORE_BASE_URL ;?>assets/images/resources/about-1-1.jpg" alt="careox">
                            </div>
                            <div class="about-one__image__two">
                                <img src="<?php echo XPOVIO_CORE_BASE_URL ;?>assets/images/resources/about-1-2.jpg" alt="careox">
                                <div class="about-one__image__video">
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                        <i class="icofont-ui-play"></i></a>Always Support Us!
                                </div>
                            </div>
                            <div class="about-one__image__shape-one"><img src="<?php echo XPOVIO_CORE_BASE_URL ;?>assets/images/shapes/about-1-shape-1.png"
                                    alt="careox"></div>
                            <div class="about-one__image__shape-two"><img src="<?php echo XPOVIO_CORE_BASE_URL ;?>assets/images/shapes/about-1-shape-2.png"
                                    alt="careox"></div>
                            <div class="about-one__image__shape-three"><img
                                    src="<?php echo XPOVIO_CORE_BASE_URL ;?>assets/images/shapes/about-1-shape-3.png" alt="careox"></div>
                        </div><!-- /.about__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span
                                        class="sec-title__tagline__border"></span>OUR ABOUT US</h6>
                                <!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">We Believe This Lifes About Give For Poor
                                    People.</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__content__text">
                                Poor address a range of simply application and infrastructure this of passages of
                                available, but
                                the majority have suffered poor alteration in some form.
                            </p>
                            <div class="row gutter-y-30">
                                <div class="col-md-6">
                                    <div class="about-one__content__box" style="--accent-color: #ffa415;">
                                        <div class="about-one__content__box__top">
                                            <div class="about-one__content__box__icon"><span class="icon-zakat"></span>
                                            </div>
                                            <h5 class="about-one__content__box__title">Treatment Help</h5>
                                        </div>
                                        <p class="about-one__content__box__text"><span
                                                class="about-one__content__box__text__icon"><i
                                                    class="icofont-check-circled"></i></span>No matter what you you
                                            have.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-one__content__box" style="--accent-color: #ff5528;">
                                        <div class="about-one__content__box__top">
                                            <div class="about-one__content__box__icon"><span
                                                    class="icon-charity"></span></div>
                                            <h5 class="about-one__content__box__title">Help Raising</h5>
                                        </div>
                                        <p class="about-one__content__box__text"><span
                                                class="about-one__content__box__text__icon"><i
                                                    class="icofont-check-circled"></i></span>No matter what you you
                                            have.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__content__border"></div>
                            <ul class="about-one__content__list">
                                <li>
                                    <span class="about-one__content__list__icon"><i
                                            class="icofont-check-circled"></i></span>
                                    We help companies develop powerful corporate social <a
                                        href="about.html">Responsibility,</a>
                                </li>
                                <li>
                                    <span class="about-one__content__list__icon"><i
                                            class="icofont-check-circled"></i></span>
                                    Helped fund 3,265 Project powerful corporate poor.
                                </li>
                            </ul>
                            <a href="about.html" class="careox-btn"><span>About More</span></a>
                        </div><!-- /.about__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="about-one__text wow fadeInUp">
                    <span>#</span> We Give Donations Poor People Impact on Someone’s Life. <a href="donation.html" class="careox-btn"><span>Donate Now</span></a></div>
            </div><!-- /.container -->
        </section>
		<?php
	}
}