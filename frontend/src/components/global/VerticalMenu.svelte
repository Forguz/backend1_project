<script>
  import { getContext } from 'svelte';
  import { slide } from 'svelte/transition'
  import { links } from 'svelte-routing';

  const { isMenuVisible } = getContext('menu');
</script>

{#if $isMenuVisible}
  <div transition:slide use:links class="container">
    <a href="/" class="link">Home</a>
    <a href="/profile" class="link">Profile</a>
  </div>
{/if}


<style>
  .container {
    position: absolute;
    display: flex;
    width: 100%;
    height: 100%;
    flex-direction: column;
    align-items: center;
    background-color: rgb(41, 18, 17, .95);
    z-index: 10;
  }

  .link {
    display: block;
    position: relative;
    padding: 1rem;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: .2rem;
    font-weight: 600;
    color: var(--accent-color);
    width: 100%;
    text-align: center;
    transition-property: background-color, color;
    transition-duration: .3s;
    transition-timing-function: ease-in-out;
    z-index: 1;
  }

  .link::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--accent-color);
    height: 100%;
    transform: scaleX(0);
    transition: .4s;
    z-index: -1;
  }

  .link::after {
    content: '';
    position: absolute;
    top: calc(80% - .2rem);
    right: 50%;
    width: 40%;
    height: .2rem;
    background-color: var(--font-color);
    transform: scale(0) translateX(50%);
    transition: .8s;
    z-index: -1;
  }

  .link:hover::before {
    transform: scaleX(1);
  }

  .link:hover::after {
    transform: scale(1) translateX(50%);
  }
  
  .link:hover {
    color: var(--font-color);
  }
</style>