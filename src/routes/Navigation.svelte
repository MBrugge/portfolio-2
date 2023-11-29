<script lang="ts">
  const sections = ['Home', 'About Me', 'Projects', 'Contact Me'];

  function handleClick(event: MouseEvent) {
    const target = event.target as EventTarget & HTMLAnchorElement;
    const href = target.getAttribute('href');
    if (!href) return;
    const el = document.querySelector(href);
    if (!el) return;
    el.scrollIntoView({ behavior: 'smooth' });
    target.blur();
  }
</script>

<nav class="list-nav p-4">
  <ul>
    <li>
      {#each sections as section, i (section)}
        <a
          class="btn btn-sm mt-2 select-none variant-ghost-surface"
          href={`#section-${i+1}`}
          on:click|preventDefault={handleClick}
          on:dragstart|preventDefault
        >
          {section}
        </a>
      {/each}
    </li>
  </ul>
</nav>