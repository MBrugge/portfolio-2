<script lang="ts">
  import { Accordion,AccordionItem } from "@skeletonlabs/skeleton";
  import { fly } from "svelte/transition";
</script>

<section id="section-2" class="section grid grid-cols-1 justify-items-center">
  <h2 class="mt-16 text-6xl">
    About Me
  </h2>

  <Accordion autocollapse class="card p-4 text-token h-min w-screen md:w-3/4  xl:w-3/5 variant-ghost">
    <AccordionItem open>
      <svelte:fragment slot="summary">
        <p class="font-bold text-lg text-center">
          Who am I?
        </p>
      </svelte:fragment>
      <svelte:fragment slot="content">
        <p class="text-center" in:fly={{ y:100 }}>
          I am a 20 year old student from the Netherlands. I am currently studying <strong>Software Developer</strong> at <strong>Alfa-College</strong> in Groningen. I am in my second year of my bachelor's degree. I am currently looking for an internship.
          <br><br>
          <sveltekit:ignore>
            <a 
              class="btn btn-sm variant-ghost-secondary"
              href="/"
              target="_blank"
              rel="noopener noreferrer"
            >
            WIP | Download my CV 
            </a>
          </sveltekit:ignore>
        </p>
      </svelte:fragment>
    </AccordionItem>
    <hr>

    <AccordionItem>
      <svelte:fragment slot="summary">
        <p class="font-bold text-lg text-center">
          What can I work with?
        </p>
      </svelte:fragment>
      <svelte:fragment slot="content">
        <div class="grid grid-cols-3 w-full text-center">
          <ul class="list-none" in:fly={{ y:100 }}>
            <li>
              HTML
            </li>
            <li>
              CSS
            </li>
            <li></li>
          </ul>

          <ul class="list-disc" in:fly={{ y:100 }}>
            <li>
              JS/TS
            </li>
            <li>
              Sveltekit
            </li>
            <li>
              PHP
            </li>
          </ul>

          <ul class="list-disc" in:fly={{ y:100 }}>
            <li>
              Tailwind
            </li>
            <li>
              Bootstrap
            </li>
            <li></li>
          </ul>
        </div>
      </svelte:fragment>
    </AccordionItem>
  </Accordion>
</section>
<hr>