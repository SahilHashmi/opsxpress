/**
 * OpsXpress Theme JavaScript
 */

(function() {
	'use strict';

	// Wait for DOM to be ready
	document.addEventListener('DOMContentLoaded', function() {
		
		const header = document.querySelector('.site-header');

		const hero = document.querySelector('.hero-section');
		if (hero && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
			let pointerFrame;
			hero.addEventListener('pointermove', function(e) {
				if (pointerFrame) window.cancelAnimationFrame(pointerFrame);
				pointerFrame = window.requestAnimationFrame(function() {
					const bounds = hero.getBoundingClientRect();
					hero.style.setProperty('--pointer-x', ((e.clientX - bounds.left) / bounds.width * 100).toFixed(2) + '%');
					hero.style.setProperty('--pointer-y', ((e.clientY - bounds.top) / bounds.height * 100).toFixed(2) + '%');
				});
			});
		}

		// Smooth Scroll for Anchor Links
		const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
		smoothScrollLinks.forEach(function(link) {
			link.addEventListener('click', function(e) {
				const targetId = this.getAttribute('href');
				if (targetId === '#') return;
				
				const targetElement = document.querySelector(targetId);
				if (targetElement) {
					e.preventDefault();
					const headerOffset = 80;
					const elementPosition = targetElement.getBoundingClientRect().top;
					const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

					window.scrollTo({
						top: offsetPosition,
						behavior: 'smooth'
					});
				}
			});
		});

		// Header Scroll Effect
		let lastScroll = 0;
		
		window.addEventListener('scroll', function() {
			const currentScroll = window.pageYOffset;
			
			if (header) {
				header.style.boxShadow = currentScroll > 100 ? '0 2px 10px rgba(0, 0, 0, 0.1)' : 'none';
			}
			
			lastScroll = currentScroll;
		});

		// Add Animation on Scroll
		const observerOptions = {
			threshold: 0.1,
			rootMargin: '0px 0px -50px 0px'
		};

		const observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('animate-in');
					observer.unobserve(entry.target);
				}
			});
		}, observerOptions);

		// Observe elements with animation class
		const animatedElements = document.querySelectorAll('.fade-in, .slide-up');
		animatedElements.forEach(function(el) {
			observer.observe(el);
		});

		// Reveal on scroll (CTA section + footer)
		const revealElements = document.querySelectorAll('.reveal');
		if (revealElements.length) {
			if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
				revealElements.forEach(function(el) { el.classList.add('is-visible'); });
			} else {
				const revealObserver = new IntersectionObserver(function(entries) {
					entries.forEach(function(entry) {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							revealObserver.unobserve(entry.target);
						}
					});
				}, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

				revealElements.forEach(function(el) { revealObserver.observe(el); });
			}
		}

		// Footer background video: guarantee muted autoplay
		const footerVideo = document.querySelector('.footer-video');
		if (footerVideo) {
			footerVideo.muted = true;
			const playAttempt = footerVideo.play();
			if (playAttempt && typeof playAttempt.catch === 'function') {
				playAttempt.catch(function() { /* autoplay blocked; gradient overlay remains */ });
			}
		}

		// Form Validation (if needed)
		const forms = document.querySelectorAll('form');
		forms.forEach(function(form) {
			form.addEventListener('submit', function(e) {
				const requiredFields = form.querySelectorAll('[required]');
				let isValid = true;

				requiredFields.forEach(function(field) {
					if (!field.value.trim()) {
						isValid = false;
						field.classList.add('error');
					} else {
						field.classList.remove('error');
					}
				});

				if (!isValid) {
					e.preventDefault();
					alert('Please fill in all required fields.');
				}
			});
		});

		console.log('OpsXpress Theme loaded successfully');
	});

})();
