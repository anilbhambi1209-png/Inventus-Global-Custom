<?php
/**
 * Title: Hero - Vibrant Digital Marketing Showcase
 * Slug: inventus-custom/hero-marketing
 * Categories: inventus-marketing, featured
 * Description: Opening hero section with the vibrant glowing digital marketing background image clearly visible on site load.
 */
$bg_url = get_stylesheet_directory_uri() . '/assets/images/digital-marketing-bg.jpg';
?>
<!-- Opening Hero with Vibrant Background Image -->
<section class="inv-hero-glowing-section" style="background-image: linear-gradient(180deg, rgba(6, 9, 20, 0.45) 0%, rgba(6, 9, 20, 0.75) 100%), url('<?php echo esc_url( $bg_url ); ?>');">
	<div class="inv-hero-glowing-content">
		
		<!-- Top Pill Badge -->
		<div class="inv-hero-pill-badge">
			<span style="color:#FF5E14;">⚡</span> Best Digital Marketing Agency in Navi Mumbai
		</div>

		<!-- Main Hero Headline -->
		<h1 class="inv-hero-glowing-title">
			Elevate Your Brand with Our<br>
			<span>Creative Digital Solutions</span>
		</h1>

		<!-- Hero Subheadline -->
		<p class="inv-hero-glowing-desc">
			Ready to see your brand soar? Discover Inventus Global’s powerful SEO, PPC, social media, and performance marketing strategies engineered for real, predictable revenue growth.
		</p>

		<!-- Hero CTA Buttons -->
		<div class="inv-hero-actions">
			<a href="/contact/" class="inv-btn-primary" style="font-size:1.05rem; padding:15px 36px;">
				Get Free Consultation →
			</a>
			<a href="tel:+919833960540" class="inv-btn-secondary" style="font-size:1.05rem; padding:15px 32px;">
				📞 +91 98339 60540
			</a>
		</div>

		<!-- Live Impact Numbers Row -->
		<div class="inv-hero-stats-row">
			<div class="inv-hero-stat-item">
				<div class="inv-hero-stat-number">+340%</div>
				<div class="inv-hero-stat-label">Organic Traffic Surge</div>
			</div>
			<div class="inv-hero-stat-item">
				<div class="inv-hero-stat-number">4.8x</div>
				<div class="inv-hero-stat-label">Average Paid Ads ROAS</div>
			</div>
			<div class="inv-hero-stat-item">
				<div class="inv-hero-stat-number">10+ Yrs</div>
				<div class="inv-hero-stat-label">Industry Expertise</div>
			</div>
			<div class="inv-hero-stat-item">
				<div class="inv-hero-stat-number">450+</div>
				<div class="inv-hero-stat-label">Successful Campaigns</div>
			</div>
		</div>

	</div>
</section>
