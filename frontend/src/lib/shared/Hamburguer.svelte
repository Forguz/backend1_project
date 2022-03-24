<script>
  import { createEventDispatcher, getContext } from 'svelte';
  const dispatch = createEventDispatcher();
  const { activated, toggleHamburguer } = getContext('hamburguer');
  
  function handleClick() {
    toggleHamburguer();

    dispatch('activate');
  }
</script>

<button on:click={handleClick}>
  <span class="{$activated ? 'line line1 rotate1' : 'line line1'}" />
  <span class="{$activated ? 'line line2 rotate2' : 'line line2'}"/>
  <span class="{$activated ? 'line line3 rotate3' : 'line line3'}"/>
</button>

<style>
  :root {
    --borderSize: 0.4rem;
  }

  button {
    height: 26px;
    width: 32px;
    top: 17px;
    left: 20px;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: transparent;
  }

  .line {
    display: block;
    height: 4px;
    width: 100%;
    border-radius: 10px;
    background: var(--accent-color);
  }

  .line1 {
    transform-origin: 0% 0%;
    transition: transform 0.4s ease-in-out;
  }

  .line2 {
    transition: transform 0.2s ease-in-out;
  }

  .line3 {
    transform-origin: 0% 100%;
    transition: transform 0.4s ease-in-out;
  }

  .rotate1 {
    transform: rotate(45deg) translateY(.05rem);
  }

  .rotate2 {
    transform: scaleY(0);
  }

  .rotate3 {
    transform: rotate(-45deg) translateY(-.05rem);
  }
</style>
