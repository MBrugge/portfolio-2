<script lang="ts">
  import { Accordion } from "@skeletonlabs/skeleton";

  import ProjectAccordionItem from "./ProjectAccordionItem.svelte";
  let projects = [
    {
      title: "Snake Game",
      description: "A snake game made with HTML, CSS, and JS. This was a school project.",
      link: "projects/snake/index.html"
    },
    {
      title: "Annoying Onepager",
      description: "An annoying onepager made with HTML, CSS, and JS. This was a school project. Warning: Loud audio!",
      link: "projects/onepager/index.html"
    },
    {
      title: "Webstore",
      description: "A webstore made with PHP, HTML, CSS, and JS. This was a school project. It was more a test to make a Database connection with PHP.",
      link: "projects/webstore/index.php"
    },
    {
      title: "API",
      description: "A Todo API made with PHP, HTML, CSS, and TS. This was a school project.",
      link: "projects/api/index.html"
    }
  ]
</script>

<section id="section-3" class="section grid grid-cols-1 justify-items-center">
  <h2 class="mt-16 text-6xl">
    Projects
  </h2>

  <Accordion autocollapse class="card p-4 text-token h-min w-screen md:w-3/4 xl:w-3/5 variant-ghost">
    {#each projects as project, i (project.title)}
      <ProjectAccordionItem {project} />
      {#if i < projects.length - 1}
        <hr>
      {/if}
    {/each}
  </Accordion>
</section>
<hr>