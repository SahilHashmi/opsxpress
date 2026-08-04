/**
 * OpsXpress Theme JavaScript
 */

(function() {
	'use strict';

	// Wait for DOM to be ready
	document.addEventListener('DOMContentLoaded', function() {
		
		// Mobile Menu Toggle
		const menuToggle = document.querySelector('.menu-toggle');
		const mainNav = document.querySelector('.main-navigation');
		const header = document.querySelector('.site-header');
		let menuLinks = [];

		function setMenuState(isOpen) {
			menuToggle.setAttribute('aria-expanded', String(isOpen));
			menuToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
			mainNav.setAttribute('aria-hidden', String(!isOpen));
			mainNav.classList.toggle('is-open', isOpen);
			menuToggle.classList.toggle('active', isOpen);
			header.classList.toggle('menu-open', isOpen);
			document.body.classList.toggle('menu-is-open', isOpen);
			document.querySelector('.menu-label').textContent = isOpen ? 'Close' : 'Menu';
		}
		
		if (menuToggle && mainNav) {
			menuLinks = Array.from(mainNav.querySelectorAll('a'));
			menuToggle.addEventListener('click', function() {
				const willOpen = menuToggle.getAttribute('aria-expanded') !== 'true';
				setMenuState(willOpen);
				if (willOpen && menuLinks.length) window.setTimeout(function() { menuLinks[0].focus(); }, 500);
			});
			menuLinks.forEach(function(link) {
				link.addEventListener('click', function() { setMenuState(false); });
			});
		}

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
			
			if (currentScroll > 100) {
				header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
			} else {
				header.style.boxShadow = 'none';
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

		// Keyboard Navigation Enhancement
		document.addEventListener('keydown', function(e) {
			// ESC key closes mobile menu
			if (e.key === 'Escape' && mainNav && mainNav.classList.contains('is-open')) {
				setMenuState(false);
				menuToggle.focus();
			}
		});

		console.log('OpsXpress Theme loaded successfully');
	});

})();
