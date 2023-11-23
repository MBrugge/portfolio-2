<script lang="ts">
	import '../app.postcss';
	import { AppShell, AppBar, LightSwitch } from '@skeletonlabs/skeleton';
	import { onMount } from 'svelte';

	// Scroll to section on click
	function scrollIntoView({ target }: { target: any }) {
		const el = document.querySelector(target.getAttribute('href'));
		if (!el) return;
    el.scrollIntoView({
      behavior: 'smooth'
    });
  }

	// Fade in sections on scroll
	onMount(() => {
        var sections = document.querySelectorAll('.section');
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, { threshold: 0.5 });
        sections.forEach(function (section) {
            observer.observe(section);
        });
    });
</script>

<!-- App Shell -->
<AppShell class="pt-16">
	<svelte:fragment slot="header">
		<!-- App Bar -->
		<AppBar gridColumns="grid-cols-3" slotDefault="place-self-center" slotTrail="place-content-end" class="fixed top-0 w-full z-50">
			<svelte:fragment slot="lead">
					<strong class="text-xl uppercase select-none">Marten Brugge</strong>
			</svelte:fragment>
			<LightSwitch />
			<svelte:fragment slot="trail">
				<a
					class="btn btn-sm variant-ghost-surface select-none"
					href="#section-1" 
					on:click|preventDefault={scrollIntoView}
					on:dragstart|preventDefault
					target="_blank"
					rel="noreferrer"
				>
					Home
				</a>
				<a
					class="btn btn-sm variant-ghost-surface select-none"
					href="#section-2" 
					on:click|preventDefault={scrollIntoView}
					on:dragstart|preventDefault
					target="_blank"
					rel="noreferrer"
				>
					About Me
				</a>
				<a
					class="btn btn-sm variant-ghost-surface select-none"
					href="#section-3" 
					on:click|preventDefault={scrollIntoView}
					on:dragstart|preventDefault
					target="_blank"
					rel="noreferrer"
				>
					Projects
				</a>
				<a
					class="btn btn-sm variant-ghost-surface select-none"
					href="#section-4" 
					on:click|preventDefault={scrollIntoView}
					on:dragstart|preventDefault
					target="_blank"
					rel="noreferrer"
				>
					Contact Me
				</a>
			</svelte:fragment>
		</AppBar>
	</svelte:fragment>
	<!-- Page Route Content -->
	<slot />

	<svelte:fragment slot="footer">
		<!-- Footer -->
		<footer class="text-center text-sm text-gray-500">
			<p>
				© 2023 Marten Brugge
			</p>
		</footer>
	</svelte:fragment>
</AppShell>
