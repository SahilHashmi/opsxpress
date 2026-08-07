<?php
/**
 * Dynamic hero rendered by the opsxpress/hero block.
 *
 * @package OpsXpress
 */

$attributes = isset( $args['attributes'] ) && is_array( $args['attributes'] ) ? $args['attributes'] : array();

$hero_title  = get_theme_mod( 'opsxpress_hero_title', 'Run infrastructure without' );
$hero_accent = get_theme_mod( 'opsxpress_hero_accent', 'downtime, blind spots,' );
$hero_third  = get_theme_mod( 'opsxpress_hero_third_line', 'or midnight chaos.' );

if ( ! empty( $attributes['titleLineOne'] ) ) {
	$hero_title = $attributes['titleLineOne'];
}

if ( ! empty( $attributes['titleLineTwo'] ) ) {
	$hero_accent = $attributes['titleLineTwo'];
}

if ( ! empty( $attributes['titleLineThree'] ) ) {
	$hero_third = $attributes['titleLineThree'];
}

$hero_description       = get_theme_mod( 'opsxpress_hero_description', 'OpsXpress helps modern businesses run critical infrastructure with managed operations, always-on NOC/SOC coverage, DevOps automation, and incident response that keeps systems fast, secure, and available.' );
$hero_primary_cta_label = get_theme_mod( 'opsxpress_primary_cta_label', 'Schedule a strategy call' );
$hero_primary_cta_url   = get_theme_mod( 'opsxpress_primary_cta_url', home_url( '/contact/' ) );
$hero_secondary_label   = get_theme_mod( 'opsxpress_secondary_cta_label', 'See our service stack' );
$hero_secondary_url     = get_theme_mod( 'opsxpress_secondary_cta_url', home_url( '/services/' ) );

$hero_primary_prompt = rawurlencode( 'award-winning website hero image for enterprise IT operations company, modern command center dashboard with infrastructure monitoring, NOC alerts, SOC security analytics, DevOps deployment pipeline, uptime graphs, premium SaaS interface, blue grey and orange brand accents, cinematic lighting, highly realistic, no text, no watermark' );
$hero_support_prompt = rawurlencode( 'premium enterprise technology illustration for managed services company, secure cloud network, glowing data nodes, shield security layers, automation signals, sophisticated blue grey orange palette, realistic 3d depth, clean futuristic composition, no text, no watermark' );
$hero_primary_image  = 'https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=' . $hero_primary_prompt . '&image_size=landscape_16_9';
$hero_support_image  = 'https://coresg-normal.trae.ai/api/ide/v1/text_to_image?prompt=' . $hero_support_prompt . '&image_size=square_hd';
?>
<section class="hero-section" aria-labelledby="hero-title">
        <div class="hero-orbit hero-orbit-one" aria-hidden="true"></div>
        <div class="hero-orbit hero-orbit-two" aria-hidden="true"></div>
	<div class="hero-container">
                <div class="hero-grid">
                        <div class="hero-content">
                                <div class="hero-badge-row">
                                        <span class="hero-badge"><?php esc_html_e( '24/7 Coverage', 'opsxpress' ); ?></span>
                                        <span class="hero-badge"><?php esc_html_e( 'Cloud + Security Ops', 'opsxpress' ); ?></span>
                                </div>

                                <h1 id="hero-title" class="hero-title">
                                        <span class="hero-title-line hero-title-main"><span><?php echo esc_html( $hero_title ); ?></span></span>
                                        <span class="hero-title-line hero-title-sub"><span><?php echo esc_html( $hero_accent ); ?></span></span>
                                        <span class="hero-title-line hero-title-sub hero-title-third"><span><?php echo esc_html( $hero_third ); ?></span></span>
                                </h1>

                                <p class="hero-intro">
                                        <?php echo esc_html( $hero_description ); ?>
                                </p>

                                <div class="hero-actions">
                                        <a class="btn btn-primary" href="<?php echo esc_url( $hero_primary_cta_url ); ?>"><?php echo esc_html( $hero_primary_cta_label ); ?></a>
                                        <a class="btn btn-secondary" href="<?php echo esc_url( $hero_secondary_url ); ?>"><?php echo esc_html( $hero_secondary_label ); ?></a>
                                </div>
                        </div>

                        <div class="hero-visual" aria-hidden="true">
                                <div class="hero-visual-main">
                                        <div class="hero-visual-screen">
                                                <img src="<?php echo esc_url( $hero_primary_image ); ?>" alt="<?php esc_attr_e( 'OpsXpress infrastructure monitoring and security operations dashboard', 'opsxpress' ); ?>" loading="eager" decoding="async">
                                        </div>

                                        <div class="hero-floating-card hero-floating-card-top">
                                                <span class="hero-floating-label"><?php esc_html_e( 'Live Command Layer', 'opsxpress' ); ?></span>
                                                <strong><?php esc_html_e( 'Infrastructure, alerts, pipelines, and security in one view.', 'opsxpress' ); ?></strong>
                                        </div>

                                        <div class="hero-floating-card hero-floating-card-bottom">
                                                <span class="hero-floating-label"><?php esc_html_e( 'Response Velocity', 'opsxpress' ); ?></span>
                                                <strong><?php esc_html_e( 'Triage faster. Escalate cleaner. Recover with less noise.', 'opsxpress' ); ?></strong>
                                        </div>
                                </div>

                                <div class="hero-visual-sidecard">
                                        <img src="<?php echo esc_url( $hero_support_image ); ?>" alt="<?php esc_attr_e( 'Secure cloud network visualization for managed operations services', 'opsxpress' ); ?>" loading="lazy" decoding="async">
                                        <div class="hero-sidecard-copy">
                                                <span><?php esc_html_e( 'Built for critical systems', 'opsxpress' ); ?></span>
                                                <p><?php esc_html_e( 'MSP execution with DevOps speed and NOC/SOC discipline.', 'opsxpress' ); ?></p>
                                        </div>
                                </div>
                        </div>
                </div>
	</div>
</section>
