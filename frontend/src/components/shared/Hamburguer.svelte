<script>
  export let active = false;
</script>

<button on:click class:active />

<style>
  :root {
    --borderSize: .4rem;
  }
  button {
    height: 2.2rem;
    width: 3.2rem;
    color: white;
    z-index: inherit;
    background-color: transparent;
    border-top: var(--borderSize) solid currentColor;
    border-radius: .4rem;
    transition: 400ms;
  }

  button::before,
  button::after {
    content: "";
    display: block;
    width: 3.2rem;
    height: var(--borderSize);
    background-color: currentColor;
    border-radius: .4rem;
    margin-top: .6rem;
    transition: transform 400ms;
    position: relative;
  }
  .active {
    border-top: transparent;
    color: var(--background-color);
  }
  .active::before {
    transform: rotate(135deg);
    top: .4rem;
  }
  .active::after {
    transform: rotate(-135deg);
    top: -.6rem;
  }
</style>
