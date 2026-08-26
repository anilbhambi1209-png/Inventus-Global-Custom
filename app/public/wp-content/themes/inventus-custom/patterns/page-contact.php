<?php
/**
 * Title: Page - Contact Inventus Global
 * Slug: inventus-custom/page-contact
 * Categories: inventus-marketing, featured
 * Description: Dedicated Contact page with enquiry form, Satra Plaza Vashi office address, and contact details.
 */
?>
<!-- Page Header Banner -->
<div class="inv-page-banner">
	<span class="inv-tag">GET IN TOUCH</span>
	<h1 class="inv-page-banner-title">Let’s Discuss Your <span>Growth Goals</span></h1>
	<p class="inv-page-banner-desc">
		Ready to see your brand soar? Reach out to Inventus Global today for a free custom digital strategy consultation.
	</p>
</div>

<!-- Contact Grid -->
<section class="inv-section">
	<div style="max-width:1240px; margin:0 auto; display:grid; grid-template-columns:1fr 1.1fr; gap:56px; align-items:start;">
		
		<!-- Left: Office Contact Information -->
		<div>
			<span class="inv-tag">HEADQUARTERS</span>
			<h2 style="font-size:2rem; margin:10px 0 20px 0;">Visit Our Vashi Office</h2>
			<p style="color:var(--inv-text-muted); font-size:1.05rem; line-height:1.75; margin-bottom:32px;">
				Have a question or looking to scale your brand? Drop by our office in Navi Mumbai or give our strategy team a direct call.
			</p>

			<div style="display:flex; flex-direction:column; gap:24px; margin-bottom:36px;">
				<!-- Office Address -->
				<div style="display:flex; gap:16px; align-items:start;">
					<div class="inv-icon-circle" style="margin:0; flex-shrink:0;">📍</div>
					<div>
						<h4 style="font-size:1.1rem; margin-bottom:4px;">Office Address</h4>
						<p style="color:var(--inv-text-muted); font-size:0.95rem; line-height:1.6; margin:0;">
							Satra Plaza, 12th Floor, Office No. 1209,<br>
							Palm Beach Road, Vashi, Navi Mumbai, Maharashtra 400703
						</p>
					</div>
				</div>

				<!-- Phone -->
				<div style="display:flex; gap:16px; align-items:start;">
					<div class="inv-icon-circle" style="margin:0; flex-shrink:0;">📞</div>
					<div>
						<h4 style="font-size:1.1rem; margin-bottom:4px;">Direct Phone Lines</h4>
						<p style="color:var(--inv-text-muted); font-size:0.95rem; line-height:1.6; margin:0;">
							<a href="tel:+919833960540" style="color:var(--inv-orange); font-weight:700;">+91 98339 60540</a> &nbsp;|&nbsp; 
							<a href="tel:+919987682853" style="color:var(--inv-orange); font-weight:700;">+91 99876 82853</a>
						</p>
					</div>
				</div>

				<!-- Email -->
				<div style="display:flex; gap:16px; align-items:start;">
					<div class="inv-icon-circle" style="margin:0; flex-shrink:0;">✉️</div>
					<div>
						<h4 style="font-size:1.1rem; margin-bottom:4px;">Email Us</h4>
						<p style="color:var(--inv-text-muted); font-size:0.95rem; line-height:1.6; margin:0;">
							<a href="mailto:globalinventus@gmail.com" style="color:var(--inv-orange); font-weight:600;">globalinventus@gmail.com</a>
						</p>
					</div>
				</div>

				<!-- Working Hours -->
				<div style="display:flex; gap:16px; align-items:start;">
					<div class="inv-icon-circle" style="margin:0; flex-shrink:0;">⏰</div>
					<div>
						<h4 style="font-size:1.1rem; margin-bottom:4px;">Working Hours</h4>
						<p style="color:var(--inv-text-muted); font-size:0.95rem; line-height:1.6; margin:0;">
							Monday – Saturday: 9:30 AM – 6:30 PM (IST)
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Right: Interactive Consultation Request Form -->
		<div class="inv-card" style="padding:40px;">
			<h3 style="font-size:1.4rem; margin-bottom:8px;">Request a Free Growth Audit</h3>
			<p style="color:var(--inv-text-muted); font-size:0.95rem; margin-bottom:28px;">
				Fill out the details below, and our lead strategist will get back to you within 2 business hours.
			</p>

			<form onsubmit="event.preventDefault(); alert('Thank you! Your consultation request has been submitted to Inventus Global.');" style="display:flex; flex-direction:column; gap:18px;">
				<div>
					<label style="display:block; font-size:0.875rem; font-weight:700; color:var(--inv-text-heading); margin-bottom:6px;">Your Full Name *</label>
					<input type="text" required placeholder="e.g. Rahul Sharma" style="width:100%; box-sizing:border-box; padding:12px 16px; border:1px solid var(--inv-border); border-radius:8px; font-family:inherit; font-size:0.95rem;">
				</div>

				<div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
					<div>
						<label style="display:block; font-size:0.875rem; font-weight:700; color:var(--inv-text-heading); margin-bottom:6px;">Work Email *</label>
						<input type="email" required placeholder="rahul@company.com" style="width:100%; box-sizing:border-box; padding:12px 16px; border:1px solid var(--inv-border); border-radius:8px; font-family:inherit; font-size:0.95rem;">
					</div>
					<div>
						<label style="display:block; font-size:0.875rem; font-weight:700; color:var(--inv-text-heading); margin-bottom:6px;">Phone Number *</label>
						<input type="tel" required placeholder="+91 98339 60540" style="width:100%; box-sizing:border-box; padding:12px 16px; border:1px solid var(--inv-border); border-radius:8px; font-family:inherit; font-size:0.95rem;">
					</div>
				</div>

				<div>
					<label style="display:block; font-size:0.875rem; font-weight:700; color:var(--inv-text-heading); margin-bottom:6px;">Primary Service Needed</label>
					<select style="width:100%; box-sizing:border-box; padding:12px 16px; border:1px solid var(--inv-border); border-radius:8px; font-family:inherit; font-size:0.95rem; background-color:#FFFFFF;">
						<option>Full-Service Digital Marketing</option>
						<option>Search Engine Optimization (SEO)</option>
						<option>Paid Ad Campaigns (Google / Meta Ads)</option>
						<option>Social Media Marketing (SMM)</option>
						<option>Custom Web Design & Development</option>
						<option>Influencer & Content Marketing</option>
					</select>
				</div>

				<div>
					<label style="display:block; font-size:0.875rem; font-weight:700; color:var(--inv-text-heading); margin-bottom:6px;">Tell us about your brand & goals</label>
					<textarea rows="4" placeholder="Briefly describe your project or website URL..." style="width:100%; box-sizing:border-box; padding:12px 16px; border:1px solid var(--inv-border); border-radius:8px; font-family:inherit; font-size:0.95rem;"></textarea>
				</div>

				<button type="submit" class="inv-btn-primary" style="width:100%; justify-content:center; padding:14px; font-size:1rem; margin-top:8px;">
					Send Consultation Request →
				</button>
			</form>
		</div>
	</div>
</section>
