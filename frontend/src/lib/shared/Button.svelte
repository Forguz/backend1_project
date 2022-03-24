<script>
  export {className as class}
  let className = '';
  import Icon from 'svelte-icons-pack/Icon.svelte'
  export let IconSvg;
  export let type = 'button';
</script>

<button {type} on:click {...$$restProps} class:margin-top={className === 'margin-top'}>
  {#if IconSvg}
    <Icon className="icon-bold mr4" src={IconSvg} size="16" />
  {/if}
  <span class="button-text">
    <slot></slot>
  </span>
</button>

<style>
  button {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--accent-color);
    color: var(--primary-color);
    /* border: .1rem solid #000; */
    padding: 1rem 1.6rem;
    box-shadow:  var(--elevation-2dp);
    border-radius: .6rem;
    transition-property: box-shadow, filter;
    transition-duration: .2s;
    text-transform: uppercase;
    letter-spacing: .08rem;
    font-weight: 600;
  }

  button:hover {
    filter: brightness(90%);
    box-shadow: var(--elevation-8dp);
  }

  button:active {
    filter: brightness(120%);
  }

  .margin-top {
    margin-top: .8rem;
  }
</style>