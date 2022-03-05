<script>
  export let active = false;
</script>

<button on:click class:active />

<style>
  :root {
    --borderSize: .4rem;
  }

  button,
  button::before,
  button::after {
    display: block;
    width: 3rem;
    height: var(--borderSize);
    background-color: var(--accent-color);
    border-radius: .2rem;
    transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
    position: absolute;
  }

  button::before {
    content: '';
    margin-top: .6rem;
  }

  button::after {
    content: '';
    margin-top: 1.4rem;
  }
  .active {
    transition: background-color .1s;
    background-color: transparent;
    /* color: var(--background-color); */
  }
  .active::before {
    color: white;
    transform: rotate(135deg);
    top: .4rem;
  }
  .active::after {
    color: white;
    transform: rotate(-135deg);
    top: -.4rem;
  }
</style>
