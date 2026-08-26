<?php
/**
 * Title: Pinned Sticky Card Deck Showcase
 * Slug: inventus-custom/pinned-cards-showcase
 * Categories: inventus-marketing, featured
 * Description: Interactive sticky scroll card deck featuring glowing digital marketing background and smooth sequential card reveals.
 */
$theme_uri = get_stylesheet_directory_uri();
?>
<!-- Sticky Scroll Stage Wrapper -->
<div class="inv-pinned-scroll-wrapper" id="growth-engine">
	<div class="inv-pinned-sticky-stage">
		
		<!-- Glowing Background Image with Dark Glass Overlay -->
		<div class="inv-pinned-bg" style="background-image: url('<?php echo esc_url( $theme_uri . '/assets/images/digital-marketing-bg.jpg' ); ?>');"></div>
		<div class="inv-pinned-overlay"></div>

		<!-- Stage Header -->
		<div class="inv-stage-header">
			<div class="inv-stage-badge">
				⚡ Inventus Growth Engines
			</div>
			<h2 class="inv-stage-title">
				Full-Spectrum <span>Digital Marketing</span> Solutions
			</h2>

			<!-- Interactive Step Navigation Tabs -->
			<div class="inv-deck-tabs">
				<button class="inv-deck-tab is-active" data-index="0">01. SEO Dominance</button>
				<button class="inv-deck-tab" data-index="1">02. PPC & Paid Ads</button>
				<button class="inv-deck-tab" data-index="2">03. Social Media SMM</button>
				<button class="inv-deck-tab" data-index="3">04. Web Development</button>
				<button class="inv-deck-tab" data-index="4">05. Influencer Strategy</button>
				<button class="inv-deck-tab" data-index="5">06. Content & Email</button>
			</div>
		</div>

		<!-- The Interactive Cards Deck -->
		<div class="inv-deck-stage">
			
			<!-- Card 1: SEO -->
			<div class="inv-deck-card is-active" data-card="0">
				<div class="inv-card-grid">
					<div>
						<span class="inv-card-tag">🔍 Organic Search Dominance</span>
						<h3 class="inv-card-heading">Rank #1 on Google & Capture High-Intent Buyer Traffic</h3>
						<p class="inv-card-desc">
							Transform your website into an organic lead-generation powerhouse. Our comprehensive SEO frameworks cover technical site architecture, local Vashi & Mumbai map dominance, semantic keyword research, and high-authority link acquisition.
						</p>

						<ul class="inv-card-deliverables">
							<li><span>✓</span> Technical Speed & Core Web Vitals</li>
							<li><span>✓</span> Local Google Maps & Search Dominance</li>
							<li><span>✓</span> Competitor Gap & Semantic Keywords</li>
							<li><span>✓</span> High-Authority White-Hat Backlinks</li>
						</ul>

						<div style="display:flex; gap:14px; align-items:center;">
							<a href="/services/#seo" class="inv-btn-primary">Explore SEO Strategy →</a>
							<a href="/contact/" class="inv-btn-secondary">Get Free SEO Audit</a>
						</div>
					</div>

					<div class="inv-card-metric-box">
						<div class="inv-card-metric-icon">🔍</div>
						<div class="inv-card-metric-num">+340%</div>
						<div class="inv-card-metric-label">Organic Traffic Surge</div>
					</div>
				</div>
			</div>

			<!-- Card 2: PPC -->
			<div class="inv-deck-card" data-card="1">
				<div class="inv-card-grid">
					<div>
						<span class="inv-card-tag">🎯 Instant Customer Acquisition</span>
						<h3 class="inv-card-heading">Precision PPC Campaigns Delivering High-ROI Conversions</h3>
						<p class="inv-card-desc">
							Stop wasting ad budget on cold clicks. We build high-converting performance funnels across Google Search, Performance Max, Instagram Reels, and Facebook Ads engineered for measurable customer acquisition.
						</p>

						<ul class="inv-card-deliverables">
							<li><span>✓</span> Google Search & Performance Max Ads</li>
							<li><span>✓</span> High-CTR Meta (Instagram/FB) Creatives</li>
							<li><span>✓</span> Dynamic Retargeting & Cart Recovery</li>
							<li><span>✓</span> Continuous Bid & ROAS Optimization</li>
						</ul>

						<div style="display:flex; gap:14px; align-items:center;">
							<a href="/services/#ppc" class="inv-btn-primary">Launch Paid Ads →</a>
							<a href="/contact/" class="inv-btn-secondary">Request Ad Audit</a>
						</div>
					</div>

					<div class="inv-card-metric-box">
						<div class="inv-card-metric-icon">🎯</div>
						<div class="inv-card-metric-num">4.8x</div>
						<div class="inv-card-metric-label">Average Client ROAS</div>
					</div>
				</div>
			</div>

			<!-- Card 3: SMM -->
			<div class="inv-deck-card" data-card="2">
				<div class="inv-card-grid">
					<div>
						<span class="inv-card-tag">📱 Viral Brand Authority</span>
						<h3 class="inv-card-heading">Build a Loyal Community & Convert Followers into Clients</h3>
						<p class="inv-card-desc">
							Turn attention into revenue. We create thumb-stopping short-form video reels, high-aesthetic carousel graphics, and community growth campaigns that position your business as the undisputed leader in your industry.
						</p>

						<ul class="inv-card-deliverables">
							<li><span>✓</span> Viral Instagram Reels & Video Production</li>
							<li><span>✓</span> High-Engagement Storytelling Carousels</li>
							<li><span>✓</span> Community Growth & Direct DM Funnels</li>
							<li><span>✓</span> Multi-Platform Content Scheduling</li>
						</ul>

						<div style="display:flex; gap:14px; align-items:center;">
							<a href="/services/#smm" class="inv-btn-primary">Scale Social Presence →</a>
							<a href="/contact/" class="inv-btn-secondary">Get Social Strategy</a>
						</div>
					</div>

					<div class="inv-card-metric-box">
						<div class="inv-card-metric-icon">📱</div>
						<div class="inv-card-metric-num">1.2M+</div>
						<div class="inv-card-metric-label">Monthly Video Impressions</div>
					</div>
				</div>
			</div>

			<!-- Card 4: Web Dev -->
			<div class="inv-deck-card" data-card="3">
				<div class="inv-card-grid">
					<div>
						<span class="inv-card-tag">💻 Conversion Engines</span>
						<h3 class="inv-card-heading">Custom WordPress Platforms Engineered for Speed & Sales</h3>
						<p class="inv-card-desc">
							Your website is your best 24/7 salesperson. We craft bespoke, lightweight WordPress websites and sales funnels optimized for mobile speed, user experience, and seamless lead capture.
						</p>

						<ul class="inv-card-deliverables">
							<li><span>✓</span> Custom Full Site Editing Theme Design</li>
							<li><span>✓</span> Mobile-First UI/UX & Responsive Layouts</li>
							<li><span>✓</span> 98+ Google PageSpeed Performance</li>
							<li><span>✓</span> CRM & WhatsApp Automation Integration</li>
						</ul>

						<div style="display:flex; gap:14px; align-items:center;">
							<a href="/services/#web" class="inv-btn-primary">Build Custom Site →</a>
							<a href="/contact/" class="inv-btn-secondary">Website Consultation</a>
						</div>
					</div>

					<div class="inv-card-metric-box">
						<div class="inv-card-metric-icon">💻</div>
						<div class="inv-card-metric-num">&lt; 1.2s</div>
						<div class="inv-card-metric-label">Ultra-Fast Load Time</div>
					</div>
				</div>
			</div>

			<!-- Card 5: Influencers -->
			<div class="inv-deck-card" data-card="4">
				<div class="inv-card-grid">
					<div>
						<span class="inv-card-tag">⭐ Social Proof Amplification</span>
						<h3 class="inv-card-heading">Partner with Verified Creators to Build Immediate Trust</h3>
						<p class="inv-card-desc">
							Supercharge brand credibility. We identify, negotiate with, and manage niche content creators and verified influencers who champion your products to ready-to-buy audiences.
						</p>

						<ul class="inv-card-deliverables">
							<li><span>✓</span> Targeted Creator Discovery & Vetting</li>
							<li><span>✓</span> Campaign Briefs & Content Direction</li>
							<li><span>✓</span> Whitelisted Ad Amplification</li>
							<li><span>✓</span> Direct ROI Tracking & Attribution</li>
						</ul>

						<div style="display:flex; gap:14px; align-items:center;">
							<a href="/services/#influencer" class="inv-btn-primary">Launch Creator Campaign →</a>
							<a href="/contact/" class="inv-btn-secondary">Influencer Strategy</a>
						</div>
					</div>

					<div class="inv-card-metric-box">
						<div class="inv-card-metric-icon">⭐</div>
						<div class="inv-card-metric-num">3.5x</div>
						<div class="inv-card-metric-label">Engagement Multiplier</div>
					</div>
				</div>
			</div>

			<!-- Card 6: Content -->
			<div class="inv-deck-card" data-card="5">
				<div class="inv-card-grid">
					<div>
						<span class="inv-card-tag">✍️ Lifetime Customer Value</span>
						<h3 class="inv-card-heading">High-Converting Sales Copy & Automated Lead Nurturing</h3>
						<p class="inv-card-desc">
							Never let a warm lead go cold. We craft persuasive landing page copy, authority blog content, and automated email nurturing sequences that educate prospects and drive repeat sales on autopilot.
						</p>

						<ul class="inv-card-deliverables">
							<li><span>✓</span> High-Converting Sales Page Copywriting</li>
							<li><span>✓</span> SEO-Optimized Authority Articles</li>
							<li><span>✓</span> Automated Welcome & Nurture Sequences</li>
							<li><span>✓</span> Segmented Email Campaigns & Retention</li>
						</ul>

						<div style="display:flex; gap:14px; align-items:center;">
							<a href="/services/#content" class="inv-btn-primary">Get Content Strategy →</a>
							<a href="/contact/" class="inv-btn-secondary">Free Consultation</a>
						</div>
					</div>

					<div class="inv-card-metric-box">
						<div class="inv-card-metric-icon">✍️</div>
						<div class="inv-card-metric-num">+185%</div>
						<div class="inv-card-metric-label">Lead-To-Sale Conversion</div>
					</div>
				</div>
			</div>

		</div>

		<!-- Stage Bottom Helper -->
		<div class="inv-stage-footer">
			<span>Scroll down to cycle through services</span>
			<span style="font-size:1.1rem; color:var(--inv-orange);">↓</span>
		</div>

	</div>
</div>
