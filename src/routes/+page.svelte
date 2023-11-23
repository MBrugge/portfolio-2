<script lang="ts">
	import AboutMe from "./AboutMe.svelte";
	import Projects from "./Projects.svelte";
	import ContactMe from "./ContactMe.svelte";
</script>

<main>
	<section id="section-1" class="section grid grid-cols-1 place-items-center">
		<h1 class="text-5xl md:text-8xl">
			Welcome to my site!
		</h1>
	</section>
	<hr>

	<AboutMe />

	<Projects />

	<ContactMe />

</main>