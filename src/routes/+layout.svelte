<script lang="ts">
	import '../app.postcss';
	import { AppShell, AppBar, LightSwitch, Drawer, initializeStores, getDrawerStore } from '@skeletonlabs/skeleton';
	import { onMount } from 'svelte';
	import Navigation from './Navigation.svelte';

	// Initialize Drawer/Navbar stores
	initializeStores();
	const drawerStore = getDrawerStore();

	// Function to open the drawer
	function drawerOpen():void {
		drawerStore.open({});
	}

	// Function to handle section visibility on scroll
	function handleSectionVisibilityOnScroll(): void {
		const sections: NodeListOf<Element> = document.querySelectorAll('.section');
		const observer: IntersectionObserver = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add('visible');
				} else {
					entry.target.classList.remove('visible');
				}
			});
		}, { threshold: 0.5 });

		sections.forEach((section) => {
			observer.observe(section);
		});
	}

	// Call the function on mount
	onMount(handleSectionVisibilityOnScroll);
</script>

<Drawer>
	<h2 class="p-4">
		Navigation
	</h2>
	<hr />
	<Navigation />
</Drawer>

<AppShell slotSidebarLeft="bg-surface-500/5 w-0 lg:w-64" class="pt-16">
	<svelte:fragment slot="header">
		<AppBar gridColumns="grid-cols-3" slotDefault="place-self-center" slotTrail="place-content-end" class="fixed top-0 w-full z-50">
			<svelte:fragment slot="lead">
				<strong class="text-xl uppercase select-none">Marten Brugge</strong>
			</svelte:fragment>

			<LightSwitch />

			<svelte:fragment slot="trail">
				<button on:click="{drawerOpen}" class="lg:hidden btn btn-sm mr-4" aria-label="Open Drawer">
					<span>
						<svg viewBox="0 0 100 80" class="fill-token w-4 h-4">
							<rect width="100" height="20" />
							<rect y="30" width="100" height="20" />
							<rect y="60" width="100" height="20" />
						</svg>
					</span>
				</button>
			</svelte:fragment>
		</AppBar>

	</svelte:fragment>

	<svelte:fragment slot="sidebarLeft">
		<Navigation />
	</svelte:fragment>
	<!-- Page Route Content -->
	<slot />

	<svelte:fragment slot="pageFooter">
		<!-- Footer -->
		<footer class="text-center text-sm text-gray-500">
			<p>
				© 2023 Marten Brugge
			</p>
		</footer>
	</svelte:fragment>
</AppShell>