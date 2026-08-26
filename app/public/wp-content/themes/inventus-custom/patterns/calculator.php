<?php
/**
 * Title: Phase 5 - Interactive ROI & Revenue Growth Calculator
 * Slug: inventus-custom/calculator
 * Categories: inventus-marketing, featured
 * Description: Real-time dynamic calculator allowing prospects to drag budget and ROAS sliders to estimate revenue.
 */
?>
<!-- Phase 5: Interactive Growth Calculator -->
<section id="calculator" class="inv-section" style="background: radial-gradient(circle at 50% 50%, rgba(255, 94, 20, 0.08) 0%, #0A0F1D 80%); color: #FFFFFF;">
	<div class="inv-section-header" style="text-align: center; max-width: 800px; margin: 0 auto 50px auto;">
		<div class="inv-hero-pill-badge" style="margin-bottom: 12px;">
			🧮 INTERACTIVE ROI SIMULATOR
		</div>
		<h2 style="font-size: clamp(2rem, 3.8vw, 2.8rem); font-weight: 800; color: #FFFFFF; margin-bottom: 14px;">
			Estimate Your <span>Monthly Revenue Growth</span>
		</h2>
		<p style="color: #94A3B8; font-size: 1.08rem; line-height: 1.7; margin: 0;">
			Adjust your monthly digital marketing budget and targeted ROAS multiplier to see projected pipeline volume and estimated gross revenue.
		</p>
	</div>

	<div style="max-width: 1100px; margin: 0 auto; background: var(--inv-gradient-card); border: 1px solid var(--inv-border-glass); border-radius: var(--inv-radius-lg); padding: 44px 38px; box-shadow: var(--inv-shadow-lg); display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 48px; align-items: center;">
		
		<!-- Left: Interactive Sliders -->
		<div>
			<!-- Budget Slider -->
			<div style="margin-bottom: 34px;">
				<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
					<label style="font-weight: 700; font-size: 1.05rem; color: #FFFFFF;">Monthly Marketing Budget</label>
					<span id="inv-calc-budget-val" style="font-family: var(--inv-font-heading); font-weight: 900; font-size: 1.4rem; color: var(--inv-orange);">₹1,00,000</span>
				</div>
				<input type="range" id="inv-calc-budget" min="25000" max="1000000" step="25000" value="100000" style="width: 100%; accent-color: var(--inv-orange); cursor: pointer; height: 8px; border-radius: 4px;">
				<div style="display: flex; justify-content: space-between; color: #64748B; font-size: 0.82rem; font-weight: 600; margin-top: 6px;">
					<span>₹25,000 / mo</span>
					<span>₹10,00,000 / mo</span>
				</div>
			</div>

			<!-- Target ROAS Slider -->
			<div style="margin-bottom: 30px;">
				<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
					<label style="font-weight: 700; font-size: 1.05rem; color: #FFFFFF;">Target Return on Ad Spend (ROAS)</label>
					<span id="inv-calc-roas-val" style="font-family: var(--inv-font-heading); font-weight: 900; font-size: 1.4rem; color: var(--inv-amber);">4.8x</span>
				</div>
				<input type="range" id="inv-calc-roas" min="2.0" max="8.0" step="0.2" value="4.8" style="width: 100%; accent-color: var(--inv-amber); cursor: pointer; height: 8px; border-radius: 4px;">
				<div style="display: flex; justify-content: space-between; color: #64748B; font-size: 0.82rem; font-weight: 600; margin-top: 6px;">
					<span>2.0x (Conservative)</span>
					<span>8.0x (Hyper-Growth)</span>
				</div>
			</div>

			<div style="background: rgba(255, 94, 20, 0.1); border: 1px solid rgba(255, 94, 20, 0.25); border-radius: var(--inv-radius-md); padding: 16px 20px;">
				<p style="margin: 0; font-size: 0.88rem; color: #CBD5E1; line-height: 1.6;">
					⚡ <em>Inventus Global active clients average <strong>4.8x ROAS</strong> across Meta Ads, Google Ads, and Local Navi Mumbai SEO funnels.</em>
				</p>
			</div>
		</div>

		<!-- Right: Live Real-Time Projections -->
		<div style="display: flex; flex-direction: column; gap: 20px;">
			<div style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: var(--inv-radius-lg); padding: 32px 26px; text-align: center; backdrop-filter: blur(16px);">
				<span style="font-size: 0.85rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: #94A3B8; display: block; margin-bottom: 6px;">
					Projected Monthly Revenue
				</span>
				<div id="inv-calc-est-rev" style="font-family: var(--inv-font-heading); font-size: clamp(2.4rem, 4vw, 3.2rem); font-weight: 900; background: var(--inv-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1.1; margin-bottom: 6px;">
					₹4,80,000
				</div>
				<span style="font-size: 0.85rem; color: #64748B;">Estimated monthly gross revenue</span>
			</div>

			<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">
				<div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: var(--inv-radius-md); padding: 18px 16px; text-align: center;">
					<span style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #94A3B8; display: block; margin-bottom: 4px;">Est. Qualified Leads</span>
					<div id="inv-calc-leads" style="font-family: var(--inv-font-heading); font-size: 1.5rem; font-weight: 800; color: #FFFFFF;">140+ /mo</div>
				</div>
				<div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: var(--inv-radius-md); padding: 18px 16px; text-align: center;">
					<span style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: #94A3B8; display: block; margin-bottom: 4px;">Annual Run-Rate</span>
					<div id="inv-calc-annual" style="font-family: var(--inv-font-heading); font-size: 1.5rem; font-weight: 800; color: var(--inv-amber);">₹57.6L</div>
				</div>
			</div>

			<a href="/contact/" class="inv-btn-primary" style="width: 100%; box-sizing: border-box; justify-content: center; padding: 14px; font-size: 0.95rem;">
				Build Your Growth Plan →
			</a>
		</div>

	</div>
</section>
