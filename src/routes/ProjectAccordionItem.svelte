<script lang="ts">
  import { AccordionItem } from "@skeletonlabs/skeleton";
  import { fly, fade } from "svelte/transition";

  export let project: { title: string; description: string; link: string; };
</script>

<AccordionItem>
  <svelte:fragment slot="summary">
    <p class="font-bold text-lg text-center">
      {project.title}
    </p>
  </svelte:fragment>
  <svelte:fragment slot="content">
    <p class="text-center" in:fly={{ y:100 }}>
      {project.description}
      <br><br>
      <sveltekit:ignore>
        <a
          class="btn btn-sm variant-ghost-secondary"
          href={project.link}
          target="_blank"
          rel="external"
        > 
          Take me to the page
        </a>
      </sveltekit:ignore>
    </p>
  </svelte:fragment>
</AccordionItem>