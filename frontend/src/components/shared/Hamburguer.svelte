<script>
  import { createEventDispatcher } from 'svelte';
  const dispatch = createEventDispatcher();

  let activated = false;

  function handleClick() {
    activated = !activated;

    dispatch('activate');
  }
</script>

<button on:click={handleClick}>
  <span class="{activated ? 'line line1 rotate1' : 'line line1'}" />
  <span class="{activated ? 'line line2 rotate2' : 'line line2'}"/>
  <span class="{activated ? 'line line3 rotate3' : 'line line3'}"/>
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
    transform: rotate(45deg);
  }

  .rotate2 {
    transform: scaleY(0);
  }

  .rotate3 {
    transform: rotate(-45deg);
  }

  /* button,
  button::before,
  button::after {
    display: block;
    width: 3rem;
    height: var(--borderSize);
    background-color: var(--accent-color);
    border-radius: 0.2rem;
    transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
    position: absolute;
  } */

  /* button::before {
    content: "";
    margin-top: 0.6rem;
  }

  button::after {
    content: "";
    margin-top: 1.4rem;
  } */
  /* .active {
    transition: background-color 0.1s;
    background-color: transparent;
    /* color: var(--background-color); */
  /* }
  .active::before {
    color: white;
    transform: rotate(135deg);
    top: 0.4rem;
  }
  .active::after {
    color: white;
    transform: rotate(-135deg);
    top: -0.4rem;
  } */
</style>
